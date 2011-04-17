<?= JHtml::_('behavior.mootools')?>
<style src="media://com_ccido/css/modal.css" />
<script src="media://com_ccido/js/form.js" />
<script src="media://lib_koowa/js/koowa.js" />

<? if ($member->id): ?>
	<h1>Edit Member Details</h1>
<? else: ?>
	<h1>New Member Details</h1>
<? endif; ?>

<form class="cci-form" saction="<?= @route('id='.$member->id)?>" method="post" name="adminForm">
	<input type="hidden" name="action" value="save" />
	
	<dl>
		<dt><label for="field_name"><?= @text('Name')?>:</label></dt>
		<dd><input type="text" name="name" id="field_name" value="<?= $member->name?>" /></dd>
	</dl>

	<dl>
		<dt><label for="field_filename"><?= @text('Picture')?>:</label></dt>
		<dd><input type="text" name="filename" id="field_filename" value="<?= $member->filename ?>" /></dd>
	</dl>

	<dl>
		<dt><label for="field_bridesmaid"><?= @text('Type')?>:</label></dt>
		<dd><?= @helper('admin::com.ccido.template.helper.listbox.membertype', array('name'=>'bridesmaid'))?></dd>
	</dl>
	
	<dl>
		<dt><label for="field_description"><?= @text('Description')?></label></dt>
		<dd><textarea name="description" rows="5" id="field_description"><?= $member->description?></textarea></dd>
	</dl>

	<p style="clear:both">
		<input type="submit" value="Save" />
	</p>
</form>
