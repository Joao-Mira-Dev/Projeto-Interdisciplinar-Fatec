<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Apresentar Editais</title>
</head>
<body>
    <?php require_once('header.html'); ?>
    <?php require_once('nav.html'); ?>
    <main class="main-form-login">
        <div class="external-form-container">
            <div class="internal-form-container">
                <form action="#" method="post" class="form-login">
                    <h1>Login</h1>
                    <div class="input-single">
                        <input type="text" name="" id="email-box" class="input" autocomplete="off" required>
                        <label for="email-box">* Insira seu email</label>
                    </div>
                    <div class="input-single">
                        <input type="password" name="" id="pass-box" class="input" autocomplete="off" required>
                        <label for="pass-box">* Insira sua senha</label>
                    </div>
                    <div>
                        <input class="btn-form-login" type="submit" value="Enviar">
                    </div>
                    <p><a href="#">Esqueceu a senha?</a></p>
                    <p>Não tem cadastro? <a href="#">CADASTRAR</a></p>
                </form>
            </div>
        </div>
    </main>
    <script src="../js/menu-lateral.js"></script>
    <script src="../js/nav-bar.js"></script>
</body>
</html>