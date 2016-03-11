<main class="centered borederd">
	<object type="application/x-java-applet" width="<?php echo $applet->width; ?>" height="<?php echo $applet->height; ?>">
		<param name="archive" value="<?php echo htmlspecialchars($applet->jarURL); ?>" />
		<param name="code"    value="<?php echo htmlspecialchars ($applet->jarClassFilepath); ?>" />
		Please enable Java to see this applet.
	</object><br />
	Security Errors? Click <a href="security.html">here</a>.
	<br />
	
	<section id="description">
		<?php echo $applet->descriptionHTML; ?>
	</section>
</main>