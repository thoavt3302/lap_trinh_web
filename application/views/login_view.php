<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>

    <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.css">
    <script type="text/javascript" src="<?= base_url() ?>css/bootstrap.js""></script>
</head>
<body>
    <div class="alert alert-info" role="alert">
    <?php
            if(isset($thongBao)){
                echo $thongBao;
            }else{

            }
        ?>

    </div>

<form action="<?= base_url() ?>index.php/test/xuLyLogin"  method = "POST">
        <table border="=" >

            <tr>
                <td colspan= "2" align="center"> THÔNG TIN ĐĂNG NHẬP</td>
            </tr>

            <tr>
                <td>UserName: </td>
                <td><input type="text" name = "username"> </td>
            </tr>

            <tr>
                <td>Password: </td>
                <td><input type="password" name = "password"></td>
            </tr>

            <tr>
                <td colspan="2">
                   <input type="checkbox" value = ""> nhớ mật khẩu
                </td>
            </tr>

            <tr>
                <td> <input type="submit" value = "Đăng nhập"></td>

                <td><input type="reset" value  = "Xóa dữ liệu"></td>
            </tr>


        </table>
    </form>
</body>
</html>