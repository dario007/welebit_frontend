$(document).ready(function() {

 var builder_url = '/content_builder/';

 $("#add_text").click(function () {

  $('#page_content_master').append( jQuery('<div class="builder_element slider_builder_element">').load(builder_url + 'text') );

 });

 $("#add_slider").click(function () {

  $('#page_content_master').append( jQuery('<div class="builder_element slider_builder_element">').load(builder_url + 'slider') );

 });

 $("#add_post").click(function () {
  alert('clicked');
 });

 $("#add_user").click(function () {
  alert('clicked');
 });

 $("#add_order").click(function () {
  alert('clicked');
 });

});