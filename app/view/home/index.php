<!DOCTYPE html>
<html>
<head>
	<title><?php echo $tit ; ?></title>
</head>
<body>
	<h1>مرحباً بالعالم!</h1>
	<h1><?php echo $h1 ;?></h1>
	<p>هذه صفحة HTML بسيطة.</p>
    <?php
    foreach ($data as $new) {
        echo $new["doctor_id"] . "<br>" ;
    }
    
    
    ?>
</body>
</html>