$( document ).ready(function() {

  $('#subscribe_button').on('click', function(e) {
      $('#subscribtion_loading').show();
      $("#subscribtion_failed").hide();
      $("#subscribtion_succesfull").hide();


      e.preventDefault();
          if( $('#subscribe_input').val() ){
          $.ajax({
            url     : 'proxy2.php',
            method  : 'post',
            data    : { 'email': $('#subscribe_input').val() },
            success : function( response ) {
                alert( response );
            $("#subscribtion_succesfull").show();
            $("#subscribtion_loading").hide();
            $("#subscribtion_failed").hide();

            },
            error : function(response){
                alert( response );
            $("#subscribtion_failed").show();
            $("#subscribtion_succesfull").hide();
            $("#subscribtion_loading").hide();
            },

        });
    }
});



$('#cart_button').hover(
  function(){
  $("#cart").show();
}, function(){
  $("#cart").hide();
});

$.ajax({
     type: "POST",
     url: 'proxy.php',
     data: {"type":"check"},
     success: put_data,
     cache: true,
        });
});

  var put_data = function( data ) {

    console.log( data);

    localStorage.setItem("jsondata", data);
    removeAfterOneMinute();

    function removeAfterOneMinute(){
      setTimeout(function(){localStorage.removeItem("jsondata"); }, 60000);}



    jsondata2 = JSON.parse(data);

    //parsed it to json here because if i do it from the proxy.php it messes up the file format

    console.log(jsondata2.totalItems);

    $('#totalItems').html(jsondata2.totalItems);
    $('#totalprice').html(jsondata2.totalPrice);

    $.each(jsondata2.items, function( i ){

      var name = jsondata2.items[i].name;
      // var name = localStorage.jsondata.items[i].name;

      var qty = jsondata2.items[i].qty + "x" + jsondata2.items[i].price;

      var imgSrc = $('img.imgSrc').attr("src", jsondata2.items[i].imgSrc);

      $("span.item_name").append(name + "<br>");
      $("span.item_qty").append(qty + "<br>");
      $("div.item_img").append(imgSrc);
});

}







