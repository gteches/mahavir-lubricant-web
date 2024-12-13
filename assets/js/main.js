; (function ($) {
    "use strict";

    $(document).ready(function () {

        /**-----------------------------
         *  Navbar fix
         * ---------------------------*/
        $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a', function (e) {
            e.preventDefault();
        })

        /*------------------
           back to top
       ------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });

        /*----------------------
            Search Popup
        -----------------------*/
        var bodyOvrelay = $('#body-overlay');
        var searchPopup = $('#search-popup');

        $(document).on('click', '#body-overlay', function (e) {
            e.preventDefault();
            bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click', '#search', function (e) {
            e.preventDefault();
            searchPopup.addClass('active');
            bodyOvrelay.addClass('active');
        });


    });

    // humberger toggle menu
    $(document).ready(function(){
        $("#menuToggle #menu .submenu").click(function(){
            $(".dropdown").slideToggle();
        });
    });

    var lastScrollTop = "";
    $(window).on("scroll", function() {
        /*---------------------------------------
        sticky menu activation && Sticky Icon Bar
        -----------------------------------------*/
        var st = $(this).scrollTop();
        var mainMenuTop = $(".navbar-area");
        if ($(window).scrollTop() > 1000) {
            if (st > lastScrollTop) {
                // hide sticky menu on scrolldown
                mainMenuTop.removeClass("nav-fixed");
            } else {
                // active sticky menu on scrollup
                mainMenuTop.addClass("nav-fixed");
            }
        } else {
            mainMenuTop.removeClass("nav-fixed ");
        }
        lastScrollTop = st;

        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
    });


    $(window).on('load', function () {

        /*-----------------
            preloader
        ------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(0);

        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut();

        /*---------------------
            Cancel Preloader
        ----------------------*/
        $(document).on('click', '.cancel-preloader a', function (e) {
            e.preventDefault();
            $("#preloader").fadeOut(2000);
        });

    });

    document.querySelector("form").addEventListener("submit", function(event) {
        // Get all the required fields
        const requiredFields = document.querySelectorAll("[required]");

        let isValid = true;

        // Loop through all required fields and check if they are filled
        requiredFields.forEach(function(field) {
          if (!field.value.trim()) {
            isValid = false; // If any field is empty, set isValid to false
            field.classList.add("is-invalid"); // Optionally add a class to highlight the field
            if (!field.nextElementSibling || !field.nextElementSibling.classList.contains("invalid-feedback")) {
              let errorMessage = document.createElement("div");
              errorMessage.classList.add("invalid-feedback");
              errorMessage.textContent = "This field is required"; // Custom message
              field.insertAdjacentElement("afterend", errorMessage); // Insert error message after the field
            }
          } else {
            field.classList.remove("is-invalid"); // Remove the invalid class if the field is filled
            if (field.nextElementSibling && field.nextElementSibling.classList.contains("invalid-feedback")) {
              field.nextElementSibling.remove(); // Remove error message if the field is valid
            }
          }
        });

        // Prevent form submission if any required field is invalid
        if (!isValid) {
          event.preventDefault();
        }
      });


      $(".circle_percent").each(function() {
        var $this = $(this),
            $dataV = $this.data("percent"),
            $dataDeg = $dataV * 3.6,
            $round = $this.find(".round_per");
        $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");	
        $this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
        $this.prop('Counter', 0).animate({Counter: $dataV},
        {
            duration: 2000, 
            easing: 'swing', 
            step: function (now) {
                $this.find(".percent_text").text(Math.ceil(now)+"%");
            }
        });
        if($dataV >= 51){
            $round.css("transform", "rotate(" + 360 + "deg)");
            setTimeout(function(){
                $this.addClass("percent_more");
            },1000);
            setTimeout(function(){
                $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
            },1000);
        } 
    });


})(jQuery);