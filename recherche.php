<?php
$dbh = new PDO('mysql:host=localhost;dbname=clicom', 'root', '');
$selectedVal = $_GET['select1'];
echo $selectedVal;
if (isset($selectedVal)){
  $sql = "SELECT * from client WHERE NOM =(:NOM)";
  $sel=$dbh->prepare($sql);
  $sel->bindParam(':NOM', $selectedVal);
  $sel->execute();
  // echo $sel;
  if ($sel){
    echo "<table border=1>";
    echo "<tr>
            <th>n° Client</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Localité</th>
            <th>(CAT)</th>
            <th>Compte</th>
          </tr>";
    foreach($sel as $value) {
      echo "<tr>
              <td>".$value['NCLI']."</td>
              <td>".$value['NOM']."</td>
              <td>".$value['ADRESSE']."</td>
              <td>".$value['LOCALITE']."</td>
              <td>".$value['(CAT)']."</td>
              <td>".$value['COMPTE']."</td>
            </tr>";
      }
    echo "</table>";
  }
}
$prix=100;
$stc=1000;
$sql = "SELECT * from produit WHERE PRIX >(:PRIX) AND QSTOCK>(:QSTOCK)";
$sel=$dbh->prepare($sql);
$sel->bindParam(':PRIX', $prix);
$sel->bindParam(':QSTOCK', $stc);
$sel->execute();
// echo $sel;
if ($sel){
  echo "<table border=1>";
  echo "<tr>
          <th>n° Produit</th>
          <th>Libelle</th>
          <th>Prix</th>
          <th>Stock</th>
        </tr>";
  foreach($sel as $value) {
    echo "<tr>
            <td>".$value['NPRO']."</td>
            <td>".$value['LIBELLE']."</td>
            <td>".$value['PRIX']."</td>
            <td>".$value['QSTOCK']."</td>
          </tr>";
    }
  echo "</table>";
}





 ?>
