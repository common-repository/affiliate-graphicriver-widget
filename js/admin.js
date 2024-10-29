(function($) {
    $(document).ready(function() {

        $('body').on('click', '.affiliate-graphicriver-widget-type', function(){
            var type = $(this).val();
            var wrap = $(this).closest('.widget-content');
            var user = wrap.find('.affiliate-graphicriver-widget-user');
            var cat = wrap.find('.affiliate-graphicriver-widget-cat');
            var order = wrap.find('.affiliate-graphicriver-widget-order');
            if(type == 'popular'){
                user.fadeOut(300);
                cat.fadeOut(300);
                order.fadeOut(300);
            } else if (type == 'latest'){
                user.fadeOut(300);
                cat.fadeIn(300);
                order.fadeOut(300);
            } else {
                //user
                user.fadeIn(300);
                cat.fadeIn(300);
                order.fadeIn(300);
            }
        });

    });

})(jQuery);