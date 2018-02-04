<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Top Fallers</title>
	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	<link href="style.css" rel="stylesheet">
	<link href="../styles/main.css" rel="stylesheet">      
</head>
<body>
<div class="titleContainer">
	<img src="../img/logo.png">
</div>
	
    <?php
    $file = fopen("../data/data.csv","r");
    while (($row = fgetcsv($file, 0, ",")) !== FALSE) {
        //Dump out the row for the sake of clarity.
        //var_dump($row);
        echo $row[1][4];
    }
    fclose($file);
    ?>
    <div id="mainContainer">
		<section class="profileContainer">
            <h2>#1 Stock Name</h2>
            <p>-5.2%</p>
        </section>
	</div>
</body>
</html>