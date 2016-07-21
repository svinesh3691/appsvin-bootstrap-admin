<?php 
	$page = $_GET['page']; 
	$pages = ['forms','tables','curd']; 
	if (!$page) {
		echo "No page specified! Bad Request"; exit;
	}
	if (!in_array($page, $pages)) {
		echo '`'.$page.'` page does not exists in this template';
		?>
		<br><br> The available pages are
		<ul>
			<?php 
				foreach ($pages as $k => $p) { ?>
					<li> <a href="index.php?page=<?php echo $p; ?>"><?php echo $p; ?></a> </li>	
				<?php } ?>
				
		</ul>
		
	<?php exit; }

	include 'pages/header.php';

	include 'pages/'.$_GET['page'].'.php';

	include 'pages/footer.php';


?>
