<div id="page">
    <div id="demohome">
        <h1>
            Flickr CakePHP Plugin Demos
        </h1>

        <?php echo $this->element('demo_nav'); ?>

        <p>This is a small collection of (mostly) <a href="http://jquery.com/">jQuery</a> based ways to use <a href="http://flickr.com/">Flickr</a> hosted photos in your own <a href="http://cakephp.org/">CakePHP</a> application. The demos here use my <a href="#">CakePHP Flickr plugin</a>, which consists of two files, a component and a helper. Click any of the links above to see the various demos.</p>

        <p>The <a href="github">source code</a> for these demos is freely available, so it should be very easy to add these (or other) types of photo galleries to your own app.</p>

        <p>When viewing the controller code for each demo, the $params array is merged with some defaults I've set in /app/bootstrap.php. Setting defaults for this Flickr plugin is totally optional, but makes for less code in your controller. The defaults I've set for all of these demos is:</p>
        <pre>
'Flickr.defaults', array(
    'api_key' => '111122223333aaaabbbbccccdddd',
    'user_id' => '1234567@N66',
    'method' => 'flickr.photos.search',
    'format' => 'php_serial',
    'extras' => 'description, date_taken'
)
    </pre>

    <p>All defaults can be overridden/replaced in your controller. See the docs for my <a href="github">Flickr plugin</a> and the <a href="http://www.flickr.com/services/api/">Flickr API</a> for additional information.

    <p>For more information on how to use and customize any of the demo galleries you see here, check the developer websites below (and thank them for their excellent work!):</p>

        <ul>
            <li><a href="http://colorpowered.com/colorbox/">Colorbox</a></li>
            <li><a href="http://www.twospy.com/galleriffic/">Galleriffic</a></li>
            <li><a href="http://tympanus.net/codrops/2010/06/27/beautiful-photo-stack-gallery-with-jquery-and-css3/">Photostack</a></li>
        </ul>
    </div>
</div>