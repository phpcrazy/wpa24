<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $site_title; ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php foreach($blogs as $blog) { ?>
					<h1><?php echo $blog['title']; ?></h1>
					<p><?php echo $blog['body']; ?></p>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>