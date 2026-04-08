<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="hero">
            <h1 id="nome">Your Name</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla auctor, vestibulum magna sed, convallis ex.</p>
            <button onclick="window.location.href='index.html'">Ir para o início</button>
        </section>
        <section class="skills">
            <h2>Minhas habilidades</h2>
            <ul>
                <li>HTML/CSS</li>
                <li>Javascript</li>
                <li>PHP</li>
                <li>SQL</li>
            </ul>
        </section>
        <section class="projetos">
            <h2>Projetos</h2>
            <div class="grid">
                <!-- Projetos aqui -->
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>

<?php
require_once 'config.php';

// Configurações
$nome = $_POST['nome'];
$email = $_POST['email'];

// Conexão com banco de dados (PDO)
$conn = new PDO('mysql:host=' . $host . ';dbname=' . $db, $user, $pass);

// SQL injection protegido com PDO
$stmt = $conn->prepare("INSERT INTO contatos (nome, email) VALUES (:nome, :email)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->execute();

$conn = null;
?>

<script>
    // Typed.js
    const typed = new Typed.new('.typed', {
        strings: ['Your Name', 'Lorem ipsum'],
        backSpeed: 100,
        loop: true,
    });

    // Parallax
    const parallax = document.querySelector('.parallax');
    const speed = 0.1;
    const scrollPosition = window.scrollY;

    function update() {
        parallax.style.transform = `translate3d(0, -${scrollPosition * speed}px, 0)`;
    }

    window.addEventListener('scroll', update);

    // Skills animadas
    const skills = document.querySelectorAll('.skill');
    skills.forEach(skill => {
        skill.classList.add('animate');
    });

    // Projetos grid glassmorphism
    const projetos = document.querySelector('.projetos .grid');
    projetos.innerHTML = `
        <div class="projeto">
            <h3>Projeto 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="projeto">
            <h3>Projeto 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    `;

    // Contato
    const contato = document.querySelector('.contato');
    contato.innerHTML = `
        <form>
            <input type="text" placeholder="Seu nome">
            <input type="email" placeholder="Sua email">
            <button>Enviar</button>
        </form>
    `;
</script>

<style>
    /* Glassmorphism */
    .glassmorphism {
        background: linear-gradient(180deg, #f7f7f7 0%, #e5e5e5 100%);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Animações */
    .animate {
        animation: animacao 1s;
    }

    @keyframes animacao {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.5);
        }
    }

    /* Parallax */
    .parallax {
        position: relative;
        height: 500px;
        background-image: linear-gradient(to bottom, #f7f7f7, #e5e5e5);
    }

    /* Projetos grid */
    .projeto {
        margin: 20px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
</style>