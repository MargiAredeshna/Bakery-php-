$(document).on('click','.update',function(e) {
    var id=$(this).attr("data-id");
    var name=$(this).attr("data-name");
    var cat_img=$(this).attr("data-img");
    var isactive=$(this).attr("data-isactive");
    $('#id_u').val(id);
    $('#cat_name').val(name);
    $('#cat_img').attr("src",cat_img);
    if(isactive == 1){
        $("#isactive").attr('checked', 'checked');
        $(".d_none_cat").hide();
    }

});
setTimeout(() => {
    $("#settimeout").hide();
  }, "5000")

$(document).on('click','.pro_update',function(e) {
    
    var id=$(this).attr("data-id");
    var p_catname=$(this).attr("data-cname");
    var p_name=$(this).attr("data-name");
    var p_img=$(this).attr("data-pimg");
    var p_long_desc=$(this).attr("data-long");
    var p_orignal_price=$(this).attr("data-oprice");
    var p_price=$(this).attr("data-price");
    var p_variety=$(this).attr("data-variety");
    var p_offer=$(this).attr("data-offer");
    var p_isactive=$(this).attr("data-isactive");

    $('#p_id').val(id);
    $('#P_catgory').val(p_catname);
    $('#p_name').val(p_name);
    $('#p_longdesc').val(p_long_desc);
    $('#pro_img').attr("src",p_img);
    $('#p_orgiprice').val(p_orignal_price);
    $('#p_price').val(p_price);
    $('#p_verayti').val(p_variety);
    
    if(p_offer == "on"){
        $("#offer_on").attr('checked', 'checked');
    }
    if(p_isactive == 1){
        $("#offer_isactive").attr('checked', 'checked');
        $(".d_none_pro").hide();
    }

});
$(document).on('click','.feedback_update',function(e) {
    var id=$(this).attr("data-id");
    var isactive=$(this).attr("data-isactive");
    $('#id_feedback').val(id);
    if(isactive == 1){
        $("#feedback_on").attr('checked', 'checked');
    }
});