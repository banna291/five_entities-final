<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #d7e1ec, #f5f7fa);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .container {
            max-width: 400px;
            margin: 80px auto;
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #1c2649;
        }

        label {
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #1c2649;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #39446c;
        }

        .link-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #1c2649;
            text-decoration: none;
            font-weight: bold;
        }

        .link-btn:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Login</h1>
        <form action="{{ route('login.check') }}" method="post">
            @csrf

            <label for="loginEmail">Email:</label>
            <input type="email" id="loginEmail" name="Email" required>

            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="Password" required>

            <input type="submit" value="Login">
        </form>

        <a class="link-btn" href="{{ route('home') }}">← Back to Home</a>
    </div>

</body>
</html>
