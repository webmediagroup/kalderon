jQuery( document ).ready( function() {
	
	/**
	* FILTER
	*/
	jQuery('.filter-btn [data-filter]').on('click', function () {
		jQuery(this).parent().addClass('active').siblings().removeClass('active');;
		
		if (jQuery(this).data('filter') == 'all') {
			jQuery('.tab-content .item').fadeIn(300);
			
		} else {
			jQuery('.tab-content .item').fadeOut(500);
			jQuery('.tab-content [data-filter="' + jQuery(this).data('filter') + '"]').fadeIn(300);
		}
	} );
	
	

/*	jQuery( '.tab-content .item' ).on( 'click', function () {
		jQuery( this ).toggleClass( 'open' );
	} );*/




    /*var $filter_btn = jQuery('.filter-btn');
    var vTop = $filter_btn.offset().top - parseFloat($filter_btn.css('margin-top').replace(/auto/, 0));
    jQuery(window).scroll(function (event) {
        var y = jQuery(this).scrollTop();
        if (y >= vTop) {
            $filter_btn.addClass('filter_btn_fixed');
        }
        if ((y < vTop) || (y > vTop+800)) {
            $filter_btn.removeClass('filter_btn_fixed');
        }
    });*/



} );

