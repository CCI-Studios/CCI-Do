<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>
<style src="media://lib_koowa/css/koowa.css" />
<style src="media://com_default/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table class="adminlist">
		<thead><tr>
			<th width="5"><?= @text('Num');?></th>
			<th width="5"></th>
			<th width="150"><?= @helper('grid.sort', array('column' => 'name')) ?></th>
			<th><?= @text('Description')?></th>
			<th width="5"><?= @text('id') ?></td>
		</tr></thead>

		<tfoot><tr>
			<td colspan="99">
				<?= @helper('paginator.pagination', array('total'=>$total))?>
			</td>
		</tr></tfoot>

		<tbody>
			<? foreach ($members as $index=>$member): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$member))?></td>
				<td><a href="<?= @route('view=member&id='.$member->id)?>">
					<?=$member->name?>
				</a></td>
				<td><?= $member->description?></td>
				<td align="center"><?= $member->id ?></td>
			</tr>
			<? endforeach; ?>

			<? if (!count($members)): ?>
			<tr>
				<td colspan="4" align="center">
					<?= @text('No members Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
