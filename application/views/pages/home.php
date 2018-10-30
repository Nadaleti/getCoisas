<!-- Carrossel -->
<div id="banner" class="carousel slide" data-ride="carousel" style="background-color:#CCC;">
    
    <!-- Indicador de imagem -->
    <ol class="carousel-indicators">
        <li data-target="#banner" data-slide-to="0" class="active"></li>
        <li data-target="#banner" data-slide-to="1"></li>
        <li data-target="#banner" data-slide-to="2"></li>
    </ol>
    
    <!-- Conteúdo carrosel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block carousel-img car-img-home mx-auto" src="<?= base_url("img/carousel/aaron-burden-183659-unsplash.jpg") ?>" alt="First Slide">
        </div>
        <div class="carousel-item">
             <img class="d-block carousel-img car-img-home mx-auto" src="<?= base_url("img/carousel/elizeu-dias-520684-unsplash.jpg") ?>" alt="Second Slide">
        </div>
        <div class="carousel-item">
             <img class="d-block carousel-img car-img-home mx-auto" src="<?= base_url("img/carousel/cytonn-photography-604681-unsplash.jpg") ?>" alt="Third Slide">
        </div>
    </div>
    
    <!-- Setas de troca de imagem -->
    <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>

<!-- Características da plataforma -->
<div class="row col-md-10 mx-auto justify-content-center pt-4">
    <div class="col col-md-3">
        <i class="far fa-images carac-icon text-center col-md-12"></i>
        <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
    </div>
    <div class="col col-md-3">
        <i class="far fa-images carac-icon text-center col-md-12"></i>
        <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
    </div><div class="col col-md-3">
        <i class="far fa-images carac-icon text-center col-md-12"></i>
        <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
    </div><div class="col col-md-3">
        <i class="far fa-images carac-icon text-center col-md-12"></i>
        <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
    </div>
</div>

<!-- Produtos de uma época específica -->
<div class="col-md-12 py-4 pl-0" style="background-image: url('<?= base_url('img/hrvoje-grubisic-376578-unsplash.jpg') ?>'); background-size: 100%; background-attachment: fixed; background-position: 15%;">
    <div class="row justify-content-between col-md-12">
        <div class="p-title transparency p-2 pl-5 mb-3 col-md-5">
            <h2><b>Vamos à praia?</b></h2>
            <p class="mb-0">Produtos especiais pra você passar seu verão sem neuras!</p>
        </div>
        <div><button class="btn btn-primary">Ver mais</button></div>
    </div>
    <div class="row justify-content-around col-md-12">
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/manta2.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
        
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/manta2.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
        
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/manta2.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
        
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/manta2.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
        
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/manta2.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
    </div>
</div>

<!-- Produtos em destaque -->
<div class="col-md-12 py-4 pl-0" id="highlight-products">
    <div class="row justify-content-between col-md-12">
        <div class="p-title p-2 pl-5 mb-3 col-md-5">
            <h2><b>Produtos em destaque?</b></h2>
            <p class="mb-0"></p>
        </div>
        <div><button class="btn btn-primary">Ver mais</button></div>
    </div>
    
    <div class="row justify-content-around col-md-12">
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/damas.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/damas.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/damas.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/damas.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
        <a href="#" class="card card-home clickable ml-3">
            <div class="card-img-container">
                <img src="<?= base_url("img/damas.jpg") ?>" style="width:14.9em;">
            </div>
            <hr>
            <div class="card-body">
                <h5 class="card-title m-0">Produto x</h5>
                <p class="card-text">R$ 2,00/dia</p>
            </div>
        </a>
    </div>
</div>

<!-- Lista de Categorias -->
<div class="col-md-12 mx-auto justify-content-center py-4" id="categ-list">
    <h2 class="text-center"><b>O que você precisa hoje?</b></h2>
    <div class="row pt-5">
        <a href="#" class="col col-md-2 category">
            <i class="far fa-images carac-icon text-center col-md-12"></i>
            <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
        </a>
        <a href="#" class="col col-md-2 category">
            <i class="far fa-images carac-icon text-center col-md-12"></i>
            <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
        </a>
        <a href="#" class="col col-md-2 category">
            <i class="far fa-images carac-icon text-center col-md-12"></i>
            <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
        </a>
        <a href="#" class="col col-md-2 category">
            <i class="far fa-images carac-icon text-center col-md-12"></i>
            <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
        </a>
        <a href="#" class="col col-md-2 category">
            <i class="far fa-images carac-icon text-center col-md-12"></i>
            <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
        </a>
        <a href="#" class="col col-md-2 category">
            <i class="far fa-images carac-icon text-center col-md-12"></i>
            <p class="col-md-12 text-center">Lorem ipsum dolor sit amet. </p>
        </a>
    </div>
</div>