<div class="container-fluid">
    <!-- Menu lateral -->
    <div class="row">   
        <ul class="nav nav-pilss col-md-2 d-md-block border-right flex-column">
            <li class="nav-item border-bottom">
                <a href="#" class="nav-link active" style="font-size:20px;">
                    <i class="fas fa-home"></i>
                    <span>Resumo</span>
                </a>
            </li>
            
            <li class="nav-item border-bottom bg-primary">
                <a class="nav-link" href="#" style="font-size:20px; color:white;">
                    <i class="fas fa-handshake"></i>
                    <span>Anúncios</span>
                </a>
            </li>
            
            <li class="nav-item border-bottom">
                <a class="nav-link" data-toggle="collapse" href="#user-collapse" role="button" aria-expanded="false" aria-controls="user-collapse" style="font-size:20px;">
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
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-2">
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
                        
                        <!-- Tags -->
                        <div class="col-md-8">
                            <label class="">Subcategorias</label>
                            <div class="border rounded p-1">
                                <div class="input-group input-group-sm">
                                    <input class="form-control col-md-3" type="text">
                                </div>
                            </div>
                            <div class="dropdown-menu" aria-labelledby="drop-tags">
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label class="">Quantidade</label>
                            <input class="form-control" type="number" placeholder="3" min="1">
                        </div>
                        <div class="col-md-6">
                            <label class="">Preço (por dia)</label>
                            <input class="form-control" type="text" placeholder="R$ 1,00" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="">Descrição</label>
                        <textarea class="form-control" rows="3" maxlength="500" placeholder="Escreva aqui os detalhes e informações que acha relevante sobre o produto" required></textarea>
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
    $("#tags").keydown(function(event){
        if (event.which == 13) {
            event.preventDefault();
            var val = $(this).val();
            $("#tag-list").append("<div class=""></div>");
        }        
    });
</script>