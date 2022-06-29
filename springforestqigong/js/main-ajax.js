document.addEventListener('DOMContentLoaded', function(){
    jQuery(document).ready( function($){
//        let ajax_url = php_vars_new.ajax_url_new;
//        let ajax_none = php_vars.nonce;

        $("[name=add]").click(function() {
            $(":input.error").removeClass('error');
            $(".allert").remove();
            var error;
            var btn = $(this);
            var ref = btn.closest('form').find('[required]');
            var msg = btn.closest('form').find('input, textarea'); 
            var send_btn = btn.closest('form').find('[name=add]');

                if (!(error == 1)) {
                    $(send_btn).each(function() {
                        $(this).attr('disabled', true);
                    });
                    $(document).each(function() {
                        var form = $(this).closest('form'),
                            name = form.find('.name').val();
                        if ($(this).val() == '') {
                            $.ajax({
                                type: 'POST',
                                url : '/wp-admin/admin-ajax.php',
                                data: msg,
                                success: function(response, data) {
 
                                  
                                    
                                  $( '.cart__>span' ).text(response.quantity);
                                  
                                  $('.box__cart>.block__list').addClass('active');
                                  
                                  $("#block__list__cart").empty();
                                  $("#block__list__cart").append(response.code);

                                  
                                  $("html, body").animate({ scrollTop: 0 }, "slow");
//                                    console.log(success);

                                },
                                error: function(xhr, str) {
                                    alert('Р’РѕР·РЅРёРєР»Р° РѕС€РёР±РєР°: ' + xhr.responseCode);
                                }
                            });


                    };
                 });
                return false;
            };

        });       
            

    }) 
}) 

