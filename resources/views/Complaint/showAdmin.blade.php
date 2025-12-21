<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Complaint Details</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e0ecf7, #f7fafd);
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
      background-color: white;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      margin-bottom: 30px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #1c2649;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f5f9;
    }

    input[type="submit"] {
      background-color: #1c2649;
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #354470;
    }

    a {
      text-decoration: none;
      background-color: #1c2649;
      color: white;
      padding: 10px 20px;
      border-radius: 6px;
      font-weight: bold;
      display: inline-block;
      text-align: center;
    }

    a:hover {
      background-color: #2f3d6b;
    }

    .center {
      text-align: center;
    }
  </style>
</head>
<body>

  <h1>Complaint Details</h1>

  <table>
    <tr>
      <th>Complaint By</th>
      <th>Email</th>
      <th>Title</th>
      <th>Description</th>
      <th>Status</th>
      <th>Department</th>
      <th>Category</th>
      <th>Assigned Officer</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>

    @foreach($ad as $abc)
    <tr>
      <td>{{ $abc->ComplaintBy }}</td>
      <td>{{ $abc->Email }}</td>
      <td>{{ $abc->Title }}</td>
      <td>{{ $abc->Description }}</td>
      <td>{{ $abc->Status }}</td>
      <td>{{ $abc->department->Name }}</td>
      <td>{{ $abc->category->Name }}</td>
      <td>{{ $abc->user->Name ?? 'Not Assigned' }}</td>
      <td>
        <form action="{{ route('complaint.edit') }}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $abc->id }}">
          <input type="submit" value="Edit">
        </form>
      </td>
      <td>
        <form action="{{ route('complaint.delete') }}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $abc->id }}">
          <input type="submit" value="Delete">
        </form>
      </td>
    </tr>
    @endforeach
  </table>

  <div class="center">
    <a href="{{ route('admin.dashboard') }}">Back to Dashboard</a>
  </div>

</body>
</html>
