<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" type="text/css" href="css/index.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/home.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="css/produto.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="css/quem_somos.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/contato.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/localizacao.css" media="screen" /> 
 
    <title>Doces de Casa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="index.php">
        <img src="images/Logo.png" alt="Logo" class="logo">
        </a>        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="index.php?page=quem_somos">Quem somos</a>
            </li>
            <li>
                <a href="index.php?page=contato">Contato</a>
            </li>
            <li>
               <a href="index.php?page=localizacao"> Localização </a>
            </li>
        </ul>
    </nav>
    <section class="content">
        <div class="container">
            <?php
                $page = "home";

                if(isset($_GET['page'])){

                    if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                    }
                }

                include("pages/$page.php");
            ?>
        </div>        
    </section>

    <footer >
        <p>
        Aluno: Leandro Fredericce Ferreira <br/>
        RA: 20039708-5
        </p>
    </footer>
    
</body>
</html>