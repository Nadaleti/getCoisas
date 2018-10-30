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
            
            <li class="nav-item bg-primary border-bottom">
                <a class="nav-link" href="#" style="font-size:20px; color:white;">
                    <i class="fa fa-user-cog"></i>
                    <span>Meus Dados</span>
                </a>
            </li>
        </ul>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-2 accordion" id="options">
            <div class="card col-md-12">
                <a href="#" class="card-header row justify-content-between dashboard-link" value="oi" id="headingOne" data-toggle="collapse" data-target="#info-collapse" aria-expanded="false" aria-controls="collapseOne" onclick="change_icon()">
                    <div class="col-md-7"><h3>Editar Dados</h3></div><div class="col-md-5 text-right"><i id="oi" class="fa fa-chevron-down mt-2" style="color:black;"></i><i class="fa fa-chevron-up mt-2" style="color:black; display:none;"></i></div>
                </a>

                <div id="info-collapse" class="collapse" aria-labelledby="headingOne" data-parent="#options">
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
            </div>

            <div class="card col-md-12">
                <a href="#" class="card-header row justify-content-between dashboard-link" id="heading2"  data-toggle="collapse" data-target="#plan-collapse" aria-expanded="false" aria-controls="collapse2">
                    <div class="col-md-7"><h3>Alterar Plano</h3></div><div class="col-md-5 text-right"><i class="fa fa-chevron-down mt-2" style="color:black;"></i></div>
                </a>

                <div id="plan-collapse" class="collapse" aria-labelbyid="heading2" data-parent="#options"><p>cu</p></div>
            </div>

            <div class="card col-md-12">
                <a href="#" class="card-header row justify-content-between dashboard-link" id="heading3" data-toggle="collapse" data-target="#del-collapse" aria-expanded="false" aria-controls="collapse3">
                    <div class="col-md-7"><h3>Excluir Conta</h3></div><div class="col-md-5 text-right"><i class="fa fa-chevron-up mt-2" style="color:black; display:none;"></i><i class="fa fa-chevron-down mt-2" style="color:black;"></i></div>
                </a>

                <div id="del-collapse" class="collapse" aria-labelbyid="heading3" data-parent="#options">
                    <form class="px-3 py-2 mt-3">
                        <p class="col-md-5">Deseja realmente deletar sua conta? Insira sua senha e confirme:</p>
                        <div class="form-group form-inline col-md-4">
                            <div class="input-group">
                                <input class="form-control col-md-12" type="password" id="senha" required>
                                <div class="input-group-append">
                                    <i class="btn far fa-eye input-group-text" style="background-color: white !important;" id="see-pass"></i>
                                </div>
                            </div>
                            <button type="submit" class="ml-3 btn btn-danger">Excluir</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
    $('#see-pass').click(function (){
        // Show password
        if($(this).hasClass("fa-eye")) {
            
            //Change icons
            $(this).removeClass("fa-eye");
            $(this).addClass("fa-eye-slash");
            
            // Show password content
            $('#senha').attr('type', 'text');
        }
        // Hide password
        else {
            
            //Change icons
            $(this).removeClass("fa-eye-slash");
            $(this).addClass("fa-eye");
            
            // Hide password content
            $('#senha').attr('type', 'password');
        }
    });
    
    //Change icon on accordion
    function change_icon() {
        //$(this).text().toggle();
        console.log($(this).val());
    }
</script>