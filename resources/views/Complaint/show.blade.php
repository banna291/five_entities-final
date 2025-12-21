<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #1c2649;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #1c2649;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eef;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 30px;
            text-decoration: none;
            color: white;
            background-color: #1c2649;
            padding: 12px 25px;
            border-radius: 5px;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }

        a:hover {
            background-color: #2e3b69;
        }
    </style>
</head>
<body>
    <h1>Complaint Details</h1>
    <table>
        <tr>
            <th>Complain By</th>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Department</th>
            <th>Category</th>
            <th>Officer Assigned</th>
        </tr>
        @foreach($abc as $abc)
        <tr>
            <td>{{$abc->ComplaintBy}}</td>
            <td>{{$abc->Email}}</td>
            <td>{{$abc->Title}}</td>
            <td>{{$abc->Description}}</td>
            <td>{{$abc->Status}}</td>
            <td>{{$abc->department->Name}}</td>
            <td>{{$abc->category->Name}}</td>
            <td>{{$abc->user->Name ?? 'Not Assigned'}}</td>
        </tr>
        @endforeach
    </table>

    <a href="{{route('home')}}">Home Page</a>
</body>
</html>
