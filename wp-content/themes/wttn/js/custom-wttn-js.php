<script>
    $(window).on("load", function(){
        var windowHeight = $(window).innerHeight();
        var windowWidth = $(window).innerWidth();
        var bannerContentHeight = $(".banner-1-content").outerHeight();
        var footerHeight = $("#footer").outerHeight();
        var bannerContentMarginTop = (windowHeight - bannerContentHeight)/2;
        var signupContentHeight = $(".sign-up-content").outerHeight();
        var submitSignupHolderHeight = $(".submit-sign-up-holder").outerHeight();
        var mapHeight = (windowWidth * 540 )/1920;

        var isMobile = false;
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
        
        $(".full-height").each(function(index) {
            var elementId = $(this).attr("id");
            if(elementId == "content-1") {
                $(this).css("height", windowHeight);
            } else if(elementId == "content-5") {
                if(isMobile) {
                    $(this).css("height", windowHeight/2);
                    $("body.withmap").css("background-position-y", windowHeight-(footerHeight+(windowHeight/2)));
                } else {
                    $(this).css("height", mapHeight);
                }
            } else if(elementId == "sign-up") {
                $(this).css("min-height", windowHeight - footerHeight);
            }
        });
        $(".banner-1-content").find("img").css("margin-top", bannerContentMarginTop);
        
        if((signupContentHeight + submitSignupHolderHeight) >= (windowHeight - footerHeight)) {
            $(".submit-sign-up-holder").css("position", "relative");
        } 
        
        <?php if(is_home()) { ?>
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
        
            if ( $( ".signmeup.first" ).length > 0) {
                var distance = $('.signmeup.first').offset().top;
            }
            else {
                var distance = 0;
            } 
            
            $(window).scroll(function() {
                if ( $(window).scrollTop() >= distance ) {
                    if(isMobile) { $("#header").show(); }
                    $("#header > .signmeup").show();
                } else {
                    if(isMobile) { $("#header").hide(); }
                    $("#header > .signmeup").hide();
                }
                
            });
        <?php } ?>
        
        $(".signmeup").on('click', function(e) {
            e.preventDefault();
            window.location.href = "<?php echo home_url();?>/sign-me-up";
        });
        var currentSignupPage = 1;
        $(".submit-signup-button").on("click", function() {
            if(currentSignupPage < 3) {
                $("#form-"+currentSignupPage).hide(1000);
                currentSignupPage++;
                $("#form-"+currentSignupPage).show(500);
                if(currentSignupPage == 3) {
                    $(".submit-signup-button").text("finish");
                }
            } else {
                $(".re-send-verification").show();
                $(".submit-signup-button").hide();
                $("#form-"+currentSignupPage).hide(1000);
                $("#success-signup").show(500);
                $(".sign-up-label").text("Thank You");
                $(".sign-up-sub-label").text("[ for signing up with us ]");
                $(".sign-up-head-label-holder").css("background-image", "none");
            }
        });
    });
</script>