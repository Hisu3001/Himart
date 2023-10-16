<?php

require './lib/function.php';

if (isset($_POST['btn-login'])) {
    $error = array();
    #Check username
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống trường username";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Số lượng ký tự yêu cầu từ 6 đến 32 ký tự";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Username cho phép sử dụng ký tự, chữ số, dấu ., dấu _, từ 6-32 ký tự";
            } else {
                $username = $_POST['username'];
            }
        }
    }
    #Check password
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống trường password";
    } else {
        if (!(strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32)) {
            $error['password'] = "Số lượng ký tự yêu cầu từ 6 đến 32 ký tự";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Password bắt đầu bằng chữ in hoa và có ít nhất một ký tự đặc biệt";
            } else {
                $password = $_POST['password'];
            }
        }
    }

    if (empty($error)) {
        if(check_login($username, $password)) {
            #Lưu trữ phiên đăng nhập
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            //Chuyển hướng vào trong hệ thống
            redirect("?page=list_post");
            echo "<script>alert('Đăng nhập thành công')</script>";
        }else {
            echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" href="public/reset.css" type="text/css">
    <link rel="stylesheet" href="public/css/import/login_ad.css" type="text/css">
</head>
<body>
    <div class="wp-form-login">
        <h1 class="title-form-login">ĐĂNG NHẬP</h1>
        <form id="form-login" method="post"> 
            <input type="text" name="username" placeholder="Username" id="username" value="<?php echo set_value('username'); ?>">
            <p class="error"><?php echo form_error('username') ?></p>
            <input type="password" name="password" placeholder="Password" id="password" >
            <p class="error"><?php echo form_error('password') ?></p>
            <input type="submit" name="btn-login" id="btn-login" value="Đăng nhập">
        </form>
    </div>
</body>
</html>