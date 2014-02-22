<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Student Design Collective
 */
?>

	</div><!-- #content -->

 <footer id="colophon" class="site-footer" role="contentinfo">
   <div class="container">
        <div class="footer-logo">
            <img src="wp-content/uploads/2013/12/mctc-logo.png" title="MCTC logo" alt="MCTC Logo">
            <div>Official MCTC Student Group
            </div>
        </div>
        <div class="footer-social">
          <div class="email-us"><a href="?page_id=2"></a></div>
<div class='one_fourth ' ><div class="facebook-us"><a href="https://www.facebook.com/groups/DAMClubMCTC/"></a></div></div>
<div class='one_fourth ' ><div class="linkedin-us"><a href="http://www.linkedin.com/groups/Student-Design-Collective-4183550"></a></div></div>
<div class='one_fourth' ><div class="tweet-us"><a href="https://twitter.com/SDCofMCTC"></a></div> </div>

        </div>
          <!-- old social buttons <a href="http://timbdesign.com/studentdesign/?page_id=2"><img src="http://timbdesign.com/studentdesign/wp-content/uploads/2014/01/mail3.png" title="contact" alt="contact"></a>
          <a href="http://www.facebook.com/sdc"><img src="http://timbdesign.com/studentdesign/wp-content/uploads/2014/01/fb.png" title="facebook" alt="facebook"></a>
          <a href="http://www.linkedin.com/sdc"><img src="http://timbdesign.com/studentdesign/wp-content/uploads/2014/01/in.png" title="linkedin" alt="linkedin"></a>
          <a href="http://www.twitter.com/sdc"><img src="http://timbdesign.com/studentdesign/wp-content/uploads/2014/01/tw.png"title="twitter" alt="twitter"></a>-->

   </div><!-- end container-->
 </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<!-- Put this right before the </body> closing tag -->

  <script language="javascript" type="text/javascript" src="<?php  echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>
<script>
  var nav = responsiveNav(".nav-collapse");

var divs = $('.hero-unit');
$(window).on('scroll', function() {
   var st = $(this).scrollTop();
   divs.css({ 'opacity' : (1 - st/205) });
});

$(window).bind("scroll", function() {
    if ($(this).scrollTop() < 520) {
        $(".hero-unit").fadeIn();
    } else {
        $(".hero-unit").stop().fadeOut();
    }
});

// Call Skrollr
( function( $ ) {
    // Init Skrollr
    var s = skrollr.init({
        render: function(data) {
            //Debugging - Log the current scroll position.
            console.log(data.curTop);
        }
    });
} )( jQuery );


// Uncomment to have the calendar appear before the blog

// $(window).resize(function () {
//    if ($(window).width() < 480) {
//        $(".twothirds").insertAfter($(".onethird"));
//    } else {
//        $(".onethird").insertAfter($(".twothirds"));
//    }

// });

</script>
</body>
</html>

