/**
 * Created by HOME on 8/1/2017.
 */
jQuery(document).ready(function($){
    $("#page-staff-get-width-set-height-video").height(parseInt($("#page-staff-get-width-set-height-video").css("width" ),10)/2);
    $("#page-staff-get-width-set-height1").height($("#page-staff-get-width-set-height1").css("width"));
    $("#page-staff-get-width-set-height0").height($("#page-staff-get-width-set-height0").css("width"));
    $( window ).resize(function() {
        $("#page-staff-get-width-set-height-video").height(parseInt($("#page-staff-get-width-set-height-video").css("width" ),10)/2);
        $("#page-staff-get-width-set-height1").height($("#page-staff-get-width-set-height1").css("width"));
        $("#page-staff-get-width-set-height0").height($("#page-staff-get-width-set-height0").css("width"));

    });
});
