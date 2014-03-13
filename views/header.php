<!doctype html>
<html>
<head>
 <title>Amazing</title>
 <link rel="stylesheet" href="<?php echo URL;?>public/css/default.css" />
 <script type="text/javascript" src="<?php echo URL;?>public/js/jquery.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/js/bootstap/css/bootstrap.css" />
 <script type="text/javascript" src="<?php echo URL;?>public/js/bootstap/js/bootstrap.js"></script>
 <script>
 $(function() {
 });
 </script>
</head>
<body>
Add something here. Does it work?
<?php Session::init(); ?>

<div id="header">
header123
<br/>
<a href="<?php echo URL;?>index">Index</a>
<a href="<?php echo URL;?>help">Help</a>

<?php if(Session::get('loggedIn')==true): ?>
		<a href="<?php echo URL;?>dashboard/logout">Logout</a>
	<?php else: ?>
		<a href="<?php echo URL;?>login">Login</a>
	<?php endif; ?>
</div>

<div id="content">

