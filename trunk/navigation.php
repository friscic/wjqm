<div data-role="controlgroup" data-type="horizontal" data-mini="false">

	<a href="<?php echo get_option('home'); ?>" title="<?php echo get_option('blogdescription'); ?>" data-role="button" data-icon="home" class="googleFont">
	    <?php  bloginfo('name');?>
	</a>

	<?php
	$menu_name = 'main';
	$menu_list = '';

	$menu = wp_get_nav_menu_object($menu_name);
	$menu_items = wp_get_nav_menu_items($menu->term_id);

	foreach ( (array) $menu_items as $key => $menu_item )
	{
	    $title = $menu_item->title;
	    $url = $menu_item->url;
	   	$menu_list .= '<a href="' . $url . '" data-role="button">' . $title . '</a>';
	}

	echo $menu_list;
	?>

</div>