<script>
    $(window).on("load", function(){
        var windowHeight = $(window).innerHeight();
        var windowWidth = $(window).innerWidth();
        var bannerContentHeight = $(".banner-1-content").outerHeight();
        var bannerContentMarginTop = (windowHeight - bannerContentHeight)/2;
        var mapHeight = (windowWidth * 540 )/1920;

        $(".full-height").each(function(index) {
            var elementId = $(this).attr("id");
            if(elementId == "content-1") {
                $(this).css("height", windowHeight);
            } else if(elementId == "content-5") {
                $(this).css("height", mapHeight);
            }/*else {
                $(this).css("min-height", windowHeight);
            }*/
        });
        $(".banner-1-content").find("img").css("margin-top", bannerContentMarginTop);
        
        var images = Array("<?php bloginfo('template_directory');?>/images/header-background.jpg",
               "<?php bloginfo('template_directory');?>/images/header-bg-02.jpg",
               "<?php bloginfo('template_directory');?>/images/header-bg-03.jpg");
        var currimg = 0;


        function loadimg(){
           $('#content-1').animate({ opacity: 1 }, 500,function(){
                $('#content-1').animate({ opacity: 0.7 }, 100,function(){
                    currimg++;
                    if(currimg > images.length-1){
                        currimg=0;
                    }
                    var newimage = images[currimg];

                    $('#content-1').css("background-image", "url("+newimage+")"); 
                    $('#content-1').animate({ opacity: 1 }, 200,function(){
                        setTimeout(loadimg,20000);
                    });

                });

            });

        }
        setTimeout(loadimg,20000);
        
        var distance = $('.signmeup.first').offset().top;

        $(window).scroll(function() {
            if ( $(window).scrollTop() >= distance ) {
                $("#header > .signmeup").show();
            } else {
                $("#header > .signmeup").hide();
            }
            
        });
    });
</script>