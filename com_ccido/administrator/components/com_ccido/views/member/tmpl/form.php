<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$member->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:61%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Member Details')?></legend>

		<label for="field_name" class="mainlabel"><?= @text('Name') ?></label>
		<input type="text" name="name" id="field_name" value="<?=$member->name;?>" /><br/>

		<label for="field_filename" class="mainlabel"><?= @text('Picture') ?></label>
		<input type="text" name="filename" id="field_filename" value="<?=$member->filename;?>" /><br/>
		<label for="field_bridesmaid" class="mainlabel"><?= @text('Type') ?></label>
		<?= @helper('admin::com.ccido.template.helper.listbox.membertype', array('name'=>'bridesmaid'))?><br/>
	</fieldset>

	<fieldset>
		<legend>Description</legend>
		<?= @helper('editor.display', array('height'=>300, 'width'=>'100%', 'name'=>'description'))?>
	</fieldset>
</div>
</form>



