</body>
<?php 
if(!empty($js_files)) {
foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; 
}
?>
</html>
