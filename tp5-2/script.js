/* Created by guitou on 27/10/15.*/

$(document).ready(function(){

    $("img").each(function(){
        var lien = $(this).attr('src');
        var height = '200';
        $(this).wrap("<a role='group' href='" + lien + "'></a>");
        $(this).height(height);
    });

    $('.gallery a').fancybox();

});

$(document).ready(function() {
    $( "#datepicker" ).datepicker();
});

