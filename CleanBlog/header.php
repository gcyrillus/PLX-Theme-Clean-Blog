<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">
<head>
	<meta charset="<?php $plxShow->charset('min'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
	<title><?php $plxShow->pageTitle(); ?></title>
<?php
	$plxShow->meta('description');
	$plxShow->meta('keywords');
	$plxShow->meta('author');
?>

        <link rel="icon" type="image/x-icon" href="<?php $plxShow->template(); ?>/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php $plxShow->template(); ?>/css/styles.css" rel="stylesheet" />
        <link href="<?php $plxShow->template(); ?>/css/plx.css?t=<?php echo time(); ?>" rel="stylesheet" />
<?php
	$plxShow->templateCss();
	$plxShow->pluginsCss();
?>
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlPostsRssFeed($plxShow->plxMotor->mode) ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
</head>
 <body id="top" class="page mode-<?php $plxShow->mode(true) ?>">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <?php $plxShow->mainTitle('link'); ?><!--link class="navbar-brand" -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
					<?php $plxShow->catList('','<li id="#cat_id" class="nav-item"><a class="#cat_status nav-link px-lg-3 py-3 py-lg-4" href="#cat_url" title="#cat_name">#cat_name</a></li>'); ?>
					<?php $plxShow->staticList('','<li class="#static_class #static_status nav-item" id="#static_id"><a href="#static_url" title="#static_name" class="nav-link px-lg-3 py-3 py-lg-4">#static_name</a></li>'); ?>
					<?php $plxShow->pageBlog('<li class="#page_class #page_status nav-item" id="#page_id"><a href="#page_url" title="#page_name" class="nav-link px-lg-3 py-3 py-lg-4">#page_name</a></li>'); ?>
                    </ul>
                </div>
            </div>
        </nav>







