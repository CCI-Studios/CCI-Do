<div>
	<form action="<?= @route('view=message'); ?>" method="post">
		<fieldset>
			<legend>Add a new message</legend>

			<dl>
				<dt><label for="field_author"><?= @text('Name')?>:</label></dt>
				<dd><input type="input" id="field_author" name="author" value=""></dd>
			</dl>
			<dl>
				<dt><label for="field_title"><?= @text('Title')?>:</label></dt>
				<dd><input type="input" id="field_title" name="title" value=""></dd>
			</dl>
			<dl>
				<dt><label for="field_description"><?= @text('Description')?>:</label></dt>
				<dd><?= @helper('admin::com.default.template.helper.editor.display', array('height'=>300))?></dd>
			</dl>

			<p class="clear">
				<input type="submit" value="Send" />
			</p>
		</fieldset>
	</form>
</div>
