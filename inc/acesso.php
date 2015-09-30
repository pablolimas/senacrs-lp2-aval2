
<form class="form-horizontal" action="faz.login.php" method="post" >
    <div class="control-group">
        <label class="control-label" for="inputLogin">Login</label>
        <div class="controls">
            <input id="inputEmail" name="email" type="text" placeholder="Digite o seu Login..." />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword">Senha</label>
        <div class="controls">
            <input id="inputPassword" name="senha" type="password" placeholder="Digite a sua senha..." />
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <label class="checkbox"><input type="checkbox" /> Lembrar senha</label>
            <button class="btn" type="submit">Acessar</button>
        </div>
    </div>
</form>

<?php
if (isset($_GET['erro_login']) && $_GET['erro_login'] == 1) {
    echo '<p>Login inválido!</p>';
}

if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] == true) {
    echo 'Bem vindo, ' . $_SESSION['nome_do_usuario'];
    echo " <a href='doLogout.php'>Sair</a>";
}
?>
