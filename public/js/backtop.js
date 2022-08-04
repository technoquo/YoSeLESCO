let btnTop = $('#backtop');

// $(window).scroll(function() {
//   if ($(window).scrollTop() > 300) {
//     btnTop.addClass('show');
//   } else {
//     btnTop.removeClass('show');
//   }
// });

btnTop.on('click', function(e) {
    console.log('dfas')
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
