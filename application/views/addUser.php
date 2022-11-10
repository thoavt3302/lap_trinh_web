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
    <title>THÊM NGƯỜI DÙNG MỚI</title>
</head>
<body>
    <h1 align = "Center">THÊM NGƯỜI DÙNG MỚI</h1>
    <div class = "container">
        <br>
        <br>
        <form action="addUser" method="POST">
             <table  class="table table-striped">

                <tr>
                    <td>UserName: </td>
                    <td><input type="text" name="username"></td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr>
                    <td>Fullname: </td>
                    <td><input type="text" name="fullname"></td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td><input type="text" name="address"></td>
                </tr>

                <tr>
                   <td> <input type="submit" value="Add"></td>
                </tr>
            </table>
        </form>

    </div>
</body>
</html>