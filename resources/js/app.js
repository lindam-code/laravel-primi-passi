require('./bootstrap');
import 'bootstrap';
var $ = require('Jquery');
$(document).ready(function(){
  // Header burgher menu schermi piccoli
  $('.burgher_icon').click(function(){
    $('.burgher_navigation').addClass('active');
    $('.header_wrapper').hide();
  })
  $('.close_burgher_menu').click(function(){
    $('.burgher_navigation').removeClass('active');
    $('.header_wrapper').show();
  })
  // Sezione Faq pulsanti show nascondi risposte
  $('.show_answer').click(function() {
    $(this).children('.answer_faq').addClass('show');
  })
  $('.answer_faq').click(function(){
    $('.answer_faq').removeClass('show');
  })
  // $('.hide_icon').click(function () {
  //   $(this).children('.answer_faq').removeClass('show');
  // })

});
