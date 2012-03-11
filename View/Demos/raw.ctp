<div id="page">
		<div id="demohome">

		<h1>
			Flickr CakePHP Plugin:
			<a href="http://colorpowered.com/colorbox/">Colorbox</a> Demo
		</h1>
		<?php echo $this->element('demo_nav'); ?>

		<p>
			<?php echo $this->Flickr->getPhotos($photos); ?>
		</p>

		<h3>Controller:</h3>
		<pre>
public function raw() {
	$params = array(
		'tags' => 'Public',
		'per_page' => 15,
	);
	$photos = $this->Flickr->flickrRequest($params);
	$this->set('photos', $photos);
}
		</pre>

		<h3>Helper:</h3>
		<pre>
echo $this->Flickr->getPhotos($photos);
		</pre>

	</div>
</div>
