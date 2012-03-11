<?php
echo $this->Html->script(
	array(
		'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js',
		'/flickr_demos/js/photostack/jquery.photostack'
	),
	array('inline' => false)
);
echo $this->Html->css(array('/flickr_demos/css/photostack'), null, array('inline' => false));
?>

<div id="demohead">
	<h1>
		Flickr CakePHP Plugin:
		<a href="http://tympanus.net/codrops/2010/06/27/beautiful-photo-stack-gallery-with-jquery-and-css3/">Photostack</a> Demo
	</h1>
	<?php echo $this->element('demo_nav'); ?>
</div>

<div id="ps_slider" class="ps_slider">
	<a class="prev disabled"></a>
	<a class="next disabled"></a>
	<div id="ps_albums">

		<?php
		$i = 1;
		foreach ($sets['photosets']['photoset'] as $set) {
			echo '<div class="ps_album" style="opacity:0;">';
			$id = $set['id'];
			$set['id'] = $set['primary'];
			echo $this->Flickr->getPhoto($set, '_s', 'img');
			echo '<div class="ps_desc">';
			echo '<h2>'.htmlentities($set['title']['_content']).'</h2>';
			echo '<span>'.htmlentities($set['description']['_content']).'</span>';
			echo '<div style="display:none;" id="sid'.$i.'">'.$id.'</div>';
			echo "</div></div>\n";
			$i++;
		}
		?>

	</div>
</div>

<div id="ps_overlay" class="ps_overlay" style="display:none;"></div>
<div><a id="ps_close" class="ps_close" style="display:none;"></a></div>
<div id="ps_container" class="ps_container" style="display:none;">
	<a id="ps_next_photo" class="ps_next_photo" style="display:none;"></a>
</div>

<div id="page">
<div id="demo-code">
		<h3>Controller:</h3>
		<pre>
// fetch the sets for the user, including set thumbnail, title, and description
public function photostack() {
	$params = array(
		'method' => 'flickr.photosets.getList',
	);
	$sets = $this->Flickr->flickrRequest($params);
	$this->set('sets', $sets);
}
		</pre>
		<pre>
// AJAX get the photos when a set is clicked
public function psfiles() {
	$this->autoRender = false;
	$params = array(
		'method' => 'flickr.photosets.getPhotos',
		'photoset_id' => $_GET['album_name'],
		'per_page' => 3
	);
	$photos = $this->Flickr->flickrRequest($params);

	foreach ($photos['photoset']['photo'] as $flk) {
		$base = 'http://farm'.$flk['farm'].'.static.flickr.com/'.$flk['server'];
		$base .= '/'.$flk['id'].'_'.$flk['secret'];
		$files[] = $base.'.jpg';
	}

	$encoded = json_encode($files);
	echo $encoded;
	unset($encoded);
}
		</pre>

		<h3>Helper:</h3>
		<pre>
// used in a foreach() loop, see the demo source...
echo $this->Flickr->getPhoto($set, '_s', 'img');
		</pre>
</div>
</div>
