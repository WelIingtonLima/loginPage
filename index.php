<?php
/*
    if(isset($_COOKIE['lembrar'])){
        $user = $_COOKIE['user'];
        $password = $_COOKIE['password'];
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_usuarios` WHERE user = ? AND password = ?");
        $sql->execute(array($user,$password));
        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['jobTitles'] = $info['jobTitles'];
            $_SESSION['name'] = $info['name'];
            $_SESSION['img'] = $info['img'];
            header('http://www.facebook.com');
            die();  
        }
    }
*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Painel de Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleLogin.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/2a85882907.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>

<body <style="background:#0083e1;">

    <section>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
         
            <div class="logomarca">
                <a href="/">
                    <img src="novalogo.png" >
                </a>
            </div>
            
            <div class="container">
            
                <div class="form">
                    <?php
                        /*if(isset($_POST['acao'])){
                            $user = $_POST['user'];
                            $password = $_POST['password'];
                            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_usuarios` WHERE user = ? AND password = ?");
                            $sql->execute(array($user,$password));
                                if($sql->rowCount() == 1){
                                    $info = $sql->fetch();
                                    $_SESSION['login'] = true;
                                    $_SESSION['user'] = $user;
                                    $_SESSION['password'] = $password;
                                    $_SESSION['jobTitles'] = $info['jobTitles'];
                                    $_SESSION['name'] = $info['name'];
                                    $_SESSION['img'] = $info['img'];
                                    if(isset($_POST['lembrar'])){
                                        setcookie('lembrar',true,time()+(60*60*24),'/');
                                        setcookie('user',$user,time()+(60*60*24), '/');
                                        setcookie('password',$password,time()+(60*60*24), '/');
                                    }
                                    header('location: ');
                                    die();
                                }else{
                                    echo '<div class="erro-box"><i class="fa fa-user-times"></i> Usuário ou senha inválidos!</div>';
                                     #provisório
                                }                       
                        }  */             
                    ?>
                    <h2>Login</h2>
                    <form method="POST" autocomplete="off">
                        <div class="inputBox">
                            <div class="input-group">
                                <input type="text" id="user" name="user"  placeholder="Usuário" required>
                                <label class="labelClass" for="user"> Usuário </label>
                            </div><!--input-group-->
                            <div class="input-group">
                                <input type="password" id="password" name="password" placeholder="Senha" required>
                                <label class="labelClass" for="pass"> Senha </label>
                                <div class="iconColor" id="iconColor">
                                <span><i class="fas fa-eye" id="eye" onclick="toggle()"></i></span>
                                </div><!--iconCOlor--->
                                <div class="clear"></div>
                            </div><!--input-group-->
                            <label class="control control-checkbox">
                                Lembrar senha
                                <input type="checkbox" name="lembrar"/>
                                <div class="control_indicator"></div>
                            </label>
                            
                              
                            <input type="submit" name="acao" value="Entrar">
                        </div>
                        <p class="forget">Esqueceu a senha? <a href="#">Clique aqui!</a></p>
                    </form>
                </div><!--form-->
            </div><!--container-->
        </div><!--box-->
    </section>
</body>
</html>


<script src="js/scripts.js"></script>
