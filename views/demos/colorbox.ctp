<?php
echo $this->Html->script(
    array(
        'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js',
        '/flickr_demos/js/colorbox/jquery.colorbox-min',
        '/flickr_demos/js/colorbox/demo.colorbox'
    ),
    array('inline' => false)
);
echo $this->Html->css(array('/flickr_demos/css/colorbox'), null, array('inline' => false));
?>

<div id="page">

    <div id="cb-content">

        <h1>
            Flickr CakePHP Plugin:
            <a href="http://colorpowered.com/colorbox/">Colorbox</a> Demo
        </h1>
        <?php echo $this->element('demo_nav'); ?> 

        <p><strong>Click a thumbnail for Colorbox action...</strong></p>

        <h3>Controller:</h3>
        <pre>
public function colorbox() {
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
    array('type' => 'div'),
    array('rel' => 'example1', 'title' => 'flickr_title')
);
        </pre>

    </div>

    <div id="cb-photos">
        <?php
        echo $this->Flickr->getPhotos(
            $photos,
            array('type' => 'div'),
            array('rel' => 'example1', 'title' => 'flickr_title'),
            array(),
            array(),
            array()
        );
        ?> 
    </div>

</div><!-- /page -->