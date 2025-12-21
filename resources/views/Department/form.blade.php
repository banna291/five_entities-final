<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Department Form</title>
  <style>
    body {
      margin: 0;
      padding: 40px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e8f0ff, #f9fbff);
    }

    h1 {
      text-align: center;
      color: #1c2649;
      margin-bottom: 30px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
      color: #1c2649;
    }

    input[type="text"], input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #1c2649;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #354470;
    }

    a {
      display: block;
      text-align: center;
      margin-top: 20px;
      text-decoration: none;
      background-color: #1c2649;
      color: white;
      padding: 10px;
      border-radius: 6px;
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

  <h1>Add Department</h1>

  <form action="{{ route('department.store') }}" method="post">
    @csrf
    <label for="departmentName">Department Name:</label>
    <input type="text" id="departmentName" name="Name" required>

    <input type="submit" value="Submit Department">
  </form>

  <a href="{{ route('admin.dashboard') }}">Back to Dashboard</a>

</body>
</html>
