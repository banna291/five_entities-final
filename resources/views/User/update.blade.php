<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Update</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #f2f4f7, #d9e4f5);
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 40px 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    h1 {
      text-align: center;
      color: #1c2649;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
    }

    input[type="email"],
    input[type="password"],
    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
    }

    input[type="submit"] {
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
    <h1>User Update</h1>
    <form action="{{ route('user.update') }}" method="post">
      @csrf

      <label for="userEmail">Email:</label>
      <input type="email" id="userEmail" name="Email" value="{{ $edit->Email }}" required />

      <label for="userPassword">Password:</label>
      <input type="password" id="userPassword" name="Password" value="{{ $edit->Password }}" required />

      <input type="text" name="id" hidden value="{{ $edit->id }}" />

      <input type="submit" value="Update User" />
    </form>
  </div>

</body>
</html>
