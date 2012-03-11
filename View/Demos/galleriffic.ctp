<?php
echo $this->Html->script(
	array(
		'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js',
		'/flickr_demos/js/galleriffic/jquery.galleriffic',
		'/flickr_demos/js/galleriffic/jquery.opacityrollover',
		'/flickr_demos/js/galleriffic/demo.galleriffic'
	),
	array('inline' => false)
);
echo $this->Html->css(array('/flickr_demos/css/galleriffic'), null, array('inline' => false));
?>

<div id="page">

	<div id="container">

		<h1>
			Flickr CakePHP Plugin:
			<a href="http://www.twospy.com/galleriffic/">Galleriffic</a> Demo
		</h1>
		<?php echo $this->element('demo_nav'); ?>

		<div id="gallery" class="content">
			<div id="controls" class="controls"></div>
			<div class="slideshow-container">
				<div id="loading" class="loader"></div>
				<div id="slideshow" class="slideshow"></div>
			</div>
			<div id="caption" class="caption-container"></div>
		</div>

		<div id="thumbs" class="navigation">
			<ul class="thumbs">
			<?php
			echo $this->Flickr->getPhotos(
				$photos,
				array('type' => 'li'),
				array('class' => 'thumb', 'name' => 'flickr_id', 'title' => 'flickr_datetaken'),
				array('alt' => 'flickr_title'),
				array(),
				array(
					'type' => 'div',
					'location' => 'after',
					'class' => 'caption',
					'caption' => 'flickr_title'
				)
			);
			?>
			</ul>
		</div>

		<div style="clear: both;"></div>

		<h3>Controller:</h3>
		<pre>
public function galleriffic() {
	$params = array(
		'tags' => 'Public',
		'per_page' => 20,
	);
	$photos = $this->Flickr->flickrRequest($params);
	$this->set('photos', $photos);
}
		</pre>

		<h3>Helper:</h3>
		<pre>
echo $this->Flickr->getPhotos(
	$photos,
	array('type' => 'li'),
	array('class' => 'thumb', 'name' => 'flickr_id', 'title' => 'flickr_datetaken'),
	array('alt' => 'flickr_title'),
	array(),
	array(
		'type' => 'div',
		'location' => 'after',
		'class' => 'caption',
		'caption' => 'flickr_title'
	)
);
	</pre>

	</div><!-- /container -->

</div><!-- /page -->
