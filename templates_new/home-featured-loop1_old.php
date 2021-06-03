<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themejunkie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('home-featured-thumb', array('class' => 'entry-thumb')); ?></a>

<div class="clear"></div>

<div class="entry-meta">
	<abbr title="<?php the_time('d/m/Y'); ?> at <?php the_time('G:i'); ?>"><?php the_time('d/m/Y'); ?> <?php the_time('G:i'); ?></abbr>
</div><!-- end .entry-meta -->
