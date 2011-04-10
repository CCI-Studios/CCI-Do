<? defined('KOOWA') or die(); ?>
<?= @helper('behavior.tooltip'); ?>
<style src="media://com_ccido/css/site.css" />

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
	<h2>
		<?= $member->name?>
		<div class="right">
			<a href="#">
				<img src="/images/M_images/edit.png" />
			</a>
		</div>
	</h2>
	<?= $member->description?>
</div>
<? endforeach; ?>

<? switch (KRequest::get('get.type', 'int', '-1')) {
	case 0:
		echo 'See our <a href="'.@route('view=members&type=1').'">Groomsmen</a>'; break;
	case 1:
		echo 'See out <a href="'.@route('view=members&type=0').'">Bridesmaids</a>'; break;
}?>