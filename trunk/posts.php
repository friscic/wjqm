<?php if (have_posts()) : ?>

 	<?php while (have_posts()) : the_post(); ?>

 		<div data-role="collapsible" data-collapsed="false" data-theme="a">

	    	<h3><?php the_title(); ?></h3>

	    	<div class="content">
		    	
		    	<?php the_content('Read the rest of this entry &raquo;'); ?>
		    	
		    	<p>
		    		<small><?php the_time('F jS, Y') ?> by <?php the_author(); ?></small>
		    	</p>

		        <?php
				$categories = get_the_category();
				$separator = '';
				$output = '';
				
				if($categories)
				{
					foreach($categories as $category)
					{
						$output .= '<a href="' . get_category_link($category->term_id ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" data-role="button" data-inline="true" data-mini="true" data-theme="a">' . $category->cat_name . '</a>' . $separator;
					}
					echo trim($output, $separator);
				}
				?>

				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>" data-role="button" data-inline="true" data-mini="true" data-theme="b">Permalink</a>
		    
		    </div>

	    </div>

  	<?php endwhile; ?>

<?php else : ?>

 	<div data-role="collapsible" data-collapsed="false">

    	<h2>404 - page not found</h2>

    	<p>sorry, but you are looking for something that isn't here...</p>
    
    </div>

<?php endif; ?>

<div data-role="navbar">
	<ul>
		<li><?php next_posts_link('&laquo; Older') ?></li>
		<li><?php previous_posts_link('Newer &raquo;') ?></li>
	</ul>
</div>