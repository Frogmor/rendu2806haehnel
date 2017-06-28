<?php
    $dbh = new PDO('mysql:host=localhost;dbname=clicom', 'root', '');
    $sql ="SELECT * from client";

    echo "<table border=1>";
    echo "<tr>
            <th>n° Client</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Localité</th>
            <th>(CAT)</th>
            <th>Compte</th>
          </tr>";
    foreach($dbh->query($sql) as $value) {
      // for ($i=0; $i < 6; $i++) {
      //   echo $value[$i]." ";
      // }
      // echo "<br>\n";
      echo "<tr>
              <td>".$value['NCLI']."</td>
              <td>".$value['NOM']."</td>
              <td>".$value['ADRESSE']."</td>
              <td>".$value['LOCALITE']."</td>
              <td>".$value['(CAT)']."</td>
              <td>".$value['COMPTE']."</td>
            </tr>";
    }
    echo "</table><br>";
    $sql = "SELECT NOM from client";
    echo "<form method='GET' action='recherche.php'>";
    echo "<select id='select1' name='select1' class='form-control'>";

    foreach($dbh->query($sql) as $key =>$value) {
      echo "<option value=\"".$value['NOM']."\">".$value['NOM']."</option>";
    }
    echo "</select>";
    // echo "</form>";
    // echo "<form action='recherche.php'>";
    echo "<input type='submit' name='submit' value='submit'/>";
    echo "</form>";

    // if(isset($_GET['submit']) and isset($_GET['select1'])){
    //   $nsel=$_GET['select1'];
    //   $sel = "SELECT * from Client WHERE NOM = '$nsel'";
    //   echo "<table border=1>";
    //   echo "<tr>
    //           <th>n° Client</th>
    //           <th>Nom</th>
    //           <th>Adresse</th>
    //           <th>Localité</th>
    //           <th>(CAT)</th>
    //           <th>Compte</th>
    //         </tr>";
    //   foreach($dbh->query($sql) as $value) {
    //     echo "<tr>
    //             <td>".$value['NCLI']."</td>
    //             <td>".$value['NOM']."</td>
    //             <td>".$value['ADRESSE']."</td>
    //             <td>".$value['LOCALITE']."</td>
    //             <td>".$value['(CAT)']."</td>
    //             <td>".$value['COMPTE']."</td>
    //           </tr>";
    //     }
    //   echo "</table>";
    // }
?>
