<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel0517</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="glassmorphism">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main id="home">
        <section class="hero">
            <h1>Daniel0517 - Desenvolvedor Front-end</h1>
            <p>Desenvolvedor front-end com experiência em HTML, CSS e JavaScript.</p>
            <button class="btn">Conheça mais</button>
        </section>
    </main>
    <footer id="rodapé">
        <div class="whatsapp-flutuante">
            <i class="fa-brands fa-whatsapp"></i>
            (11) 98765-4321
        </div>
        <script src="script.js"></script>
    </footer>
</body>
</html>

/* 
    style.css
*/

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Montserrat', sans-serif;
    background-color: #2f4f7f;
    color: #fff;
    /* Adicionado meta viewport para responsividade */
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
}

.glassmorphism {
    background-image: linear-gradient(180deg, #2f4f7f, #343a40);
    border-radius: 10px;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.glassmorphism ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.glassmorphism li {
    margin-right: 20px;
}

.glassmorphism a {
    text-decoration: none;
    color: #fff;
}

.hero {
    background-image: linear-gradient(180deg, #2f4f7f, #343a40);
    border-radius: 10px;
    padding: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.hero h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 40px;
}

.btn {
    background-color: #343a40;
    border-radius: 10px;
    padding: 10px 20px;
    color: #fff;
    cursor: pointer;
}

.btn:hover {
    background-color: #2f4f7f;
}

#rodapé {
    background-image: linear-gradient(180deg, #2f4f7f, #343a40);
    border-radius: 10px;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
}

.whatsapp-flutuante {
    position: relative;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #343a40;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.whatsapp-flutuante i {
    font-size: 24px;
    margin-bottom: 5px;
}

.script-js {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 50px;
    background-color: #343a40;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.script-js i {
    font-size: 24px;
}

/* Media queries para responsividade */
@media (max-width: 768px) {
    body {
        padding: 0 20px;
    }
    
    .glassmorphism {
        padding: 10px;
    }
    
    #rodapé {
        padding: 10px;
    }
}

@media (max-width: 480px) {
    body {
        font-size: 16px;
    }
    
    .hero h1 {
        font-size: 24px;
    }
    
    .btn {
        padding: 5px 10px;
    }
}