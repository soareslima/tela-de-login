<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meu Sistema | Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="container">
    <div class="form-box">
        <form action="processa.php" method="post">
            <div>
                <h1>Cadastro</h1>
            </div>

            <div>
                <input type="text" name="login" placeholder="Informe seu login" class=form-input>
            </div>

            <div>
                <input type="password" name="senha" placeholder="Informe sua senha" class=form-input>
            </div>

            <div>
                <input type="email" name="email" placeholder="Seu e-mail" class=form-input>
            </div>

            <div>
                <input type="submit" value="Cadastrar" class="form-btn">
            </div>

            <div>
                Já tem uma conta? <a href="index.php">Efetue login</a>.
            </div>
        </form>
    </div>
</div>
</body>
</html>