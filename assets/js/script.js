<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel0517 - Portfólio</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="dark-mode" style="overflow-x: hidden;">
    <header id="header">
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Sobre mim</a></li>
                <li><a href="#projects">Projetos</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main id="home">
        <section class="hero">
            <h1>Daniel0517 - Desenvolvedor Web</h1>
            <p>Desenvolvedor web com experiência em HTML, CSS e JavaScript.</p>
            <button class="btn" onclick="mostrarConteudo()">Conheça mais</button>
        </section>
    </main>

    <script src="assets/js/script.js"></script>
    <style>
        @media (max-width: 768px) {
            body {
                padding: 0;
                margin: 0;
            }
        }

        .btn {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #3e8e41;
        }
    </style>
</body>
</html>

<script>
    function mostrarConteudo() {
        const conteudo = document.getElementById('conteudo');
        if (conteudo) {
            conteudo.style.display = 'block';
        } else {
            console.log('Erro ao carregar conteúdo!');
        }
    }

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            const header = document.getElementById('header');
            header.classList.add('scrolled');
        } else {
            const header = document.getElementById('header');
            header.classList.remove('scrolled');
        }
    });

    const botao = document.querySelector('.btn');

    botao.addEventListener('click', () => {
        const conteudo = document.getElementById('conteudo');
        if (conteudo) {
            conteudo.style.display = 'none';
        } else {
            console.log('Erro ao carregar conteúdo!');
        }
    });
</script>