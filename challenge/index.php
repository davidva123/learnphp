<?php 
include_once 'inc/globals.php';
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <meta name="description" content="<?php echo $description; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="wrapper">
		<header>
			<h1><?php echo $title; ?></h1>
<?PHP 
include_once 'inc/nav.php';
?>
		</header>
		<main>
          
        </main>
	</div>
	<?PHP 
	include_once 'templates/footer.php';
	?>
</body>

</html>