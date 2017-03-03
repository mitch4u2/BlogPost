
<?php include('header.php')   ?>

		<!-- Main -->
			<div id="main">

				<?php foreach ($posts as $id => $post):  ?>
				<!-- One -->
					<section id="one">
						<header class="major">
							<h2><?php echo $post['title']; ?></h2>
						</header>
						<?php echo get_excerpt($post['content']) ?>
						<ul class="actions">
							<li><a href="post.php?post_id=<?php echo $id ?>" class="button">Learn More</a></li>
						</ul>
					</section>
				<?php  endforeach  ?>

			</div>

<?php include('footer.php')  ?>