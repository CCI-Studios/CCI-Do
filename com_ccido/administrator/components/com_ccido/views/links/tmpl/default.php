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
			<th width="5"><?= @text('id') ?></td>
		</tr></thead>

		<tfoot><tr>
			<td colspan="99">
				<?= @helper('paginator.pagination', array('total'=>$total))?>
			</td>
		</tr></tfoot>

		<tbody>
			<? foreach ($links as $index=>$link): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$link))?></td>
				<td><a href="<?= @route('view=link&id='.$link->id)?>">
					<?=$link->title?>
				</a></td>

				<td align="center"><?= $link->id ?></td>
			</tr>
			<? endforeach; ?>

			<? if (!count($links)): ?>
			<tr>
				<td colspan="4" align="center">
					<?= @text('No links Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
