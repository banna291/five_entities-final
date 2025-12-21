<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>category update</h1>
    <form action="{{route('category.update')}}" method="post">
        @csrf
        <label for="categoryName">Category:</label>
        <input type="text" id="categoryName" name="Name" value="{{$edit->Name}}" required><br><br>
        <input type="text" name="id" value="{{$edit->id}}" hidden>

        <input type="submit" value="update">
    </form>
    <a href="{{route('admin.dashboard')}}">back to dashboard</a>
</body>
</html>