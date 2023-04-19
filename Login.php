<?php
include 'koneksi.php';


if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select = mysqli_query($koneksi, "SELECT * FROM cinema_login WHERE username = '$username' &&  password ='$password'");
    $result = mysqli_num_rows($select);

    if (!empty($username) && !empty($password)) {
        $errorpass = 'Done';

        if($result == 1){
        $_SESSION['login_user'] = $username;
        header("location: dashboard.php");
        } else {
        $errorpass = "Username atau Password salah";
        }

        mysqli_close($koneksi);
        
    } else {
        $errorpass = 'Belum terisi lengkap';
    }

} 
    
    
//     else {
//         $username = $_POST['username'];
//         $password = $_POST['password'];

//         $select = "SELECT * FROM cinema_login WHERE username = '$username' &&  password ='$password'";
//         $result = mysqli_query($koneksi, $select);

//         if($result == 1){
//         $_SESSION['login_user'] = $username;
//         header("location: testing.php");
//         }
//         else {
//         $errorpass = "Username atau Password salah";
//         }
//         mysqli_close($koneksi);
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login/loginphp.css">
</head>
<body>

    <div class="left-coloumn">
        <div class="center">
            <div class="headline">
                <h1>Welcome Back</h1>
                <p>Please enter your login details to access your account</p>
            </div>
            <div class="form">
                <form action="" method="post">
                    <div class="input-email">
                        <h3>Username</h3>
                        <input type="text" placeholder="Enter Your username" name="username" >
                        <?php
                            if (isset($errorpass)) {
                                echo '<span class="errorpass-msg">'.$errorpass.'</span>';
                            } 
                            ?>
                    </div>


                    <div class="input-password">
                        <h3>Password</h3>
                        <input type="password" placeholder="Enter Your password" name="password" >
                        <div class="bottom-text">
                            <input type="checkbox" name="check" value="1"> <span> Remember Me</span></input>
                            <a href="#">Forgot Password</a>
                            
                        </div>
                    </div>

                    <div class="login-button">
                        <input type="submit" name="login" value="login">
                        <button href="#" class="btn-login">
                            <img src="login/Icon/Logo-Google.png">
                            Sign in with Google
                        </button>
                    </div>
                </form>
            </div>
            <p class="account-fer">Don't have an account?<span><a href="/movie/signup.php">     Sign Up</a></span></p>
        </div>
    </div>

    <div class="banner">
        <!-- <img src="img/Banner.jpg" alt=""> -->
    </div>
</body>
</html>