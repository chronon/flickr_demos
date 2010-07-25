# Flickr CakePHP Plugin Demos

This is a small collection of (mostly) [jQuery][1] based ways to use [Flickr][2] hosted photos in your own [CakePHP][3] application. The demos here use my [CakePHP Flickr plugin][4], which consists of two files, a component and a helper. **Click any of the links above to see the various demos.**

The [source code][5] for these demos is freely available, so it should be very easy to add these (or other) types of photo galleries to your own app.

When viewing the controller code for each demo, the $params array is merged with some defaults I've set in /app/bootstrap.php. Setting defaults for this Flickr plugin is totally optional, but makes for less code in your controller. The defaults I've set for all of these demos is:

    'Flickr.defaults', array(
        'api_key' => '111122223333aaaabbbbccccdddd',
        'user_id' => '1234567@N66',
        'method' => 'flickr.photos.search',
        'format' => 'php_serial',
        'extras' => 'description, date_taken'
    )


All defaults can be overridden/replaced in your controller. See the docs for my [Flickr plugin][4] and the [Flickr API][6] for additional information.
For more information on how to use and customize any of the demo galleries you see here, check the developer websites below (and thank them for their excellent work!):

*   [Colorbox][7]
*   [Galleriffic][8]
*   [Photostack][9]

 [1]: http://jquery.com/
 [2]: http://flickr.com/
 [3]: http://cakephp.org/
 [4]: http://github.com/chronon/flickr
 [5]: http://github.com/chronon/flickr_demos
 [6]: http://www.flickr.com/services/api/
 [7]: http://colorpowered.com/colorbox/
 [8]: http://www.twospy.com/galleriffic/
 [9]: http://tympanus.net/codrops/2010/06/27/beautiful-photo-stack-gallery-with-jquery-and-css3/