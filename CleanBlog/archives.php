<?php include __DIR__.'/header.php'; ?>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php $plxShow->template(); ?>/assets/img/arch-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?php echo plxDate::formatDate($plxShow->plxMotor->cible, $plxShow->lang('ARCHIVES').'</h1> <span class="subheading">#month #num_year(4) </span>') ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
						<ul class="repertory menu breadcrumb">
							<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
							<li><?php echo plxDate::formatDate($plxShow->plxMotor->cible, $plxShow->lang('ARCHIVES').' #month #num_year(4)') ?></li>
						</ul>
                    <!-- Posts preview-->
<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>					
                    <div class="post-preview article" id="post-<?php echo $plxShow->artId(); ?>">
 						<a>
                            <h2 class="post-title"><?php $plxShow->artTitle('link'); ?></h2>
                            <?php $plxShow->artThumbnail(); ?>
							<?php $plxShow->artChapo(); ?>
                        </a>
                        <p class="post-meta">
                            <?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
							<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
									<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
							</time>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
<?php endwhile; ?>
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><!--<a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a>--><?php $plxShow->pagination(); ?></div>
					<?php $plxShow->artFeed('rss',$plxShow->catId(), '<span><a href="#feedUrl" title="#feedTitle">#feedName</a></span>'); ?>
                </div>
            </div>
        </div>
<?php include __DIR__.'/footer.php'; ?>