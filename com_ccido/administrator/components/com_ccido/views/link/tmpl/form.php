<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$link->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:31%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Link Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input link="text" name="title" id="field_title" value="<?=$link->title;?>" /><br/>

		<label for="field_url" class="mainlabel"><?= @text('URL') ?></label>
		<input link="text" name="url" id="field_url" value="<?=$link->url;?>" /><br/>
	</fieldset>

	<fieldset>
		<legend>Description</legend>
		<?= @helper('editor.display', array('height'=>300))?>
	</fieldset>
</div>
</form>



