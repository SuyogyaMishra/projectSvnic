<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pay Fees - {{ $student }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style>
        body {
            font-family: "Segoe UI", Roboto, sans-serif;
            background: #f6f9fc;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            width: 420px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.15);
        }

        .school-header {
            text-align: center;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .school-header h2 {
            margin: 0;
            color: #0056b3;
        }

        .school-header p {
            font-size: 0.9rem;
            margin: 3px 0;
            color: #666;
        }

        .details {
            margin-bottom: 20px;
        }

        .details h3 {
            margin-bottom: 10px;
            color: #444;
        }

        .details p {
            margin: 6px 0;
            font-size: 0.95rem;
        }

        .amount-box {
            background: #eef5ff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 25px;
            text-align: center;
        }

        .amount-box span {
            font-size: 1.2rem;
            font-weight: bold;
            color: #004aad;
        }

        button {
            display: block;
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 14px;
            font-size: 1rem;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.85rem;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="school-header">
        <h2>Swami Vivekanand Inter College</h2>
        <p>Ikauna, Shrawasti, Uttar Pradesh</p>
        <p><strong>Fee Payment Portal</strong></p>
    </div>

    <div class="details">
        <h3>Student Details</h3>
        <p><strong>Name:</strong> {{ $student }}</p> 
        <p><strong>Class:</strong> {{ $class }}</p> 
        <p><strong>Order ID:</strong> {{ $order_id }}</p>
        <p><strong>Currency:</strong> {{ strtoupper($currency) }}</p>
    </div>

    <div class="amount-box">
        <p>Total Pending Fee</p>
        <span>₹{{ number_format($amount / 100, 2) }}</span>
    </div>

    <button id="pay-button">💳 Pay Now</button>

    <footer>
        Secure Payment powered by Razorpay
    </footer>
</div>

<script>
    document.getElementById('pay-button').onclick = function () {
        const options = {
            "key": "{{ $key }}",
            "amount": "{{ $amount }}",
            "currency": "{{ $currency }}",
            "name": "Swami Vivekanand Inter College",
            "description": "School Fee Payment for {{ $student }}",
            "order_id": "{{ $order_id }}",
            "handler": function (response) {
                fetch("{{ route('verify.payment') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        razorpay_payment_id: response.razorpay_payment_id,
                        razorpay_order_id: response.razorpay_order_id,
                        razorpay_signature: response.razorpay_signature
                    })
                })
                .then(res => res.json())
                .then(data => {
                    alert(data.message);
                    if (data.success) {
                        window.location.href = "/";
                    }
                })
                .catch(() => alert("Something went wrong while verifying payment."));
            },
            "theme": {
                "color": "#007bff"
            }
        };
        const rzp = new Razorpay(options);
        rzp.open();
    };
</script>

</body>
</html>
