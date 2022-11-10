<!DOCTYPE html>
<html lang="en">

<head>
  <title>Profile người dùng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


  <div class="container">
    <h2>Profile người dùng</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Họ tên</th>
          <th>Ngày sinh</th>
          <th>Giới tính</th>
          <th>Số điện thoại</th>
          <th>Ảnh đại diện</th>
        </tr>
      </thead>
      <tbody>

        <input type='text' name='search'>
        <input type='submit' value='Search'>

        <br />

        <a href="<?= base_url() ?>Profile/viewAddProfile" class="btn btn-primary">
          <i class="fas fa-plus"></i> Thêm mới
        </a>
        <?php foreach ($allprofile as $value) : ?>

          <tr>
            <td><?= $value['username'] ?></td>
            <td><?= $value['birthday'] ?></td>

            <td>
              <?php
              if ($value['Sex'] == 1) {
                echo 'Nam';
              } else {
                echo 'Nữ';
              }
              ?>
            </td>

            <td><?= $value['phone'] ?></td>
            <td>
              <img width="70px" height="100px" src="<?= base_url() ?>/<?= $value['avatar'] ?>" alt="img">
            </td>

            <td>
              <!-- Button Sửa -->
              <a href="<?= base_url() ?>Profile/editProfile/<?= $value['id'] ?>" class="btn btn-primary">
                <i class="fas fa-edit"></i> Sửa
              </a>

              <!-- Button Xóa -->
              <a href="profile/deleteProfileById/<?= $value['id'] ?>" class="btn btn-danger">
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