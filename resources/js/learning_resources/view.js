$(document).ready(function(){
    $("select.select-card-category").on( "change", function() {
        let selectVal = $("select.select-card-category").val();
        window.location.href = `/resources/view/${selectVal}`;
    });
});
