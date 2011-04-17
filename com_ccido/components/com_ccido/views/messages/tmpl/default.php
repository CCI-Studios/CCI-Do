<?= JHtml::_('behavior.mootools')?>
<?= JHtml::_('behavior.modal')?>
<style src="media://com_ccido/css/site.css" />
<script src="media://lib_koowa/js/koowa.js" />

<h1>Guestbook</h1>

<? foreach ($messages as $message): ?>
<div class="ccido-message">
	<h2>
		<?= $message->title?>
		<? if (KFactory::get('lib.joomla.user')->gid >= 21): ?>
		<div class="right">
			<a href="<?=@route('index.php?view=message&tmpl=component&layout=form&id='.$message->id)?>" class="modal" rel="{handler:'iframe'}">
				<img src="/images/m_images/edit.png" />
			</a>
		</div>
		<? endif; ?>
	</h2>
	<?= $message->description?>
	<p>- <?= $message->author?></p>
</div>
<? endforeach; ?>

<p>Click <a class="modal" rel="{handler:'iframe'}" href="<?= @route('view=message&layout=form&tmpl=component')?>">here</a> to leave a message for the bride and groom.</p>
