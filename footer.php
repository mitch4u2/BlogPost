<footer id="footer">
	<div class="inner">
		<ul class="icons">
			
			<?php foreach ( $settings['social'] as $link ): ?>

			<li><a href="#" class="icon fa-<?php echo $link['icon'] ?>">
					<span class="label"><?php echo $link['text'] ?></span></a></li>

			<?php endforeach ?>


		</ul>
		<ul class="copyright">
			<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.poptrox.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>