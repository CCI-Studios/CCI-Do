<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>
<style src="media://lib_koowa/css/koowa.css" />
<style src="media://com_default/css/admin.css" />

<form action="<?= @route(); ?>" method="get">
	<table class="adminlist">
		<thead><tr>
			<th width="5"><?= @text('Num');?></th>
			<th width="5"></th>
			<th width="150"><?= @helper('grid.sort', array('column'=>'author'))?></th>
			<th width="150"><?= @helper('grid.sort', array('column' => 'title')) ?></th>
			<th><?= @text('Description')?></th>
			<th width="5"><?= @text('id') ?></th>
		</tr></thead>

		<tfoot><tr>
			<td colspan="99">
				<?= @helper('paginator.pagination', array('total'=>$total))?>
			</td>
		</tr></tfoot>

		<tbody>
			<? foreach ($messages as $index=>$message): ?>
			<tr class="row<?=$index % 2?>">
				<td align="center"><?=$index?></td>
				<td><?= @helper('grid.checkbox', array('row'=>$message))?></td>
				<td><a href="<?= @route('view=message&id='.$message->id)?>">
					<?=$message->title?>
				</a></td>

				<td align="center"><?= $message->id ?></td>
			</tr>
			<? endforeach; ?>

			<? if (!count($messages)): ?>
			<tr>
				<td colspan="4" align="center">
					<?= @text('No messages Available.'); ?>
				</td>
			</tr>
			<? endif;?>
		</tbody>
	</table>
</form>
