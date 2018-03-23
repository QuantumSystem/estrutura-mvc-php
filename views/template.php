<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Titulo do site</title>
	<link rel="stylesheet" href="<?php echo BASE_URL ?>/assets/css/style.css">
</head>
<body>
	<h1>Topo do site</h1>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	
	<h1>Rodpé do meu site</h1>	
</body>
</html>