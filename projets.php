<?php
  session_start();
  include "./includes/header.php";
?>

<section>
<?php
	$sql = "SELECT * FROM `Projet` " ;
	$results = mysqli_query($c,$sql);		
	while ($row = mysqli_fetch_assoc($results)) {
		
	}		
?>
</section>

<?php
  include "./includes/footer.php";
?>