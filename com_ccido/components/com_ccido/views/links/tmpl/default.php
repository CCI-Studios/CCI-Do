<?= JHtml::_('behavior.mootools')?>
<?= JHtml::_('behavior.modal')?>
<style src="media://com_ccido/css/site.css" />
<script src="media://lib_koowa/js/koowa.js" />
<script src="media://com_ccido/js/actions.js" />

<h1>Our Links</h1>

<? foreach ($links as $link): ?>
<div class="ccido-link">
	<h2>
		<a href="<?= $link->url?>" target="_blank">
			<?= $link->title?>
		</a>
		<? if (KFactory::get('lib.joomla.user')->gid >= 21): ?>
			<div class="right">
				<a class="modal" rel="{handler:'iframe'}" href="<?= @route('view=link&layout=form&tmpl=component&id='.$link->id) ?>">
					<img src="/images/M_images/edit.png" />
				</a>
			</div>
		<? endif; ?>
	</h2>
	<?= $link->description?>
</div>
<? endforeach; ?>


<? if (KFactory::get('lib.joomla.user')->gid >= 21): ?>
	<p><a class="modal" rel="{handler:'iframe'}" href="<?= @route('view=link&layout=form&tmpl=component')?>">Add a new link</a></p>
<? endif; ?>