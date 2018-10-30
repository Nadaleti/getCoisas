<div class="row col-md-10 mx-auto px-5">
    <!-- Filtros de pesquisa -->
    <div class="col-md-3 p-3 mx-auto">
        <div class="col-md-12 p-3 mx-auto filter-box">
            <p class="text-muted">x produtos encontrados</p>
            <h5><b>Preço</b></h5>
            <hr>
            <form class="col-md-12 form-row justify-content-between mx-auto p-0" action="#" method="">             
                <input type="text" class="form-control col-md-4" placeholder="Mínimo">
                <span class="row align-items-center">-</span>
                <input type="text" class="form-control col-md-4" placeholder="Máximo">
                <button class="btn btn-outline-primary" type="submit">ok</button>
            </form>
            <br>
            <h5><b>Localização</b></h5>
            <hr>
            <div class="col-md-12 pl-4" id="local-list">
                <a class="local-link" href="#"> São Paulo </a> <br>
                <a class="local-link" href="#"> Rio de Janeiro </a> <br>
                <a class="local-link" href="#"> Minas Gerais </a> <br>
                <a class="local-link" href="#"> Espírito Santo </a> <br>
                <a class="local-link" href="#"> Acre </a> <br>
                <a class="local-link" href="#"> Amazonas </a> <br>
                <a class="local-link" href="#"> Roraima </a> <br>
                <a class="local-link" href="#"> Rondônia </a> <br>
            </div>
        </div>
    </div>
    
    <!-- Lista de produtos -->
    <div class="products col-md-9 mt-3">
        <div id="control" class="row justify-content-between mb-4 p-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-2">
                    <li class="breadcrumb-item"><a href="#">Produtos</a></li>
                    <li class="breadcrumb-item"><a href="#">Categoria</a></li>
                    <li class="breadcrumb-item"><a href="#">Pesquisa</a></li>
                </ol>
            </nav>
            
            <select class="form-control col-md-3">
                <option value="1">Número de algueis</option>
                <option value="2">Maior valor</option>
                <option value="3">Menor valor</option>
            </select>
        </div>
        
        <!-- Cards -->
        <div id="product-list" class="">
            <div class="row justify-content-around align-items-center mt-3">
                <a href="#" class="card card-list clickable">
                    <div class="card-img-container-list">
                        <img src="<?= base_url("img/bike.jpg") ?>" style="width:17.9em;">
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title m-0">Produto x</h5>
                        <p class="card-text">R$ 2,00/dia</p>
                    </div>
                </a>

                <a href="#" class="card card-list clickable">
                    <div class="card-img-container-list">
                        <img src="<?= base_url("img/bike.jpg") ?>" style="width:17.9em;">
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title m-0">Produto x</h5>
                        <p class="card-text">R$ 2,00/dia</p>
                    </div>
                </a>

                <a href="#" class="card card-list clickable">
                    <div class="card-img-container-list">
                        <img src="<?= base_url("img/bike.jpg") ?>" style="width:17.9em;">
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title m-0">Produto x</h5>
                        <p class="card-text">R$ 2,00/dia</p>
                    </div>
                </a>
            </div>
            <div class="row justify-content-around align-items-center mt-3">
                <a href="#" class="card card-list clickable">
                    <div class="card-img-container-list">
                        <img src="<?= base_url("img/bike.jpg") ?>" style="width:17.9em;">
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title m-0">Produto x</h5>
                        <p class="card-text">R$ 2,00/dia</p>
                    </div>
                </a>

                <a href="#" class="card card-list clickable">
                    <div class="card-img-container-list">
                        <img src="<?= base_url("img/bike.jpg") ?>" style="width:17.9em;">
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title m-0">Produto x</h5>
                        <p class="card-text">R$ 2,00/dia</p>
                    </div>
                </a>

                <a href="#" class="card card-list clickable">
                    <div class="card-img-container-list">
                        <img src="<?= base_url("img/bike.jpg") ?>" style="width:17.9em;">
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title m-0">Produto x</h5>
                        <p class="card-text">R$ 2,00/dia</p>
                    </div>
                </a>
            </div>
            <div class="row justify-content-around align-items-center mt-3">
                <a href="#" class="card card-list clickable">
                    <div class="card-img-container-list">
                        <img src="<?= base_url("img/bike.jpg") ?>" style="width:17.9em;">
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title m-0">Produto x</h5>
                        <p class="card-text">R$ 2,00/dia</p>
                    </div>
                </a>

                <a href="#" class="card card-list clickable">
                    <div class="card-img-container-list">
                        <img src="<?= base_url("img/bike.jpg") ?>" style="width:17.9em;">
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title m-0">Produto x</h5>
                        <p class="card-text">R$ 2,00/dia</p>
                    </div>
                </a>

                <a href="#" class="card card-list clickable">
                    <div class="card-img-container-list">
                        <img src="<?= base_url("img/bike.jpg") ?>" style="width:17.9em;">
                    </div>
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title m-0">Produto x</h5>
                        <p class="card-text">R$ 2,00/dia</p>
                    </div>
                </a>
            </div>
        </div>
        
        <div class="row justify-content-center my-4">
            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-less-than disabled" style="font-size: 16px;"></i><b> Anterior</b></a>
            <a href="#" class="btn btn-primary btn-lg ml-4"><b>Próximo </b><i class="fa fa-greater-than disabled" style="font-size: 16px;"></i></a>
        </div>
    </div>
</div>