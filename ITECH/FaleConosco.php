<?Php
    session_start();//iniciando as variaveis globais
?>

<!Doctype Html>
<html>
    <head>
        <title>Fale Conosco - Gennius</title>
        <meta charset="UTF-8"/>
        <meta name="description" content="">
        <link rel="stylesheet" href="../ITECH/cssIndex/faleconosco.css">
        <link rel="stylesheet" href="../ITECH/cssIndex/menu.css">
        <link rel="stylesheet" href="../ITECH/style.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
    </head>
    <body> 
        <div class="tudo">
            <script>
        function myFunction(x) {
        x.classList.toggle("change");
        }
        </script>
            <div class="content-all">
                <header class="cabecalho1">
                    <br>
                    <div class="container" onclick="document.getElementById('check').checked = !document.getElementById('check').checked; myFunction(this)">
                        <div class="bar1 icon-content"></div>
                        <div class="bar2 icon-content"></div>
                        <div class="bar3 icon-content"></div>
                    </div>
                    <input type="checkbox" id="check">
                    <nav class="menu">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <ul>
                            <li><a href = "perfil.php" title="Perfil de úsuario"><?php echo $_SESSION['usuarioNome']; ?></a><span class="icon-user"></span> </li>
                            <li><a href = "materias.php" title="Inicio"><span class="icon-lab"></span> Matérias</a></li>
                            <li><a href = "DESEMPENHO.php" title="Desempenho"><span class="icon-chart"></span> Desempenho</a></li>
                            <li><a href = "enem.php" title="Enem"><span class="icon-open-book"></span> Enem</a></li>
                            <li><a href = "redacao.php" title="Redação"><span class="icon-lightbulb_outline"></span> Dicas para o ENEM</a></li>
                            <li><a href = "pdf.php" title="Pdf's para estudo"><span class="icon-file-pdf-o"></span> PDF para estudos</a></li>
                            <li><a href = "download.php" title="Downloads"><span class="icon-download"></span>  Download</a></li>
                            <li><a href = "FaleConosco.php" title="Fale Conosco"><span class="icon-bubbles4"></span> Fale Conosco</a></li>
                            <li><a href = "AJUDA.php" title="Ajuda"><span class="icon-checkmark"></span> Ajuda</a></li>
                            <li><a href = "login.php" title="Sair"><span class="icon-x"></span> Sair</a></li>
                        </ul>
                    </nav>
                </header>
            <div class="formulario">
                <br>
                <br>
                <br>
            <h1 class="titulo">FALE CONOSCO</h1>
                    <form name="formPedido" method="post" action="processa.php" >
                        <input type="text" name="txtEmail" placeholder="E-mail">
                        <br><br>
                        <input type="text" name="txtNome" placeholder="Nome e Sobrenome">
                        <br><br>
                        <input type="text" name="txtPedido" placeholder="Mensagem">
                        <br><br>
                        <input type="submit" value="Enviar" name="botaoEnviar">
                        <br>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
        </div>
        </div>
    </body>	
</html>