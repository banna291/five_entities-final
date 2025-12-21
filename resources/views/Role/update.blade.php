<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Update</title>
</head>
<body>
    <h1>Role update</h1>
    <form action="{{route('role.update')}}" method="post">
        @csrf
        <label for="roleName">Role:</label><br>
        <input type="text" id="roleName" name="Name" value="{{$edit->Name}}" required><br><br>
        <input type="text" name="id" value="{{$edit->id}}" hidden>

        <input type="submit" value="Update Role">
    </form>
</body>
</html>