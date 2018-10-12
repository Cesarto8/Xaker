<?php
require '../res/php/app_top_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="apple-touch-icon" sizes="57x57" href="../res/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../res/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../res/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../res/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../res/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../res/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../res/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../res/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../res/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../res/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../res/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../res/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../res/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="../res/img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../res/img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="shortcut icon" href="../res/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../res/img/favicon/favicon.ico" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Xaker Comunidad</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="../res/framework/materialize/css/materialize.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" />
	<link href="https://fonts.googleapis.com/css?family=Nobile" rel="stylesheet">
	<link rel="stylesheet" href="../res/css/animate.css">
	<link rel="stylesheet" href="../res/css/style.css">
</head>
<body  onresize="click_active()">
	<div class="body">
<?php
	if(isset($_SESSION['admin'])){
		require '../views/nav/main_admin_nav.php';
	}
	if( !isset($_SESSION['admin']) ){
		require '../views/admin/home.php';
	}else if( isset($_SESSION['admin']) && !isset($_GET['section']) ) {
		require '../views/admin/main.php';
	}else if( isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section'] == "posts" ) {
		require '../views/admin/posts.php';
	}else if( isset($_SESSION['admin']) && isset($_GET['section']) && $_GET['section'] == "categories" ) {
		require '../views/admin/categories.php';
	}
?>
	</div>
	<div class="footer"></div>
	<script src="../res/framework/materialize/js/materialize.js"></script>
	<script src="../res/js/isotope.pkgd.min.js"></script>
	<script src="../res/js/funciones_generales.js" charset="utf-8"></script>
	<script src="../res/framework/ckeditor/ckeditor.js"></script>
	<script src="../res/framework/ckeditor/adapters/jquery.js"></script>
	<script src="../res/js/admin.js" charset="utf-8"></script>
</body>
</html>
