<?php
/**
 * The sidebar containing the search Elements
 *
 * @package Alejandro theme
 * @since 1.0
 */
 ?>
<div id="widget-area" class="widget-area" role="complementary">
  <aside id="search-2" class="widget widget_search">
    <form role="search" method="get" action="<?php echo site_url(); ?>">
			<label>
				<span class="screen-reader-text">Search for:</span>
				<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
			</label>
			<input type="submit" class="search-submit screen-reader-text" value="Search">
		</form>
  </aside>
</div>
