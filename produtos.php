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
            padding: 5px;
            width: 90px;
            height: 90px;
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

<style>
    h1{
        font-size: 40px;
        color: #433833;
    }
    .btn-primary-custom { 
        background-color: #433833;
        color: white;
    }

    .btn-primary-custom:hover {
        background-color: #63544d;
        color: white;
    }

    .btn-primary-custom:active {
        background-color: #52453f !important;
        color: white !important;
    }
</style>

<body style="background-color: #c4bcad;"    >
    <?php
        include_once './components/menu2.php'
    ?>

    <?php
        $content = 'Encontrar os produtos certos para a sua rotina de skincare deve se resumir a alguns passos simples. Além da limpeza e proteção solar, um hidratante diário é essencial para todos os tipos de pele. A Loção Facial Hidratante de CeraVe possui textura ultra leve e foi especialmente desenvolvida para peles normais a secas, mas sua textura ultraleve e de rápida absorção é totalmente adaptável a todos os tipos de pele, não deixando-a oleosa. Para uma hidratação facial profunda e restauração da barreira protetora da pele, a fórmula contém 3 ceramidas essenciais e ácido hialurônico. Além de ser enriquecida com niacinamida, que promove ação calmante. O produto possui a tecnologia patenteada de liberação prolongada MVE® que ajuda a repor as ceramidas e proporciona hidratação por até 24 horas. Dessa forma, estudos comprovam +31% de hidratação após o primeiro uso*.
                    * 24 mulheres, entre 18 e 60 anos, diagnosticadas pelo dermatologista com pele seca e com declaração de pele sensível. Uso do CeraVe Loção Facial Hidratante de uma a duas vezes ao dia, em todo o rosto durante 14 dias. Avaliação feita com Corneometer® para determinar o poder de hidratação do produto imediatamente depois da aplicação, e após 1 e 14 dias de uso com face limpa.'
    ?>

    <section class="pt-5 mt-5 ps-5 w-100">
        <div class=" h-25 my-3  d-flex gap-2 ">
            <h1 class="fs-1 text-black" >Produtos </h1>
            <img style="height: 3rem;" src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/cerave_logo/cerave-header-logo-nm-en.svg?rev=c282ebcbccc14247a178b62501ae0906?w=0&hash=F3001AE3EE6299A89F79F80943601055" alt="">
        </div>

        <section class=" d-flex row gap-3" style="width: 95%;">
            <div class="card ">
                <div class="card-left ">
                    <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/locao-facial-hidratante/locao-facial-hidratante-52ml-front-lg.jpg?rev=-1?w=500&hash=A004B6E1BACEB97FD60E0C037599D7F5" alt="Imagem Principal" class="main-image" id="mainImage1">
                    <div class="thumbnails">
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/locao-facial-hidratante/locao-facial-hidratante-52ml-front-lg.jpg?rev=-1?w=500&hash=A004B6E1BACEB97FD60E0C037599D7F5" alt="Thumbnail 1" 
                            onclick="changeImage(
                            1,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/locao-facial-hidratante/locao-facial-hidratante-52ml-front-lg.jpg?rev=-1?w=500&hash=A004B6E1BACEB97FD60E0C037599D7F5',
                            'Loção Facial Hidratante FPS50', 
                            'Para Pele Normal a Seca',
                            'Encontrar os produtos certos para a sua rotina de skincare deve se resumir a alguns passos simples. Além da limpeza e proteção solar, um hidratante diário é essencial para todos os tipos de pele. A Loção Facial Hidratante de CeraVe possui textura ultra leve e foi especialmente desenvolvida para peles normais a secas, mas sua textura ultraleve e de rápida absorção é totalmente adaptável a todos os tipos de pele, não deixando-a oleosa. Para uma hidratação facial profunda e restauração da barreira protetora da pele, a fórmula contém 3 ceramidas essenciais e ácido hialurônico. Além de ser enriquecida com niacinamida, que promove ação calmante. O produto possui a tecnologia patenteada de liberação prolongada MVE® que ajuda a repor as ceramidas e proporciona hidratação por até 24 horas. Dessa forma, estudos comprovam +31% de hidratação após o primeiro uso 24 mulheres, entre 18 e 60 anos, diagnosticadas pelo dermatologista com pele seca e com declaração de pele sensível. Uso do CeraVe Loção Facial Hidratante de uma a duas vezes ao dia, em todo o rosto durante 14 dias. Avaliação feita com Corneometer® para determinar o poder de hidratação do produto imediatamente depois da aplicação, e após 1 e 14 dias de uso com face limpa.')">
                        </div>
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/creme-reparador-para-olhos/produto-fundo-branco-lg.jpg?rev=-1?w=500&hash=58141FCF82C6D2618AF0DC62350F1430" alt="Thumbnail 2" 
                            onclick="changeImage(
                            1,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/creme-reparador-para-olhos/produto-fundo-branco-lg.jpg?rev=-1?w=500&hash=58141FCF82C6D2618AF0DC62350F1430',
                            'Creme Reparador Para Olhos', 
                            'Com Ácido Hialurônico e Ceramidas',
                            'Quando se trata da pele ao redor dos olhos, inchaço e olheiras são algumas das preocupações mais comuns. Felizmente, o creme para os olhos certo pode ajudar a suavizar e iluminar essa pele delicada. Procure um creme para os olhos formulado com ceramidas, ácido hialurônico e niacinamida para fornecer hidratação e restaurar a barreira natural da pele. Também é importante usar um produto testado por oftalmologistas para garantir a segurança, como o CeraVe Creme Reparador para Olhos, que é adequado para uso ao redor dos olhos. O CeraVe Creme Reparador para Olhos apresenta um complexo marinho e botânico para ajudar a iluminar toda a área dos olhos. Adequado para todos os tipos de pele, nosso creme para os olhos não oleoso, de rápida absorção e livre de fragrâncias também contém três ceramidas essenciais, ácido hialurônico e niacinamida, além da tecnologia patenteada MVE que libera hidratação de forma prolongada na pele.')">
                        </div>
                        <div class="thumbnail">
                            <img src="assets/imagens/produtos/oil-control-1-LG-removebg-preview.png" alt="Thumbnail 3" onclick="changeImage(
                            1,
                            'assets/imagens/produtos/oil-control-1-LG-removebg-preview.png', 
                            'Loção Facial Oil Control', 
                            'Para pele Mista a Oleosa',
                            'Uma loção hidratante diária leve com Tecnologia de Controle de Oleosidade, Ácido Hialurônico e 3 Ceramidas Essenciais que ajudam a absorver o excesso de oleosidade, mantendo uma barreira da pele saudável e hidratada durante todo o dia. Desenvolvido com dermatologistas, para pele mista a oleosa.')">
                        </div>
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/spf-50/spf-50-1-lg.jpg?rev=-1?w=500&hash=7F0B47EED7543FBF3FF837FC8B77A9DC" alt="Thumbnail 3" onclick="changeImage(
                            1,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/spf-50/spf-50-1-lg.jpg?rev=-1?w=500&hash=7F0B47EED7543FBF3FF837FC8B77A9DC', 
                            'Loção Facial Hidratante FPS50', 
                            'PARA PELE NORMAL A SECA',
                            'A CeraVe Loção Facial Hidratante FPS50 é um hidratante facial diário leve, com proteção UVB/UVA FPS 50, ácido hialurônico e 3 ceramidas essenciais, que ajudam a proteger a barreira natural da pele e deixam a pele com uma sensação suave e hidratada por até 24 horas.')">
                        </div>
                    </div>
                </div>

                <div class="card-right w-50">
                    <h1 id="mainTitle1">Loção Facial Hidratante FPS50</h1>
                    <p id="mainSubTitle1" class="text-muted">Para Pele Normal a Seca</p>
                    <p id="mainContent1"> 
                    Encontrar os produtos certos para a sua rotina de skincare deve se resumir a alguns passos simples. Além da limpeza e proteção solar, um hidratante diário é essencial para todos os tipos de pele. A Loção Facial Hidratante de CeraVe possui textura ultra leve e foi especialmente desenvolvida para peles normais a secas, mas sua textura ultraleve e de rápida absorção é totalmente adaptável a todos os tipos de pele, não deixando-a oleosa. Para uma hidratação facial profunda e restauração da barreira protetora da pele, a fórmula contém 3 ceramidas essenciais e ácido hialurônico. Além de ser enriquecida com niacinamida, que promove ação calmante. O produto possui a tecnologia patenteada de liberação prolongada MVE® que ajuda a repor as ceramidas e proporciona hidratação por até 24 horas. Dessa forma, estudos comprovam +31% de hidratação após o primeiro uso 24 mulheres, entre 18 e 60 anos, diagnosticadas pelo dermatologista com pele seca e com declaração de pele sensível. Uso do CeraVe Loção Facial Hidratante de uma a duas vezes ao dia, em todo o rosto durante 14 dias. Avaliação feita com Corneometer® para determinar o poder de hidratação do produto imediatamente depois da aplicação, e após 1 e 14 dias de uso com face limpa.
                    </p>
                    <a href="https://wa.me/5581993310136" class="btn btn-primary-custom ">Comprar via WhatsApp</a>
                </div>
            </div>

            <div class="card ">
                <div class="card-left ">
                    <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/creme-hidratante/creme-hidratante-453g-lg.jpg?rev=-1?w=500&hash=9FB9DDDBC5C761B7E619B6DF428923BB" alt="Imagem Principal" class="main-image" id="mainImage2">
                    <div class="thumbnails">
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/locao-hidratante/hidratante-473ml-front-lg.jpg?rev=-1?w=500&hash=45E5BB873B563614EEC9EE9194AA5B2F" alt="Thumbnail 1" 
                            onclick="changeImage(
                            2,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/locao-hidratante/hidratante-473ml-front-lg.jpg?rev=-1?w=500&hash=45E5BB873B563614EEC9EE9194AA5B2F',
                            'Loção Hidratante', 
                            'Hidratante livre de óleo, com ácido hialurônico',
                            'Encontrar os produtos certos para a sua rotina de cuidados com a pele deve se resumir a alguns passos simples. Além da limpeza e proteção solar, um hidratante diário é essencial. Recomendamos procurar por ingredientes como ácido hialurônico e ceramidas para ajudar a restaurar e manter a barreira protetora da pele. O CeraVe Loção Hidratante é um produto de textura fluida e livre de óleo que ajuda a hidratar a pele e restaurar sua barreira natural. Formulado com três ceramidas essenciais e ácido hialurônico, ele também possui a tecnologia patenteada MVE para uma hidratação de longa duração e uma fórmula leve e não comedogênica que não obstrui os poros. Nosso hidratante diário deixa a pele confortável e é suave, proporcionando hidratação por 24 horas.')">
                        </div>

                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/creme-hidratante/creme-hidratante-453g-lg.jpg?rev=-1?w=500&hash=9FB9DDDBC5C761B7E619B6DF428923BB" alt="Thumbnail 3" onclick="changeImage(
                            2,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/creme-hidratante/creme-hidratante-453g-lg.jpg?rev=-1?w=500&hash=9FB9DDDBC5C761B7E619B6DF428923BB', 
                            'Creme Hidratante', 
                            'Creme Hidratante Corporal, com Textura Cremosa e Ácido Hialurônico',
                            'Quando a barreira da pele está comprometida, pode ocorrer ressecamento e coceira. No entanto, um creme hidratante com ácido hialurônico e 3 ceramidas essenciais pode ajudar. Ao hidratar a pele e restaurar sua barreira natural, um creme com esses ingredientes pode ajudar aqueles com pele seca a muito seca a melhorar a aparência e a sensação da pele. O CeraVe Creme Hidratante inclui três ceramidas essenciais e ácido hialurônico para hidratar profundamente e restaurar a barreira protetora da pele. Desenvolvido com dermatologistas e adequado para pele seca e muito seca no rosto e corpo, este creme hidratante rico, não oleoso e de rápida absorção apresenta nossa tecnologia patenteada MVE para liberar uma corrente constante de ingredientes hidratantes ao longo do dia e da noite. O CeraVe Creme Hidratante é livre de fragrâncias.')">
                        </div>

                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/sa-creme-renovador-para-os-pes/creme-renovador-pes-88g-lg.jpg?rev=-1?w=500&hash=A2FCB6B2CF972C18A0F3314D0362FD1F" alt="Thumbnail 3" onclick="changeImage(
                            2,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/sa-creme-renovador-para-os-pes/creme-renovador-pes-88g-lg.jpg?rev=-1?w=500&hash=A2FCB6B2CF972C18A0F3314D0362FD1F', 
                            'SA Creme Renovador para os Pés', 
                            'Creme Renovador de Pés, com Ácido Salicílico e ação esfoliante',
                            'Desenvolvido com dermatologistas, 3 ceramidas essenciais e a exclusiva tecnologia MVE com liberação controlada e contínua de ingredientes ativos de hidratação, o CeraVe Creme Renovador para os Pés é formulado com Ácido Hialurônico, Ácido Salicílico, Niacinamida, Glicerina, Fitoesfingosina e Colesterol para hidratar, apaziguar, esfoliar, suavizar a pele e ajudar restaurar a barreira cutânea protetora dos pés. Indicado para pele extremamente seca, áspera e irregular. Adequado para pele gretada e fissurada. Sem perfume e não comedogênico. CeraVe é a marca número 1 recomendada por dermatologistas nos EUA*.')">
                        </div>

                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/creme-reparador-para-maos/creme-reparador-para-maos-100g-lg.jpg?rev=-1?w=500&hash=1DC60BB5C4B2E599279ED08B5D7931EE" alt="Thumbnail 3" onclick="changeImage(
                            2,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/creme-reparador-para-maos/creme-reparador-para-maos-100g-lg.jpg?rev=-1?w=500&hash=1DC60BB5C4B2E599279ED08B5D7931EE', 
                            'Creme para as mãos não oleoso', 
                            'Creme para as mãos não oleoso',
                            'A exposição a riscos ambientais irritantes e alérgicos, lavagem frequente das mãos e atividades cotidianas comuns prejudicam as mãos. Um creme terapêutico para as mãos é necessário para proteger a pele, aliviar o ressecamento e deixar pele macia e saudável. Recomendamos a procura de ingredientes em um creme para as mãos que inclua dimeticona para proteção, ácido hialurônico para hidratação, niacinamida para acalmar a pele e ceramidas de reforço da barreira.')">
                        </div>
                    </div>
                </div>

                <div class="card-right w-50">
                    <h1 id="mainTitle2">Creme Hidratante</h1>
                    <p id="mainSubTitle2" class="text-muted">Creme Hidratante Corporal, com Textura Cremosa e Ácido Hialurônico</p>
                    <p id="mainContent2"> 
                    Quando a barreira da pele está comprometida, pode ocorrer ressecamento e coceira. No entanto, um creme hidratante com ácido hialurônico e 3 ceramidas essenciais pode ajudar. Ao hidratar a pele e restaurar sua barreira natural, um creme com esses ingredientes pode ajudar aqueles com pele seca a muito seca a melhorar a aparência e a sensação da pele. O CeraVe Creme Hidratante inclui três ceramidas essenciais e ácido hialurônico para hidratar profundamente e restaurar a barreira protetora da pele. Desenvolvido com dermatologistas e adequado para pele seca e muito seca no rosto e corpo, este creme hidratante rico, não oleoso e de rápida absorção apresenta nossa tecnologia patenteada MVE para liberar uma corrente constante de ingredientes hidratantes ao longo do dia e da noite. O CeraVe Creme Hidratante é livre de fragrâncias.                    </p>
                    <a href="https://wa.me/5581993310136" class="btn btn-primary-custom ">Comprar via WhatsApp</a>
                </div>
            </div>

            <div class="card ">
                <div class="card-left ">
                    <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/gel-de-limpeza-acne-control/gel-de-limpeza-acne-control-340ml-lg.jpg?rev=-1?w=500&hash=AF0E5E354B67B465BF5F39952C14A8B2" alt="Imagem Principal" class="main-image" id="mainImage3">
                    <div class="thumbnails">
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/gel-de-limpeza-acne-control/gel-de-limpeza-acne-control-340ml-lg.jpg?rev=-1?w=500&hash=AF0E5E354B67B465BF5F39952C14A8B2" alt="Thumbnail 1" 
                            onclick="changeImage(
                            3,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/gel-de-limpeza-acne-control/gel-de-limpeza-acne-control-340ml-lg.jpg?rev=-1?w=500&hash=AF0E5E354B67B465BF5F39952C14A8B2',
                            'Gel de Limpeza Acne Control', 
                            'Gel de limpeza facial ácido salicílico para acne',
                            'A acne pode afetar tanto adolescentes quanto adultos, e uma limpeza eficaz é um passo essencial em qualquer rotina de cuidados com a pele oleosa ou acneica. Ideal para uso diário para esfoliar suavemente as células mortas da pele que podem obstruir os poros e contribuir para a acne, uma limpeza com 2% de ácido salicílico oferece benefícios no controle da acne e pode complementar outros tratamentos para acne para ajudar a manter a pele limpa e saudável - apenas certifique-se de consultar seu dermatologista. O Gel de Limpeza Acne Control com 2% de ácido salicílico reduz 40% das espinhas em 1 semana*, reduz 25% de cravos em 2 semanas*, evita o ressecamento e o efeito rebote na pele, restaurando e mantendo o equilíbrio da barreira protetora da pele com 3 ceramidas essenciais, deixando a pele macia, suave e renovada em 3 dias*​.')">
                        </div>
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/espuma-cremosa-de-limpeza-hidratante/espuma-de-limpeza-140g-lg.jpg?rev=-1?w=500&hash=41F2428601F115CFE6EF7DF85F52580A" alt="Thumbnail 3" onclick="changeImage(
                            3,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/espuma-cremosa-de-limpeza-hidratante/espuma-de-limpeza-140g-lg.jpg?rev=-1?w=500&hash=41F2428601F115CFE6EF7DF85F52580A', 
                            'Espuma Cremosa de Limpeza Hidratante', 
                            'Limpeza facial cremosa em espuma para pele normal a seca.',
                            'CeraVe Espuma Cremosa de Limpeza Hidratante serve para limpeza facial diária, enquanto remove efetivamente maquiagem, sujeira e excesso de oleosidade. Começando como um creme,, este produto se transforma em uma espuma leve à medida que você ensaboa a pele com água. Desenvolvida com dermatologistas, esta fórmula suave e sem perfume, com três ceramidas essenciais, ácido hialurônico e aminoácidos, ajuda a manter a barreira protetora da pele e a reter a umidade para uma hidratação duradoura')">
                        </div>
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/sa-gel-de-limpeza-renovador/gel-limpeza-renov-150g-lg.jpg?rev=-1?w=500&hash=7642779CCD786552082D7C72991A1250" alt="Thumbnail 3" onclick="changeImage(
                            3,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/sa-gel-de-limpeza-renovador/gel-limpeza-renov-150g-lg.jpg?rev=-1?w=500&hash=7642779CCD786552082D7C72991A1250', 
                            'SA Gel de Limpeza Renovador', 
                            'Gel de limpeza renovador com ácido salicílico para uma pele suave.',
                            'Um gel de limpeza suave com ácido salicílico pode ajudar a esfoliar e suavizar a pele, ao mesmo tempo em que remove efetivamente o oleosidade e a sujeira, eliminando as células mortas e amaciando a pele áspera, sem deixar a pele seca. Limpar com o CeraVe SA Gel de Limpeza Renovador, um produto com ácido salicílico enriquecido com ingredientes restauradores da barreira da pele, como ceramidas, pode ajudar a manter a hidratação dentro da pele e afastar irritantes. O CeraVe SA Gel de Limpeza Renovador oferece esfoliação suave e não irritante, sem microesferas abrasivas que podem arranhar a pele. Adequado para uso no rosto, corpo e pele propensa a acne, nossa limpeza com ácido salicílico não apenas esfolia a pele, mas também, com três ceramidas essenciais, ácido hialurônico e niacinamida, ajuda a amaciar e suavizar a pele sem prejudicar sua barreira protetora. Essa fórmula também é não comedogênica, sem fragrância e enriquecida com vitamina D antioxidante.')">
                        </div>
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/oleo-de-limpeza-hidratante/oleo-de-limpeza-hydrante-236ml-lg.jpg?rev=-1?w=500&hash=A1A15BC43DE272D4A03596EBD6E05D9D" alt="Thumbnail 3" onclick="changeImage(
                            3,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/oleo-de-limpeza-hidratante/oleo-de-limpeza-hydrante-236ml-lg.jpg?rev=-1?w=500&hash=A1A15BC43DE272D4A03596EBD6E05D9D', 
                            'Óleo de Limpeza Hidratante', 
                            'Com textura de óleo que forma espuma',
                            'Desenvolvido com dermatologistas, 3 ceramidas essenciais e a exclusiva tecnologia MVE de hidratação encapsulada com libertação controlada e contínua de ingredientes ativos, o Óleo de Limpeza Hidratante, para pele normal a muito seca, é formulado com Esqualano, Triglicéridos e Ácido Hialurónico para ajudar a limpar de forma suave e hidratar a pele, sem fragilizar a barreira cutânea do rosto e do corpo. Sem perfume, não comedogênico e hipoalergênico. Testado sob controlo ginecológico. Indicado para toda a família: crianças e adultos; rosto e corpo, inclusive para higiene íntima. CeraVe é a marca número 1 recomendada por dermatologistas nos EUA*.')">
                        </div>                      
                    </div>
                </div>

                <div class="card-right w-50">
                    <h1 id="mainTitle3">Gel de Limpeza Acne Control</h1>
                    <p id="mainSubTitle3" class="text-muted">Gel de limpeza facial ácido salicílico para acne</p>
                    <p id="mainContent3"> 
                    A acne pode afetar tanto adolescentes quanto adultos, e uma limpeza eficaz é um passo essencial em qualquer rotina de cuidados com a pele oleosa ou acneica. Ideal para uso diário para esfoliar suavemente as células mortas da pele que podem obstruir os poros e contribuir para a acne, uma limpeza com 2% de ácido salicílico oferece benefícios no controle da acne e pode complementar outros tratamentos para acne para ajudar a manter a pele limpa e saudável - apenas certifique-se de consultar seu dermatologista. O Gel de Limpeza Acne Control com 2% de ácido salicílico reduz 40% das espinhas em 1 semana*, reduz 25% de cravos em 2 semanas*, evita o ressecamento e o efeito rebote na pele, restaurando e mantendo o equilíbrio da barreira protetora da pele com 3 ceramidas essenciais, deixando a pele macia, suave e renovada em 3 dias*​">
                    </p>
                    <a href="https://wa.me/5581993310136" class="btn btn-primary-custom ">Comprar via WhatsApp</a>
                </div>
            </div>

            <div class="card ">
                <div class="card-left ">
                    <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/locao-de-limpeza-hidratante/limpeza-473-front-lg.jpg?rev=-1?w=500&hash=574E37F3421959BB32D557F75F3BE5BB" alt="Imagem Principal" class="main-image" id="mainImage4">
                    <div class="thumbnails">
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/locao-de-limpeza-hidratante/limpeza-473-front-lg.jpg?rev=-1?w=500&hash=574E37F3421959BB32D557F75F3BE5BB" alt="Thumbnail 1" 
                            onclick="changeImage(
                            4,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/locao-de-limpeza-hidratante/limpeza-473-front-lg.jpg?rev=-1?w=500&hash=574E37F3421959BB32D557F75F3BE5BB',
                            'Loção de Limpeza Hidratante', 
                            'Loção de Limpeza Hidratante para Pele Normal a Seca',
                            'Uma loção de limpeza pode remover sujeira, maquiagem e outros resíduos, mas uma limpeza hidratante, como o CeraVe Loção de Limpeza Hidratante, pode fazer tudo isso sem prejudicar a barreira protetora natural da pele ou remover a hidratação natural da pele. Criado em parceria com dermatologistas, o CeraVe Loção de Limpeza Hidratante promove uma suave limpeza facial com ingredientes como ceramidas e ácido hialurônico que trabalham para restaurar a barreira natural da pele e ajudar a pele a reter a hidratação. O CeraVe Loção de Limpeza Hidratante foi projetado para limpar e refrescar a pele sem ressecá-la ou deixá-la com sensação de repuxamento. Com três ceramidas essenciais para restaurar a barreira da pele, ácido hialurônico para hidratar a pele e tecnologia de liberação MVE para fornecer à pele um fluxo constante de nutrientes, esta loção facial não comedogênica é uma maneira eficaz e não irritante de iniciar qualquer regime de cuidados com a pele. Ideal para pele normal a seca.')">
                        </div>
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/oleo-de-limpeza-hidratante/oleo-de-limpeza-hydrante-236ml-lg.jpg?rev=-1?w=500&hash=A1A15BC43DE272D4A03596EBD6E05D9D" alt="Thumbnail 3" onclick="changeImage(
                            4,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/oleo-de-limpeza-hidratante/oleo-de-limpeza-hydrante-236ml-lg.jpg?rev=-1?w=500&hash=A1A15BC43DE272D4A03596EBD6E05D9D', 
                            'Óleo de Limpeza Hidratante', 
                            'Com textura de óleo que forma espuma',
                            'Desenvolvido com dermatologistas, 3 ceramidas essenciais e a exclusiva tecnologia MVE de hidratação encapsulada com libertação controlada e contínua de ingredientes ativos, o Óleo de Limpeza Hidratante, para pele normal a muito seca, é formulado com Esqualano, Triglicéridos e Ácido Hialurónico para ajudar a limpar de forma suave e hidratar a pele, sem fragilizar a barreira cutânea do rosto e do corpo. Sem perfume, não comedogênico e hipoalergênico. Testado sob controlo ginecológico. Indicado para toda a família: crianças e adultos; rosto e corpo, inclusive para higiene íntima. CeraVe é a marca número 1 recomendada por dermatologistas nos EUA*.')">
                        </div>
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/sa-gel-de-limpeza-renovador/gel-limpeza-renov-150g-lg.jpg?rev=-1?w=500&hash=7642779CCD786552082D7C72991A1250" alt="Thumbnail 3" onclick="changeImage(
                            4,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/sa-gel-de-limpeza-renovador/gel-limpeza-renov-150g-lg.jpg?rev=-1?w=500&hash=7642779CCD786552082D7C72991A1250', 
                            'SA Gel de Limpeza Renovador', 
                            'Gel de limpeza renovador com ácido salicílico para uma pele suave.',
                            'Um gel de limpeza suave com ácido salicílico pode ajudar a esfoliar e suavizar a pele, ao mesmo tempo em que remove efetivamente o oleosidade e a sujeira, eliminando as células mortas e amaciando a pele áspera, sem deixar a pele seca. Limpar com o CeraVe SA Gel de Limpeza Renovador, um produto com ácido salicílico enriquecido com ingredientes restauradores da barreira da pele, como ceramidas, pode ajudar a manter a hidratação dentro da pele e afastar irritantes. O CeraVe SA Gel de Limpeza Renovador oferece esfoliação suave e não irritante, sem microesferas abrasivas que podem arranhar a pele. Adequado para uso no rosto, corpo e pele propensa a acne, nossa limpeza com ácido salicílico não apenas esfolia a pele, mas também, com três ceramidas essenciais, ácido hialurônico e niacinamida, ajuda a amaciar e suavizar a pele sem prejudicar sua barreira protetora. Essa fórmula também é não comedogênica, sem fragrância e enriquecida com vitamina D antioxidante.')">
                        </div>                    
                    </div>
                </div>

                <div class="card-right w-50">
                    <h1 id="mainTitle4">Loção de Limpeza Hidratante</h1>
                    <p id="mainSubTitle4" class="text-muted">Loção de Limpeza Hidratante para Pele Normal a Seca</p>
                    <p id="mainContent4"> 
                    Uma loção de limpeza pode remover sujeira, maquiagem e outros resíduos, mas uma limpeza hidratante, como o CeraVe Loção de Limpeza Hidratante, pode fazer tudo isso sem prejudicar a barreira protetora natural da pele ou remover a hidratação natural da pele. Criado em parceria com dermatologistas, o CeraVe Loção de Limpeza Hidratante promove uma suave limpeza facial com ingredientes como ceramidas e ácido hialurônico que trabalham para restaurar a barreira natural da pele e ajudar a pele a reter a hidratação. O CeraVe Loção de Limpeza Hidratante foi projetado para limpar e refrescar a pele sem ressecá-la ou deixá-la com sensação de repuxamento. Com três ceramidas essenciais para restaurar a barreira da pele, ácido hialurônico para hidratar a pele e tecnologia de liberação MVE para fornecer à pele um fluxo constante de nutrientes, esta loção facial não comedogênica é uma maneira eficaz e não irritante de iniciar qualquer regime de cuidados com a pele. Ideal para pele normal a seca.                    </p>
                    <a href="https://wa.me/5581993310136" class="btn btn-primary-custom ">Comprar via WhatsApp</a>
                </div>
            </div>

            <div id="acne" class="card ">
                <div class="card-left ">
                    <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/acne-control-cuidado-diario/acne-control-cuidado-diario-lg.jpg?rev=-1?w=500&hash=63D3CA94221F14A65AC88BD1E66CDB7D" alt="Imagem Principal" class="main-image" id="mainImage5">
                    
                    <div class="thumbnails">
                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/acne-control-cuidado-diario/acne-control-cuidado-diario-lg.jpg?rev=-1?w=500&hash=63D3CA94221F14A65AC88BD1E66CDB7D" alt="Thumbnail 3" onclick="changeImage(
                            5,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/acne-control-cuidado-diario/acne-control-cuidado-diario-lg.jpg?rev=-1?w=500&hash=63D3CA94221F14A65AC88BD1E66CDB7D', 
                            'Acne Control Cuidado Diario', 
                            'Acne Control Cuidado diário hidratante para todo o rosto.',
                            'CeraVe Acne Control Cuidado Diário é um tratamento para acne com 2% de ácido salicílico que ajuda a tratar a acne & previne o surgimento de novas espinhas. Ele também oferece uma esfoliação suave com ácidos glicóclico e láctico que ajudam a melhorar a aparência dos poros e marcas, juntamente a niacinamida que possui ação calmante e as 3 ceramidas essenciais que permitem que a eficácia contra a acne não agrida a barreira protetora da pele.O ácido salicílico é um ingrediente benéfico para tratar a acne e prevenir novas espinhas, e um produto que oferece uma esfoliação suave pode ajudar a minimizar a aparência dos poros. Essa fórmula esfoliante é suave, porém eficaz, reduz em 3 dias tamanho e vermelhidão de lesões inflamatórias, reduz 30% das lesões inflamatórias totais em 2 semanas, e ainda promove uma redução significativa em tamanho dos poros e uniformidade da pele em 8 semanas. Livre de óleo, sem álcool e não ressecante, reduz acne, controla a oleosidade e diminui marcas sem comprometer a barreira protetora natural da pele ou ressecar a pele.')">
                        </div>    

                        <div class="thumbnail">
                            <img src="https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/gel-de-limpeza-acne-control/gel-de-limpeza-acne-control-340ml-lg.jpg?rev=-1?w=500&hash=AF0E5E354B67B465BF5F39952C14A8B2" alt="Thumbnail 1" 
                            onclick="changeImage(
                            5,
                            'https://www.cerave.com.br/-/media/project/loreal/brand-sites/cerave/americas/br/scx/pdp/new-packshots/gel-de-limpeza-acne-control/gel-de-limpeza-acne-control-340ml-lg.jpg?rev=-1?w=500&hash=AF0E5E354B67B465BF5F39952C14A8B2',
                            'Gel de Limpeza Acne Control', 
                            'Gel de limpeza facial ácido salicílico para acne',
                            'A acne pode afetar tanto adolescentes quanto adultos, e uma limpeza eficaz é um passo essencial em qualquer rotina de cuidados com a pele oleosa ou acneica. Ideal para uso diário para esfoliar suavemente as células mortas da pele que podem obstruir os poros e contribuir para a acne, uma limpeza com 2% de ácido salicílico oferece benefícios no controle da acne e pode complementar outros tratamentos para acne para ajudar a manter a pele limpa e saudável - apenas certifique-se de consultar seu dermatologista. O Gel de Limpeza Acne Control com 2% de ácido salicílico reduz 40% das espinhas em 1 semana*, reduz 25% de cravos em 2 semanas*, evita o ressecamento e o efeito rebote na pele, restaurando e mantendo o equilíbrio da barreira protetora da pele com 3 ceramidas essenciais, deixando a pele macia, suave e renovada em 3 dias*​.')">
                        </div>           
                    </div>
                </div>

                <div class="card-right w-50">
                    <h1 id="mainTitle5">Acne Control Cuidado Diario</h1>
                    <p id="mainSubTitle5" class="text-muted">Acne Control Cuidado diário hidratante para todo o rosto.</p>
                    <p id="mainContent5"> 
                    CeraVe Acne Control Cuidado Diário é um tratamento para acne com 2% de ácido salicílico que ajuda a tratar a acne & previne o surgimento de novas espinhas. Ele também oferece uma esfoliação suave com ácidos glicóclico e láctico que ajudam a melhorar a aparência dos poros e marcas, juntamente a niacinamida que possui ação calmante e as 3 ceramidas essenciais que permitem que a eficácia contra a acne não agrida a barreira protetora da pele.O ácido salicílico é um ingrediente benéfico para tratar a acne e prevenir novas espinhas, e um produto que oferece uma esfoliação suave pode ajudar a minimizar a aparência dos poros. Essa fórmula esfoliante é suave, porém eficaz, reduz em 3 dias tamanho e vermelhidão de lesões inflamatórias, reduz 30% das lesões inflamatórias totais em 2 semanas, e ainda promove uma redução significativa em tamanho dos poros e uniformidade da pele em 8 semanas. Livre de óleo, sem álcool e não ressecante, reduz acne, controla a oleosidade e diminui marcas sem comprometer a barreira protetora natural da pele ou ressecar a pele.                    </p>
                    <a href="https://wa.me/5581993310136" class="btn btn-primary-custom ">Comprar via WhatsApp</a>
                </div>
            </div>


        </section>
    </section>


    <script>
        function changeImage(id,imageSrc, titleSrc, subTitleSrc, contentScr) {
            document.getElementById('mainImage' + id).src = imageSrc;
            document.getElementById('mainTitle'+ id).textContent = titleSrc;
            document.getElementById('mainSubTitle'+ id).textContent = subTitleSrc;
            document.getElementById('mainContent' + id).textContent = contentScr;
        }
    </script>
</body>
</html>
