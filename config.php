<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel0517 - Portfólio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="glassmorphism-nav">
            <a href="#" class="logo">Daniel0517</a>
            <ul>
                <li><a href="#about">Sobre mim</a></li>
                <li><a href="#skills">Habilidades</a></li>
                <li><a href="#projects">Projetos</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
    </header>
    <section id="about">
        <h1>Sobre mim</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
    </section>
    <section id="skills">
        <h1>Habilidades</h1>
        <ul>
            <li>Desenvolvimento web</li>
            <li>Design gráfico</li>
            <li>Programação</li>
        </ul>
    </section>
    <section id="projects">
        <h1>Projetos</h1>
        <div class="project-grid">
            <div class="project">
                <img src="https://images.unsplash.com/photo-1588231593425-fd6f8a3c4e2b?w=200&q=80" alt="Projeto 1">
                <h2>Projeto 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="project">
                <img src="https://images.unsplash.com/photo-1588231593425-fd6f8a3c4e2b?w=200&q=80" alt="Projeto 2">
                <h2>Projeto 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>
    <section id="contact">
        <h1>Contato</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
        <ul>
            <li><a href="#" class="btn">Entre em contato comigo</a></li>
        </ul>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

<?php
// config.php
$nomeEmpresa = "Daniel0517";
$whatsapp = "+55 11 98765-4321";
$email = "daniel0517@gmail.com";
$precos = [
    "projeto" => 100,
    "servico" => 200
];
const URL_BASE = "https://example.com";

echo "<script>console.log('Código PHP executado com sucesso!');</script>";
?>