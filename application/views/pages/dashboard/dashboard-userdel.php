<div class="container-fluid" style="height:100%;">
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
                        <li class="nav-item pl-5"><a href="#" class="nav-link">Editar Informações</a></li>
                        <li class="nav-item pl-5"><a href="#" class="nav-link">Alterar Plano</a></li>
                        <li class="nav-item bg-danger pl-5"><a href="#" class="nav-link" style="color: white;">Excluir Conta</a></li>
                    </ul>
                </div>
            </li>
        </ul>

        <main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-4">
            <form class="px-3 py-2 mt-3 border rounded justify-content-center">
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
</script>