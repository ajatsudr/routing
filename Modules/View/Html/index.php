<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>title here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo $baseurl; ?>/Public/Css/Fonts.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $baseurl; ?>/Public/Css/Styles.css">

	<link rel="icon" type="image/png" href="<?php echo $baseurl; ?>/Public/Images/favicon.png">

</head>
<body>

<div class="wrapper">
	
	<div class="logo">
		<img src="<?php echo $baseurl; ?>/Public/Images/logo.png" />
	</div>

	<div class="navbar">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a class="active" href="#">/</a></li>
			<li><a class="active" href="#">Overview</a></li>
		</ul>
	</div>

	<div class="sidebar">
		<ul class="sidenav">
			<li class="sidehead">Hosting Management</li>
			<li><a href="#">Overview</a></li>
			<li><a href="#">Root Database</a></li>
			<li><a href="#">Root Request</a></li>
			<li><a href="#">Root Server</a></li>
			<li><a href="#">Intructions & Guides</a></li>
		</ul>
	</div>
	
	<div class="content">
	
		<?php if ( file_exists('Modules/View/Html/'. $filename . '.php')){ require_once 'Modules/View/Html/'. $filename . '.php'; } ?>
		
		<h1>Overview</h1>
		
		<p>Lorem Ipsum is simply <a href="#">dummy text</a> of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
		
		<p><img src="<?php echo $baseurl; ?>/Public/Images/logo-programmer.png" /></p>
		
		<form method="post" action="">
			<p><label>Permalink</label><br /><input type="text" name="permalink" placeholder="Permalink" autocomplete="off"></p>
			<p><input type="submit" value="Submit" /></p>
		</form>
		
		<p><img src="<?php echo $baseurl; ?>/Public/Images/logo-gallery.png" /></p>
		
		<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
		
		<hr />
		<div style="overflow-x:auto;">
			<table>
				<thead>
					<tr>
						<th>Title</th>
						<th>Publish</th>
						<th>Hits</th>
						<th>#</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Submit Report</td>
						<td>2 December 2019</td>
						<td>1</td>
						<td><a href="#">Detail</a></td>
						<td><a href="#">Delete</a></td>
					</tr>
					<tr>
						<td>Submit Report</td>
						<td>2 December 2019</td>
						<td>1</td>
						<td><a href="#">Detail</a></td>
						<td><a href="#">Delete</a></td>
					</tr>
					<tr>
						<td>Submit Report</td>
						<td>2 December 2019</td>
						<td>1</td>
						<td><a href="#">Detail</a></td>
						<td><a href="#">Delete</a></td>
					</tr>
					<tr>
						<td>Submit Report</td>
						<td>2 December 2019</td>
						<td>1</td>
						<td><a href="#">Detail</a></td>
						<td><a href="#">Delete</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<hr />
		
		<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
		
	</div>
	
	<div class="footer">&copy; 2019 ajatsudrajat.net</div>

</div>
  
</body>
</html>
