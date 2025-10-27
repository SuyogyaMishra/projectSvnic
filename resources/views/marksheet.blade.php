<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>S V N I C - {{ $student->first_name }} {{ $student->last_name }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @media print {

      /* Ensure A4 page and prevent overlap */
      @page {
        size: A4;
        margin: 20mm;
      }

      body {
        -webkit-print-color-adjust: exact;
        /* keep background colors */
        print-color-adjust: exact;
      }

      .sign {
        display: flex;
        justify-content: space-between;
        margin-top: 40px;
        width: 100%;
      }

      .sign strong {
        display: inline-block;
        width: 45%;
        text-align: center;
      }

      /* Prevent Bootstrap flex wrap issues */
      .row {
        display: flex !important;
        flex-wrap: nowrap !important;
      }

      .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
      }
    }

    body {
      background: #fff8ef;
      font-family: "Times New Roman", serif;
      color: #000;
      padding: 20px;
    }

    .header {
      text-align: center;
      border-bottom: 3px solid #b30000;
      margin-bottom: 20px;
      padding-bottom: 10px;
    }

    .header h2 {
      color: #b30000;
      font-weight: 700;
      text-transform: uppercase;
    }

    .academic-session {
      background: #ffcccc;
      border: 2px solid #b30000;
      display: inline-block;
      padding: 5px 15px;
      border-radius: 5px;
      font-weight: 600;
      color: #b30000;
      margin-top: 5px;
    }

    table,
    th,
    td {
      border: 1px solid #000 !important;
      text-align: center;
      vertical-align: middle;
      font-size: 14px;
    }

    th {
      background-color: #ffe6e6;
    }

    .instruction {
      background: #ffcc99;
      padding: 8px;
      font-weight: 600;
      text-align: center;
      border: 1px solid #000;
      margin-top: 30px;
    }

    .grade-table td,
    .grade-table th {
      border: 1px solid #000 !important;
      padding: 5px 10px;
    }

    .sign {
      margin-top: 40px;
    }

    .text-box {
      border-bottom: 1px solid #000;
      display: inline-block;
      width: 180px;
    }
  </style>
</head>

<body>

  <div class="header">
    <h2>Swami Viveka Nand Inter College</h2>
    <div>Bhinga Road, Ikauna, Shrawasti</div>
    <div class="academic-session">ACADEMIC SESSION: {{ date('Y') - 1 }} - {{ date('Y') }}</div>
  </div>

  <div class="container">
    <div class="row mb-3">
      <div class="col-md-6">
        <strong>Student's Name:</strong> {{ $student->first_name }} {{ $student->last_name }}
      </div>
      <div class="col-md-6">
        <strong>Class:</strong> {{ $student->class }}
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-md-6">
        <strong>Father's Name:</strong> {{ $student->father_name ?? '________________' }}
      </div>
      <div class="col-md-6">
        <strong>Roll No.:</strong> {{ $student->roll_no }}
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-md-6">
        <strong>Mother's Name:</strong> {{ $student->mother_name ?? '________________' }}
      </div>
      <div class="col-md-6">
        <strong>Date of Birth:</strong> {{ $student->date_of_birth }}
      </div>
    </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th rowspan="2">Subject</th>
        </tr>
        <tr>
          <th>Max Marks</th>
          <th>Min Marks</th>
          <th>Obtained Marks</th>
          <th>Grade</th>
          <th>Result</th>
        </tr>
      </thead>
      <tbody>
        @php $status=1; $maxIndex=count($student->marks ) @endphp
        @foreach($student->marks as $i=>$mark)
        @php

        $percent = $mark->score*100/ $mark->max_marks;
        $minMark=($mark->max_marks*33)/100;
        if ($percent >= 90) $grade = 'A';
        elseif ($percent >= 76) $grade = 'B';
        elseif ($percent >= 56) $grade = 'C';
        elseif ($percent >= 41) $grade = 'D';
        else $grade = 'E';
        if($mark->score < $minMark && $status==1){
          $status=0;
          }
          @endphp
          <tr>
          <td>{{ $mark->subject}}</td>
          <td>{{ $mark->max_marks ?? '-' }}</td>
          <td>{{ $minMark }}</td>
          <td>{{ $mark->score ?? '-' }}</td>
          <td>{{ $grade }}</td>
          @if ($i == floor($maxIndex/2))
          <td>
            @if($status == 1)
            <span class="badge bg-success fs-5">Pass</span>

            @else
            <span class="badge bg-danger fs-5"><b>Fail</b> </span>
            @endif
            @else
          <td></td>
          @endif

          </td>
          @endforeach

          </tr>

      </tbody>
    </table>
    <h3 style="text-decoration-color: #b30000; color:#b30000"> *This is demo marksheet and for demo purpose*</h3>

    @php
    $grandTotal = $student->marks->sum('score');
    $maxTotal = $student->marks->count() * 100;
    $percentage = $maxTotal ? round(($grandTotal / $maxTotal) * 100, 2) : 0;
    @endphp

    <div class="fw-bold text-end mt-2">
      Over All Grand Total: {{ $grandTotal }} / {{ $maxTotal }} <br>
      Percentage: {{ $percentage }}%
    </div>

    <div class="mt-4">
      <p><strong>Class Teacher's Remarks:</strong> {{ $student->remark??' ' }}</p>
      <p><strong>Promoted to Class:</strong> <b> {{ $student->class +1  }} </b> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <strong>Place:</strong> S V N I C , Ikauna </p>
      <!-- <p><strong>Date:</strong> {{ now()->format('d-m-Y') }}</p> -->
    </div>

    <div class="row sign text-center">
      <div class="col-md-6">
        <strong>__________________________</strong><br>
        <strong>Signature of Class Teacher</strong>
      </div>
      <div class="col-md-6">
        <strong>__________________________</strong><br>
        <strong>Signature of Principal</strong>
      </div>
    </div>

    <div class="instruction">INSTRUCTION</div>

    <div class="row mt-2">
      <div class="col-md-6">
        <table class="table table-bordered grade-table">
          <thead>
            <tr>
              <th>Mark Range</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>90 - 100</td>
              <td>A</td>
            </tr>
            <tr>
              <td>76 - 90</td>
              <td>B</td>
            </tr>
            <tr>
              <td>56 - 75</td>
              <td>C</td>
            </tr>
            <tr>
              <td>41 - 55</td>
              <td>D</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <table class="table table-bordered grade-table">
          <thead>
            <tr>
              <th>Mark Range</th>
              <th>Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Below 41</td>
              <td>E</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="text-center mt-4 mb-3">
      <button onclick="window.print()" class="btn btn-primary">Print</button>
    </div>

  </div>
</body>

</html>