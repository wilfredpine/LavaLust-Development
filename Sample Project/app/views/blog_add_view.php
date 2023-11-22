<html>
<head>
	<title>My Blog</title>
    <?php load_css(['css/bootstrap.min']); ?>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">ITBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link <?php active('Blog'); ?>" aria-current="page" href="<?php echo base_url(); ?>Blog">Home</a>
					<a class="nav-link <?php active('Blog-add'); ?>" href="<?php echo base_url(); ?>Blog-add">Add Blog</a>
					<a class="nav-link <?php active('Contact'); ?>" href="<?php echo base_url(); ?>Contact">Contact</a>
					<a class="nav-link" href="<?php echo base_url(); ?>Login">Login</a>
				</div>
			</div>
		</div>
	</nav>


	<form action="" method="post" class="p-5">
        <!-- Title -->
        <label for="">Title</label><br>
        <input type="text" name="title" id=""><br>

        <!-- Content -->
        <label for="">Content</label><br>
        <textarea name="content" id="" cols="30" rows="10"></textarea><br><br>

        <!-- Button -->
        <input type="submit" value="save" name="save">
    </form>

    <?php load_js(['js/bootstrap.bundle.min']); ?>
</body>
</html>
