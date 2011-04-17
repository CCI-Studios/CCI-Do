<?= JHtml::_('behavior.mootools')?>
<?= JHtml::_('behavior.modal')?>
<style src="media://com_ccido/css/site.css" />
<script src="media://lib_koowa/js/koowa.js" />

<h1>Photo Albums</h1>

<? foreach($albums as $album): ?>
<div class="ccido-album">
	<a href="<?= @route('view=images&album='.$album->id)?>">
		<img src="http://dummyimage.com/100x75/000/fff" /><br/>
		<?= $album->title ?>
	</a>
</div>
<? endforeach;?>
<div class="clear"></div>

<? if (KFactory::get('lib.joomla.user')->gid >= 21): ?>
	<p>Click <a class="modal" rel="{handler:'iframe'}" href="<?= @route('view=album&layout=form&tmpl=component')?>">here</a> to create a new photo album.</p>
<? endif; ?>