<?php include __DIR__.'/header.php'; ?>
 <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php $plxShow->template(); ?>/assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1><?php $plxShow->mainTitle(); ?></h1>
                            <span class="subheading"><?php $plxShow->subTitle(); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
					<header>
						<h2>
							<?php $plxShow->lang('ERROR'); ?>
						</h2>
					</header>
					<p>
						<?php $plxShow->erreurMessage(); ?>
					</p>				
					<hr>				
                </div>
            </div>
        </div>
<?php include __DIR__.'/footer.php'; ?>