function More(number)
{
  $.ajax({
    type: 'POST',
    url: 'hundler.php',
    data: 'more_f=1&more_number=' + number,
    success: function(data){
      $('#modal_more').html(data);
      $('#modal2').modal('show');
    }
  });

}
