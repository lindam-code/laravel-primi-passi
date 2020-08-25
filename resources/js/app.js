require('./bootstrap');
import 'bootstrap';
var $ = require('Jquery');

$('.burgher_icon').click(function(){
  $('.burgher_navigation').addClass('active');
  $('.header_wrapper').hide();
})
$('.close_burgher_menu').click(function(){
  $('.burgher_navigation').removeClass('active');
  $('.header_wrapper').show();
})
