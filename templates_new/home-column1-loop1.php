<? /*
<li class="first"> 
<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themejunkie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<a href="<?php the_permalink(); ?>" rel="bookmark">
		<?php the_post_thumbnail(array(100,100), array('class' => 'entry-thumb')); ?>
	</a>
	
	
	
	<div class="entry-meta">
		<abbr title="<?php the_time('d/m/Y'); ?> at <?php the_time('G:i'); ?>"><?php the_time('d/m/Y'); ?> <?php the_time('G:i'); ?></abbr>
	</div><!-- end .entry-meta -->
	
	<div class="clear"></div>
	
	<div class="entry-excerpt">
		<?php tj_content_limit('145'); ?>
	</div><!--end .entry-excerpt-->
	
</li>
<? */ ?>



<div class="sidebar_news_one sidebar_news_one_big">
	<a class="sidebar_news_one_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<div class="side_img"><?php the_post_thumbnail(array(100,100), array('class' => 'entry-thumb1')); ?></div>
	<div class="side_descr">
	<!-- <p>Ifølge flere nyhedsmedier er der i øjeblikket en bombetrussel mod stadionet Ifølge flere nyhedsmedier er der i øjeblikket en bombetrussel mod stadionet</p> -->
	<?php tj_content_limit('220'); ?>
	</div>
	<div class="article-icon-links-container" data-followbutton="MailSport" style="clear: both;">
  <!-- <ul class="article-icon-links cleared">
    <li class="first">
  <a class="comments-link" href="/sport/football/article-4078358/Swansea-City-0-3-Bournemouth-Benik-Afobe-Ryan-Fraser-Josh-King-heap-misery-Swans.html#comments" rel="nofollow">
    <span class="icon"></span>
    <span class="linktext">
      <span class="readerCommentNo bold" rel="4078358">44</span> comments
    </span>
  </a>
</li>

    <li class=" gr3ox">
<a class="http://dailym.ai/2iiXt4K| js-sl share-link" data-email-share-style="email_share_article-drawer" data-headline="Swansea City 0-3 Bournemouth: Benik Afobe, Ryan Fraser and Josh King heap further misery on Swans" data-article-image="/i/pix/2016/12/31/16/3BBC958F00000578-0-image-a-57_1483203279517.jpg" href="#">
    <span class="icon"></span>
    <span class="linktext">
      <span class="bold">6</span> shares
    </span>
  </a>
</li>

  </ul> -->
  <div class="entry-meta">
		<abbr title="<?php the_time('d/m/Y'); ?> at <?php the_time('G:i'); ?>"><?php the_time('d/m/Y'); ?> <?php the_time('G:i'); ?></abbr>
		<a style="float: right; font-weight: bold; margin-right: 10px;" href="<?php the_permalink(); ?>">læs mere</a>

	</div>
</div>
</div>