<table style="border:1px solid #ccc; width:100%">
    <tr>
        <td>
            <th>Nome Curso</th>
            <th>Carga Horária</th>
        </td>
    </tr>

    <?php   
        while($linha = mysqli_fetch_array($consulta_cursos)){
            echo '<tr><td>'.$linha['nome_curso'].'</td>';
            echo '<td>'.$linha['carga_horaria'].'</td></tr>';
        }
    ?>

</table>