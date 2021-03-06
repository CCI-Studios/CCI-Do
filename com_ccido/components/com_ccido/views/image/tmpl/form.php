<?= JHtml::_('behavior.mootools')?>
<style src="media://com_ccido/css/modal.css" />
<script src="media://com_ccido/js/form.js" />
<script src="media://lib_koowa/js/koowa.js" />

<? if ($image->id): ?>
	<h1>Edit Image Details</h1>
<? else: ?>
	<h1>New Image Details</h1>
<? endif; ?>

<form class="cci-form" saction="<?= @route('id='.$image->id)?>" method="post" name="adminForm">
	<input type="hidden" name="action" value="save" />
	
	<dl>
		<dt><label for="field_title"><?= @text('Title')?>:</label></dt>
		<dd><input type="text" name="title" id="field_title" value="<?= $image->title?>" /></dd>
	</dl>

	<dl>
		<dt><label for="field_filename"><?= @text('Filename')?>:</label></dt>
		<dd><input type="text" name="filename" id="field_filename" value="<?= $image->filename ?>" /></dd>
	</dl>

	<p style="clear:both">
		<input type="submit" value="Save" />
	</p>
</form>
