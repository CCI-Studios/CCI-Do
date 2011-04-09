<?= JHtml::_('behavior.modal'); ?>
<style src="media://com_cci_do/css/site.css" />

<h1>Events</h1>

<? foreach ($events as $event): ?>
<div class="event">
	<h2>
		<a name="<?= $event->id?>"><?= $event->title ?></a>
		<? if (KFactory::get('lib.joomla.user')->gid >= 21): ?>
			<div class="right">
				<a class="modal" rel="{handler:'iframe'}" href="<?= @route('view=event&layout=form&tmpl=component&id='.$event->id) ?>">
					<img src="/images/M_images/edit.png" />
				</a>
			</div>
		<? endif; ?>
	</h2>
	<?= $event->description ?>

	<p>Click <a href="<?= @route('view=events&layout=directions').'#'.$event->id ?>">here</a> for a map and directions</p>
</div>
<? endforeach; ?>

<? if (KFactory::get('lib.joomla.user')->gid >= 21): ?>
	<p><a href="<?= @route('view=event&layout=form')?>">Add a new event</a></p>
<? endif; ?>
