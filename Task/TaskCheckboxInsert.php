<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form with Gender Checkboxes</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background-color: #f4f4f9;
    }
    form {
      background: #ffffff;
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 20px;
      max-width: 400px;
      margin: auto;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .checkbox-group label {
      font-weight: normal;
      display: flex;
      align-items: center;
      margin-bottom: 8px;
    }
    .checkbox-group input[type="checkbox"] {
      margin-right: 8px;
    }
    button {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <form action="TaskCheckboxInsert_post.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name">
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email">
    
    <label>Gender:</label>
    <div class="checkbox-group">
      <label><input type="checkbox" name="gender[]" value="male"> Male</label>
      <label><input type="checkbox" name="gender[]" value="female"> Female</label>
    </div>
    
    <button type="submit" name="submit">Submit</button>
  </form>
</body>
</html>
