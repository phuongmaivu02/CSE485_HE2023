<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add User Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Add new Employee</h2>
    <form>
      <div class="mb-3">
        <label for="userId" class="form-label">#</label>
        <input type="text" class="form-control" id="userId" placeholder="Nhập ID người dùng">
      </div>
      <div class="mb-3">
        <label for="userName" class="form-label">Name</label>
        <input type="text" class="form-control" id="userName" placeholder="Nhập tên người dùng">
      </div>
      <div class="mb-3">
        <label for="userAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="userAddress" placeholder="Nhập địa chỉ người dùng">
      </div>
      <div class="mb-3">
        <label for="userSalary" class="form-label">Salary</label>
        <input type="number" class="form-control" id="userSalary" placeholder="Nhập tiền lương người dùng">
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>
</body>
</html>
