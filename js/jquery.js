//header

    // $(document).ready(function() {
    $(function () {
        $(window).scroll(function () {
    
            var $nav = $(".header");
            $('.header').unbind();
            $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        });
    });
    
//cover

    $(function() {
                
        setTimeout(function() {
            $('.fly-in-text').removeClass('hidden');
        }, 500);
        
    
    if ($(document).width() < 768) {
        $(document).ready(function () {
            $('.fly-in-text li').hide();
            $('.not-fly').slideDown(1000);
        }
        )
    }
    
    });

//collection

// $(document).ready(function () {
//     const navbar = document.getElementById('navbar');
//     // const navbar = $('#navbar');
//     const scrollReport = document.getElementById('scrollReport');
//     // const scrollReport = $('#scrollReport');
//     console.log('scrollReport', scrollReport);



//     window.addEventListener('scroll', function () {
//         // console.log('window',window);
//         // const y = Math.round(window.scrollY + navbar.height());
//         const y = Math.round(window.scrollY + navbar.offsetHeight);
//         // console.log('navbar',navbar)
//         scrollReport.innerText = `目前所在的位置${y}`;
//         console.log(`目前所在的位置${y}`);
   

//     const collection = document.getElementById('collection');
//     const top = collection.offsetTop;
//     //section bottom
//     const bottom = top + collection.offsetHeight; 

//     if(y > top && y < bottom){
//          $('.all').each(function(index) {
//          $(this).fadeIn(500);
//         });
//     }

    
//     $(document).off('scroll'); 
// })
// })
$(document).ready(function () {
    // $('.all').delay(500).fadeIn();
    // $('.all').each(function(index) {
    //     $(this).delay(500*index).fadeIn();
    //     });

    $('.all-btn').on('click', function () {
        // event.stopPropagation();
        $('.all').hide();
        // $('.all ').each(function(index){
        // $(this).delay(500*index).fadeIn();
        $('.all').fadeIn();
        // })
    })

    $('.f2n-btn').on('click', function () {
        $('.all').hide();
        $('.f2n').fadeIn();
        // $('.collection-row').removeClass();
        // $('.f2n').each(function (index) {
        //     $(this).delay(200 * index).fadeIn();
        })
    // })
   

    $('.b2n-btn').on('click', function () {
        $('.all').hide();
        $('.b2n').fadeIn();
        // $('.collection-row').removeClass();
        // $('.b2n').each(function (index) {
        //     $(this).delay(200 * index).fadeIn();
        // })
    
    
    })

})

// nav

$(document).ready(function () {

    $('#menuBtn').on('click', function (event) {
        event.stopPropagation();  //阻止事件冒泡(阻止該觸發連動其他的click事件)
        $(".asdieNav").animate({ width: 'show' }, 400);
        // $(".navBody").css('background', 'linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url("./img/cloud.png")');
        // $(".navBody").css('z-index', '999');
        $('.fullCover').show();
        $(".body").css('overflow', 'hidden')
        // $(".navBody").css('overflow', 'hidden')

    })

    $('#asideCloseBtn').on('click', function (event) {
        $(".asdieNav").animate({ width: 'hide' }, 400);
        // $(".navBody").css('background', 'linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url("./img/cloud.png")');
        $('.fullCover').hide();
        $(".body").css('overflow', '')
        // $(".navBody").css('overflow', '')
    })

    $(document).click(function (event) {
        var $target = $(event.target);
        if (!$target.closest('.asdieNav').length &&
            $('.asdieNav').is(":visible")) {
            $(".asdieNav").animate({ width: 'hide' }, 400);
            // $(".navBody").css('background', 'linear-gradient(rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url("./img/cloud.png")');
            $('.fullCover').hide();
            $(".body").css('overflow', '');
            // $(".navBody").css('overflow', '');

        }
    })

//skills

    $('.fa-html5').hover(function(){
        $('.htmlContent').fadeIn();
    },function(){
            $('.htmlContent').hide()
        
    })

    $('.fa-php').hover(function(){
        $('.phpContent').fadeIn();
    },function(){
            $('.phpContent').hide()
        
    })

    $('.fa-css3-alt').hover(function(){
        $('.cssContent').fadeIn();
    },function(){
            $('.cssContent').hide()
        
    })

    $('.fa-js-square').hover(function(){
        $('.jsContent').fadeIn();
    },function(){
            $('.jsContent').hide()
        
    })



})

