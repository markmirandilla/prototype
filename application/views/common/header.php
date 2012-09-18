<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="/assets/css/general.css" />
<?php 
if(!empty($css_files)) {
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; 
}
?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
</head>
<body>