
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đăng Kí</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="text-center">ĐĂNG KÍ</h1>
        <form action="Xuly.php" method="POST">
            <table  celllpadding="0" cellspacing="0" >
                <tr>
                    <td>
                        Tên đăng nhập:
                    </td>
                    <td>
                        <input type="text" name="txtUsername" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật Khẩu:
                    </td>
                    <td>
                        <input type="password" name="txtPassword" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" name="txtEmail" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Họ và Tên:
                    </td>
                    <td>
                        <input type="text" name="txtFullname" size="50"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Ngày Sinh:
                    </td>
                <td>
                    <input type="text" name="txtBirthday" size="50"/>
                </td>
                </tr>
                <tr>
                    <td>
                        Giới Tính:
                    </td>
                    <td>
                        <select name="txtSex">
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Đăng ký"/>
            <input type="reset" value="Nhập lại"/>
        </form>
    </body>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
