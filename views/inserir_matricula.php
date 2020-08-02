<h1>Inserir nova matrícula</h1>

<form action="processa_matricula.php" method="post">
    <br>    
    <p>Selecione o aluno</p>
    <select class="form-control" name="escolha_aluno">
        <option>Selecione um aluno</option>
        <?php   
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
            }
        ?>
    </select>
    <br><br>
    <p>Selecione o curso</p>
    <select class="form-control" name="escolha_curso">
        <option>Selecione um curso</option>
        <?php   
            while($linha = mysqli_fetch_array($consulta_cursos)){
                echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
            }
        ?>
    </select>
    <br><br>     
    <input class="btn btn-success" type="submit" value="Matricular aluno no curso">   
</form>