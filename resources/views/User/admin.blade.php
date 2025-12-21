<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #e0eafc, #cfdef3);
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
            padding: 40px;
        }

        .dashboard-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 300px;
            margin-top: 20px;
        }

        .dashboard-links a {
            padding: 10px 15px;
            background-color: #1c2649;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.3s;
        }

        .dashboard-links a:hover {
            background-color: #39446c;
        }
    </style>
</head>
<body>

    <nav>
        <h2>Admin Dashboard</h2>
        <div class="nav-links">
            <a href="{{ route('logout') }}">Logout</a>
        </div>
    </nav>

    <div class="container">
        <h1>Welcome to Admin Dashboard</h1>
        <div class="dashboard-links">
            <a href="{{ route('user.show') }}">See User List</a>
            <a href="{{ route('user.form') }}">Add User</a>
            <a href="{{ route('update.show') }}">See Complaint List</a>
            <a href="{{ route('role.show') }}">Roles Data</a>
            <a href="{{ route('role.form') }}">Add Roles</a>
            <a href="{{ route('category.show') }}">Categories List</a>
            <a href="{{ route('category.form') }}">Add Categories</a>
            <a href="{{ route('department.show') }}">Department Data</a>
            <a href="{{ route('department.form') }}">Add Department</a>
        </div>
    </div>

</body>
</html>
