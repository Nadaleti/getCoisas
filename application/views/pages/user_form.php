<div class="col-md-12 text-center my-3">
    <h1 class="mb-4">Cadastre-se</h1>
    <form class="col-md-5 mx-auto text-left" action="" method="">
        <hr>
        <h3>Dados pessoais</h3>
        
        <div class="form-group">
            <lable class="">e-mail</lable>
            <input class="form-control" type="email" placeholder="get.coisas@aluguel.com" required>
        </div>

        <div class="form-group">
            <label class="">Senha</label>
            <div class="input-group">
                <input class="form-control col-md-7" type="password" id="senha" required>
                <div class="input-group-append">
                    <i class="btn far fa-eye input-group-text" style="background-color: white !important;" id="see-pass"></i>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="">Nome</label>
            <input class="form-control" type="text" maxlength="32" placeholder="ex. José da Silva" required>
        </div>

        <div class="form-group">
            <label class="">Data de nascimento</label>
            <input class="form-control col-md-5" type="text" maxlength="10" placeholder="ex. 01/01/2001" required>
        </div>

        <div class="form-group">
            <label class="">CPF</label>
            <input class="form-control col-md-7" type="text" maxlength="14" placeholder="ex. 123.456.789-10" required>
        </div>

        <div class="form-group">
            <label class="">Telefone</label>
            <input class="form-control col-md-7" type="text" placeholder="ex. (99) 99999-9999" required>
        </div>

        <div class="form-group">
            <label class="">Telefone (opcional)</label>
            <input class="form-control col-md-7" type="text" placeholder="ex. (99) 99999-9999">
        </div>
        
        <hr>
        <h3>Endereço</h3>
        
        <div class="form-group">
            <label class="">CEP</label>
            <input class="form-control" type="text" placeholder="ex. 13300-000" required>
        </div>
        
        <div class="form-group form-row">
            <div class="col-md-9">
                <label class="">Endereço</label>
                <input class="form-control" type="text" placeholder="ex. Rua Moisés de Oliveira" required>
            </div>
            <div class="col-md-3">
                <label class="">Número</label>
                <input class="form-control" type="text" placeholder="ex. 1030" required>
            </div>
        </div>
        
        <div class="form-group form-row">
            <div class="col-md-7">
                <label class="">Bairro</label>
                <input class="form-control" type="text" placeholder="ex. Jardim das Aves" required>
            </div>
            <div class="col-md-5">
                <label class="">Complemento</label>
                <input class="form-control" type="text" placeholder="ex. Apto 77" required>
            </div>
        </div>
        
        <div class="form-group form-row">
            <div class="col-md-6">
                <label class="">Cidade</label>
                <input class="form-control" type="text" placeholder="ex. Sorocaba" required>
            </div>
            <div class="col-md-6">
                <label class="">Estado</label>
                <input class="form-control" type="text" placeholder="ex. São Paulo" required>
            </div>
        </div>
        
        <div class="text-center my-4">
            <button class="btn btn-primary col-md-5 mb-2" type="submit">Cadastrar</button>
            <p>Já é cadastrado? <a href="#">Entre aqui</a></p>
        </div>
    </form>
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