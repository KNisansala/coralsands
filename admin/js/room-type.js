$(document).ready(function() {
    $("#colchild").hide();
    $("#colparent").hide();
    
    $("#childroom").click(function() {
        $("#colchild").show();
        $("#colparent").hide();
    });
    $("#parentroom").click(function() {
        $("#colchild").hide();
        $("#colparent").show();
    });
});



