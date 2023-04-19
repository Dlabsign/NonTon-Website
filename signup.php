<?php
include 'koneksi.php';


if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    
    $select = "SELECT * FROM cinema_login WHERE username = '$username'";
    $result = mysqli_query($koneksi, $select);

    if (!empty($username)) {
        if (mysqli_num_rows($result) > 0 ) {
            $errorname[] = 'user already exsist';
        } else {
            if (!empty($email)) {
                if (!empty($password) && !empty($password2)) {
                    if ($password !== $password2) {
                        $errorpass ='Sandi Tidak Sama ';
                    } else {
                        // part yang perlu di isi
                        $errorpass = 'berhasil';
                        mysqli_query($koneksi, "INSERT INTO cinema_login VALUES ('', '$username', '$email', '$password')");
                        header("location:login.php");

                    }
                } else {
                    $errorpass = 'failed';

                }
            } else {
                $erroremail[] = 'Email tidak terisi';
            }
        }
    } else {
        $errorname[] = 'Username belum terisi';
    }

    // ========================================SUDAH BERHASIL==============================

    // if (!empty($username)) {
    //     if (mysqli_num_rows($result) > 0 ) {
    //         $emailerror[] = 'user already exsist';
    //     } else {
    //         if (!empty($email)) {
    //             if ($password !== $password2) {
    //                 $error[] = 'Pass tidak sama';
    //             } else {
    //             // mysqli_query($koneksi, "INSERT INTO cinema_login VALUES ('', '$username', '$email', '$password')");

    //             }
    //         }
    //         else {
    //             $emailerror[] = 'Email tidak terisi';
    //         }
    //     }
    // } else {
    //     $emailerror[] = 'username Belum terisi';
    // }
    // ========================================SUDAH BERHASIL==============================



    // if (!empty($username) && !empty($email)) {
    //     if ($password == $password2) {
    //         echo "<script>alert('data telah di tambahkan'); </script>";
    //         header("location:login.php");
    //         mysqli_query($koneksi, "INSERT INTO cinema_login VALUES ('', '$username', '$email', '$password')");
    //     } else if (!empty($password)) {
    //         echo "<script>alert('Password Belum terisi'); </script>";
    //     }
    // } else {
    //     echo "<script>alert('Data belum terisi'); </script>";
    // }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

    <div class="left-coloumn">
        <div class="center">
            <div class="headline">
                <h1>Create an account</h1>
                <p>Create Your account Free</p>
            </div>

            <div class="form">
                <form action="" method="post">
                    <div class="input-user">
                        <h3>Username</h3>
                        <input type="text" placeholder="Enter Your Username" name="username" >
                        <?php
                            if (isset($errorname)) {
                                foreach ($errorname as $errorname) {
                                    echo '<span class="errorname-msg">'.$errorname.'</span>';
                                }
                            } 
                        ?>
                    </div>

                    <div class="input-email">
                        <h3>Email</h3>
                        <input type="text" placeholder="Enter Your Email" name="email" >
                        <?php
                            if (isset($erroremail)) {
                                foreach ($erroremail as $erroremail) {
                                    echo '<span class="erroremail-msg">'.$erroremail.'</span>';
                                }
                            } 
                        ?>
                    </div>

                    <div class="input-pass">
                        <h3>Password</h3>
                        <input type="password" placeholder="Enter Your Password" name="password" id="password">
                    </div>

                    <div class="input-pass2">
                        <h3>Password</h3>
                        <input type="password" placeholder="Confirm password" name="password2" id="password2">
                        <?php
                            if (isset($errorpass)) {
                                echo '<span class="errorpass-msg">'.$errorpass.'</span>';
                            } 
                            
                        ?>
                    </div>

                    <div class="login-button">
                        <input type="submit" name="register" value="Register">
                        <button href="#" class="btn-signup">
                            <img src="login/Icon/Logo-Google.png">
                            Sign in with Google
                        </button>
                    </div>
                </form>
            </div>

            <p class="account-fer">Already have an account? <span><a href="/movie/login.php#">Login</a></span></p>
        </div>
    </div>

    <div class="banner2">
    </div>
</body>
</html>