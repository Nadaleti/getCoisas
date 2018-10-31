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
            <!-- header da seção -->
            <div class="col-md-12 row justify-content-between">
                <div class="col-md-5"><h3>Meus Anúncios</h3></div>
                <div class="col-md-3 text-right">
                    <button class="btn btn-outline-primary">Novo Anúncio<i class="fa fa-plus ml-2"></i></button>
                </div>
            </div>
            
            <!-- Tabela de produtos anunciados -->
            <div class="col-md-11 mx-auto">
                <table class="table mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 35%;">Produto</th>
                            <th>Categoria</th>
                            <th>Preço (por dia)</th>
                            <th>Expiração</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                            <td>Casa e Decoração</td>
                            <td>R$ 10,00</td>
                            <td>dd/mm/yyyy</td>
                            <td>Alugado</td>
                            <td><a href="#"><i class="fa fa-pencil-alt table-icon renedit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a></td>
                            <td><a href="#" data-toggle="modal" data-target="#delete_confirmation"><i class="far fa-trash-alt table-icon delete" data-toggle="tooltip" data-placement="top" title="Excluir" ></i></a></td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                            <td>Casa e Decoração</td>
                            <td>R$ 1,00</td>
                            <td>dd/mm/yyyy</td>
                            <td>Disponível</td>
                            <td><a href="#"><i class="fa fa-pencil-alt table-icon renedit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a></td>
                            <td><a href="#" data-toggle="modal" data-target="#delete_confirmation"><i class="far fa-trash-alt table-icon delete" data-toggle="tooltip" data-placement="top" title="Excluir" ></i></a></td>
                        </tr>
                        <tr class="table-danger">
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                            <td>Festa e Eventos</td>
                            <td>R$ 20,00</td>
                            <td>dd/mm/yyyy</td>
                            <td>Expirado</td>
                            <td></td>
                            <td><a href="#" data-toggle="tooltip" data-placement="top" title="Renovar"><i class="fas fa-undo-alt table-icon renedit"></i></a></td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing</td>
                            <td>Casa e Decoração</td>
                            <td>R$ 7,00</td>
                            <td>dd/mm/yyyy</td>
                            <td>Disponível</td>
                            <td><a href="#"><i class="fa fa-pencil-alt table-icon renedit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a></td>
                            <td><a href="#" data-toggle="modal" data-target="#delete_confirmation"><i class="far fa-trash-alt table-icon delete" data-toggle="tooltip" data-placement="top" title="Excluir" ></i></a></td>
                        </tr>
                    </tbody>
                </table>
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
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>