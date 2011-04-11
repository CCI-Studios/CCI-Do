<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form
	enctype="multipart/form-data"
	action="<? @route('id='.$album->id)?>"
	method="post"
	class="adminform"
	name="adminForm">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<div style="width:31%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Album Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input album="text" name="title" id="field_title" value="<?=$album->title;?>" /><br/>

		<label for="field_filename" class="mainlabel"><?= @text('Filename') ?></label>
		<input album="text" name="filename" id="field_filename" value="<?=$album->filename;?>" /><br/>

		<label for="field_filename_upload" class="mainlabel"><?= @text('Upload File')?>:</label>
		<input type="file" id="field_filename_upload" name="filename_upload" /><br/>

	</fieldset>

	<fieldset>
		<legend>Preview</legend>
		<img src="<?= $album->filename?>" />
	</fieldset>
</div>
</form>



