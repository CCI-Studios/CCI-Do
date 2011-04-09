<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>
<style src="media://lib_koowa/css/koowa.css" />
<style src="media://com_default/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table class="adminlist">
		<thead><tr>
			<th width="5"><?= @text('Num');?></th>
			<th width="5"></th>
			<th><?= @helper('grid.sort', array('column' => 'title')) ?></th>
			<th width="75"><?= @text('Google Maps')?></th>
			<th width="5"><?= @text('id') ?></td>
		</tr></thead>

		<tfoot><tr>
			<td colspan="99">
				<?= @helper('paginator.pagination', array('total'=>$total))?>
			</td>
		</tr></tfoot>

		<tbody>
			<? foreach ($events as $index=>$event): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$event))?></td>
				<td><a href="<?= @route('view=event&id='.$event->id)?>">
					<?=$event->title?>
				</a></td>
				<td align="center">
					<a href="<?= $event->google_map_url?>" target="_blank">Link</a>
				</td>

				<td align="center"><?= $event->id ?></td>
			</tr>
			<? endforeach; ?>

			<? if (!count($events)): ?>
			<tr>
				<td colspan="99" align="center">
					<?= @text('No events Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
