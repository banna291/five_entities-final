<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Officer Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f2f4f7, #d9e4f5);
            color: #333;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #1c2649;
            margin-bottom: 40px;
        }

        .top-bar {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .top-bar a {
            background-color: #1c2649;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .top-bar a:hover {
            background-color: #39446c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #1c2649;
            color: white;
        }

        tr:hover {
            background-color: #f1f5fb;
        }

        form input[type="submit"] {
            background-color: #1c2649;
            color: white;
            padding: 8px 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        form input[type="submit"]:hover {
            background-color: #39446c;
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <a href="{{ route('logout') }}">Logout</a>
    </div>

    <h1>Officer Dashboard</h1>

    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Department</th>
            <th>Category</th>
            <th>Action</th>
        </tr>

        @foreach($complaints as $abc)
        <tr>
            <td>{{ $abc->Title }}</td>
            <td>{{ $abc->Description }}</td>
            <td>{{ $abc->Status }}</td>
            <td>{{ $abc->department->Name }}</td>
            <td>{{ $abc->category->Name }}</td>
            <td>
                <form action="{{ route('off.edit') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $abc->id }}">
                    <input type="submit" value="Edit">
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>
