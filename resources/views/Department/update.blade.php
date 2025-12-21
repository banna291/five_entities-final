<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role Update</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #1c2649;
            margin-bottom: 30px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #1c2649;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2e3b69;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background-color: #1c2649;
            padding: 10px 20px;
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
    <h1>Department Update</h1>
    <form action="{{route('department.update')}}" method="post">
        @csrf
        <label for="departmentName">Department:</label>
        <input type="text" id="departmentName" name="Name" value="{{$edit->Name}}" required>
        <input type="text" name="id" value="{{$edit->id}}" hidden>

        <input type="submit" value="Update">
    </form>
    <a href="{{route('admin.dashboard')}}">Back to Dashboard</a>
</body>
</html>
