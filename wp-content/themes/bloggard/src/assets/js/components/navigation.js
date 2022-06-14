import $ from 'jquery';

$('.fa-xmark').on('click', (e) => {
  e.preventDefault();
  e.stopPropagation();
  let nav = $('.nav');
  if(nav.hasClass('mobile-nav-open')){
    nav.removeClass('mobile-nav-open');
    nav.addClass('mobile-nav-closed')
  }
});

$('.fa-bars').on('click', (e) => {
  e.preventDefault();
  e.stopPropagation();
  let nav = $('.nav');
  if(nav.hasClass('mobile-nav-closed')){
    nav.removeClass('mobile-nav-closed');
    nav.addClass('mobile-nav-open')
  }
});