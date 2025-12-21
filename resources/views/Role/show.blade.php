<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>roles data</h1>
    <table border="1px solid">
        <tr>
            <th>Name</th>
            <th>id</th>
        </tr>
        @foreach($role as $role)
        <tr>
            <td>{{$role->Name}}</td>
            <td>{{$role->id}}</td>
            <td>
                <form action="{{route('role.edit')}}" method="post">
                    @csrf
                    <input type="text" name="id" value="{{$role->id}} " hidden>
                    <input type="submit" value="edit">
                </form>
            </td>
            <td>
                <form action="{{route('role.delete')}}" method="post">
                    @csrf
                    <input type="text" name="id" value="{{$role->id}}" hidden>
                    <input type="submit" value="delete">
                </form>
            </td>
            @endforeach
        </tr>
    </table>
    <a href="{{route('admin.dashboard')}}">back to dashboard</a>
</body>
</html>