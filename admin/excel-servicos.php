<?php
require_once 'dbconfig.php';
error_reporting(~E_ALL);

$arqexcel = "<meta charset='UTF-8'>";

$arqexcel .= "<table border='1'>";
$arqexcel .= "<thead>
    <tr>
      <th>NOME DO SERVIÇO</th>
      <th>PARCEIRO</th>
      <th>VALOR PARTICULAR</th>
      <th>VALOR CENTROCARD</th>
      <th>TIPO</th>
    </tr>
  </thead>
  <tbody>";
$stmt = $DB_con->prepare("SELECT * FROM services ORDER BY id DESC");
$stmt->execute();
if ($stmt->rowCount() > 0) {
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);

    $arqexcel .= "<tr>
      <td>$name</td>
      <td>";
      if ($partner == null or '') {
        $arqexcel .= "NÃO INFORMADO";
      } else {
        $arqexcel .= $partner;
      }
      $arqexcel .="</td>";
     
      $arqexcel .= "<td>";
      if ($private == null or '') {
        $arqexcel .= "NÃO INFORMADO";
      } else {
        $arqexcel .= $private;
      }
      $arqexcel .="</td>";
      $arqexcel .= "<td>";
      if ($centrocard == null or '') {
        $arqexcel .= "NÃO INFORMADO";
      } else {
        $arqexcel .= $centrocard;
      }
      $arqexcel .="</td>";
      $arqexcel .= "<td>";
      if ($type == null or '') {
        $arqexcel .= "NÃO INFORMADO";
      } else {
        $arqexcel .= $type;
      }
      $arqexcel .="</td>";
      $arqexcel .="</tr>";
  }
}
$arqexcel .= "</tbody>
  </table>";

header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename = relatorio-servicos-site.xls");

echo $arqexcel;