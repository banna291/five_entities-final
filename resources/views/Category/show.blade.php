<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Category data</h1>
    <table border="1px solid">
        <tr>
            <th>Category Name</th>
            <th>Category id</th>
        </tr>
        @foreach($item as $item)
        <tr>
            <td>{{$item->Name}}</td>
            <td>{{$item->id}}</td>
            <td>
                <form action="{{route('category.edit')}}" method="post">
                    @csrf
                    <input type="text" name="id" value="{{$item->id}} " hidden>
                    <input type="submit" value="edit">
                </form>
            </td>
            <td>
                <form action="{{route('category.delete')}}" method="post">
                    @csrf
                    <input type="text" name="id" value="{{$item->id}}" hidden>
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('admin.dashboard')}}">back to dashboard</a>
</body>
</html>