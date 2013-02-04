<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">    
    <input type="search" value="<?php the_search_query(); ?>" name="s" id="s" />
</form>

<?php the_widget('WP_Widget_Pages', 'title= ', 'before_widget=<div data-role="navbar">&after_widget=</div>'); ?>

<?php the_widget("WP_Widget_Categories", 'title= ', 'before_widget=<div data-role="navbar">&after_widget=</div>'); ?>

<?php the_widget("WP_Widget_Archives", 'category=11&title= ', 'before_widget=<div data-role="navbar">&after_widget=</div>'); ?>