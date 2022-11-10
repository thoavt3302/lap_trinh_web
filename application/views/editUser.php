<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>SỬA THÔNG TIN  NGƯỜI DÙNG MỚI</title>
</head>
<body>

    <div class = "container">
    <?php foreach($info as $value): ?>
        <form action="<?= base_url()?>test/updateUser" method="POST">
             <table  class="table table-striped">

             <tr>
                <td>ID: </td>
                <td><input type="text" name="id" value="<?= $value['id']?>" readonly></td>
             </tr>

                 <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="<?= $value['username']?>"></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="<?= $value['password']?>"></td>
                </tr>

                <tr>
                    <td>Fullname: </td>
                    <td><input type="text" name="fullname" placeholder="<?= $value['fullname']?>"></td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td><input type="text" name="address" placeholder="<?= $value['address']?>"></td>
                </tr>

                <tr>
                   <td> <input type="submit" value="Edit"></td>
                </tr>
            </table>


        <?php endforeach ?>

    </div>
</body>
</html>