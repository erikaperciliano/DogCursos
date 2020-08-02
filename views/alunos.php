<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Data Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        <?php   
            while($linha = mysqli_fetch_array($consulta_alunos)){
                echo '<tr><td>'.$linha['nome_aluno'].'</td>';
                echo '<td>'.$linha['data_nascimento'].'</td>';
        ?>
        <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno'];?>">
            <span class="material-icons">edit</span>
        </a></td>

        <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno'];?>">
            <span class="material-icons" style="color:tomato;">
                delete
            </span>
        </a></td></tr>
        <?php
            }
        ?>
    </tbody>
</table>