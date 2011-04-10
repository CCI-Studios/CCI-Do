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
			<a href="#">
				<img src="/images/m_image/edit.png" />
			</a>
		</div>
		<? endif; ?>
	</h2>
	<?= $link->description?>
</div>
<? endforeach; ?>
