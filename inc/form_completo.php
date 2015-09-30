<?php;
?>
<div id ='form' class="col-lg-6">
    <h1>
        <center><b> Cadastro</b></center>
    </h1>
    <form class="form-horizontal" method="post" action="faz_cadastro.php">
        <div class="form-group">
            <label for="inputNome" class="col-sm-2 control-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Senha:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Senha" name="senha">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Cadastrar</button>
            </div>
        </div>
    </form>
</div>

<?php
?>