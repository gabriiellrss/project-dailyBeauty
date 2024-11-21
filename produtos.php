<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/carrosel.css">
    <link rel="stylesheet" href="./css/anima.css">
    <link rel="stylesheet" href="./css/App.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./assets/font/font.css">
    <link rel="stylesheet" href="./css/carrouselProdutos.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Card Horizontal</title>
    <style>

        .card {
            display: flex;
            flex-direction: row;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            max-width: 800px;
        }
        .card-left {
            width: 40%;
            padding: 15px;
            text-align: center;
        }
        .main-image {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .thumbnails {
            display: flex;
            gap: 5px;
            justify-content: center;
        }
        .thumbnail img {
            width: 50px;
            height: 50px;
            border: 1px solid #ddd;
            border-radius: 5px;
            cursor: pointer;
            object-fit: cover;
        }
        .thumbnail img:hover {
            border-color: #0056b3;
        }
        .card-right {
            width: 60%;
            padding: 20px;
        }
        h1 {
            font-size: 22px;
            color: #0056b3;
            margin-bottom: 10px;
        }
        .subheading {
            font-size: 18px;
            color: #555;
            margin-bottom: 15px;
        }
        p {
            line-height: 1.6;
            color: #333;
        }
        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0056b3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .button:hover {
            background-color: #003d80;
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<body>
    <?php
        include_once 'components/menu.php'
    ?>
    
    <div class="card">
        <div class="card-left">
            <img src="produto1.png" alt="Imagem Principal" class="main-image" id="mainImage">
            <div class="thumbnails">
                <div class="thumbnail">
                    <img src="produto1.png" alt="Thumbnail 1" onclick="changeImage('produto1.png')">
                </div>
                <div class="thumbnail">
                    <img src="produto2.png" alt="Thumbnail 2" onclick="changeImage('produto2.png')">
                </div>
                <div class="thumbnail">
                    <img src="produto3.png" alt="Thumbnail 3" onclick="changeImage('produto3.png')">
                </div>
            </div>
        </div>
        <div class="card-right">
            <h1>Loção Facial Hidratante FPS50</h1>
            <p class="subheading">Para Pele Normal a Seca</p>
            <p>
                A CeraVe Loção Facial Hidratante FPS50 é um hidratante facial diário leve,
                com proteção UVB/UVA FPS 50, ácido hialurônico e 3 ceramidas essenciais,
                que ajudam a proteger a barreira natural da pele e deixam a pele com uma
                sensação suave e hidratada por até 24 horas.
            </p>
            <a href="#" class="button">Compre Online</a>
        </div>
    </div>
    <script>
        function changeImage(imageSrc) {
            document.getElementById('mainImage').src = imageSrc;
        }
    </script>
</body>
</html>
