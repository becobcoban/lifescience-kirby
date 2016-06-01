<?php snippet('header') ?>

  <main class="home" role="main">
  	<?php $banner = $page->file('home-banner.jpg'); ?>
  	<div class="home-banner" <?php echo $banner ? 'style="background-image: url(' . $banner->url() . ')"' : '' ?>>
		<div class="home-banner-text">
			<h1 class="heading home-banner-heading">Take Charge of Your Health Today</h1>
			<div class="home-banner-description">LifeScience offers you an advanced approach to health and wellness through the LifeScience PRO System.</div>
		</div>
	</div><!-- /.home-banner -->

	<?php snippet('survey'); ?>

	<div class="home-about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<?php if($video_url = page('who-we-are')->video_url()->ytembed()) { ?>
					<div class="home-about-video">
						<iframe width="100%" src="<?php echo $video_url; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
					<?php } ?>
				</div>
				<div class="col-md-6">
					<h1 class="heading home-about-heading"><?php echo page('who-we-are')->title()->upper(); ?></h1>
					<div class="home-about-description">
					<?php echo page('who-we-are')->text()->kirbytext(); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.home-about -->

  </main>

<?php snippet('footer') ?>