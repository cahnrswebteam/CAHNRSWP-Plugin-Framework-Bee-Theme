<div id="front-page-feature" class="full-screen-video-wrap">
	<div class="content-wrap">
      <footer class="site-nav">
          <nav class="featured-site-nav">
              <a href="#">
              	<img src="<?php echo plugin_dir_url( dirname( __FILE__ ) );?>/images/bee-helpful.png" />
              </a><a href="#">
              	<img src="<?php echo plugin_dir_url( dirname( __FILE__ ) );?>/images/bee-informed.png" />
              </a><a href="#">
              	<img src="<?php echo plugin_dir_url( dirname( __FILE__ ) );?>/images/bee-social.png" />
              </a>
          </nav>
      </footer>
    </div>
	<div class="full-screen-video">
		<div class="background-video-wrapper">
            <div class="fs-video">
            </div>
        </div>
    </div>
    <script>
var fs_video=function(e){this.wrap=jQuery(".fs-video");var i=this;this.video=function(){if(13!=i.wrap.css("z-index")){var r='<iframe src="'+e+'?autoplay=true&loop=1&background=1" ';r+='frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',i.wrap.html(r)}},this.resize=function(){var e=jQuery(window).height(),r=jQuery(window).width();if(e/r>=.5625){var o=e/.5625,t=(o-r)*-.5;i.wrap.css({width:o,height:e,left:t,top:0})}else{var s=i.wrap.outerHeight(),t=(s-e)*-.5;i.wrap.css({width:"100%",height:"auto",left:0,top:t})}},void 0!==e&&"undefined"!=typeof jQuery&&(i.video(),i.resize(),jQuery(window).resize(function(){i.resize()}))},bee_fs_video=new fs_video("https://player.vimeo.com/video/60000086");
</script>
</div>
