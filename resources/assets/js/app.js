
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

$(document).ready(function(){

$(".menu").hide();



    $('#toggle').on('click', function(){

        $('.menu').slideToggle();
    });

    $('.dropdown-content').hide();

    $('.fa-plus').on('click', function () {
        $('.dropdown-content').slideToggle();
    });


    $(".ul_detail").hide();


    $("#down").on('click', function () {
        $('.ul_detail').slideToggle();
    })

/*BACKEND DASH*/



  $('.icon_dash').on('click', function () {
      $('.sidenav').animate(

          {left: 0}
      )
  })

    $('.fa-times').on('click',function () {
        $('.sidenav').animate(
            {
                left: "-200px"


            }
        )
    })


/****chat_back***/


$(".chat").hide();


    $('.list').find('.about').on('click',function(){

        //Expand or collapse this panel
        $(this).next().slideToggle('fast');

        //Hide the other panels
        $(".content_p").not($(this).next()).slideUp('fast');

        // language=JQuery-CSS

    });
});
