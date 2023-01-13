

<!DOCTYPE html>
  <link rel="stylesheet" href="controle.style.css">
  <link href="controle.js">
   <div class="btn">
      <button onclick="window.print()">Imprimir Resultados</button>
      <!--<button id="update-button">Update</button> -->
    
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
const fileInput = document.getElementById("file-input");
const customBtn = document.getElementsByClassName("custom-file-upload")[0];
customBtn.addEventListener("click", function() {
  fileInput.click();
});

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



echo "<div>
        <input type='submit' value='Update' name='update'>
      </div>";

  $sql = "SELECT * FROM heroku_7fa5047aa930f7e.cadastro ORDER BY nome ASC";
  $result1= $conexao->query($sql);
  $num_rows = mysqli_num_rows($result1);
if ($result1->num_rows > 0) {
  echo "<table>";
      echo "<tr>
             <th>Total de Registros: $num_rows</th>
           </tr>";
                  
      echo "<tr>
              <th>Selecionar</th>
              <th>ID</th>
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
              <th>Anexos</th>
            </tr>
          </thead>";
          while($row = $result1->fetch_assoc()) {
            echo "<tr>";
                  echo '<td><input type="checkbox"  name="selected[]" value="' . $row['id'] . '"></td>';
                  echo "<td>" . (isset($row["id"]) ? $row["id"]: "-") . "</td>";
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
                  echo "<td>
                        <input type='file' name='attachment'>
                        <button class='custom-file-upload'>Upload File</button>
                        </td>";
          echo"</tr>";
          }      
          echo "</table>";
  #echo "Total de Registros: $num_rows";
          } else {
            echo "Não foram encontrados resultados";
          }

          
?>