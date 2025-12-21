<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #e0eafc, #cfdef3);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .container {
            max-width: 500px;
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
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
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
    </style>
</head>
<body>

    <div class="container">
        <h1>User Registration</h1>
        <form action="{{ route('user.store') }}" method="post">
            @csrf

            <label for="userName">Name:</label>
            <input type="text" id="userName" name="Name" required>

            <label for="userEmail">Email:</label>
            <input type="email" id="userEmail" name="Email" required>

            <label for="userPassword">Password:</label>
            <input type="password" id="userPassword" name="Password" required>

            <label for="userRole">Choose Role:</label>
            <select name="choose" id="userRole" required>
                @foreach($role as $role)
                    <option value="{{ $role->id }}">{{ $role->Name }}</option>
                @endforeach
            </select>

            <input type="submit" value="Register User">
        </form>
    </div>

</body>
</html>
