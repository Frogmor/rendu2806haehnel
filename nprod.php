<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="NPRO">NPRO</label>
  <div class="col-md-4">
  <input id="NPRO" name="NPRO" placeholder="NPRO" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="LIBELLE">LIBELLE</label>
  <div class="col-md-4">
  <input id="LIBELLE" name="LIBELLE" placeholder="LIBELLE" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="PRIX">PRIX</label>
  <div class="col-md-4">
  <input id="PRIX" name="PRIX" placeholder="PRIX" class="form-control input-md" type="text">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="QSTOCK">QSTOCK</label>
  <div class="col-md-4">
  <input id="QSTOCK" name="QSTOCK" placeholder="QSTOCK" class="form-control input-md" type="text">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="valide"></label>
  <div class="col-md-4">
    <button id="valide" name="valide" class="btn btn-primary">valider</button>
  </div>
</div>

</fieldset>
</form>


<?php
$dbh = new PDO('mysql:host=localhost;dbname=clicom', 'root', '');
$sql = "INSERT INTO `produit` (`NPRO`, `LIBELLE`, `PRIX`, `QSTOCK`) VALUES ('(:NPRO)', '(:NLIBELLE)', '(:NPRIX)', '(:NQSTOCK)')";
$sel=$dbh->prepare($sql);


if(!empty($_POST['valide'])){
  $Npro = $_POST['NPRO'];
  $Libelle = $_POST['LIBELLE'];
  $Prix = $_POST['PRIX'];
  $Qstock = $_POST['QSTOCK'];
  $sel->bindParam(':NPRO', $Npro);
  $sel->bindParam(':NLIBELLE', $Libelle);
  $sel->bindParam(':NPRIX', $Prix);
  $sel->bindParam(':NQSTOCK', $Qstock);
  $sel->execute();

}

 ?>
