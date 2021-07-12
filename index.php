<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Sistema | Login</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="container">
    <div class="form-box">
        <form action="processa.php" method="post">
            <div>
                <h1>Login</h1>
            </div>

            <div>
                <input type="text" name="login" placeholder="Informe seu login" class="form-input">
            </div>

            <div>
                <input type="password" name="senha" placeholder="Informe sua senha" class="form-input">
            </div>

            <div>
                <input type="submit" value="Entrar" class="form-btn">
            </div>

            <div>
                Não é registrado? <a href="cadastro.php">Crie uma conta</a>.
            </div>
        </form>
    </div>
</div>
</body>
</html>