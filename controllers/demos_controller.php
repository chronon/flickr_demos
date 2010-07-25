<?php
Class DemosController extends FlickrAppController {

    public $components = array('Flickr.Flickr');
    public $helpers = array('Flickr.Flickr');
    public $uses = array();

	public function galleriffic() {
	    $params = array(
            'tags' => 'Public',
            'per_page' => 20,
        );
		$photos = $this->Flickr->flickrRequest($params);
		$this->set('photos', $photos);
	}

	public function colorbox() {
	    $params = array(
            'tags' => 'Public',
            'per_page' => 20,
        );
		$photos = $this->Flickr->flickrRequest($params);
		$this->set('photos', $photos);
	}

	public function photostack() {
	    $params = array(
            'method' => 'flickr.photosets.getList',
        );
        $sets = $this->Flickr->flickrRequest($params);
		$this->set('sets', $sets);
	}

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

        // for local files:
        // $base = APP.'plugins'.DS.'flickr'.DS.'webroot'.DS;
        // $base .= 'demos/photostack/';
        //
        // $files = glob($base.'albums/'.$_GET['album_name']."/*.jpg");
        // foreach ($files as $file) {
        //     $photos[] = str_replace($base, '', $file);
        // }

        $encoded = json_encode($files);
        echo $encoded;
        unset($encoded);
	}

}