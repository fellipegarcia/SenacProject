<?php

if(isset($_POST['submit']))
{

include_once('config.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];



$result = mysqli_query($conexao, "INSERT INTO users(nome,email,telefone,senha) values('$nome','$email','$telefone','$senha')");

}
//write by fellipe garcia
?>

<!DOCTYPE html>
<html lang="en">
<!-- write by fellipe garcia -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <title>Projeto</title>

    <script>
    function confereSenha() {
        cosnt senha = document.querySelector('input[name=senha]');
        cosnt confirma = document.querySelector('input[name=confirma]');

        if(confirma.value === senha.value) {
            confirma.setCustomValidity('');
        }else{
            confirma.setCustomValidity('As senhas não conferem');

        }
    }
    function senhaOk(){
        alert("Senhas conferem")
    }

    
</script>



</head>

<body>

    <header>
        <nav class="nav-bar">
            <div class="logo">
                <a href="index.html"><img src="./assets/img/logo.png"></a>
            </div>
            <div class="nav-list">
                <ul>
                <li class="nav-item"><a href="home.php" class="nav-link" style="color: black;">Início</a></li>
                                <li class="nav-item"><a href="servicos.php" class="nav-link"style="color: black;">Serviços</a></li>
                                <li class="nav-item"><a href="contato.php" class="nav-link"style="color: black;">Contato</a></li>
                                <li class="nav-item"><a href="sobre.php" class="nav-link"style="color: black;">Sobre</a></li>
                </ul>
</div>

            <div class="login-button">
            
                <button><a href="#">Entrar</a></button>
                <button><a href="cadastro.html">Cadastrar</a></button>
            </div>
        </div>
    </div>

    </header>






    <div class="box">
        
        <div class="form-box">
            <h2>Criar Conta</h2>
            <p> Já é um membro? <a href="#"> Login </a> </p>
            <form action="cadastrar.php" method="POST">
                <div class="input-group">
                    <label for="nome"> Nome Completo</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite o seu nome completo" required>
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="Digite o seu telefone" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password"  name="senha"  id="senha" class="inputUser" placeholder="Digite sua senha" required onchange='confereSenha();' >
                </div>

                <div class="input-group w50">
                    <label for="Confirmarsenha">Confirmar Senha</label>
                    <input type="password" name="confirma" id="confirma" class="inputUser"  placeholder="Confirme a senha" required onchange='confereSenha();' >
                </div>

                <div class="input-group">
                    <button type="submit" name="submit" id="submit" value="Entrar">Cadastrar</button>
                </div>
            </div>
        </div>

            </form>

            <footer>

                <div class="rodape">
            
                    <div class="redessociais">
                                 
                        <a href="https://www.instagram.com/leokimura21" target="_blank"> <img src=".//assets/img/instagram.png" alt="instagram"></a>
                        <a href="https://twitter.com/@frxshprxncx" target="_blank">   <img src=".//assets/img/twitterlogo (2).png" alt="twitter"></a>
                        <a href="https://web.whatsapp.com" target="_blank"> <img src=".//assets/img/whatsapp.png" alt="whatsapp"> </a>
                        <a href="https://www.facebook.com" target="_blank"> <img src=".//assets/img/facebook.png" alt="facebook"></a>
            
                        </div>
                    
                </div>
            </footer>
    






</body>