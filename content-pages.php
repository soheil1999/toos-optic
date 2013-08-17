<div class="contentpages">
<?php
	if( have_posts() ) {
		the_post();

		$meta = get_post_custom();}
?>
		<article>
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</article>
</div>