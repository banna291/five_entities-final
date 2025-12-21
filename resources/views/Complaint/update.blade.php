<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Complaint Update</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e8f0ff, #f9fbff);
      padding: 40px;
    }

    h1 {
      text-align: center;
      color: #1c2649;
      margin-bottom: 30px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #1c2649;
    }

    select, input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #1c2649;
      color: white;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #354470;
    }

    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      color: white;
      background-color: #1c2649;
      padding: 10px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: bold;
      width: fit-content;
      margin-left: auto;
      margin-right: auto;
    }

    a:hover {
      background-color: #2f3d6b;
    }
  </style>
</head>
<body>

  <h1>Update Complaint Officer</h1>

  <form action="{{ route('complaint.update') }}" method="post">
    @csrf

    <input type="hidden" name="id" value="{{ $edit->id }}">

    <label for="assignedOfficer">Assign Officer:</label>
    <select name="Assigned" id="assignedOfficer" required>
      @foreach($officer as $of)
        <option value="{{ $of->id }}">{{ $of->Name }}</option>
      @endforeach
    </select>

    <input type="submit" value="Update">
  </form>

  <a href="{{ route('admin.dashboard') }}">Back to Dashboard</a>

</body>
</html>
