// All Inputs Autocomplete Off (!)
$('input').attr('autocomplete', 'off')

// Smooth anchor scrolling
// $(document).on('click', 'a[href^="#"]', function (event) {
//   event.preventDefault();
//   $('html, body').animate({
//     scrollTop: $($.attr(this, 'href')).offset().top
//   }, 500);
// });

// site-btn
$('.site-btn').each(function () {
  $(this).append('<span class="line_1 line"></span><span class="line_2 line"></span><span class="line_3 line"></span><span class="line_4 line"></span>')
})

// h = w ( gallery - short post )
function gallery() {
  $('.home-last-posts .wrap').each(function () {
    $(this).css('height', $(this).width())
  })
}
$(window).on('resize', gallery)
gallery();

// show text ( gallery - short post )
$('.hover-wrap').on('click', function () {
  $('.hover-wrap').each(function () {
    $(this).removeClass('add-hover')
  })
  $(this).addClass('add-hover')
})

// get scrollbarWidth
function scrollbarWidth() {
  var documentWidth = parseInt(document.documentElement.clientWidth),
      windowsWidth = parseInt(window.innerWidth),
      scrollbarWidth = windowsWidth - documentWidth
  return scrollbarWidth;
}

// margin for modal w - scroll bar
$('[data-toggle="modal"]').on('click', function () {
  document.body.style.marginRight = `${scrollbarWidth()}px`
})
$('.modal').on('hide.bs.modal', function () {
// $('.modal').on('click', function () {
  document.body.style.marginRight = `0px`
})

// height = max height (oferta biuro projektowe)
let arr1 = [], i_hed = 0;
$('.tariff-plan .tariff-title').each( function () {
  i_hed++; arr1.push($(this).outerHeight()); return arr1;
})
$('.tariff-plan .tariff-title').each( function () {
  $(this).css('min-height', Math.max.apply(null, arr1))
})
// console.log(Math.max.apply(null, arr1));

// Swiper: Slider
function siteSliderUpdate() {
  document.querySelectorAll('.site-slider').forEach(function(n) {
    if (!n.querySelector('.slider-gullery').classList.contains('swiper-initialized')) {   
      new Swiper(n.querySelector('.slider-gullery'), {
        loop: true,
        // preloadImages: false,
        // preloadImages: true,
        // lazy: true,
        pagination: {
          el: '.slider-pagination',
          type: 'fraction',
        },
        navigation: {
          nextEl: n.querySelector('.next-arrow'),
          prevEl: n.querySelector('.prev-arrow'),
        },
        // spaceBetween: 10,
        spaceBetween: 0,
        speed: 300,
        // 1000 min-w (!)
        breakpoints: {
          1000: {
            spaceBetween: 1500,
            speed: 700,
          }
        }
      });
    }
  });

}
siteSliderUpdate()


// Email variables validation
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/
$('[type="email"]').on('blur',function () {
  if (!emailReg.test($(this).val()) || $(this).val() == '') {
    $(this).addClass('wpcf7-not-valid')
  }else{
    $(this).removeClass('wpcf7-not-valid')
  }
})
$('[type="email"]').on('keyup',function () {
  if (!emailReg.test($(this).val()) || $(this).val() == '') {
    $(this).addClass('wpcf7-not-valid')
  }else{
    $(this).removeClass('wpcf7-not-valid')
  }
})

if($('.breadcrumbs-content').length === 0){
  $('#primary').not('.home #primary, .single-post #primary').addClass('top-offset')
}