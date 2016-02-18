<?php
/* --// var placement \\-- */
$x1 = -2.3;
$x2 = 2.3;
$y1 = -2.3;
$y2 = 2.3;
$zoom = 200;
if (isset($_POST['iterations_max']) && isset($_POST['deg'])){
	if ($_POST['iterations_max'] == NULL && $_POST['deg'] == NULL ){
		$iterations_max = 70;
		$deg = 3;
	}
	else{
		$iterations_max = $_POST['iterations_max'];
		$deg = $_POST['deg'];
	}

	
	$image_x = ($x2 - $x1)*$zoom;
	$image_y = ($y2 - $y1)*$zoom;
	
	/* --// generation couleur alea \\-- */
	$c1= rand(70,800);
	$c2= rand(70,800);
	$c3= rand(70,800);
	
	/* --// creation image \\-- */
	$image = imagecreatetruecolor($image_x, $image_y);
	$blanc = imagecolorallocate($image, 255, 255, 255);
	$noir  = imagecolorallocate($image, 0, 0, 0);
	imagefill($image, 0 ,0 , $blanc);
	
	/* --// attribution couleur pixel \\-- */
	$couleurs = array();
	for($i = 0; $i < $iterations_max; $i++){
		$couleur[$i] = imagecolorallocate($image, $i*$c1/($iterations_max), 
			$i*$c2/($iterations_max), $i*$c3/($iterations_max));
	}

	include("Fract2.php");

	imagepng($image, "./fract.png");
}
