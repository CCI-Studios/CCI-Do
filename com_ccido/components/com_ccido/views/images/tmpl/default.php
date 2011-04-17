<?= JHtml::_('behavior.mootools')?>
<?= JHtml::_('behavior.modal')?>
<style src="media://com_ccido/css/site.css" />
<script src="media://lib_koowa/js/koowa.js" />

<h1>Images</h1>

<? foreach ($images as $image): ?>
<div class="ccido-image">
	<a class="modal" rel="{handler:'iframe'}" href="media://com_ccido/uploads/<?=$image->filename?>">
		<img src="media://com_ccido/uploads/thumb_<?=$image->filename?>" /><br/>
		<?= $image->title ?>
	</a>
</div>
<? endforeach; ?>


<? if (KFactory::get('lib.joomla.user')->gid >= 21): ?>
	<p><a class="modal" rel="{handler:'iframe'}" href="<?= @route('view=image&layout=form&tmpl=component&album='.KRequest::get('get.album', 'int', '0'))?>">Add a new image</a></p>
<? endif; ?>