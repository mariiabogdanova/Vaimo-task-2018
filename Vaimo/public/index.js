$( document ).ready(function() {

$('#cart_button').on('click', function() {
      $.ajax({
     type: "POST",
     url: 'proxy.php',
     data: {"type":"check"},
     success: put_data,

 cache: true,
            beforeSend: function () {
                if (localCache.exist('proxy.php')) {
                    doSomething(localCache.get('proxy.php'));
                    return false;
                }
                return true;
            },
            complete: function (jqXHR, textStatus) {
                localCache.set('proxy.php', jqXHR);
            }
        });
   });


  var put_data = function( data ) {

    console.log( data);
  

    var jsondata = data;

    var jsondata2 = {"totalItems":4,"totalPrice":"417.00","items":[{"name":"Bag","price":"142.00","qty":8,"imgSrc":"img\/products\/bag.jpg"},{"name":"Scarf","price":"288.00","qty":7,"imgSrc":"img\/products\/scarf.jpg"}]};

    // var items = jsondata2.items;
    // alert (items);
    // alert (data);
    // var cart = $('#cart');
    // cart.innerHTML = jsondata.totalItems;



    $('#totalItems').html(jsondata2.totalItems);
    $('#totalprice').html(jsondata2.totalPrice);

    $.each(jsondata2.items, function( i ){

      var name = jsondata2.items[i].name;
      
      var qty = jsondata2.items[i].qty + "x" + jsondata2.items[i].price;

      var imgSrc = $('img.nice').attr("src", jsondata2.items[0].imgSrc);

      $("span.item_name").append(name + "<br>");
      $("span.item_qty").append(qty + "<br>");
      $("div.item_img").append(imgSrc);
});

}



var url = 'proxy.php';
var localCache = {
    /**
     * timeout for cache in millis
     * @type {number}
     */
    timeout: 60000,
    /** 
     * @type {{_: number, data: {}}}
     **/
    data: {},
    remove: function (url) {
        delete localCache.data[url];
    },
    exist: function (url) {
        return !!localCache.data[url] && ((new Date().getTime() - localCache.data[url]._) < localCache.timeout);
    },
    get: function (url) {
        console.log('Getting in cache for url' + url);
        return localCache.data[url].data;
    },
    set: function (url, cachedData, callback) {
        localCache.remove(url);
        localCache.data[url] = {
            _: new Date().getTime(),
            data: cachedData
        };
        if ($.isFunction(callback)) callback(cachedData);
    }
};

$.ajaxPrefilter(function (options, originalOptions, jqXHR) {
    if (options.cache) {
        //Here is our identifier for the cache. Maybe have a better, safer ID (it depends on the object string representation here) ?
        // on $.ajax call we could also set an ID in originalOptions
        var id = originalOptions.url+ JSON.stringify(originalOptions.data);
        options.cache = false;
        options.beforeSend = function () {
            if (!localCache.exist(id)) {
                jqXHR.promise().done(function (data, textStatus) {
                    localCache.set(id, data);
                });
            }
            return true;
        };

    }
});

$.ajaxTransport("+*", function (options, originalOptions, jqXHR, headers, completeCallback) {

    //same here, careful because options.url has already been through jQuery processing
    var id = originalOptions.url+ JSON.stringify(originalOptions.data);

    options.cache = false;

    if (localCache.exist(id)) {
        return {
            send: function (headers, completeCallback) {
                completeCallback(200, "OK", localCache.get(id));
            },
            abort: function () {
                /* abort code, nothing needed here I guess... */
            }
        };
    }
});




  $('#subscribe_button').on('click', function(e) {
    $('#subscribtion_loading').css("display", "block");
    e.preventDefault();
    if( $('#subscribe_input').val() ){
        $.ajax({
            url     : 'proxy2.php',
            method  : 'post',
            data    : { 'email': $('#subscribe_input').val() },
            success : function( response ) {
                alert( response );
            }
        });
    }
});












});