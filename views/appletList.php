<main>
	<p>
		A showcase of some of the Java applets I have made over the years.
	</p>
	<ul>
	<?php
	foreach ($applets as $applet) {
		?>
		<li>
			<a href="<?php echo htmlspecialchars(urlencode($applet->slug)); ?>.html">
				<?php echo htmlspecialchars($applet->name); ?>
			</a>
		</li>
		<?php
	}
	?>
	</ul>
</main>