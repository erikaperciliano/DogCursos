

<h1 style="text-align:center">Bem-Vindos a Dog cursos</h1>
<form method="post" action="login.php">
    <label class="badge badge-secondary">Usuário</label>
    <input class="form-control" type="text" name="usuario" placeholder="Nome do usuário">
    <br>
    <label class="badge badge-secondary">Senha</label>
    <input class="form-control"  type="password" name="senha" placeholder="Digite a senha">
    <input class="btn btn-success" type="submit" value="Entrar">
</form>

<br>
<?php if(isset($_GET['erro'])){ ?>
    <div class="alert alert-danger" role="alert">
        Usuário e/ou senha inválidos
    </div>
    <?php } 
?>