<?php
session_start();
include_once 'includes/functions.php';
$user = new User();

if ($user->get_session())
{
    header("location:home.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "A";
    $login = $user->check_login($_POST['username'], $_POST['password']);
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
                    <th>Email or Username</th>
                    <td> : </td>
                    <td>
                        <input type="text" name="username"/>
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
                        <a href="./register.php"><b>Register Now</b></a> <br>
                    </td>
                </tr>
                </form>
            </table>