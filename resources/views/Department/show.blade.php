<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #1c2649;
            margin-bottom: 30px;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 16px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #1c2649;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        input[type="submit"] {
            padding: 6px 12px;
            background-color: #1c2649;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2e3b69;
        }

        a {
            display: block;
            width: fit-content;
            margin: 30px auto 0;
            padding: 10px 20px;
            background-color: #1c2649;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        a:hover {
            background-color: #2f3e6c;
        }
    </style>
</head>
<body>
    <h1>Department data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($item as $item)
        <tr>
            <td>{{$item->Name}}</td>
            <td>{{$item->id}}</td>
            <td>
                <form action="{{route('department.edit')}}" method="post">
                    @csrf
                    <input type="text" name="id" value="{{$item->id}}" hidden>
                    <input type="submit" value="Edit">
                </form>
            </td>
            <td>
                <form action="{{route('category.delete')}}" method="post">
                    @csrf
                    <input type="text" name="id" value="{{$item->id}}" hidden>
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('admin.dashboard')}}">Back to Dashboard</a>
</body>
</html>
