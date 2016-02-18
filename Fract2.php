<?php
/* --// Fractalisation / calcul \\-- */
for($x = 0; $x < $image_x; $x++){
    for($y = 0; $y < $image_y; $y++){
        $c_reel = $x/$zoom+$x1;
        $c_img = $y/$zoom+$y1;
        $z_reel = 0;
        $z_img = 0;
        $i = 0; 

        while($z_reel*$z_reel + $z_img*$z_img < 4 AND $i < $iterations_max){
         $tempo = pow(($z_reel*$z_reel+$z_img*$z_img), ($deg/2))*cos($deg*atan2($z_img,$z_reel)) + $c_reel;
         $z_img = pow(($z_reel*$z_reel+$z_img*$z_img), ($deg/2))*sin($deg*atan2($z_img,$z_reel)) + $c_img;
         $z_reel = $tempo;
         $i++;
     }

     if($i == $iterations_max){
        imagesetpixel($image, $x, $y, $noir);
    }
    else{
        imagesetpixel($image, $x, $y, $couleur[$i]);
    }
}
}