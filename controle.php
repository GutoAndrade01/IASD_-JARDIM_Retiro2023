

<!DOCTYPE html>
  <link rel="stylesheet" href="controle.style.css">
  <link href="controle.js">
   <div class="btn">
      <button onclick="window.print()">Imprimir Resultados</button>
   </div>
   <script>
        /*function printTable() {
        window.print();
        }*/
        function printTable() {
    var printContents = document.getElementById("table").innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
  </script>
 <style> 
 @media print {
  button {
    display: none;
  }
}</style>
    
<!DOCTYPE html>



<?php
include "conexao.php";
require_once('fpdf.php');

#$pdf = new FPDF();
#$pdf->AddPage('controle.php');
#$pdf->SetFont('Arial', 'B', 16);
#$pdf->Cell(0, 10, 'lista de Inscritos', 0, 1, 'C');
#$pdf->SetFont('Arial', '', 12);
#$pdf->Cell(0, 10, '$result', 0, 1);
#$pdf->Output();





  $sql = "SELECT * FROM heroku_7fa5047aa930f7e.cadastro ORDER BY id DESC";
  $result= $conexao->query($sql);
  $num_rows = mysqli_num_rows($result);
if ($result->num_rows > 0) {
  echo "<table>";
      echo "<tr>
             <th>Total de Registros: $num_rows</th>
           </tr>";
                  
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
              <th>Status</th>
            </tr>
          </thead>";
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
                  echo "<td>" . (isset($row["nome"]) ? $row["nome"]: "-") . "</td>";
                  echo "<td>" . (isset($row["dataNasc"]) ? $row["dataNasc"]: "-") . "</td>";
                  #echo "<td>" . (isset($row["cpf"]) ? $row["cpf"]: "-") . "</td>";
                  echo "<td>" . (isset($row["sexo"]) ? $row["sexo"]: "-") . "</td>";
                  echo "<td>" . (isset($row["estCivil"]) ? $row["estCivil"]: "-") . "</td>";
                  echo "<td>" . (isset($row["fone"]) ? $row["fone"]: "-") . "</td>";
                  echo "<td>" . (isset($row["cidade"]) ? $row["cidade"]: "-") . "</td>";
                  echo "<td>" . (isset($row["cep"]) ? $row["cep"]: "-") . "</td>";
                  echo "<td>" . (isset($row["estado"])? $row["estado"]: "-") . "</td>";
                  echo "<td>" . (isset($row["iasd"]) ? $row["iasd"]: "-") . "</td>";
                  echo "<td>" . (isset($row['regime']) ? $row['regime']: "não") . "</td>";
                  echo "<td>" . (isset($row['cozinha']) ? $row['cozinha']: "não") . "</td>";
                  echo "<td>" . (isset($row['status']) ? $row['status']: "-") . "</td>";
          echo"</tr>";
          }      
          echo "</table>";
  #echo "Total de Registros: $num_rows";
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