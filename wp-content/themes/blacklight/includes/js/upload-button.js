jQuery(document).ready(function() {

    jQuery('#tj_featured_image_button').click(function() {

        window.send_to_editor = function(html)

        {
            imgurl = jQuery('img',html).attr('src');
            jQuery('#tj_featured_image').val(imgurl);
            tb_remove();
        }


        tb_show('', 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true');
        return false;

    });

});
