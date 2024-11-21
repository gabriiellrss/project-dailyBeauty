<style>
    .collapse {
        transition: max-height 0.4s ease-in-out;
    }

    .btn-outline-primary {
        border-color: #433833;
        color: #433833;
        background-color: transparent;
    }

    .btn-outline-primary:hover, .btn-outline-primary:focus {
        background-color: #534640 !important    ;
        color: white !important;
        border-color: #433833 !important;
    }

    .btn-check:checked + .btn-outline-primary {
        background-color: #433833;
        color: #fff;
        border-color: #433833;
    }

    .btn-group .btn {
        font-size: 0.9rem;
        padding: 0.3rem 0.6rem;
        height: auto;
    }

    .text-center.mb-5 {
        height: 2.5rem;
    }

    @keyframes moveUpDown {
        0% {
            transform: translateY(0); /* Começa na posição original */
        }
        50% {
            transform: translateY(-10px); /* Move para cima */
        }
        100% {
            transform: translateY(0); /* Retorna para a posição original */
        }
        
    }

    @keyframes moveNone {
        0% {
            transform: translateY(0); 
        }
        
        
    }

    #img1 {
        animation: moveUpDown 3s infinite;
    }

    #img1:hover {
        animation-play-state: paused; 
        transform: translateY(0);
    }


</style>

<div class="container my-4 d-flex ps-0" id="quemdenos" >
    <div class="w-25">
        <img id="img1" class="w-100" src="./assets/imagens/img.png" alt="">
    </div>
    <div class="ps-1 w-75">
        <div class="text-center mb-3 d-flex justify-content-between" style="height: 2rem;">
            <div class="btn-group" role="group" aria-label="Toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked data-bs-toggle="collapse" data-bs-target="#section1">
                <label class="btn btn-outline-primary" for="btnradio1">Visão Geral</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" data-bs-toggle="collapse" data-bs-target="#section2">
                <label class="btn btn-outline-primary" for="btnradio2">Missão</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" data-bs-toggle="collapse" data-bs-target="#section3">
                <label class="btn btn-outline-primary" for="btnradio3">Valores</label>
            </div>
        </div>

        <div class="col-12">
            <div class="accordion" id="accordionExample">
                <div id="section1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-0">
                        <h1>Visão Geral</h1>
                        <p>Uma empresa varejista de cosméticos dedicada a promover a beleza natural e a saúde da pele de forma simples e eficaz. Acreditamos que o cuidado diário da pele deve ser um momento de autocuidado prazeroso e acessível para todos. </p>
                    </div>
                </div>

                <div id="section2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-0">
                        <h1>Missão</h1>
                        <p>Fornecer cosméticos de alta qualidade que se integram perfeitamente no dia a dia, oferecendo rotinas personalizadas que atendam as necessidades únicas de cada tipo de pele.</p>
                    </div>
                </div>

                <div id="section3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body p-0">
                        <h1>Valores</h1>
                        <p><strong>Simplicidade:</strong> Rotinas fáceis de seguir e pensadas para uso cotidiano.</p>
                        <p><strong>Transparência:</strong> Produtos confiáveis e testados, priorizando a saúde da pele.</p>
                        <p><strong>Sustentabilidade:</strong> Uso de embalagens recicláveis.</p>
                        <p><strong>Inclusividade:</strong> Produtos para todos os tipos de pele, visando a diversidade e inclusão.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
