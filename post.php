
<?php include('header.php')   ?>

		<!-- Main -->


<?php $post=$posts[$_GET['post_id']];  ?>
			<div id="main">


				<!-- One -->
					<section id="one">
						<header class="major">
							<h2><?php echo $post['title'] ?></h2>
						</header>
						<?php echo $post['content'] ?>

					</section>

			</div>

<?php include('footer.php')  ?>