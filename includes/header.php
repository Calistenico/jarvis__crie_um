<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel0517</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png">
</head>
<body>
    <header class="glassmorphism">
        <nav>
            <ul>
                <li><a href="#about">Sobre mim</a></li>
                <li><a href="#skills">Habilidades</a></li>
                <li><a href="#projects">Projetos</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="about">
            <h1>Sobre mim</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
        </section>
        <section id="skills">
            <h1>Habilidades</h1>
            <ul>
                <li>HTML/CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MySQL</li>
            </ul>
        </section>
        <section id="projects">
            <h1>Projetos</h1>
            <div class="grid">
                <div class="project">
                    <img src="image1.jpg" alt="Projeto 1">
                    <h2>Projeto 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="project">
                    <img src="image2.jpg" alt="Projeto 2">
                    <h2>Projeto 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <h1>Contato</h1>
            <form>
                <input type="text" placeholder="Nome">
                <input type="email" placeholder="E-mail">
                <textarea placeholder="Mensagem"></textarea>
                <button>Enviar</button>
            </form>
        </section>
    </main>
    <footer class="glassmorphism">
        <p>&copy; 2023 Daniel0517. Todos os direitos reservados.</p>
        <a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a>
    </footer>
</body>
</html>

/* style.css */
:root {
    --primary-color: #333;
    --secondary-color: #666;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Montserrat', sans-serif;
    background-color: var(--primary-color);
    color: #fff;
}

.glassmorphism {
    background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.glassmorphism h1 {
    color: #fff;
}

.navbar {
    background-color: var(--primary-color);
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.navbar li {
    margin-right: 20px;
}

.navbar a {
    color: #fff;
    text-decoration: none;
}

.grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

.project {
    background-color: var(--secondary-color);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.project img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
}

.project h2 {
    color: #fff;
    margin-top: 20px;
}

.project p {
    color: #fff;
    margin-bottom: 20px;
}

footer {
    background-color: var(--primary-color);
    padding: 1rem;
    text-align: center;
    color: #fff;
}

footer a {
    color: #fff;
    text-decoration: none;
}

/* script.js */
window.addEventListener('load', () => {
    const typed = new Typed('.typed-text', {
        strings: ['Sobre mim', 'Habilidades', 'Projetos'],
        typeSpeed: 50,
        backSpeed: 20,
        loop: true
    });
});