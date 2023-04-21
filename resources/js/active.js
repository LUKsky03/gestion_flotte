$(document).ready(function(){
  $('.menu_list').eq(0).addClass('activated');
  let content = $('.menu_list.activated a').attr('data-bs-target');
  $(content).removeClass('d-none')
});
$('.btnTab').on('click',function (){
  $(".tab-pane").addClass('d-none')
  $('.menu_list').removeClass('activated');
  $(this).parent().addClass('activated');
  let content = $(this).attr('data-bs-target');
  $(content).removeClass('d-none');
});
