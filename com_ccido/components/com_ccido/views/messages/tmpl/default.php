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
			<a href="">
				<img src="/images/cancel_f2.png" height="18" />
			</a>
		</div>
		<? endif; ?>
	</h2>
	<?= $message->description?>
	<p>- <?= $message->author?></p>
</div>
<? endforeach; ?>

<?= @template('default_form') ?>
