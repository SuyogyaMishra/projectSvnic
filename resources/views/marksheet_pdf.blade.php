<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Marksheet - {{ $student->name }}</title>
  <style>
    body{font-family:Arial, sans-serif;font-size:12px;margin:0;padding:20px}
    .header{text-align:center;margin-bottom:20px;}
    .header h2{margin:0;font-size:18px;}
    .header h4{margin:0;font-size:14px;font-weight:normal;}
    table{width:100%;border-collapse:collapse;margin-bottom:20px;}
    table, th, td{border:1px solid #000;}
    th, td{padding:5px;text-align:center;}
    .totals{text-align:right;margin-top:10px;}
  </style>
</head>
<body>
  <div class="header">
    <h2>Your School / College Name</h2>
    <h4>Marksheet</h4>
  </div>

  <table>
    <tr>
      <td><strong>Name:</strong> {{ $student->first_name}} {{ $student->last_name}}</td>
      <td><strong>Roll:</strong> {{ $student->roll_no }}</td>
      <td><strong>Class:</strong> {{ $student->class }}</td>
    </tr>
    <tr>
      <td><strong>DOB:</strong> {{ $student->date_of_birth }}</td>
      <td colspan="2"><strong>Generated:</strong> {{ now()->format('d-m-Y H:i') }}</td>
    </tr>
  </table>

  <table>
    <thead>
      <tr>
        <th>Subject</th>
        <th>Max Marks</th>
        <th>Obtained</th>
      </tr>
    </thead>
    <tbody>
      @foreach($student->marks as $mark)
      <tr>
        <td>{{ $mark->subject }}</td>
        <td>{{ $mark->max_marks }}</td>
        <td>{{ $mark->score }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  @php
      $totalMax = $student->marks->sum('max_marks');
      $totalObtained = $student->marks->sum('marks_obtained');
      $percentage = $totalMax ? round(($totalObtained / $totalMax) * 100, 2) : 0;
  @endphp

  <div class="totals">
    <strong>Total:</strong> {{ $totalObtained }} / {{ $totalMax }} <br>
    <strong>Percentage:</strong> {{ $percentage }}%
  </div>
</body>
</html>
