<?php include("include/_head.php");?>
<div class="container">
	<?php readfile("include/_header.html");?>
	<div class="content">
		<main>
			<article class="row responsive01">
				<h1 class="margin-bottom-quad">Drug Names</h1>
				<p>Select a drug from the list below or enter a drug name into the search above to view current related information</p>
				<?php readfile("include/drug_list.html");?>
			</article>
		</main>
	</div><!-- end content -->
	<?php readfile("include/_footer.html");?>
</div><!-- end container -->
</body>
</html>
