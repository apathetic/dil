<?php
global $post;
?>

		<nav id="controls">
			<a href="#" class="prev"></a>
			<ul>
			<?php for( $i=0; $i<count($posts); $i++ ) {
					echo '<li><a href="#image-'.($i+1).'" class="jump">●</a></li>';
			} ?>
			</ul>
			<a href="#" class="next"></a>
		</nav>