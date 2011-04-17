<?= JHtml::_('behavior.mootools')?>
<?= JHtml::_('behavior.modal')?>
<style src="media://com_ccido/css/site.css" />
<script src="media://lib_koowa/js/koowa.js" />

<? switch (KRequest::get('get.type', 'int', '-1')) {
	case 0:
		echo '<h1>Our Bridesmaids</h1>'; break;
	case 1:
		echo '<h1>Our Groomsmen</h1>'; break;
	default:
		echo '<h1>Wedding Party</h1>'; break;
}?>


<? foreach ($members as $member): ?>
<div class="ccido-member">
	<? if ($member->filename): ?>
	<div class="image">
		<a class="modal" rel="{handler:'image'}" href="media://com_ccido/uploads/<?=$member->filename?>">
			<img src="media://com_ccido/uploads/thumb_<?=$member->filename?>" width="75" height="75" />
		</a>
	</div>
	<? endif; ?>
	
	<h2>
		<?= $member->name?>
		<? if (KFactory::get('lib.joomla.user')->gid >= 21): ?>
		<div class="right">
			<a class="modal" rel="{handler:'iframe'}" href="<?= @route('view=member&layout=form&tmpl=component&id='.$member->id) ?>">
				<img src="/images/M_images/edit.png" />
			</a>
		</div>
		<? endif; ?>
	</h2>
	<?= $member->description?>
</div>
<? endforeach; ?>

<p><? switch (KRequest::get('get.type', 'int', '-1')) {
	case 0:
		echo 'See our <a href="'.@route('view=members&type=1').'">Groomsmen</a>'; break;
	case 1:
		echo 'See our <a href="'.@route('view=members&type=0').'">Bridesmaids</a>'; break;
}?></p>

<? if (KFactory::get('lib.joomla.user')->gid >= 21): ?>
	<p><a class="modal" rel="{handler:'iframe'}" href="<?= @route('view=member&layout=form&tmpl=component')?>">Add a new party member
		</a></p>
<? endif; ?>