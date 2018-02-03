<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Top Risers</title>
	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet">
	<link href="../styles/main.css" rel="stylesheet">      
</head>
<body>
<div class="titleContainer">
	<img src="../img/logo.png">
</div>
	<div id="mainContainer">
 
 
 <?php
echo "<html><body><table>\n\n";
$f = fopen("../data/data.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
                
        }
        
        echo "</tr>\n";
       
}

fclose($f);
echo "\n</table></body></html>";
?>    

</div>
</body>
</html>