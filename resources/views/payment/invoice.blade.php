{{-- resources/views/payment/invoice.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Invoice - Swami Vivekanand Inter College</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <style>
        :root{
            --primary: #0b5ed7;
            --muted: #6c757d;
            --card-bg: #fff;
            --page-bg: #f4f6f8;
        }
        body { font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; background:var(--page-bg); margin:0; padding:24px; color:#222; }
        .invoice-wrap { max-width:900px; margin:24px auto; background:var(--card-bg); border-radius:10px; box-shadow:0 6px 20px rgba(20,20,40,0.08); overflow:hidden; }
        .invoice-header { display:flex; align-items:center; justify-content:space-between; padding:28px 32px; border-bottom:1px solid #eee; background:linear-gradient(90deg,#ffffff 0%, #fbfdff 100%); }
        .brand { display:flex; gap:16px; align-items:center; }
        .brand img { width:84px; height:84px; object-fit:cover; border-radius:8px; background:#eee; }
        .brand .school { line-height:1; }
        .brand .school h1 { margin:0; font-size:20px; color:var(--primary); letter-spacing:0.2px; }
        .brand .school p { margin:3px 0 0 0; color:var(--muted); font-size:13px; }

        .meta { text-align:right; font-size:13px; color:var(--muted); }
        .meta .status { display:inline-block; padding:6px 10px; border-radius:6px; font-weight:600; color:#fff; }
        .status-pending { background:#f59f00; }
        .status-paid { background:#198754; }
        .status-failed { background:#dc3545; }

        .invoice-body { padding:28px 32px; display:grid; gap:20px; grid-template-columns: 1fr 320px; }
        .left { }
        .right { background:#fafbfd; padding:18px; border-radius:8px; border:1px solid #f0f4fb; }

        .section { margin-bottom:16px; }
        .section h3 { margin:0 0 8px 0; font-size:15px; color:#333; }
        .details p { margin:6px 0; color:#444; font-size:14px; }

        table.invoice-table { width:100%; border-collapse:collapse; margin-top:12px; }
        table.invoice-table th, table.invoice-table td { padding:12px 10px; text-align:left; border-bottom:1px solid #eee; font-size:14px; }
        table.invoice-table th { background:#fbfdff; color:#333; font-weight:600; }

        .totals { margin-top:14px; width:100%; display:flex; justify-content:flex-end; }
        .totals .box { width:320px; background:#fff; border-radius:8px; padding:12px; border:1px solid #f0f0f0; }
        .totals .row { display:flex; justify-content:space-between; padding:6px 0; color:#333; font-size:14px; }
        .totals .row.total { font-weight:700; font-size:16px; color:#111; border-top:1px dashed #eee; padding-top:10px; margin-top:6px; }

        .actions { display:flex; gap:12px; margin:18px 32px 32px; justify-content:flex-end; }
        .btn { padding:10px 16px; border-radius:8px; border:0; cursor:pointer; font-weight:600; color:#fff; }
        .btn-print { background:var(--primary); }
        .btn-back { background:#6c757d; }

        footer.invoice-footer { padding:18px 32px; border-top:1px solid #eee; font-size:13px; color:var(--muted); display:flex; justify-content:space-between; align-items:center; }

        /* Print styles */
        @media print {
            body { background: #fff; padding:0; }
            .actions, footer.invoice-footer { display:none; }
            .invoice-wrap { box-shadow:none; border-radius:0; margin:0; }
        }
    </style>
</head>
<body>
    <div class="invoice-wrap">
        <div class="invoice-header">
            <div class="brand">
                {{-- Replace src with actual logo if available --}}
                <img src="{{ $school_logo ?? 'https://via.placeholder.com/84x84.png?text=Logo' }}" alt="School Logo">
                <div class="school">
                    <h1>Swami Vivekanand Inter College</h1>
                    <p>Ikauna, Shrawasti, Uttar Pradesh, India</p>
                    <p style="font-size:12px;color:var(--muted);margin-top:6px;">Phone: {{ $school_phone ?? 'N/A' }} | Email: {{ $school_email ?? 'info@svnic.edu' }}</p>
                </div>
            </div>

            <div class="meta">
                <div style="margin-bottom:10px;">Invoice Date: <strong>{{ \Carbon\Carbon::parse($fee->created_at ?? now())->format('d M, Y') }}</strong></div>

                @php
                    // status: 0 = created/pending, 1 = paid, 2 = failed, 3 = refunded
                    $statusClass = match($fee->status ?? 0) {
                        1 => 'status-paid',
                        2 => 'status-failed',
                        3 => 'status-failed',
                        default => 'status-pending'
                    };
                    $statusText = match($fee->status ?? 0) {
                        1 => 'PAID',
                        2 => 'FAILED',
                        3 => 'REFUNDED',
                        default => 'PENDING'
                    };
                @endphp

                <div>
                    <span class="status {{ $statusClass }}">{{ $statusText }}</span>
                </div>

                <div style="margin-top:8px;">
                    <small style="color:var(--muted)">Receipt:</small><br>
                    <strong>{{ $fee->receipt ?? ($fee->razorpay_order_id ?? 'N/A') }}</strong>
                </div>
            </div>
        </div>

        <div class="invoice-body">
            <div class="left">
                <div class="section">
                    <h3>Bill To</h3>
                    <div class="details">
                        <p><strong>Name:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
                        <p><strong>Class:</strong> {{ $student->class }}</p>
                        <p><strong>Roll / Reg No:</strong> {{ $student->roll ?? 'N/A' }}</p>
                        <p><strong>Email:</strong> {{ $student->email }}</p>
                        <p><strong>Phone:</strong> {{ $student->phone ?? 'N/A' }}</p>
                    </div>
                </div>

                <div class="section">
                    <h3>Payment Details</h3>
                    <table class="invoice-table">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th style="width:140px;text-align:right">Amount (₹)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tuition / Monthly Fee - Class {{ $student->class }}</td>
                                <td style="text-align:right">{{ number_format($fee->amount, 2) }}</td>
                            </tr>

                            {{-- Optional: add other rows like fines, discounts --}}
                            @if(!empty($fee->discount) || !empty($fee->fine))
                                @if(!empty($fee->discount))
                                <tr>
                                    <td>Discount</td>
                                    <td style="text-align:right">-{{ number_format($fee->discount,2) }}</td>
                                </tr>
                                @endif
                                @if(!empty($fee->fine))
                                <tr>
                                    <td>Fine / Late Fee</td>
                                    <td style="text-align:right">{{ number_format($fee->fine,2) }}</td>
                                </tr>
                                @endif
                            @endif

                        </tbody>
                    </table>
                </div>

                <div class="section">
                    @php
                        // Amount in words using NumberFormatter
                        try {
                            $fmt = new \NumberFormatter('en', \NumberFormatter::SPELLOUT);
                            $amountWords = ucfirst($fmt->format((int) round($fee->amount)));
                            $amountWords = str_replace('  ', ' ', $amountWords);
                        } catch (\Throwable $e) {
                            $amountWords = null;
                        }
                    @endphp

                    <p><strong>Amount (in words):</strong> {{ $amountWords ? $amountWords . ' only' : '-' }}</p>
                </div>
            </div>

            <div class="right">
                <div style="display:flex; justify-content:space-between; align-items:flex-start; gap:10px;">
                    <div>
                        <h3 style="margin:0 0 6px 0">Summary</h3>
                        <p style="color:var(--muted); margin:0 0 8px 0;">Order / Payment Info</p>

                        <p style="margin:8px 0;"><strong>Order ID:</strong><br>{{ $fee->razorpay_order_id ?? 'N/A' }}</p>
                        <p style="margin:8px 0;"><strong>Payment ID:</strong><br>{{ $fee->razorpay_payment_id ?? 'N/A' }}</p>
                        <p style="margin:8px 0;"><strong>Payment Method:</strong><br>{{ $fee->method ?? '—' }}</p>
                    </div>

                    <div style="text-align:center;">
                        {{-- Placeholder QR - replace with actual QR image if you generate one --}}
                        <div style="width:120px;height:120px;border-radius:8px;background:#fff;border:1px solid #eee;display:flex;align-items:center;justify-content:center;">
                            <small style="font-size:11px;color:var(--muted);">QR / Stamp</small>
                        </div>
                    </div>
                </div>

                <div style="margin-top:18px;">
                    <div style="background:#fff;padding:12px;border-radius:8px;border:1px solid #f0f0f0;">
                        <div style="display:flex;justify-content:space-between;">
                            <div style="color:var(--muted)">Sub Total</div>
                            <div style="font-weight:700">₹{{ number_format($fee->amount,2) }}</div>
                        </div>

                        @if(!empty($fee->discount))
                        <div style="display:flex;justify-content:space-between;margin-top:8px;color:#222;">
                            <div>Discount</div>
                            <div>-₹{{ number_format($fee->discount,2) }}</div>
                        </div>
                        @endif

                        @if(!empty($fee->fine))
                        <div style="display:flex;justify-content:space-between;margin-top:8px;color:#222;">
                            <div>Fine</div>
                            <div>₹{{ number_format($fee->fine,2) }}</div>
                        </div>
                        @endif

                        <div style="display:flex;justify-content:space-between;margin-top:10px;border-top:1px dashed #eee;padding-top:10px;font-weight:800;">
                            <div>Total</div>
                            <div>₹{{ number_format(($fee->amount + ($fee->fine ?? 0) - ($fee->discount ?? 0)),2) }}</div>
                        </div>
                    </div>
                </div>

                <div style="margin-top:16px;color:var(--muted);font-size:13px;">
                    <p style="margin:6px 0;">This is a system generated invoice. For queries contact the school office.</p>
                </div>
            </div>
        </div>

        <div class="actions" style="padding:0 32px 24px;">
            <button class="btn btn-back" onclick="window.history.back()">← Back</button>
            <button class="btn btn-print" onclick="window.print()">Print / Download</button>
        </div>

        <footer class="invoice-footer">
            <div>Generated by Swami Vivekanand Inter College - Ikauna, Shrawasti</div>
            <div>Powered by Razorpay</div>
        </footer>
    </div>
</body>
</html>
