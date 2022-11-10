<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container">
  <h2>Danh sách người dùng</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>UserName</th>
        <th>Password</th>
        <th>Fullname</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>

     <input type='text' name='search'  >
     <input type='submit'   value='Search'>

   <br/>

    <a href="addUser" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm mới
        </a>
      <?php foreach ($alldata as $value): ?>

        <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['username'] ?></td>
        <td><?= $value['password'] ?></td>
        <td><?= $value['fullname'] ?></td>
        <td><?= $value['address'] ?></td>

        <td>
                            <!-- Button Sửa -->
                            <a href="editUser/<?= $value['id'] ?>"  class="btn btn-primary">
                                <i class="fas fa-edit"></i> Sửa
                            </a>

                            <!-- Button Xóa -->
                            <a href="deleteUser/<?= $value['id'] ?>"  class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i> Xóa
                            </a>
        </td>
      </tr>

      <?php endforeach ?>



    </tbody>
  </table>
</div>

</body>
</html>

