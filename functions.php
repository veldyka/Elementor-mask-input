<?php
/*Elementor mask input include code for POPUP form too*/
add_action( 'wp_head', function () { 
  wp_enqueue_script(
      'mihdan-masked-input',
      /*Script file should be on the your directory wp-content/uploads/assets/jquery.maskedinput.min.js */
      wp_upload_dir()['baseurl'] . '/assets/jquery.maskedinput.min.js'); 
 ?>
<script>

		jQuery(
  function( $ ) {
    $( document ).on(
      'elementor/popup/show',
      function ( event, id, instance ) {
        $( 'input[type="tel"]' ).mask(
          '+38(999)999-99-99',
          {
            placeholder: ' '
          }
        );
      }
    );    
  }
);
jQuery(document).ready(function() {
$("input[type='tel']").mask("+38(999) 999-99-99", {clearIfNotMatch: true}).on("blur", function () {
        var last = $(this).val().substr($(this).val().indexOf("-") + 1);
		console.log(last);
        if (last.length == 3) {
            var move = $(this).val().substr($(this).val().indexOf("-") - 1, 1);
            var lastfour = move + last;
            var first = $(this).val().substr(0, 9);
            $(this).val(first + '-' + lastfour);
        }
    });
    });	
	
</script>
<?php } );
