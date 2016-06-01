<?php snippet('header') ?>

<main class="about" role="main">
	<div class="about-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="heading">PROFILE PROBE, PROGRAM</h1>
					<?php if($video_url = $page->video_url()->ytembed()) { ?>
					<div class="about-content-video">
						<iframe width="100%" src="<?php echo $video_url; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
					<?php } ?>
					<div class="about-content-description">
						<?php echo $page->text()->kirbytext(); ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.about-content -->
</main>

<?php snippet('footer') ?>