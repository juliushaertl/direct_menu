$(function() {

    var app_menu = $('#apps ul');

    if(typeof(Storage) !== "undefined") {

        $( "#apps ul" ).sortable({
            handle: 'img',
            axis:'x',
            stop: function( event, ui ) {
                var items = []
                    $("#apps ul").children().each(function(i,el){
                        var item = $(el).find('a').attr('href');
                        items.push(item)
                    })

                var json = JSON.stringify(items);
                localStorage.setItem("direct_menu-order", json);
            }
        });

        var json = localStorage.getItem("direct_menu-order");
        try {
            var order = JSON.parse( json ).reverse();
        } catch (e) {
            var order = []
        }
        if (order.length==0)
            return;

        available_apps = {};
        app_menu.find('li').each(function() {
            var id =  $(this).find('a').attr('href');
            available_apps[id] = $(this);
        });
        $.each(order,function(order,value) {
            app_menu.prepend(available_apps[value]);
        })

    } else {
        console.log("No local storage support, custom menu order will get ignored");
    }
});
