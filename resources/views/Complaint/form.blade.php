<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Complaint Form</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #f2f4f7, #d9e4f5);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      max-width: 500px;
      width: 100%;
    }

    h1 {
      text-align: center;
      color: #1c2649;
      margin-bottom: 25px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      margin-top: 15px;
    }

    input[type="text"],
    input[type="email"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    textarea {
      resize: vertical;
    }

    input[readonly] {
      background-color: #e9ecef;
    }

    input[type="submit"] {
      margin-top: 20px;
      width: 100%;
      background-color: #1c2649;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #39446c;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h1>Complaint</h1>
    <form action="{{ route('complaint.store') }}" method="post">
      @csrf

      <label for="complaintByName">Name:</label>
      <input type="text" id="complaintByName" name="ComplaintBy" required>

      <label for="complaintEmail">Email:</label>
      <input type="email" id="complaintEmail" name="Email" required>

      <label for="complaintTitle">Title:</label>
      <input type="text" id="complaintTitle" name="Title" required>

      <label for="complaintDescription">Description:</label>
      <textarea id="complaintDescription" name="Description" rows="4" required></textarea>

      <label for="complaintStatus">Status:</label>
      <input type="text" id="complaintStatus" name="Status" value="pending" readonly>

      <label for="complaintDepartment">Department:</label>
      <select name="Dep" id="complaintDepartment" required>
        @foreach($dep as $dep)
        <option value="{{ $dep->id }}">{{ $dep->Name }}</option>
        @endforeach
      </select>

      <label for="complaintCategory">Category:</label>
      <select name="Cat" id="complaintCategory" required>
        @foreach($cat as $cat)
        <option value="{{ $cat->id }}">{{ $cat->Name }}</option>
        @endforeach
      </select>

      <input type="submit" value="Submit Complaint">
    </form>
  </div>

</body>
</html>
