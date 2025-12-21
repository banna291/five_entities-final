<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Officer Complaint Update</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #f7faff, #dde9f5);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      max-width: 400px;
      width: 100%;
    }

    h1 {
      text-align: center;
      color: #1c2649;
      margin-bottom: 25px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      margin-top: 15px;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type="submit"] {
      margin-top: 20px;
      width: 100%;
      background-color: #1c2649;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #39446c;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h1>Officer Complaint Update</h1>
    <form action="{{ route('off.update') }}" method="post">
      @csrf

      <input type="hidden" name="id" value="{{ $offedit->id }}">

      <label for="officerStatus">Status:</label>
      <input type="text" id="officerStatus" name="Status" value="{{ $offedit->Status }}" required>

      <input type="submit" value="Update">
    </form>
  </div>

</body>
</html>
