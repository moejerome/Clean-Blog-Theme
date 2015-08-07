<?php $theme->display ( 'header' ); ?>
<header class="intro-header" style="background-image: url('<?php Site::out_url( 'theme' ); ?>/img/contact-bg.jpg')">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<div class="post-heading" id="post-<?php echo $post->id; ?>" class="<?php echo $post->statusname; ?>">
					<h1><?php echo $post->title_out; ?></h1>
					<!--<h2 class="subheading"></h2> -->
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
				</div>
		</div>
</article>
