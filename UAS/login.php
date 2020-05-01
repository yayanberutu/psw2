    <!--
Nama : Yosepri Disyandro Berutu
NIM : 11318066
    -->
<?php
session_start();
include_once 'functions/user.php';
$user = new User();

if ($user->get_session())
{
    header("location:index.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $login = $user->login($_POST['email'], $_POST['password']);
    if ($login){
        // Login Success
        echo "LOGIN SUKSES";
        header("location:login.php");
    }
    else
    {
    //     // Login Failed
        $msg= 'Username / password wrong';
        echo $msg;
    }
}
?>
     
<form method="POST">
                <tr>
                    <th>Email</th>
                    <td> : </td>
                    <td>
                        <input type="text" name="email"/>
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td> : </td>
                    <td>
                        <input type="password" name="password"/>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td> </td>
                    <td>
                        <input type="submit" value="Login" name= "submit"/>
                    </td>
                </tr>
                <tr>
                    <th>Don't have account?</th>
                    <td> : </td>
                    <td>
                        <a href="./registrasi.php"><b>Register Now</b></a> <br>
                    </td>
                </tr>
                </form>
            </table>