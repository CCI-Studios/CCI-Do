<h1>Events</h1>

<? foreach ($events as $event): ?>
<div class="event">
	<h2><A name="<?= $event->id?>"><?= $event->title ?></h2>
	<?= $event->description ?>

	<p>Click <a href="<?= @route('view=events&layout=directions').'#'.$event->id ?>">here</a> for a map and directions</p>
</div>
<? endforeach; ?>
