<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <meta charset="UTF-8">
</head>
<body>
    <center><h1 id= "ti">FRACTALE</h1></center>
    <center><div id="input"><br><br>
        <form action="" method="post">
           <label>Nombre d'itération:</label><input type="number" name="iterations_max" placeholder="70" pattern="\A[^-]+"/><br>
           <label>Degré:</label><input type="number" name="deg" placeholder="3" pattern="\A[^-]+"/><br>
           <input type="submit" value="Valider" id="submit"></br>
           
           <?php 
           include('Fract.php');
           if (isset($_POST['iterations_max']) && isset($_POST['deg'])){
            echo "</br></br></br><div id='can'>";
            echo '<img src="fract.png" alt="chaton" /></div>';
        }
        ?>   
        
    </form>
</div></center>