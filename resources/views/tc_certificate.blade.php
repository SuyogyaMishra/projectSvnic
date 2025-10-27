<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Certificate {{ $student->first_name}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #fff;
            font-family: 'Times New Roman', Times, serif;
            margin: 40px;
            position: relative;
        }
        .certificate-container {
            border: 2px solid #000;
            padding: 30px;
            position: relative;
            background: #fff;
        }
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.1;
            width: 60%;
            z-index: 0;
        }
        .school-header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .school-header h2 {
            font-weight: bold;
            color: #b22222;
        }
        .school-header p {
            margin: 0;
            font-size: 15px;
        }
        .certificate-title {
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 25px;
        }
        .field-row {
            margin-bottom: 8px;
            font-size: 16px;
        }
        .field-row span {
            font-weight: bold;
        }
        .footer {
            margin-top: 40px;
            font-size: 15px;
        }
        .sign {
            text-align: right;
            margin-top: 50px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="certificate-container">
        <!-- Watermark -->
        <img src="{{ asset('images/logo.png') }}" class="watermark" alt="Watermark">

        <!-- Header -->
        <div class="school-header">
            <h3 style="text-decoration-color: #b30000; color:#b30000">*This is fake TC *</h3>
            <img src="{{ asset('images/logo.png') }}" alt="School Logo" style="width:90px;">
            <h2>Swami Viveka Nand Inter College</h2>
            <p>Bhinga Road, Ikauna , Shrawasti, Uttar Pradesh</p>
            <p>Affiliated to UP BOARD | Affiliation No: 213XXXX</p>
        </div>

        <div class="certificate-title">TRANSFER CERTIFICATE</div>

        <div class="container-fluid position-relative">
            <div class="row field-row">
                <div class="col-6"><span>Admission No:</span> {{ $student->admission_no ?? '__________' }}</div>
                <div class="col-6"><span>TC No:</span> {{"TC". $student->admission_no ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-12"><span>Name of Pupil:</span> {{ $student->first_name .$student->last_name ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-6"><span>Father’s Name:</span> {{ $student->father_name ?? '__________' }}</div>
                <div class="col-6"><span>Mother’s Name:</span> {{ $student->mother_name ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-6"><span>Nationality:</span> {{ $student->nationality ?? 'Indian' }}</div>
                <div class="col-6"><span>Religion:</span> {{ $student->religion ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-6"><span>Date of Birth (in figures):</span> {{ $student->date_of_birth ?? '__________' }}</div>
                <div class="col-6"><span>(In words):</span> {{ $student->date_of_birth->toString() ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-12"><span>Class last attended:</span> {{ $student->class ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-12"><span>Promotion Granted to Class:</span> {{ $student->class + 1 ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-12"><span>Date of Leaving School:</span> {{ $student->updated_at ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-12"><span>Reason for leaving:</span> {{ $student->reason ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-6"><span>Total No. of Working Days:</span> {{ $student->working_days ?? '__________' }}</div>
                <div class="col-6"><span>Days Attended:</span> {{ $student->attended_days ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-12"><span>Conduct:</span> {{ $student->conduct ?? '__________' }}</div>
            </div>

            <div class="row field-row">
                <div class="col-12"><span>Date of Issue:</span> {{ $student->issue_date ?? now()->format('d-m-Y') }}</div>
            </div>
        </div>

        <div class="sign">
            <strong>--------------------------------------</strong>
            <p>Principal’s Signature</p>
        </div>
    </div>
</body>
</html>
