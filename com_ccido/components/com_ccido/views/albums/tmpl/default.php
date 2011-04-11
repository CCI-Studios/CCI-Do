<style src="media://com_ccido/css/site.css" />

<h1>Photo Albums</h1>

<? foreach($albums as $album): ?>
<div class="ccido-album">
	<a href="<?= @route('view=album&id='.$album->id)?>">
		<img src="http://dummyimage.com/100x75/000/fff" /><br/>
		<?= $album->title ?>
	</a>
</div>
<? endforeach;?>
<div class="clear"></div>
