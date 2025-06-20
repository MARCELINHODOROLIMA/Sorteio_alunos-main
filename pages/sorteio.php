
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styleSorteio.css" />
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon" />
    <title>Sorteador de Alunos</title>
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="perfil">
                <img src="../img/Profile.png" alt="Foto de perfil">
                <div class="user-info">
                    <strong>Samantha</strong>
                    <p>samantha@email.com</p>
                </div>
            </div>
            <nav class="menu">
                <a href="perfil.php">Perfil</a>
                <a href="formulario.php">Formulário</a>
                <a href="ListaSorteio.php">Lista de Sorteados</a>
                <a href="ListaEspera.php">Lista de Espera</a>
                <a href="sorteio.php" class="active">Sorteio</a>
            </nav>
        </aside>
        <main class="conteudo">
            <div class="header">
                <h1><strong>SORTEADOR</strong><br>DE ALUNOS</h1>
                <img src="../img/logosesc.webp" alt="Logo Sesc" class="logo-sesc">
            </div>
            <p class="descricao">
                Defina o intervalo e a quantidade de números, <br />
                escolha um número que você deseje.
            </p>
            <div class="sorteio-box">
                <h2 class="sortear">SORTEAR NÚMERO DO ALUNO:</h2>
                <div class="inputs">
                    <div>
                        <label>NÚMEROS</label>
                        <input type="number" value="1" min="1">
                    </div>
                    <div>
                        <label>DE</label>
                        <input type="number" value="30" min="1">
                    </div>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="repetir">
                    <label for="repetir">Não repetir número</label>
                </div>
                <a href="ListaSorteio.php" class="btn-sortear">Sortear</a>
                <div class="form-link"></div>
            </div>
        </main>
    </div>
</body>

</html>