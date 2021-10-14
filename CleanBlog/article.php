<?php include __DIR__.'/header.php'; ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php $plxShow->template(); ?>/assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php $plxShow->artTitle(); ?></h1>
                            <!--<span class="subheading"><?php $plxShow->subTitle(); ?></span>-->
                            <span class="meta">
                                <?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
                               <time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
						<?php $plxShow->artThumbnail(); ?>
						<?php $plxShow->artContent(); ?>
						<p>
							<small>
								<span class="art-nb-com">
									<a href="#comments" title="<?php $plxShow->artNbCom(); ?>"><?php $plxShow->artNbCom(); ?></a>
								</span>
							</small><br>
							<small>
								<span class="classified-in">
									<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?>
								</span><br>
								<span class="tags">
									<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
								</span>
							</small>
						</p>
						<?php include __DIR__.'/commentaires.php'; ?>
                    </div>
                </div>
            </div>
        </article>
<?php include __DIR__.'/footer.php'; ?>