<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Page</title>
</head>
<body>
    <h1>Role Page</h1>
    <form action="{{route('role.store')}}" method="post">
        @csrf
        <label for="roleName">Role:</label><br>
        <input type="text" id="roleName" name="Name" required><br><br>
        <input type="submit" value="Add Role">
    </form>
    <a href="{{route('admin.dashboard')}}">back to dashboard</a>
</body>
</html>