<?Php
    session_start();//iniciando as variaveis globais
?>
<!DOCTYPE HTML>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="descriprion" content="">
        <title>Enem</title>
        <link rel="stylesheet" href="../ITECH/cssIndex/enem.css">
        <link rel="stylesheet" href="../ITECH/cssIndex/menu.css">
        <link rel="stylesheet" href="../ITECH/style.css">
        <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <script>
        function myFunction(x) {
        x.classList.toggle("change");
        }
        </script>
            <div class="content-all">
                <header class="cabecalho1">
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
                        <center>
                            <?php
                                echo $_SESSION['usuarioNome'];//pegando o nome do usuario
                                echo"<style>
                                    body
                                    {
                                        position: relative;
                                        text-align:left;
                                        color: white;
                                    }
                                </style>";
                            ?>
                        </center>
                        <ul>
<li><a href = "perfil.html" title="Perfil de úsuario">Usúario</a><span class="icon-user"></span> </li>
                    <li><a href = "materias.html" title="Inicio"><span class="icon-lab"></span> Matérias</a></li>
					<li><a href = "DESEMPENHO.html" title="Desempenho"><span class="icon-chart"></span> Desempenho</a></li>
                    <li><a href = "gabaritos.html" title="Gabaritos"><span class="icon-checkmark"></span> Gabaritos</a></li>
                    <li><a href = "enem.php" title="Enem"><span class="icon-open-book"></span> Enem</a></li>
                    <li><a href = "redacao.html" title="Redação"><span class="icon-lightbulb_outline"></span> Dicas para o ENEM</a></li>
                    <li><a href = "pdf.html" title="Pdf's para estudo"><span class="icon-file-pdf-o"></span> PDF para estudos</a></li>
					<li><a href = "download.html" title="Downloads"><span class="icon-download"></span>  Download</a></li>
                    <li><a href = "FaleConosco.html" title="Fale Conosco"><span class="icon-bubbles4"></span> Fale Conosco</a></li>
                    <li><a href = "AJUDA.html" title="Ajuda"><span class="icon-checkmark"></span> Ajuda</a></li>
                    <li><a href = "login.html" title="Sair"><span class="icon-x"></span> Sair</a></li>
                        </ul>
                    </nav>
                </header>
                <footer>
                    <p>Todos os direitos reservados © 2018</p>
                </footer>
            </div>
    </body>
</html>