<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$message->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:61%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Message Details')?></legend>

		<label for="field_author" class="mainlabel"><?= @text('Author') ?>:</label>
		<input message="text" name="author" id="field_author" value="<?=$message->author;?>" /><br/>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input message="text" name="title" id="field_title" value="<?=$message->title;?>" /><br/>
	</fieldset>

	<fieldset>
		<legend><?= @text('Description') ?></legend>
		<?= @helper('editor.display', array('height'=>300))?>
	</fieldset>
</div>
</form>



