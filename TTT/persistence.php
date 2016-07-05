<?php

$storage="gameboard.txt";

$file_connetion=fopen($storage, 'w') or die("Error opening file!");

fwrite($file_connetion, "EEE\n");
fwrite($file_connetion, "XOX\n");
fwrite($file_connetion, "---\n");
fclose($file_connetion);



$file_connetion=fopen($storage, 'r') or die("Error opening file!");
$first_line = fgets($file_connetion);
fclose($file_connetion);

?>


<h1> <?php echo $first_line; ?></h1>

<?php 


$file_connetion=fopen($storage, 'r') or die("Error opening file!");
$lines = file($storage);
fclose($file_connetion);

?>

<h1> <?php echo $lines[1]; ?></h1>


<h1> <?php echo $lines[2]; ?></h1>

<h1> <?php print_r($lines); ?></h1>



