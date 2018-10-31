<!DOCTYPE html>
<html>
    <head>
        <title>GetCoisas - A necessidade faz a ocasião!</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="<?= base_url("css/style.css") ?>">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Popper js -->
        <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
    </head>
    
    <body>
        <header class="d-flex flex-row col-md-12 pt-4 pb-4 pr-0 justify-content-around">
            <div class="row justify-content-center col-md-2">
                <img src="<?= base_url("img/logo-hor.jpg") ?>" class="img-fluid" id="logo">
            </div>

            <div class="input-group justify-content-center col-md-5">
                <input type="text" placeholder="O que você está procurando?" class="form-control col-md-9">
                <select class="input-group-append col-md-3 custom-select text-center btn">
                    <option selected>Categorias</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-primary">Pesquisar</button>
                </div>
            </div>
            <div class="row justify-content-end col-md-4">
                <a href="#" class="btn btn-outline-primary">Seja um anunciante!</a>
                <a href="#" class="row ml-2 btn btn-primary">
                    <i class="fa fa-user mr-1" style="font-size:20px;"></i>
                    <span>Entre ou cadastre-se</span>
                </a>
            </div>
        </header>