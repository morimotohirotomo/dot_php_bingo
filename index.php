<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Bingo.php');

$bingo = new \MyApp\Bingo();
$nums = $bingo->create();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>BINGO</title>
  <link rel="stylesheet" type="" href="styles.css">
</head>
<body>
  <div id="container">
  	<table>
  	  <tr>
  	  	<th>B</th>
  	  	<th>I</th>
  	  	<th>N</th>
  	  	<th>G</th>
  	  	<th>O</th>
  	  </tr>
  	  <?php for($i = 0, $no = 0; $i < 5; $i++) : ?>
  	  <tr>
  	  	<?php for($j = 0; $j < 5; $j++, $no++) : ?>
  	  	<td id="nums<?php echo $no; ?>"><?= h($nums[$i][$j]); ?></td>
  	  	<?php endfor; ?>
  	  </tr>
  	  <?php endfor; ?>
  	</table>
  </div>

  <script src="main.js"></script>
</body>
</html>