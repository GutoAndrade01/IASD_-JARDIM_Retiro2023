<!DOCTYPE html>
  <link rel="stylesheet" href="controle.style.css">
<!DOCTYPE html>



<?php
include "conexao.php";

  $sql = "SELECT * FROM heroku_7fa5047aa930f7e.cadastro ORDER BY id DESC";
  $result= $conexao->query($sql);
if ($result->num_rows > 0) {
  echo "<table>";
      echo "<tr>
              <th>Nome</th>
              <th>Data de Nascimento</th>
              <th>Sexo</th>
              <th>Estado Civil</th>
              <th>Telefone</th>
              <th>Cidade</th>
              <th>CEP</th>
              <th>Estado</th>
              <th>IASD</th>
              <th>Vegetariano?</th>
              <th>Cozinha Propria?</th>
              <th>#</th>
            </tr>
          </thead>";
          while($row = $result->fetch_assoc()) {
            echo "<tr>
                  <td>" . $row["nome"]. "</td>
                  <td>" . $row["dataNasc"]. "</td>
                  <td>" . $row["cpf"]. "</td>
                  <td>" . $row["sexo"]. "</td>
                  <td>" . $row["estCivil"]. "</td>
                  <td>" . $row["fone"]. "</td>
                  <td>" . $row["cidade"]. "</td>
                  <td>" . $row["cep"]. "</td>
                  <td>" . $row["estado"]. "</td>
                  <td>" . $row["iasd"]. "</td>
                  <td>" . $row["regime"]. "</td>
                  <td>" . $row["cozinha"]. "</td>
                </tr>";
                }
  echo "</table>";
} else {
  echo "Não foram encontrados resultados";
}





  

/*?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Controle</title>
</head>
<body>
         <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Estado Civil</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Estado</th>
                    <th scope="col">IASD</th>
                    <th scope="col">Vegetariano?</th>
                    <th scope="col">Cozinha Propria?</th>
                    <th scope="col">#</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                      while($cad_data.mysqli_fetch_assoc($result)){
                      echo "<tr>";
                      echo "<td>" . $cad_data['nome'] . "</td>";
                      echo "<td>" . $cad_data['dadaNac'] . "</td>";
                      echo "<td>" . $cad_data['sexo'] . "</td>";
                      echo "<td>" . $cad_data['estCivil'] . "</td>";
                      echo "<td>" . $cad_data['fone'] . "</td>";
                      echo "<td>" . $cad_data['cidade'] . "</td>";
                      echo "<td>" . $cad_data['cep'] . "</td>";
                      echo "<td>" . $cad_data['estado'] . "</td>";
                      echo "<td>" . $cad_data['iasd'] . "</td>";
                      echo "<td>" . $cad_data['regime'] . "</td>";
                      echo "<td>" . $cad_data['cozinha'] . "</td>";
                      echo "</tr>";
                      }
                    ?>
                </tbody>
              </table>
        </div>
</body>
</html>*/