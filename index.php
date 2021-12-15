<?php include_once('mail.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Hendy Almeida, desenvolvedora web e professora de programação.">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>front-hendy</title>
</head>

<body>
    <header>
        <div class="container">
            <a href="#">
                <img src="img/front-hendy-logo.webp" class="logo" alt="Logo Front-Hendy">
            </a>
            <button class="menu-toggle" title="abrir menu">&#9776;</button>
            <nav>
                <ul>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#carreira">Carreira</a></li>
                    <!-- <li><a href="#projetos">Projetos</a></li> -->
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="banner">
        <div class="overflow">
            <div class="container">
                <h1>Front-Hendy</h1>
                <h2 id="dev-text"></h2>
            </div>
        </div>
    </section>
    <section id="sobre">
        <div class="container">
            <div class="col">
                <h2>Sobre</h2>
                <p>Desenvolvedora web há 6 anos, trabalhei em empresas e projetos de diferentes necessidades técnicas. Estive em fábrica de software, startup, agência, como autônoma e agora, também ensino a programar; o que tem sido uma experiência enriquecedora pessoalmente e profissionalmente.</p>
            </div>
            <div class="col habilidades">
                <div class="habilidade">
                    <h3>Front-End</h3>
                    <ul>
                        <li>HTML e CSS</li>
                        <li>Javascript</li>
                        <li>React JS</li>
                        <li>Wordpress</li>
                        <li>Email Marketing</li>
                    </ul>
                </div>
                <div class="habilidade">
                    <h3>Back-end</h3>
                    <ul>
                        <li>PHP</li>
                        <li>Laravel Framework</li>
                        <li>Wordpress</li>
                        <li>GIT</li>
                        <li>Banco de Dados</li>
                    </ul>
                </div>
                <div class="habilidade">
                    <h3>Soft-Skills</h3>
                    <ul>
                        <li>Trabalho em equipe</li>
                        <li>Atitude positiva</li>
                        <li>Liderança</li>
                        <li>Pensamento crítico</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="interlude"></div>
    <section id="carreira">
        <h2>orgulho de colaborar com empresas incríveis</h2>
        <ul>
            <li><a target="_blank" href="https://www.linkedin.com/school/digital-house-brasil/"><img src="img/logo-dh.webp" alt="Digital House"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/sala-criativa/"><img src="img/logo-sala.webp" alt="Sala Criativa"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/badaro-ux/"><img src="img/logo-badaro.webp" alt="Agência Badaró"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/arizona-global/"><img src="img/logo-az.webp" alt="Agência Arizona"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/getsourcecode/"><img src="img/logo-get.webp" alt="Get Source"></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/it-lean---brasil/"><img src="img/logo-itlean.webp" alt="IT Lean"></a></li>
        </ul>
    </section>
    <!-- <section id="projetos">
        <div class="container">
            <h2>Projetos</h2>
            <div class="lista-projetos">
                <article>
                    <h1>Nome Projeto</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores hic aliquam doloribus.</p>
                </article>
                <article>
                    <h1>Nome Projeto</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores hic aliquam doloribus.</p>
                </article>
                <article>
                    <h1>Nome Projeto</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores hic aliquam doloribus.</p>
                </article>
            </div>
        </div>
    </section> -->
    <section id="contato">
        <div class="container">
            <form action="#" method="post" title="formulário de contato">
                <h2>Bora tomar um café?</h2>
                <label for="nome">nome</label>
                <input type="text" name="nome" id="nome" required>

                <label for="email">email</label>
                <input type="email" name="email" id="email" required>

                <label for="mensagem">mensagem</label>
                <textarea name="mensagem" id="mensagem"></textarea>

                <button name="contato" role="button" title="enviar formulário">Enviar</button>
                <p>ou mande um email para <br> <a href="mailto:oi@fronthendy.com.br">oi@fronthendy.com.br</a></p>
            </form>
            <script>
    window.dna = {
        r:'25854de14e5f5',
        c:'hospedagem-wordpress',
        t:'336x280'
    };
</script>
<script type="text/javascript" src="//www.kinghost.com.br/dna.js"></script>

        </div>
    </section>
    <footer>
        <p>Copyright | front-hendy</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>