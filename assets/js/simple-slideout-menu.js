(function($){
        $(document).on('click','a[data-trigger="simple-slideout"]',function(e){
            e.preventDefault();
            //alert('hello');
            var target_panel = $('#simple-slideout-menu-panel');
            $('a[data-trigger="simple-slideout"]').toggleClass('active');
            target_panel.toggleClass('open');
            return false;
        });

        $(document).on('click','#simple-slideout-menu-panel .slideout-menu li.menu-item-has-children > a',function(e){
            e.preventDefault();
            var link = $(this);
            var li = link.parent( 'li.menu-item-has-children' );
            li.toggleClass( 'open' );
        });

    })(jQuery);