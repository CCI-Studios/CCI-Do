<?= JHtml::_('behavior.modal')?>
<style src="media://com_ccido/css/site.css" />

<h1><?= $album->title?></h1>

<? $images = array(); ?>
<? foreach ($images as $image): ?>
<div class="ccido-album-image">
	<a class="modal" href="<?=$image->filename?>" ref="{handler:'iframe'}">
		<img src="<?= $image->filename?>" />
	</a>
</div>
<? endforeach; ?>
