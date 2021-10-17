<?php if (!defined('PLX_ROOT')) exit; ?>
       <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
						                            <li class="d-block m-2">
                                <a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>" class="list-inline-item"><i class="fas fa-arrow-alt-circle-up fa-3x"></i></a>
                            </li>
                            <!--<li class="list-inline-item">
                                <?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="<?= PLX_URL_REPO?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
                            </li>-->
                            <li class="list-inline-item3"><i class="fas fa-tags fa-2x"></i></li>
                            <?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status list-inline-item " href="#tag_url" title="#tag_name">#tag_name</a></li>', 9); ?>
                            <?php $plxShow->archList('<li id="#archives_id"  class="list-inline-item"><a class="#archives_status" href="#archives_url" title="#archives_name"><i class="fas fa-archive fa-2x"></i></a></li>'); ?>
<?php  if($plxShow->plxMotor->aConf['enable_rss']) { ?><li class="list-inline-item"><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><i class="fas fa-rss fa-2x" style="transform:scale(-1,1)"></i>&nbsp;</a> </li><?php } ?>
<?php if($plxShow->plxMotor->aConf['enable_rss_comment']) { ?><li class="list-inline-item"><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><i class="fas fa-rss fa-2x"></i>&nbsp;</a></li><?php  } ?> 
                         
                         
                        </ul>

                        <div class="small text-center text-muted fst-italic">Copyright &copy; <?php $plxShow->mainTitle('link'); echo ' 2018-'.date('Y').' '; ?> <a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"> <i class="fas fa-toolbox fa-2x"></i></a></div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php $plxShow->template(); ?>/js/scripts.js"></script>
    </body>
</html>