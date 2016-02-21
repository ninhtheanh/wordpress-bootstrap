<div class="wrap">
	<h2>Theme help</h2>

	<h3>Width contrainer</h3>
	<p>Default Bootstrap's width is 1170px. To change width of page<br>
	1. You can define in .container Ex:
	<code>
		.container{
			max-width: 1000px;
		}
	</code>
	OR
	<code>
	@media (min-width: 1200px){
		.container {
		    width: 960px;
		}
	}
	</code>
	<br>
	This needs define after loading bootstrap to make sure it will be overwrited.
	<br>
	2. You can add a parent div with class name .container-fixed as <a target="_blank" href="http://s.bootply.com/render/SIiIrCbApO">this example</a>
	<code>
		.container-fixed {
		    margin: 0 auto;
		    max-width: 1000px;
		}
	</code>
	
	</p>

	<h3>Menu</h3>
	<p>To display menu correctly, please create at least 1 menu and set as primary and save.</p>
	
	<h3>Bootstrap features</h3>
	<p>This theme can use all Bootstrap classes, elements and styles.</p>
	
	<h3>Responsive image</h3>
	<p>For responsive image please add img-responsive class to img element. Example: <code>&lt;img src=&quot;...&quot; alt=&quot;&quot; class=&quot;img-responsive&quot;&gt;</code></p>

	<h3>Responsive video</h3>
	<p>Cloak video element (video element or embeded video) with <code>&lt;div class=&quot;flexvideo&quot;&gt;...your video...&lt;/div&gt;</code>.</p>

	<h3>Sidebar</h3>
	<p>Whether to use Left or right or not sidebar is control in widget<br>
	 - Only left sidebar active. (12-2) = 10. Main column size is 10.<br>
	 - Only right sidebar active. (12-3) = 9. Main column size is 9.<br>
	 - No sidebar active. Main column is 12.
	</p>

	<?php do_action('bootstrapbasic_theme_help_content'); ?>
	
	<p style="margin-top: 20px;"><span style="font-size: 1.2rem;">&#128147;</span></p>
</div>