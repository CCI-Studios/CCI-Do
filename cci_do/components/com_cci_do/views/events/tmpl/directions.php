<?= JHtml::_('behavior.modal'); ?>

<h1>Events</h1>

<? foreach ($events as $event): ?>
<div class="event">
	<h2>
		<a name="<?=$event->id ?>"><?= $event->title ?></a>
	</h2>
	<?= $event->directions ?>

	<p><a class="modal" href="<?= $event->getMapURL(); ?>" rel="{handler:'iframe'}">View a map</a></p>
	<p>Click <a href="<?= @route('view=events').'#'.$event->id ?>">here</a> for event details.</p>
</div>
<? endforeach; ?>
