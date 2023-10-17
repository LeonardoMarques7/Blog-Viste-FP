<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog FP | Post</title>
    <link rel="shortcut icon" href="./img/288-logo-etec-fernando-prestes.svg" type="image/svg">
    <!-- Estilização -->
    <link id="style-link" rel="stylesheet" href="./css/style.css">
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<style>
    input[type="checkbox"] {
        appearance: none;
    }

    label, input[type="checkbox"]:hover {
        cursor: pointer;
    }

    #nav-links .img-modo {
        width: 18px;
        margin-top: 2px;
    }

    body {
        display: none;
    }

    a b {
        font-weight: bold;
        font-size: 12px;
        border: 1px solid #e50000;
        padding: 2px;
        border-radius: 2px;
        background-color: #e50000;
        color: #fff;
        transition: 0.4s;
    }

    .link-turne:hover b, .link-turne a:hover{
        color: #fff;
    }

    a:hover b {
        border: 1px solid #a70000;
        background-color: #a70000;
    }

    #foto-user {
        width: 24pt; 
        margin-right: 5px;
    }

    h2 b {
        font-weight: normal;
        color: #000;
    } 
</style>
<body>
    <header id="home">
        <nav id="navbar">
            <div id="navbar-inner">
                <img src="./img/288-logo-etec-fernando-prestes.svg" alt="" id="logo-page" style="filter: invert(100%);">
                <ul id="nav-links">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="./dashbord.php">Administrador</a></li>
                    <li>
                        <label class="switch">
                            <input type="checkbox" id="style-toggle">
                            <img src="./img/modo-escuro.png" id="img" alt="Toggle Image" class="img-modo" data-dark-image="./img/modo-claro.png">
                        </label>
                    </li>
                </ul>
            </div>
        </nav>
        
    </header>
    <?php echo '<link rel="stylesheet" href="./css/style-post.css">' ?>
    <div class="container">
        <main id="posts-container">
            <?php
                include('conexao.php');
                // recuperando a informação da URL
			    // verifica se parâmetro está correto e dento da normalidade 
                if (isset($_GET['codigo']) && is_numeric(base64_decode($_GET['codigo']))) {
                    $codigo = base64_decode($_GET['codigo']);
                } else {
                    header('Location: dashbord.php');
                }


                // criando a linha do  SELECT
                $sqlconsulta =  "select * from post where codigo = $codigo";
                
                // executando instrução SQL
                $resultado = @mysqli_query($conexao, $sqlconsulta);
                if (!$resultado) {
                    die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
                } else {
                    $num = @mysqli_num_rows($resultado);
                    if ($num==0){
                        echo "<strong style='font-size: 18px;'>Código: $codigo </strong> - Não localizado!!<br><br>";
                        echo "<div class='col-md-4'><a href='alteracao.php' class='btn btn-outline-primary w-100'>Voltar</a></div>";
                    exit;
                    }else{
                        $dados=mysqli_fetch_array($resultado);
                    }
                } 

                    $timestamp = strtotime($dados['datePost']);
                    $data_formatada = date('d/m/Y H:i', $timestamp);

                    if (empty($dados['foto'])){
                        $foto = 'Semfoto.png';
                    } else{
                        $foto = $dados['foto'];
                    }

                echo '<article class="post">';
                echo "<img src='posts/$foto' alt='Jão'>";
                echo '<h3 class="title">' . $dados["titulo"] . '</h3>';
                echo '<p class="description">' . $dados["assuntoIntro"] . "</p><p class='description'>" . $dados["assuntoCompleto"] . '</p>';
                echo '<p class="author">' . $dados["autor"] . ' ~ ' . $data_formatada . '</p>';
                echo '</article>';

            ?>
            <section id="related-posts">
                <h2>Posts Relacionados</h2>
                <div class="related-posts-container">
                    <?php

                        // Criar uma nova consulta SQL para buscar outros posts
                        $sqlConsultaRelacionados = "SELECT * FROM post WHERE codigo != $codigo LIMIT 3"; // Limitando a 3 posts relacionados
                        $resultadoRelacionados = @mysqli_query($conexao, $sqlConsultaRelacionados);

                        if ($resultadoRelacionados) {
                            while ($dadosRelacionados = mysqli_fetch_array($resultadoRelacionados)) {
                                $timestampRelacionados = strtotime($dadosRelacionados['datePost']);
                                $dataFormatadaRelacionados = date('d/m/Y', $timestampRelacionados);

                                // Certifique-se de definir a imagem padrão se não houver uma imagem no post
                                $imagemRelacionados = !empty($dadosRelacionados['foto']) ? 'posts/' . $dadosRelacionados['foto'] : 'Semfoto.png';

                                // Exibir os posts relacionados
                                echo '<article class="related-post">';
                                echo "<img src='$imagemRelacionados' alt='Imagem do post relacionado' class='img-post-mais'>";
                                echo '<a href="Viewpost.php?codigo=' . base64_encode($dadosRelacionados["codigo"]) . '"><h3 class="title">' . $dadosRelacionados['titulo'] . '</h3></a>';
                                echo '<p class="description">' . $dadosRelacionados["assuntoIntro"] . '</p>';
                                echo '<p class="date">Postado em: <strong>' . $dataFormatadaRelacionados . '</strong></p>';
                                echo '<a href="Viewpost.php?codigo=' . base64_encode($dadosRelacionados["codigo"]) . '">Leia mais</a>';
                                echo '</article>';
                            }
                        }

                        mysqli_close($conexao);
                    ?>
                </div>
            </section>
        </main>
        <aside id="sidebar">
            <section id="search-bar">
                <figure>
                    <a href="https://websai.cps.sp.gov.br/acesso/Login?ReturnUrl=%2FFormulario%2FLista"><img src="./img/websai.png" alt="WebSai" title="CPS pesquisa do WEBSAI 2023" class="img-websai"></a>
                </figure>
            </section>
            <section id="categories">
                <h4>Links Úteis</h4>
                <nav>
                    <ul>
                        <li><a href="https://www.etecfernandoprestes.com.br/">Etec Fernando Prestes</a></li>
                        <li><a href="https://www.vestibulinhoetec.com.br/home/">Vestibulinho</a></li>
                        <li><a href="https://www.vestibulinhoetec.com.br/unidades-cursos/escola.asp?c=91">Cursos</a></li>
                        <li><a href="./criadores.html">Criadores</a></li>
                    </ul>
                </nav>
            </section>
            <section id="redes">
                <h4>Redes Socias</h4>
                <div id="tags-container-2">
                    <a href="https://www.instagram.com/etecfernandoprestes/" title="INSTAGRAM"><i class="fab fa-instagram"></i></a>   
                    <a href="https://www.facebook.com/etecfernando" title="FACEBOOK"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.youtube.com/@EtecFernandoPrestesCPS" title="YOUTUBE"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </section>
        </aside>
    </div>
    
    <script src="./js/script.js"></script>
    <script src="./js/awsome/all.min.js"></script>
    <!-- Finalizando Seção de Projeto de Blog Semântico com HTML5 e CSS3 (23.08.2023) => {19:05}; -->
</body>
</html>