/** *************Main JS*********************

 TABLE OF CONTENTS
 ---------------------------
 1.encoder function
 ** ***************************************/
(function($) {

    "use strict";
    !function (a) {
        a("html, body");
        var e = a(".pwdMask > .form-control"), t = a(".pwd-toggle");
        a(".lnk-toggler").on("click", function (t) {
            t.preventDefault();
            var e = a(this).data("panel");
            a(".encoder-panel.active").removeClass("active"),
                a(e).addClass("active")
        }),
            a(t).on("click", function (t) {
                t.preventDefault(),
                    a(this).toggleClass("fa-eye-slash fa-eye"),
                    a(this).hasClass("fa-eye") ? a(e).attr("type", "text") : a(e).attr("type", "password")
            }),
            a("#forget-lnk").on("click", function () {
                a(".encoder-login .nav-tabs").find("li").removeClass("active")
            }),
            a(window).on("load", function () {
                a(".square-block").fadeOut(),
                    a("#preload-block").fadeOut("slow", function () { a(this).remove() })
            })
    }
    (jQuery);



    /*****Ready function start*****/
    $(document).ready(function(){
        encoder();
    });
    /*****Ready function end*****/

    /***** encoder function start *****/
    var encoder = function(){

        /*Feather Icon*/
        var featherIcon = $('.feather-icon');
        if( featherIcon.length > 0 ){
            feather.replace();
        }


        /*Navbar Toggle*/
        $(document).on('click', '#navbar_toggle_btn', function (e) {
            $(".encoder-wrapper").toggleClass('encoder-nav-toggle');
            $(window).trigger( "resize" );
            return false;
        });
        $(document).on('click', '#encoder_nav_backdrop,#encoder_nav_close', function (e) {
            $(".encoder-wrapper").removeClass('encoder-nav-toggle');
            return false;
        });


        /*Search form Collapse*/
        $(document).on('click', '#navbar_search_btn', function (e) {
            $('html,body').animate({ scrollTop: 0 }, 'slow');
            $(".navbar-search input").focus();
            $(".encoder-wrapper").addClass('navbar-search-toggle');
            $(window).trigger( "resize" );
        });
        $(document).on('click', '#navbar_search_close',function (e) {
            $(".encoder-wrapper").removeClass('navbar-search-toggle');
            $(window).trigger( "resize" );
            return false;
        });

        /*Slimscroll*/
        $('.nicescroll-bar').slimscroll({height:'100%',color: '#d6d9da', disableFadeOut : true,borderRadius:0,size:'6px',enableKeyNavigation: true,opacity:.8});
        $('.notifications-nicescroll-bar').slimscroll({height:'330px',size: '6px',color: '#d6d9da',disableFadeOut : true,borderRadius:0,enableKeyNavigation: true,opacity:.8});


        /*Slimscroll Key Control*/
        $(".slimScrollDiv").hover(function() {
            $(this).find('[class*="nicescroll-bar"]').focus();
        },function() {
            $(this).find('[class*="nicescroll-bar"]').blur();
        });


    };

//   Tinymc

// Login Tab Section

    $(document).ready(function(){
        $(".hiden_btn").click(function(){
            $(".panel-signup").show();
            $(".wrapper-log").css({"display": "none"});
        });

        $("#home-tab").click(function(){
            $(".wrapper-log").show();
            $(".panel-signup").css({"display": "none"});
        });


        $("#forget-link").click(function(){
            $(".panel-forgot").show();
            $(".wrapper-log").css({"display": "none"});
        });


    });


})(jQuery);





