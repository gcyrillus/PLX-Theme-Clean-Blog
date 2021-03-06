<?php if(!defined('PLX_ROOT')) exit; ?>

	<?php if($plxShow->plxMotor->plxRecord_coms): ?>

		<h3 id="comments">
			<?php echo $plxShow->artNbCom(); ?>
		</h3>

		<?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>

		<div id="<?php $plxShow->comId(); ?>" class="comment <?php $plxShow->comLevel(); ?>">

			<div id="com-<?php $plxShow->comIndex(); ?>">

				<small>
					<a class="nbcom" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>&nbsp;
					<time datetime="<?php $plxShow->comDate('#num_year(4)-#num_month-#num_day #hour:#minute'); ?>"><?php $plxShow->comDate('#day #num_day #month #num_year(4) - #hour:#minute'); ?></time> -
					<?php $plxShow->comAuthor('link'); ?>
					<?php $plxShow->lang('SAID'); ?> :
				</small>

				<blockquote>
					<p class="content_com type-<?php $plxShow->comType(); ?>"><?php $plxShow->comContent(); ?></p>
				</blockquote>

			</div>

			<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>
			<a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="replyCom('<?php $plxShow->comIndex() ?>')"><?php $plxShow->lang('REPLY'); ?></a>
			<?php endif; ?>

		</div>

		<?php endwhile; # Fin de la boucle sur les commentaires ?>

	<?php endif; ?>

	<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

	<h3>
		<?php $plxShow->lang('WRITE_A_COMMENT') ?>
	</h3>

	<form id="form" action="<?php $plxShow->artUrl(); ?>#form" method="post">

		<fieldset>
			<div class="grid">
			<div class="form-floating">

					<input id="id_name"  class="form-control" name="name" type="text" size="20" value="<?php $plxShow->comGet('name',''); ?>" maxlength="30" required="required" />
					<label for="id_name"><?php $plxShow->lang('NAME') ?>* :</label>

			</div>
			<div class="form-floating">
					<input id="id_mail"   class="form-control" n ame="mail" type="text" size="20" value="<?php $plxShow->comGet('mail',''); ?>" />
					<label for="id_mail"><?php $plxShow->lang('EMAIL') ?> :</label>
				</div>
			<div class="form-floating">
					<input id="id_site"   class="form-control" name="site" type="text" size="20" value="<?php $plxShow->comGet('site',''); ?>" />
					<label for="id_site"><?php $plxShow->lang('WEBSITE') ?> :</label>
				</div>
			</div>
			<div class="grid">
			<div class="form-floating">
					<div id="id_answer"></div>
					<textarea id="id_content"   class="form-control" name="content" cols="35" style="min-height:160px;box-shadow:0 0 1px #fefefe" rows="6" required="required"><?php $plxShow->comGet('content',''); ?></textarea>
					<label for="id_content" class="lab_com"><?php $plxShow->lang('COMMENT') ?>* :</label>
				</div>
			</div>

			<?php $plxShow->comMessage('<p id="com_message" class="#com_class"><strong>#com_message</strong></p>'); ?>

			<?php if($plxShow->plxMotor->aConf['capcha']): ?>

			<div class="grid text-center">
			<div class="">
					<label for="id_rep"><strong><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong>*</label><br>
					<?php $plxShow->capchaQ(); ?>
					<input id="id_rep" name="rep" type="text" size="2" maxlength="1" style="width:auto;display:inline;" required="required" />
				</div>
			</div>

			<?php endif; ?>

			<div class="grid">
				<div class="col sml-12">
					<input type="hidden" id="id_parent" name="parent" value="<?php $plxShow->comGet('parent',''); ?>" />
					<input class="blue" type="submit" style="display:block;margin:0.25em auto;" value="<?php $plxShow->lang('SEND') ?>" />
				</div>
			</div>

		</fieldset>

	</form>

<script>
function replyCom(idCom) {
	document.getElementById('id_answer').innerHTML='<?php $plxShow->lang('REPLY_TO'); ?> :';
	document.getElementById('id_answer').innerHTML+=document.getElementById('com-'+idCom).innerHTML;
	document.getElementById('id_answer').innerHTML+='<a rel="nofollow" href="<?php $plxShow->artUrl(); ?>#form" onclick="cancelCom()"><?php $plxShow->lang('CANCEL'); ?></a>';
	document.getElementById('id_answer').style.display='inline-block';
	document.getElementById('id_parent').value=idCom;
	document.getElementById('id_content').focus();
}
function cancelCom() {
	document.getElementById('id_answer').style.display='none';
	document.getElementById('id_parent').value='';
	document.getElementById('com_message').innerHTML='';
}
var parent = document.getElementById('id_parent').value;
if(parent!='') { replyCom(parent) }
</script>

	<?php $plxShow->comFeed('rss',$plxShow->artId(), '<p class="text-center"><a href="#feedUrl" title="#feedTitle"><i class="fas fa-rss-square  fa-2x"></i></a></p>'); ?>

	<?php else: ?>

	<p>
		<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
	</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
