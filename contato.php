<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/contato.css">
    <title>MELLITUS</title>
</head>
<body>
<nav id="navbar">
    <div id="navbar-container">
        <h1 class="logo">MELLITUS</h1>
            <ul id="navbar-items">
                <li><a href="#showcase">Início</a></li>
                <li><a href="#clients">Sobre</a></li>
                <li><a href="#gallery">Galeria</a></li>
            </ul>
    </div>
</nav>
<br><br><br><br><br><br><br><br>
<div class="ajusteform">
<form action="cadastro.php" method="post" name="form_usuario_insere"
                         enctype="multipart/form-data" id="form_usuario_insere" >
                            </div>
                            <label for="login_usuario">Login: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="login_usuario" id="login_usuario" 
                                class="form-control" placeholder="Digite o nome do Usuario"
                                 maxlength="100" required>
                            </div>
                            <label for="senha_usuario">Senha: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="password" name="senha_usuario" id="senha_usuario" 
                                class="form-control" placeholder="Digite a senha" 
                                maxlength="100" required>
                            </div>
                            <label for="cpf_usuario"> <strong>Cpf:</strong>  </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="text" name="cpf_usuario" id="cpf_usuario" 
                                class="form-control" placeholder="Digite seu cpf - apenas numeros." 
                                maxlength="100" required>
                            </div>
                            <label for="email_usuario">Email: </label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                                </span>
                                <input type="email" name="email_usuario" id="email_usuario" 
                                class="form-control" placeholder="Digite seu Email:" 
                                maxlength="100" required>
                            </div>
                            <br>
                            <input type="submit" name="enviar" id="enviar"
                             class="btn btn-danger btn-block" value="Cadastrar">
                        </form>
</div>

</body>
</html>