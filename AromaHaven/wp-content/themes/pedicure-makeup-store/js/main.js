// Menu
function pedicure_makeup_store_openNav() {
  jQuery(".sidenav").addClass('show');
}
function pedicure_makeup_store_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function pedicure_makeup_store_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const pedicure_makeup_store_nav = document.querySelector( '.sidenav' );

      if ( ! pedicure_makeup_store_nav || ! pedicure_makeup_store_nav.classList.contains( 'show' ) ) {
        return;
      }
      const elements = [...pedicure_makeup_store_nav.querySelectorAll( 'input, a, button' )],
        pedicure_makeup_store_lastEl = elements[ elements.length - 1 ],
        pedicure_makeup_store_firstEl = elements[0],
        pedicure_makeup_store_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && pedicure_makeup_store_lastEl === pedicure_makeup_store_activeEl ) {
        e.preventDefault();
        pedicure_makeup_store_firstEl.focus();
      }

      if ( shiftKey && tabKey && pedicure_makeup_store_firstEl === pedicure_makeup_store_activeEl ) {
        e.preventDefault();
        pedicure_makeup_store_lastEl.focus();
      }
    } );
  }
  pedicure_makeup_store_keepFocusInMenu();
} )( window, document );

(function ($) {

    $(window).load(function () {
        $("#pre-loader").delay(500).fadeOut();
        $(".loader-wrapper").delay(1000).fadeOut("slow");

    });

    $(document).ready(function () {

       // $(".toggle-button").click(function () {
       //      $(this).parent().toggleClass("menu-collapsed");
       //  });

        /*--- adding dropdown class to menu -----*/
        $("ul.sub-menu,ul.children").parent().addClass("dropdown");
        $("ul.sub-menu,ul.children").addClass("dropdown-menu");
        $("ul#menuid li.dropdown a,ul.children li.dropdown a").addClass("dropdown-toggle");
        $("ul.sub-menu li a,ul.children li a").removeClass("dropdown-toggle");
        $('nav li.dropdown > a, .page_item_has_children a').append('<span class="caret"></span>');
        $('a.dropdown-toggle').attr('data-toggle', 'dropdown');

        /*-- Mobile menu --*/
        if ($('#site-navigation').length) {
            $('#site-navigation .menu li.dropdown,li.page_item_has_children').append(function () {
                return '<i class="bi bi-caret-down-fill" aria-hd="true"></i>';
            });
            $('#site-navigation .menu li.dropdown .bi,li.page_item_has_children .bi').on('click', function () {
                $(this).parent('li').children('ul').slideToggle();
            });
        }

        /*-- tooltip --*/
        $('[data-toggle="tooltip"]').tooltip();

        /*-- scroll Up --*/
        jQuery(document).ready(function ($) {
            $(document).on('click', '.btntoTop', function (e) {
                e.preventDefault();
                $('html, body').stop().animate({ scrollTop: 0 }, 700);
            });

            $(window).on('scroll', function () {
                if ($(this).scrollTop() > 200) {
                    $('.btntoTop').addClass('active');
                } else {
                    $('.btntoTop').removeClass('active');
                }
            });
        });
        
        /*-- Reload page when width is between 320 and 768px and only from desktop */
        var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
        $(window).on('resize', function () {
            var win = $(this); //this = window
            if (win.width() > 320 && win.width() < 991 && isMobile == false && !$("body").hasClass("elementor-editor-active")) {
                location.reload();
            }
        });
    });

})(this.jQuery);


// dd

document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('.custom-dropdown');

    // Check if the dropdown exists before continuing
    if (dropdown) {
        const dropdownButton = dropdown.querySelector('.dropdown-button');
        const dropdownList = dropdown.querySelector('.dropdown-list');

        // Check if dropdownButton and dropdownList exist
        if (dropdownButton && dropdownList) {
            // Toggle the dropdown visibility
            dropdownButton.addEventListener('click', function() {
                dropdown.classList.toggle('active');
            });

            // Handle selection of dropdown item
            dropdownList.querySelectorAll('li').forEach(function(item) {
                item.addEventListener('click', function() {
                    const selectedValue = this.getAttribute('data-value');
                    dropdownButton.textContent = this.textContent;
                    dropdown.classList.remove('active');

                    // Redirect to the selected category product page
                    if (selectedValue) {
                        const baseUrl = dropdown.getAttribute('data-base-url'); // Get base URL from data attribute
                        window.location.href = baseUrl + selectedValue;
                    }
                });
            });

            // Close dropdown if clicked outside
            window.addEventListener('click', function(e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('active');
                }
            });
        }
    }
});

// product section
jQuery('document').ready(function(){
  var owl = jQuery('.product-box .owl-carousel');
    owl.owlCarousel({
    margin:30,
    nav: false,
    autoplay :false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    loop: true,
    dots:false,
    navText : ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 2
      },
      1000: {
        items: 3
      },
      1400: {
        items: 4
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

// product section
jQuery('document').ready(function(){
  var owl = jQuery('.featured .owl-carousel');
    owl.owlCarousel({
    margin:30,
    nav: false,
    autoplay :true,
    lazyLoad: true,
    autoplayTimeout: 2000,
    loop: true,
    dots:false,
    navText : ['<i class="bi bi-chevron-left"></i>', '<i class="bi bi-chevron-right"></i>'],
    responsive: {
      0: {
        items: 2
      },
      576: {
        items: 3
      },
      768: {
        items: 4
      },
      1000: {
        items: 8
      },
      1400: {
        items: 10
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

// custom-header-text
(function( $ ) {
    // Update site title and description color in real-time
    wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( newval ) {
            if ( 'blank' === newval ) {
                $( '.site-title a, .site-description' ).css({
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                });
            } else {
                $( '.site-title a, .site-description' ).css({
                    'clip': 'auto',
                    'position': 'relative',
                    'color': newval
                });
            }
        });
    });
})( jQuery );

// custom-logo
( function( $ ) {
    wp.customize( 'pedicure_makeup_store_logo_width', function( value ) {
        value.bind( function( newVal ) {
            $( '.logo .custom-logo' ).css( 'max-width', newVal + 'px' );
        } );
    } );
} )( jQuery );

