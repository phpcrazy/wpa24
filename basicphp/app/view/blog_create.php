<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog Entry</title>
	<link rel="stylesheet" href="<?php echo site_url() ?>/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="<?php echo site_url(); ?>/blog/save" method="post">
					<div class="form-group">
						<label for="title">Blog Title</label>
						<input type="text" name="title" class="form-control" id="title" placeholder="Title">
					</div>
					<div class="form-group">
						<label for="body">Blog Body</label>
						<textarea name="body" class="form-control" id="blog-body" placeholder="Type something..."></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.5.10/standard/ckeditor.js"></script>
	<script>
		CKEDITOR.replace("blog-body");
	</script>
</body>
</html>