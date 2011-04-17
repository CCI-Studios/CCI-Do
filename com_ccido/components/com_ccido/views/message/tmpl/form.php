<?= JHtml::_('behavior.mootools')?>
<style src="media://com_ccido/css/modal.css" />
<script src="media://com_ccido/js/form.js" />
<script src="media://lib_koowa/js/koowa.js" />

<? if ($message->id): ?>
	<h1>Edit message Details</h1>
<? else: ?>
	<h1>New message Details</h1>
<? endif; ?>

<form class="cci-form" saction="<?= @route('id='.$message->id)?>" method="post" name="adminForm">
	<input type="hidden" name="action" value="save" />
	
	<dl>
		<dt><label for="field_author"><?= @text('Name')?>:</label></dt>
		<dd><input type="text" name="author" id="field_author" value="<?= $message->author?>" /></dd>
	</dl>

	<dl>
		<dt><label for="field_title"><?= @text('Title')?>:</label></dt>
		<dd><input type="text" name="title" id="field_title" value="<?= $message->title ?>" /></dd>
	</dl>

	<dl>
		<dt><label for="field_description"><?= @text('Description')?></label></dt>
		<dd><textarea name="description" rows="5" id="field_description"><?= $message->description?></textarea></dd>
	</dl>

	<p style="clear:both">
		<input type="submit" value="Save" />
	</p>
</form>
