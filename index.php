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
    
    <title>Document</title>
</head>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<body style="background-color: #c4bcad;">

    <?php
        include_once './components/menu.php';
    ?>
    
    <?php
        include_once './components/carrousel.php';
        include_once './components/carrousel_produtos.php'
    ?>
    

    <section>
        <div class="container-fluid d-flex justify-content-center ">
            <h1 class="m-1 mt-3 mb-3">Produtos de Qualidade</h1>
        </div>
        <?php
            include_once './components/video.php'
        ?>


    </section>

    <section style="background-image: url('./assets/SVG/fundo-01.png');">
        <?php
            include_once './components/Accordion.php';
        ?>
    </section>

    <?php
        include_once './components/footer.php';
    ?>

</body>
</html>