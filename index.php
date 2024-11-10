<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/carrosel.css">
    <link rel="stylesheet" href="./css/display.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/carrousel_produtos.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Document</title>
</head>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<body data-bs-theme="dark" class="bg-black">
    <?php
        include_once './components/menu.php';
        include_once './components/carrousel.php';
        include_once './components/carrousel_produtos.php'
    ?>

    <div class="container d-flex justify-content-center mt-3 mb-3 w-100">
        <button type="button" class="btn btn-primary">Ver mais produtos</button>
    </div>

    <div class=" bg-dark-subtle">
        <div class="container d-flex justify-content-center row m-auto text-center pt-3 pb-3">
            <h1>Olá Mundo!</h1>
            <p>Decrisão de alguma coisa que eu não sei</p>

            <div class="d-flex justify-content-evenly column-gap-lg-5">
                <button type="button" class="btn btn-danger w-25">Button 1</button>
                <button type="button" class="btn btn-primary w-75">Button 2</button>
            </div>
        </div>
    </div>

    <?php
        include_once './components/footer.php'
    ?>

</body>
</html>