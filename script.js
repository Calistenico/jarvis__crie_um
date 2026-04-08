<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel0517</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css"></script>
    <script src="https://unpkg.com/typed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
</head>
<body>
    <header id="header">
        <nav class="navbar">
            <div class="logo">
                <a href="#hero"><span>Daniel0517</span></a>
            </div>
            <ul class="nav-list">
                <li><a href="#skills">Habilidades</a></li>
                <li><a href="#projects">Projetos</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
    </header>
    <section id="hero" class="hero">
        <div class="container">
            <h1 class="title">Bem-vindo ao meu portfólio!</h1>
            <p class="subtitle">Profissional com experiência em desenvolvimento web</p>
            <button class="btn">Conheça mais</button>
        </div>
    </section>
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="title">Habilidades</h2>
            <ul class="skill-list">
                <li>Desenvolvimento web</li>
                <li>Programação em PHP</li>
                <li>HTML/CSS</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </section>
    <section id="projects" class="projects">
        <div class="container">
            <h2 class="title">Projetos</h2>
            <div class="project-grid">
                <div class="project-item">
                    <img src="https://images.unsplash.com/photo-1583838700-7e3c4f1d5b8a?w=800&q=80" alt="Projeto 1">
                    <h3>Projeto 1</h3>
                    <p>Descrição do projeto 1</p>
                </div>
                <div class="project-item">
                    <img src="https://images.unsplash.com/photo-1583838700-7e3c4f1d5b8a?w=800&q=80" alt="Projeto 2">
                    <h3>Projeto 2</h3>
                    <p>Descrição do projeto 2</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="title">Contato</h2>
            <form action="#" method="post">
                <input type="text" placeholder="Nome" required>
                <input type="email" placeholder="E-mail" required>
                <textarea placeholder="Mensagem"></textarea>
                <button>Enviar</button>
            </form>
        </div>
    </section>

    <script src="script.js"></script>
    <script>
        new Typed('.title', {
            strings: ["Bem-vindo ao meu portfólio!", "Profissional com experiência em desenvolvimento web"],
            typeSpeed: 60,
            backSpeed: 30,
            loop: true
        });

        const form = document.querySelector('form');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            // código para enviar o formulário via AJAX ou outro método de envio seguro
        });

        new WOW().init();
    </script>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #333;
        color: #fff;
        /* Adicionado viewport meta para responsividade */
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    }

    .hero {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: linear-gradient(to bottom, #444, #555);
    }

    .title {
        font-size: 48px;
        margin-bottom: 20px;
    }

    .subtitle {
        font-size: 24px;
        color: #ccc;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #555;
        color: #fff;
        cursor: pointer;
    }

    .skills {
        padding: 50px 0;
    }

    .skill-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .project-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        padding: 50px 0;
    }

    .project-item {
        background-color: #555;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
    }

    .project-item img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .contact {
        padding: 50px 0;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    button {
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #555;
        color: #fff;
        cursor: pointer;
    }
</style>