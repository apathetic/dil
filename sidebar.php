<?php /* NOTE: change depth and un/toggle commented out menu code  */ ?>
	<div id="sidebar">
		<div id="toggle"></div>

		<nav>
			<ul>
				<?php wp_list_pages( array(
					'depth' => 2,
					'sort_column' => 'menu_order',
					// 'sort_column' => 'post_date',
					// 'sort_order' => 'DESC',
					'title_li' => ''
				)); ?>
			</ul>

			<?php /* * /
				if($post->post_parent)
					$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				else
					$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");

				if ($children) { ?>
					<ul class="children">
						<?php echo $children; ?>
					</ul>
			<?php } /* */ ?>

		</nav>

		<ul class="address clearfix">
			<li><a class="icon-facebook" href="http://www.facebook.com/dil.hildebrand.35" target="_blank"></a><li>
			<li><a class="icon-envelope" href="mailto:d&#105;&#108;h&#105;&#108;debr&#97;nd&#64;out&#108;ook.com"></a><li>
			<li><a class="icon-pinterest" href="https://www.pinterest.com/dilhildebrand99/dil-hildebrand/"></a><li>
			<li><a class="icon-twitter" href="https://twitter.com/dilhildebrand"></a><li>
		</ul>

		<p class="copy">&copy; <?php echo date("Y"); ?></p>

	</div>