
<?php require_once("connect.php");



	$query =mysqli_query("SELECT * FROM sub_program WHERE id_pk = '" . $_POST["id_pk"] . "' ");
	
?>
	<option></option>

<?php
	while($datasubprogram = mysqli_fetch_array($query))) {
?>
	<option value="<?php echo $datasubprogram["id_sp"]; ?>"><?php echo $datasubprogram["nama_sp"]; ?></option>
<?php

}
?>
