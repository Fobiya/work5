'use strict';

jQuery(document).ready(function ($) {
  $('.block_menu a').click(function (event) {
    event.preventDefault();


    // Get tag slug from title attirbute
    let selected_category = $(this).data('cat-id');
    // console.log('gg=' + selected_category);
    // After user click on tag, fade out list of posts
    $('.block__post').fadeOut();

    $.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',

      data: {
        action: 'me_get_posts',
        category: selected_category,
        spring_nonce: spring_vars.spring_nonce,
      },
      success: function (response, data, res) {
        $('.block__post').html(response);
        $('.block__post').fadeIn();
      }
    })
  });


}); 
