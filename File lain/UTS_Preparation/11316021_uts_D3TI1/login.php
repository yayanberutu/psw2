<?php
	/*browseall.php*/
	
/*include functions*/
require_once(dirname(__FILE__).'/functions/database.php');	
require_once(dirname(__FILE__).'/commons/header.php');

                    if(isset($_GET['do_login'])){
                        $account = getUser($_POST['uname']);
                        if($account == false){	
                            $_SESSION['login_error'] = TRUE;
                        }else{
                            $_SESSION['is_logged_in'] = TRUE;
                            header("location:index.php");	
                        }
                    }
                    echo '<div align=center>
                    <form method=post action="login.php?do_login=1">
                            <table>
                            <tr>
                                    <td>username</td>
                                    <td><input type=text name="uname"></td>
                            </tr>
                            <tr>
                                    <td>password</td>
                                    <td><input type=password name="pass"></td>
                            </tr>
                            <tr>
                                    <td></td>
                                    <td><input type=submit value=login></td>
                            </tr>
                            </table>
                    </form>
                    </div>';
                    if(isset($_SESSION["login_error"])){
                            echo "<h2 style='color:red';>Anda tidak terdaftar</h2>";
                            }
?>
	
<?php

require_once(dirname(__FILE__).'/commons/footer.php');
?>