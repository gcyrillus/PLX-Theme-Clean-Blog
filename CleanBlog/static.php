<?php include __DIR__.'/header.php'; ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php $plxShow->template(); ?>/assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?php $plxShow->staticTitle(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 article static" id="static-page-<?php echo $plxShow->staticId(); ?>">
						<?php $plxShow->staticContent(); ?>
                </div>
            </div>
        </div>
<?php include __DIR__.'/footer.php'; ?>