<?Php
    session_start();//iniciando as variaveis globais
    echo"<style> body{ position: relative; text-align:left; color: white; } </style>";
?>
<DOCTYPE HTML!>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <title>Ajuda</title>
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="../ITECH/cssIndex/menu.css">
        <link rel="stylesheet" href="../ITECH/cssIndex/ajuda.css">
        <link rel="stylesheet" href="../ITECH/style.css">
        <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon" />
        <script>
            function myFunction(x) {
            x.classList.toggle("change");
            }
        </script>
    </head>
    <body>
        <div class="tudo">
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
                    <ul>
                        <li><a href = "perfil.php" title="Perfil de úsuario"><?php echo $_SESSION['usuarioNome']; ?></a><span class="icon-user"></span> </li>
                        <li><a href = "materias.php" title="Inicio"><span class="icon-lab"></span> Matérias</a></li>
                        <li><a href = "DESEMPENHO.php" title="Desempenho"><span class="icon-chart"></span> Desempenho</a></li>
                        <li><a href = "gabaritos.php" title="Gabaritos"><span class="icon-checkmark"></span> Gabaritos</a></li>
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
        <div class="topicos">
            <h2>• Como baixar a versão desktop?</h2>
            <p>Para se fazer o Download do programa Gennius será necessário acessar o menu lateral e clicar no ítem Download.
Ao acessar a página Download, procure pelo botão Fazer Download e clique. O programa começará a ser baixado e o procedimento poderá ser acompanhado na barra de download, localizada na parte inferior do site ou acima da barra de tarefas. 
Download feito, deve-se abrir, aceitar os termos de uso e instalar o programa Gennius. 
</p>
        <hr/>
        </div>
        <footer>
            <p>Todos os direitos reservados © 2018</p>
        </footer>
        </div>
    </body>
</html>