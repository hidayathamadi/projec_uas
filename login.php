<?php
    session_start();
    require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .mian{
            height: 100vh;
        }
        .login-box{
            width: 500px;
            height: 300px;
            box-sizing: border-box;
            border-radius: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <form action="" method="POST">
                <div>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div>
                    <button class="btn btn-success form-control" type="sumbit" name="loginbtn">Login</button>
                </div>
            </form>
        </div>
        <div llass="mt-3" style="width: 500px">
            <?php
                if(isset($_POST ['loginbtn'])){
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $query = mysqli_query($con, "SELECT * FROM users WHERE username= '$username'");
                    $countdata = mysqli_num_rows($query);
                    $data = mysqli_fetch_array($query);
                    

                    if($countdata>0){
                        if (password_verify($password, $data['password'])){
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['login'] = true;
                            header('location: index.php');
                        }
                        else{
                        ?>
                            <div class="alert alert-warning" role ="alert">
                                Password Salah
                            <div>
                        <?php
                        }
                        }
                        else{
                            ?>
                                <div class="alert alert-warning" role ="alert">
                                    Akun Tidak Tersedia
                                <div>
                            <?php
                        }
                }
            ?>
        </div>
    </div>
</body>
</html>