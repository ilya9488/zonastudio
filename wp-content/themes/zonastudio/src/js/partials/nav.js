// Sticky Header
$(window).scroll(function () {
  stickyHeader(15)
})

$(document).mouseup(function (e) {
  let els = $('.menu-burger')
  if (!els.is(e.target) && els.has(e.target).length === 0) {
    $('.site-header').removeClass('burger-open')
    $('.menu-menu-glowne-container').removeClass('open')
    $('.menu-burger').removeClass('open')
  }
})

function stickyHeader(toggleTop) {
  const top = $(window).scrollTop()
  if (top >= toggleTop) {
    $('header#masthead').addClass('sticky-bg')
    $('header#masthead').removeClass('sticky-add')
  } else {
    $('header#masthead').removeClass('sticky-bg')
    $('header#masthead').addClass('sticky-add')
  }
}

stickyHeader(15)

$('.menu-burger').on('click', function menuHead() {
  if ($(this).hasClass('open')) {
    $(this).removeClass('open')
    $('.menu-menu-glowne-container').removeClass('open')
    $('.site-header').removeClass('burger-open')
    // stickyHeader(1)
  } else {
    $(this).addClass('open')
    $('.menu-menu-glowne-container').addClass('open')
    $('.site-header').addClass('burger-open')
    // stickyHeader(-1)
  }
})