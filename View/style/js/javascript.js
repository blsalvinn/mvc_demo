jQuery(document).ready(function() {
    $("#email").keyup(function() {
        var us = $(this).val();

        // $("#messageUn").html(us);
        $.post("./Controller/Controller/checkUsName", { un: us }, function(data) {
            $("#messageUn").html(data);
        });
    });
});