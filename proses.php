
<?php 
    $batas = $_POST['batas'];
    $input = $_POST['input'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>LOOPING</title>
        <link rel="stylesheet" href="style.css"/>
    
    </head>
<body>
    <center>
    <div class="container">
		<div class="main">
			<h2>TUGAS LOOPING</h2><hr/>
        <?php     
        for ($i = 1; $i <= $batas; $i++){
            if ($i > $batas)
            break;
        print("$input $i<BR> \n");
        }
        ?>
        <br>

        <?php
        if ($batas % 2 == 0){
            echo "$batas Merupakan Bilangan Genap";
        }else {
            echo "$batas Merupakan Bilangan Ganjil"; 
        }

        ?>
        <hr>
        <a class="btn-back" href="index.php" role="button">kembali</a>
    </div>
</div>
</center>
</body>
</html> 