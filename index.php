<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Jão</title>
    <link rel="shortcut icon" href="./img/logo-page.png" type="image/png">
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
    <?php
        $numero_visitas_atual = file_get_contents('./sec/arq.in');
        $numero_visitas_atual = $numero_visitas_atual + 1;
        file_put_contents('./sec/arq.in', $numero_visitas_atual);
    ?>
    <header id="home">
        <nav id="navbar">
            <div id="navbar-inner">
                <img src="./img/logo-page-2.png" alt="" id="logo-page">
                <ul id="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="https://www.letras.mus.br/jao/discografia/">Álbuns</a></li>
                    <li><a href="https://www.sitedojao.com/" class="link-turne">Ingressos <b>Superturnê!</b></a></li>
                    <li>
                        <label class="switch">
                            <input type="checkbox" id="style-toggle">
                            <img src="./img/modo-escuro.png" id="img" alt="Toggle Image" class="img-modo" data-dark-image="./img/modo-claro.png">
                        </label>
                    </li>
                </ul>
            </div>
        </nav>
        <button class="fixed-spotify">
            <a href="https://open.spotify.com/intl-pt/artist/59FrDXDVJz0EKqYg39dnT2?si=Kmqw66yPRjOL6roBveQGeA">
                <div class="row"><img src="./img/spotify-fixed.png" alt="" class="img-spotify"><strong>Ouça agora!</strong></div>
            </a>
        </button>
    </header>
    <div class="container">
        <main id="posts-container">
            <article class="post">
                <img src="./img/f1.jpg" alt="Jão">
                <h3 class="title"><a href="https://www.correiobraziliense.com.br/app/noticia/diversao-e-arte/2019/11/04/interna_diversao_arte,803562/o-cantor-e-compositor-jao-lanca-segundo-album-da-carreira.shtml">Jão lança segundo álbum da carreira</a></h3>
                <p class="description">
                    O corpo de <strong>Jão</strong> caindo do céu após uma flechada foi a imagem escolhida pelo
                    cantor para ilustrar a capa do novo álbum,
                    <strong>Anti-herói</strong>. A escolha simboliza uma imersão nos sentimentos;mais bonitos e mais difíceis;
                    de um relacionamento, em síntese: é sobre o <strong>amor</strong>. O disco chegou de surpresa,
                    após poucos meses do fim da turnê Lobos (2018), trabalho que marca o primeiro álbum do cantor.
                </p>
                <p class="author">Manoela Moraes ~ 08/08/2023 </p>
                <a href="https://www.correiobraziliense.com.br/app/noticia/diversao-e-arte/2019/11/04/interna_diversao_arte,803562/o-cantor-e-compositor-jao-lanca-segundo-album-da-carreira.shtml">Ler mais</a>
            </article>
            <article class="post">
                <img src="./img/f2.jpg" alt="Jão">
                <h3 class="title"><a href="https://www.terra.com.br/diversao/musica/jao-confira-a-capa-e-tracklist-do-album-super-que-chega-nesta-semana,72cfe79809c2271dfdc60a4de18852aa94zx2354.html?utm_source=clipboard">Jão: confira a capa e tracklist do álbum 'Super' que chega nesta semana</a></h3>
                <p class="description">
                    <strong>Super</strong> marca o fim da era dos quatro elementos e completa o ciclo antes contado pelos álbuns anteriores do artista, <strong>Pirata</strong> (água), <strong>Anti-herói</strong> (ar) e <strong>Lobos</strong> (terra). Uma audição foi realizada neste domingo (13), no <strong>Ginásio do Ibirapuera</strong>, em <strong>São Paulo</strong>, onde <strong>12 mil fãs</strong> escutaram o disco pela primeira vez.
                </p>
                <p class="author">Leonardo Marques ~ 16/08/2023</p>
                <a href="https://www.terra.com.br/diversao/musica/jao-confira-a-capa-e-tracklist-do-album-super-que-chega-nesta-semana,72cfe79809c2271dfdc60a4de18852aa94zx2354.html?utm_source=clipboard">Ler mais</a>
            </article>
            <article class="post">
                <img src="./img/f3.jpg" alt="Jão">
                <h3 class="title"><a href="https://inmagazine.ig.com.br/categoria/musica/Jao-conquista-platina-dupla-com-o-album-Pirata">Jão conquista platina dupla com o álbum "Pirata"</a></h3>
                <p class="description">
                    Avisa que é <strong>ele</strong>! Um dos artistas mais em alta no pop brasileiro atualmente,
                    <strong>Jão atingiu mais um grande feito</strong>. Segundo a Pró-Música Brasil,
                    seu álbum “Pirata” alcançou a marca de <strong>160 mil cópias vendidas</strong>,
                    recebendo certificado de <strong>platina dupla</strong>. O projeto, lançado no final de 2021,
                    rendeu grandes hits para o cantor, como “Coringa” e “Idiota”. É o <strong>terceiro disco</strong> do paulista,
                    sucedendo os também bem-sucedidos <strong>“Lobos”</strong> e <strong>“Anti-Herói”</strong>. 
                </p>
                <p class="author">Daniel Marques ~ 10/04/2023</p>
                <a href="https://inmagazine.ig.com.br/categoria/musica/Jao-conquista-platina-dupla-com-o-album-Pirata">Ler mais</a>
            </article>
        </main>
        <aside id="sidebar">
            <section id="contador">
                <img src="./img/img-user.png" alt="" id="foto-user">
                <h2><b>: </b> <?php echo file_get_contents('./sec/arq.in') ?></h2>
            </section>
            <section id="search-bar">
                <h4>Busca</h4>
                <form>
                    <input type="text" placeholder="Pesquise no blog">
                    <input type="submit" value="Buscar">
                </form>
            </section>
            <section id="categories">
                <h4>Categorias</h4>
                <nav>
                    <ul>
                        <li><a href="https://pt.wikipedia.org/wiki/J%C3%A3o">Blibiografia</a></li>
                        <li><a href="https://www.sitedojao.com/">Eventos e Shows</a></li>
                        <li><a href="https://www.instagram.com/jao/">Redes Sociais</a></li>
                        <li><a href="https://www.letras.mus.br/jao/discografia/">Álbums</a></li>
                    </ul>
                </nav>
            </section>
            <section id="tags">
                <h4>Hashtags</h4>
                <div id="tags-container">
                    <a href="#">#POP</a>
                    <a href="#">#Jão</a>
                    <a href="#">#Música</a>
                    <a href="#">#São Paulo</a>
                    <a href="#">#Artista</a>
                    <a href="#">#Top 10 Brasil</a>
                    <a href="#">#This is Jão</a>
                </div>
            </section>
        </aside>
    </div>
    <footer id="footer">
        <img src="./img/Jão_signature.png" alt="" id="signature">
    </footer>
    
    <script src="./js/script.js"></script>
    <!-- Finalizando Seção de Projeto de Blog Semântico com HTML5 e CSS3 (23.08.2023) => {19:05}; -->
</body>
</html>