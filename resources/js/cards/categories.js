$(document).ready(function(){
    $("select.select-card-type").on( "change", function() {
        let cardType = $("select.select-card-type").val();
        let catId = $(this).data("category");
        window.location.href = `/card/category/${catId}/type/${cardType}`;
    });
});
