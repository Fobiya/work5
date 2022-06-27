'use strict';

jQuery(document).ready(function ($) {
  $('.block_menu a').click(function (event) {

    // Prevent default action - opening tag page
    if (event.preventDefault) {
      event.preventDefault();
    } else {
      event.returnValue = false;
    }

    // Get tag slug from title attirbute
    let selected_category = $(this).data('cat-id');
    console.log('gg=' + selected_category);
    // After user click on tag, fade out list of posts
    $('.block__post').fadeOut();
    $.ajax({
      type: 'POST',
      url: spring_vars.spring_ajax_url,
      dataType: 'html',
      data: {
        action: 'ajax_filter_get_posts',
        category: selected_category,
      },
      success: function (res) {
        $('.block__post').html(res);
        $('.block__post').fadeIn();
      }
    })
  });


  // let data = {
  //   action: 'ajax_filter_get_posts', // function to execute
  //   spring_nonce: spring_vars.spring_nonce, // wp_nonce
  //   category: selected_category, // selected cat id
  // };

  // $.post(spring_vars.spring_ajax_url, data, function (response) {

  //   if (response) {
  //     // Display posts on page
  //     $('.block__post').html(response);
  //     // Restore div visibility
  //     $('.block__post').fadeIn();
  //   };
  // });
});
