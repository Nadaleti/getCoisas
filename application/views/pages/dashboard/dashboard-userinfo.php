<div class="container-fluid">
    <div class="row">
        <ul class="nav nav-pilss col-md-2 d-md-block border-right flex-column">
            <li class="nav-item border-bottom">
                <a href="#" class="nav-link active" style="font-size:20px;">
                    <i class="fas fa-home"></i>
                    <span>Resumo</span>
                </a>
            </li>
            
            <li class="nav-item border-bottom">
                <a class="nav-link" href="#" style="font-size:20px">
                    <i class="fas fa-handshake"></i>
                    <span>Anúncios</span>
                </a>
            </li>
            
            <li class="nav-item border-bottom">
                <a class="nav-link" data-toggle="collapse" href="#user-collapse" role="button" aria-expanded="false" aria-controls="user-collapse" style="font-size:20px;">
                    <i class="fa fa-user-cog"></i>
                    <span>Meus Dados</span>
                </a>
                <div class="collapse show" id="user-collapse">
                    <ul class="nav flex-column">
                        <li class="nav-item bg-primary pl-5"><a href="#" class="nav-link" style="color:white;">Editar Informações</a></li>
                        <li class="nav-item pl-5"><a href="#" class="nav-link">Alterar Plano</a></li>
                        <li class="nav-item pl-5"><a href="#" class="nav-link" style="color: red;">Excluir Conta</a></li>
                    </ul>
                </div>
            </li>
        </ul>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="col-md-12 my-3">
                <h1 class="mb-4">Meus Dados</h1>
                <form class="col-md-12 mx-auto text-left" action="" method="">
                    <hr>

                    <div class="form-group">
                        <label class="text-muted">e-mail</label>
                        <input class="form-control" type="email" placeholder="get.coisas@aluguel.com" readonly>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label class="text-muted">CPF</label>
                            <input class="form-control" type="text" maxlength="14" placeholder="ex. 123.456.789-10" required>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted">Data de nascimento</label>
                            <input class="form-control" type="text" maxlength="10" placeholder="ex. 01/01/2001" required>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label class="text-muted">Telefone</label>
                            <input class="form-control" type="text" placeholder="ex. (99) 99999-9999" required>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted">Telefone (opcional)</label>
                            <input class="form-control" type="text" placeholder="ex. (99) 99999-9999">
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label class="text-muted">CEP</label>
                        <input class="form-control" type="text" placeholder="ex. 13300-000" required>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="text-muted">Endereço</label>
                            <input class="form-control" type="text" placeholder="ex. Rua Moisés de Oliveira" required>
                        </div>
                        <div class="col-md-3">
                            <label class="text-muted">Número</label>
                            <input class="form-control" type="text" placeholder="ex. 1030" required>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-7">
                            <label class="text-muted">Bairro</label>
                            <input class="form-control" type="text" placeholder="ex. Jardim das Aves" required>
                        </div>
                        <div class="col-md-5">
                            <label class="text-muted">Complemento</label>
                            <input class="form-control" type="text" placeholder="ex. Apto 77" required>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label class="text-muted">Cidade</label>
                            <input class="form-control" type="text" placeholder="ex. Sorocaba" required>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted">Estado</label>
                            <input class="form-control" type="text" placeholder="ex. São Paulo" required>
                        </div>
                    </div>

                    <div class="text-center my-4">
                        <button class="btn btn-primary col-md-5 mb-2" type="submit">Concluir</button>
                    </div>
                </form>
            </div>
            
        </main>
    </div>
</div>