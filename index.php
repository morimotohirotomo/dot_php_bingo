<?php
  $nums = [];

  for($i = 0; $i < 5; $i++) {
  $col = range($i * 15 + 1, $i * 15 + 15);
  shuffle($col);
  $nums[$i] = array_slice($col, 0, 5);
}

print_r($nums);
exit;
?>

<!DOCTYPE html>
<html>
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
  	  <tr>
  	  	<td>1</td>
  	  	<td>1</td>
  	  	<td>1</td>
  	  	<td>1</td>
  	  	<td>1</td>
  	  </tr>
  	</table>
  </div>
</body>
</html>