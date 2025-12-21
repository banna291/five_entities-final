<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Complaints Category</h1>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <label for="categoryName">Category Name:</label>
        <input type="text" id="categoryName" name="Name"  required><br><br>
        <input type="submit">
    </form>
    <a href="{{route('admin.dashboard')}}">back to dashboard</a>
</body>
</html>