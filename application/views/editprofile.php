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
    <title>update PROFILE</title>
</head>

<body>
    <h1 align="Center">update PROFILE </h1>



    <div class="container">
        <br>
        <br>
        <form action="<?= base_url() ?>Profile/addProfile" method="POST" enctype="multipart/form-data">



            <table class="table table-striped">

                <tr>
                    <td>Họ tên: </td>
                    <td><input type="text" name="username" value="<?php echo $profileEdit['username']; ?>"></td>
                </tr>

                <tr>
                    <td>Ngày sinh: </td>
                    <td><input type="date" name="birthday" value="<?php echo $profileEdit['birthday']; ?>"></td>
                </tr>



                <tr>
                    <td>Giới tính: </td>
                    <td >
                        
                        <select name="Sex" id="">
                            <option value="1" >Nam</option>
                            <option value="0">Nữ</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Số điện thoại: </td>
                    <td><input type="text" name="phone" value="<?php echo $profileEdit['phone']; ?>"></td>
                </tr>

                <tr>
                    <td>Ảnh đại diện: </td>
                    <td><input type="file" class="form-control" id="fileToUpload" name="fileToUpload" value="<?php echo $profileEdit['avatar']; ?>">

                    </td>

                </tr>

                <tr>
                    <td> <input type="submit" value="edit"></td>
                </tr>
            </table>



        </form>

    </div>

</body>

</html>