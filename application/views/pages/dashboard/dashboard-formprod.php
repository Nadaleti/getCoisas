<div class="container-fluid">
    <!-- Menu lateral -->
    <div class="row">   
        <ul class="nav nav-pilss col-md-2 d-md-block border-right flex-column py-4">
            <li class="nav-item border-bottom">
                <a href="#" class="nav-link active" style="font-size:15px;">
                    <i class="fas fa-home"></i>
                    <span>Resumo</span>
                </a>
            </li>
            
            <li class="nav-item border-bottom bg-primary">
                <a class="nav-link" href="#" style="font-size:15px; color:white;">
                    <i class="fas fa-handshake"></i>
                    <span>Anúncios</span>
                </a>
            </li>
            
            <li class="nav-item border-bottom">
                <a class="nav-link" data-toggle="collapse" href="#user-collapse" role="button" aria-expanded="false" aria-controls="user-collapse" style="font-size:15px;">
                    <i class="fa fa-user-cog"></i>
                    <span>Meus Dados</span>
                </a>
                <div class="collapse" id="user-collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item pl-5"><a href="#" class="nav-link">Editar Informações</a></li>
                        <li class="nav-item pl-5"><a href="#" class="nav-link">Alterar Plano</a></li>
                        <li class="nav-item pl-5"><a href="#" class="nav-link" style="color: red;">Excluir Conta</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        
        <!-- Conteúdo da página -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-3">
            <div class="col-md-12 row justify-content-between">
                <div class="col-md-5"><h3>Novo Anúncio</h3></div>
            </div>
            <div class="col-md-11 mx-auto">
                <form class="col-md-12 mx-auto text-left" action="" method="">
                    <hr>
                    
                    <div class="form-group">
                        <label class="">Título do Anúncio</label>
                        <input class="form-control" type="text" placeholder="Jogo de tabuleiro &#34;Banco Imobiliário&#34;" maxlength="128" aria-describedby="help_title" required>
                        <small id="help_title" class="form-text text-muted">O título do anúncio tem no máximo 128 caracteres</small>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-4">
                            <label class="">Categoria</label>
                            <select class="form-control" required>
                                <option selected>Escolha uma das opções</option>
                                <option value="eletronicos">Eletrônicos</option>
                                <option value="casa">Casa e Decoração</option>
                                <option value="roupas">Roupas</option>
                                <option value="festa">Festa e Eventos</option>
                                <option value="lazer">Lazer</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="">Quantidade</label>
                            <input class="form-control" type="number" placeholder="3" min="1">
                        </div>
                        <div class="col-md-4">
                            <label class="">Preço (por dia)</label>
                            <input class="form-control" type="text" placeholder="R$ 1,00" required>
                        </div>
                    </div>
                    
                    <div class="form-group form-row">
                        
                        <!-- Tags -->
                        <label class="">Subcategorias</label>
                        <div class="card col-md-12">
                            <div class="card-header">
                                <div id="selected"></div>
                            </div>
                            <div class="card-body" id="options">
                                <button class="btn badge badge-primary" id="bf">Black Friday</button>
                                <button class="btn badge badge-primary" id="carn" draggable="true">Carnaval</button>
                                <button class="btn badge badge-primary" id="esp">Esportes</button>
                                <button class="btn badge badge-primary" id="casa">Casa</button>
                                <button class="btn badge badge-primary" id="fj">Festa Junina</button>
                                <button class="btn badge badge-primary" id="mod">Moda</button>
                                <button class="btn badge badge-primary" id="jog">Jogos</button>
                                <button class="btn badge badge-primary" id="fest">Festas</button>
                                <button class="btn badge badge-primary" id="urb">Urbano</button>
                                <button class="btn badge badge-primary" id="praia">Praia</button>
                                <button class="btn badge badge-primary" id="bb">Baby</button>
                                <button class="btn badge badge-primary" id="est">Estudante</button>
                                <button class="btn badge badge-primary" id="cas">Casamento</button>
                                <button class="btn badge badge-primary" id="cult">Cultura</button>
                                <button class="btn badge badge-primary" id="coz">Cozinha</button>
                                <button class="btn badge badge-primary" id="anim">Animais</button>
                                <button class="btn badge badge-primary" id="mus">Música</button>
                                <button class="btn badge badge-primary" id="tran">Transporte</button>
                                <button class="btn badge badge-primary" id="inv">Inverno</button>
                                <button class="btn badge badge-primary" id="fda">Fim de ano</button>
                                <button class="btn badge badge-primary" id="nat">Natal</button>
                                <button class="btn badge badge-primary" id="mae">Mãe</button>
                                <button class="btn badge badge-primary" id="pai">Pai</button>
                                <button class="btn badge badge-primary" id="hal">Haloween</button>
                                <button class="btn badge badge-primary" id="cri">Criança</button>
                                <button class="btn badge badge-primary" id="ver">Verão</button>
                            </div>
                        </div>
                        <small class="form-text text-muted">Selecione três subcategorias que são relacionadas ao seu produto</small>
                    </div>

                    <div class="form-group">
                        <label class="">Descrição</label>
                        <textarea class="form-control" rows="3" maxlength="500" placeholder="Escreva aqui os detalhes e informações que acha relevante sobre o produto" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="">Imagens</label>
                        <input class="form-control-file" name="photos[]" id="photos" value="Carregar" type="file" multiple="" />
                    </div>
                    
                    <div class="row justify-content-end col-md-12 my-4">
                        <button class="btn btn-secondary" type="submit">Cancelar</button>
                        <button class="btn btn-primary ml-3" type="submit">Cadastrar</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="delete_confirmation" tabindex="-1" role="dialog" aria-labelledby="delete_confirmation" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Excluir anúncio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Você está prestes a excluir um anúncio. Este procedimento é irreversível e não te dá direito a um novo anúncio.</p>
                <p>Você tem certeza que deseja excluir este anúncio?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-danger">Sim</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('.card-body').on('click', '.badge', (function (ev) {
        ev.preventDefault();
        var id = $(this).attr('id');
        
        if ($("#selected > .badge").length < 3) {
            var text = $(this).text();
            $(this).remove();
            $("#selected").append('<button class="btn badge badge-primary mr-2" id="' + id + '">' + text + '</button>');
        } else {
            alert("É possível selecionar apenas três subcategorias");
        }
    }));
    
    $('#selected').on('click', '.badge', (function (ev) {
        ev.preventDefault();
        var id = $(this).attr('id');
        
        var text = $(this).text();
        $(this).remove();
        $(".card-body").append('<button class="btn badge badge-primary mr-2" id="' + id + '">' + text + '</button>');
    }));
</script>