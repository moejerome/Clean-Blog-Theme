<?php $theme->display ( 'header' ); ?>
<header class="intro-header" style="background-image: url('<?php Site::out_url( 'theme' ); ?>/img/home-bg.jpg')">
		<div class="container">
				<div class="row">
						<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
								<div class="site-heading">
										<h1><?php Options::out('title');?></h1>
										<hr class="small">
										<span class="subheading"><?php Options::out('tagline');?></span>
								</div>
						</div>
				</div>
		</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	<?php foreach ( $posts as $post ) { ?>
		<div class="post-preview" id="post-<?php echo $post->id; ?>" class="<?php echo $post->class; ?>">
				<a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>">
						<h2 class="post-title">
							<?php echo $post->title_out; ?>
						</h2>
						<!-- <h3 class="post-subtitle">
								Many say exploration is part of our destiny, but it’s actually our duty to future generations.
						</h3> -->
				</a>
				<p class="post-meta">Posted by <?php echo $post->author->displayname; ?> on <data itemprop="datePublished" value="<?php echo $post->pubdate_datetime; ?>"><?php echo $post->pubdate_out; ?></data></p>
		</div>
		<?php }  ?>
			<nav id="pagination">
				<ul class="pager">
						<li class="next">
							<?php echo $theme->prev_page_link('&laquo; ' . _t('Previous Page')); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php echo $theme->next_page_link('&raquo; ' . _t('Next Page')); ?>
						</li>
				</ul>
			</nav>
</div>
</div>
</div>

<?php $theme->display ( 'sidebar' ); ?>

<?php $theme->display ( 'footer' ); ?>
