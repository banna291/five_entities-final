<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awaz-e-Awam - Home</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #fdfbfb, #ebedee);
            color: #333;
        }

        nav {
            background-color: #1c2649;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        nav h2 {
            margin: 0;
        }

        nav .nav-links a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-weight: bold;
        }

        nav .nav-links a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 50px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 30px;
        }

        .links {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            max-width: 300px;
            margin: 0 auto;
        }

        .links a {
            padding: 12px 20px;
            background-color: #1c2649;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            width: 100%;
            text-align: center;
            transition: background 0.3s;
        }

        .links a:hover {
            background-color: #39446c;
        }
    </style>
</head>
<body>

    <nav>
        <h2>Awaz-e-Awam</h2>
        <div class="nav-links">
            <a href="{{route('user.login')}}">Admin/Officer Login</a>
        </div>
    </nav>

    <div class="container">
        <h1>Welcome to Awaz-e-Awam</h1>
        <div class="links">
            <a href="{{route('complaint.show')}}">See Complaints</a>
            <a href="{{route('complaint.form')}}">Add Complaint</a>
        </div>
    </div>

</body>
</html>
