<script src="media://lib_koowa/js/koowa.js" />

<? if ($event->id): ?>
	<h1>Edit Event Details</h1>
<? else: ?>
	<h1>New Event Details</h1>
<? endif; ?>

<form action="<?= @route('id='.$event->id)?>" method="post" name="adminForm">
	<dl>
		<dt><label for="field_title"><?= @text('Title')?>:</label></dt>
		<dd><input type="text" name="title" id="field_title" value="<?= $event->title?>" /></dd>
	</dl>

	<dl>
		<dt><label for="field_location"><?= @text('Location')?>:</label></dt>
		<dd><input type="text" name="location" id="field_location" value="<?= $event->location ?>" /></dd>
	</dl>

	<dl>
		<dt><label for="field_directions"><?= @text('Directions')?>:</label></dt>
		<dd><?= @helper('admin::com.default.template.helper.editor.display', array('name'=>'directions', 'width'=>300, 'height'=>200))?></dd>
	</dl>
	<dl>
		<dt><label for="field_description"><?= @text('Description')?>:</label></dt>
		<dd><?= @helper('admin::com.default.template.helper.editor.display', array('width'=>300, 'height'=>200))?></dd>
	</dl>

	<p style="clear:both">
		<a href="#" onclick="new Koowa.Form({
			method:'post',
			url:'<?= @route('view=event&id='.$event->id)?>',
			element: 'adminForm',
			params: { action:'apply', _token:'<?= JUtility::getToken()?>'}
		}).submit();
		window.parent.SqueezeBox.close();">Save</a>
	</p>

</form>
