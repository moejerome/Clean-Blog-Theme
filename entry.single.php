<?php $theme->display ( 'header' ); ?>
<header class="intro-header" style="background-image: url('<?php Site::out_url( 'theme' ); ?>/img/post-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="post-heading" id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
					<h1><?php echo $post->title_out; ?></h1>
					<!--<h2 class="subheading"></h2> -->
					<span class="meta">Posted by <?php echo $post->author->displayname; ?> on <data itemprop="datePublished" value="<?php echo $post->pubdate_datetime; ?>"><?php echo $post->pubdate_out; ?></data></span>
				</div>
			</div>
		</div>
	</div>
</header>
<article>
		<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<?php echo $post->content_out; ?>
					</div>
					<nav id="pagination">
					<ul class="pager">
							<li class="next">
								<?php echo $theme->prev_page_link('&laquo; ' . _t('Previous Page')); ?> <?php $theme->page_selector( null, array( 'leftSide' => 2, 'rightSide' => 2 ) ); ?> <?php echo $theme->next_page_link('&raquo; ' . _t('Next Page')); ?>
							</li>
					</ul>
				</nav>
				</div>
		</div>
</article>
<?php $theme->display ( 'sidebar' ); ?>
<?php $theme->display ( 'footer' ); ?>
