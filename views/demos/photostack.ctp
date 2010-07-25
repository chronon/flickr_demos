<?php
echo $this->Html->script(
    array(
        '/flickr/js/jquery-1.4.2.min',
        '/flickr/js/jquery.photostack'
    ),
    array('inline' => false)
);
echo $this->Html->css(
    array('/flickr/css/photostack'),
    null,
    array('inline' => false)
);
?>

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