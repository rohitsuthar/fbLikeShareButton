<div id="fb-root"></div>
<script>
    (function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
</script>
<?php $height = ($rendered['width']=='')?'auto':$rendered['width'].'px'; ?>

<div class="fb-like" data-href="<?=$rendered['url'];?>" data-width="<?=$rendered['width']?>" data-layout="<?=$rendered['layout'];?>" data-action="<?=$rendered['action'];?>" data-colorscheme="<?=$rendered['color_scheme'];?>" data-show-faces="<?=$rendered['show_faces'];?>" data-share="<?=$rendered['show_share'];?>" style="display:block; height:<?php echo $height.' !important'; ?>"></div>

