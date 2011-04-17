<?= JHtml::_('behavior.mootools')?>
<style src="media://com_ccido/css/modal.css" />
<script src="media://com_ccido/js/form.js" />
<script src="media://lib_koowa/js/koowa.js" />

<? if ($link->id): ?>
	<h1>Edit Link Details</h1>
<? else: ?>
	<h1>New Link Details</h1>
<? endif; ?>

<form class="cci-form" saction="<?= @route('id='.$link->id)?>" method="post" name="adminForm">
	<input type="hidden" name="action" value="save" />
	
	<dl>
		<dt><label for="field_title"><?= @text('Title')?>:</label></dt>
		<dd><input type="text" name="title" id="field_title" value="<?= $link->title?>" /></dd>
	</dl>

	<dl>
		<dt><label for="field_url"><?= @text('Address')?>:</label></dt>
		<dd><input type="text" name="url" id="field_url" value="<?= $link->url ?>" /></dd>
	</dl>

	<dl>
		<dt><label for="field_description"><?= @text('Description')?>:</label></dt>
		<dd><textarea name="description" id="field_description" width="100%" rows="5"><?= $link->description ?></textarea></dd>
	</dl>

	<p style="clear:both">
		<input type="submit" value="Save" />
	</p>
</form>
