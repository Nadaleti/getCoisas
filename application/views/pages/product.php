<div class="col-md-10 mx-auto mt-3 pb-5 pt-3 border rounded shadow"> <!-- style="box-shadow:0 0 2px #555;"-->
    <!-- Apresentação do anúncio -->
    <div class="row justify-content-around col-md-12 py-4">
        <!-- Fotos do produto -->
        <div id="prod-imgs" class="carousel col-md-8" data-interval="false">
            <!-- Indicador de imagem -->
            <ol class="carousel-indicators">
                <li data-target="#prod-imgs" data-slide-to="0" class="active"></li>
                <li data-target="#prod-imgs" data-slide-to="1"></li>
                <li data-target="#prod-imgs" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner mx-auto">
                <div class="carousel-item active">
                    <img class="d-block carousel-img car-img-product mx-auto " src="<?= base_url("img/carrinho-mao.jpg") ?>">
                </div>
                <div class="carousel-item">
                     <img class="d-block carousel-img car-img-product mx-auto" src="<?= base_url("img/carrinho-mao2.jpg") ?>">
                </div>
                <div class="carousel-item">
                     <img class="d-block carousel-img car-img-product mx-auto" src="<?= base_url("img/carrinho-mao3.jpg") ?>">
                </div>
            </div>

            <a class="carousel-control-prev" href="#prod-imgs" role="button" data-slide="prev">
                <span class="p-3" aria-hidden="true" style="color:#007bff; font-size:40px;"><i class="fa fa-chevron-left"></i></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#prod-imgs" role="button" data-slide="next">
                <span class="p-3" aria-hidden="true" style="color:#007bff; font-size:40px;"><i class="fa fa-chevron-right"></i></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

        <!-- Informações do produto / vendedor -->
        <div class="col-md-4">   
            <!-- Informações do produto -->
            <div class="">
                <!-- Tags -->
                <div class="row pb-2 pl-3">
                    <a href="#" class="badge badge-secondary">Tag-1</a>
                    <a href="#" class="badge badge-secondary ml-2">Tag-2</a>
                    <a href="#" class="badge badge-secondary ml-2">Tag-3</a>
                </div>
                <h2><b>Título do Anúncio</b></h2>
                <h4 class="bg-primary text-white p-2" style="border-top-left-radius:15px;">R$ xx,xx / dia</h4>
            </div>

            <!-- Informações do vendedor -->
            <div class="border border-primary col-md-12" style="border-bottom-left-radius:15px;">
                <div class="col-md-12 p-2">
                    <h4 class="mb-1"><b>Nome do Vendedor</b></h4>
                    <h6 class="text-muted" style="font-size: 14px;">Publicado em dd/mm/yyyy</h6>
                    <hr class="bg-primary">
                    <ul class="list-unstyled">
                        <li>Telefone: (xx) xxxxx-xxxx</li>
                        <li>E-mail: get.coisas@aluguel.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- Informações do anúncio -->
    <div class="col-md-12 p-0">
        <h3 class="row p-title p-1 pl-4 col-md-5"><b>Descrição</b></h3>
        <p class="p-2">Ut quam turpis, porta in facilisis tempus, rhoncus et tortor. Nunc eu venenatis odio. Nunc eleifend porta sem, eget interdum purus dignissim quis. Praesent odio justo, posuere a ex at, pretium accumsan erat. Etiam volutpat, risus eu interdum mollis, orci est consectetur turpis, a convallis ex nulla in neque. Donec viverra vitae arcu ac faucibus. Donec maximus, felis in sodales aliquet, lectus dui suscipit nibh, non malesuada lacus dui at odio. Nullam nibh tortor, tristique at molestie eu, varius in orci. In ac leo vitae arcu pharetra consectetur ac ac arcu. Pellentesque fermentum tellus ut lacus vestibulum finibus. Ut ante velit, faucibus quis arcu sed, iaculis congue metus. Nunc imperdiet augue sed orci tincidunt, et fringilla arcu efficitur. Etiam lacinia consequat diam eu porta. Maecenas sed lacus hendrerit neque dictum blandit. Duis magna eros, tempus at massa pulvinar, consequat feugiat massa. Vestibulum et leo sit amet quam semper ultrices.</p>
        <hr>
        <h3 class="row p-title p-1 pl-4 col-md-5"><b>Características</b></h3>
        <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae accumsan lacus, eu rhoncus dolor. Donec egestas nulla sit amet tellus molestie consectetur. Donec pharetra nibh a sem elementum malesuada. Aliquam nec tortor at diam elementum semper id eget nulla. In at nisi quis mauris fermentum sagittis. Donec sed augue a nisl interdum iaculis at a elit. Aliquam urna ligula, dapibus at rutrum ut, rutrum a lectus. Vestibulum dictum venenatis ullamcorper. Quisque accumsan nunc ipsum, porta suscipit odio pulvinar sed. Vivamus gravida nisl sed leo vulputate suscipit. Sed nisi nisi, malesuada quis imperdiet at, faucibus id ligula.</p>
        <hr>
        <h3 class="row p-title p-1 pl-4 col-md-5"><b>Localização</b></h3>
        <p class="p-2">Phasellus ultrices commodo turpis, in suscipit leo consequat ut. Mauris fringilla a massa vitae iaculis. Vivamus rhoncus libero at ultrices mattis. Quisque id elit elementum, faucibus erat ac, pretium sem. Mauris gravida sodales varius. Nunc id pretium erat, quis accumsan velit. Donec accumsan dignissim consectetur.</p>
    </div>
</div>