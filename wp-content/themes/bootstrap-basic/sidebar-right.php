<?php if (is_active_sidebar('sidebar-right')) { ?>				
				<div id="secondary" class="col-md-3">
					<?php do_action('before_sidebar'); ?> 
					<?php dynamic_sidebar('sidebar-right'); ?> 
				</div>
				<!-- #secondary -->
<?php } ?> 