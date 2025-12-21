<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User List</title>
  <style>
    body {
      margin: 0;
      padding: 30px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #f3f4f6, #d7e1ec);
      color: #333;
    }

    h1 {
      text-align: center;
      color: #1c2649;
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      border-radius: 8px;
      overflow: hidden;
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

    form {
      display: inline;
    }

    input[type="submit"] {
      background-color: #1c2649;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #39446c;
    }
  </style>
</head>
<body>

  <h1>User List</h1>

  <table>
    <tr>
      <th>Email</th>
      <th>Password</th>
      <th>Role ID</th>
      <th>Role Name</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @foreach($list as $item)
    <tr>
      <td>{{ $item->Email }}</td>
      <td>{{ $item->Password }}</td>
      <td>{{ $item->RoleId }}</td>
      <td>{{ $item->role->Name }}</td>
      <td>
        <form action="{{ route('user.edit') }}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $item->id }}">
          <input type="submit" value="Edit">
        </form>
      </td>
      <td>
        <form action="{{ route('user.delete') }}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $item->id }}">
          <input type="submit" value="Delete">
        </form>
      </td>
    </tr>
    @endforeach
  </table>

</body>
</html>
