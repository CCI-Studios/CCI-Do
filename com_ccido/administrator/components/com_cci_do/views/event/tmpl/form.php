<? defined('KOOWA') or die; ?>
<?= @helper('behavior.tooltip'); ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_default/css/form.css" />

<form action="<? @route('id='.$event->id)?>" method="post" class="adminform" name="adminForm">
<div style="width:31%; float: left" id="mainform">
	<fieldset>
		<legend><?= @text('Event Details')?></legend>

		<label for="field_title" class="mainlabel"><?= @text('Title') ?></label>
		<input event="text" name="title" id="field_title" value="<?=$event->title;?>" /><br/>

		<label for="field_location" class="mainlabel"><?= @text('Location') ?></label>
		<input event="text" name="location" id="field_location" value="<?=$event->location;?>" /><br/>
	</fieldset>

	<fieldset>
		<legend><?= @text('Description')?></legend>
		<?= @helper('editor.display', array('height'=>300, 'cols'=>'50'))?>
	</fieldset>

	<fieldset>
		<legend><?=  @text('Directions')?></legend>
		<?= @helper('editor.display', array('height'=>300, 'cols'=>'50', 'name'=>'directions'))?>
	</fieldset>
</div>

<div style="width: 69%; float: left;">
	<fieldset>
		<legend>Map</legend>

		<? if ($event->location): ?>
			<iframe
				width="100%"
				height="350"
				frameborder="0"
				scrolling="no"
				marginheight="0"
				marginwidth="0"
				src="<?= $event->getMapURL(); ?>">
			</iframe>
		<? else: ?>
			<p>No Map available</p>
		<? endif; ?>
	</fieldset>
</div>

</form>
