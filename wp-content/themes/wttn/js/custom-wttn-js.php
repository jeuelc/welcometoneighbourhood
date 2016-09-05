<script>
    $(document).ready(function(){
        var windowHeight = $(window).innerHeight();
        var windowWidth = $(window).innerWidth();
        var bannerContentHeight = $(".banner-1-content").outerHeight();
        var bannerContentMarginTop = (windowHeight - bannerContentHeight)/2;
        var mapHeight = (windowWidth * 540 )/1920;
        console.log("taas "+bannerContentHeight);
        $(".full-height").each(function(index) {
            var elementId = $(this).attr("id");
            if(elementId == "content-1") {
                $(this).css("height", windowHeight);
            } else if(elementId == "content-4") {
                $(this).css("height", mapHeight);
            }/*else {
                $(this).css("min-height", windowHeight);
            }*/
        });
        $(".banner-1-content").find("img").css("margin-top", bannerContentMarginTop);
    });
</script>