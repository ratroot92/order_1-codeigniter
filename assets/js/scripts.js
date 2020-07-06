var iPadBreakpoint = '1000';
var script = {
// Bind all events
    bindEvents: function() {
        $('document').ready(function() {
            script.readyEvents();
        });
        $(window).load(function() {
            script.loadEvents();
        });
        $(window).resize(function() {
            script.resizeEvents();
        });
        $(window).scroll(function() {
            script.scrollEvents();
        });
    },
    // Bind document ready events
    readyEvents: function() {
        script.openCloseMenu();
        script.webmail();
        script.scrollToFaq();
        script.scrolltoHash();
        script.scrollProducts();
        script.homeItemsSlider();
    },
    // Bind window load events
    loadEvents: function() {
        script.sitemapFooterBottom();
    },
    // Bind resize window events
    resizeEvents: function() {
        script.sitemapFooterBottom();
        script.menuMobileHide();
    },
    scrollEvents: function() {
        script.fixScrollMenu();
    },
    homeSlider: function() {
        $('.home-slider').slick({
            slidesToShow: 1,
            dots: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 6000
        });
    },
    openCloseMenu: function() {
        var menu = $('.main-menu');
        var page = $('#page');
        var slider = $('.home-slider');
        var header = $('#header');
        $('.menu-icon').click(function() {
            if (menu.hasClass('open')) {
                menu.removeClass('open');
                page.removeClass('open');
                header.removeClass('open');
                if ($('body').hasClass('home')) {
                    slider.removeClass('open');
                }
                  $('body').removeClass('addBackground');
            } else {
                menu.addClass('open');
                page.addClass('open');
                header.addClass('open');
                if ($('body').hasClass('home')) {
                    slider.addClass('open');
                }
                $('body').addClass('addBackground');
            }
        });
    },
    /*Fixing the search on scroll*/
    fixScrollMenu: function() {
        var windowWidth = $(window).width();
        var windowTop = $(window).scrollTop();
        if (windowWidth > iPadBreakpoint) {
            var header = $('#header');
            var slider = $('.home-slider');
            if ($('body').hasClass('home')) {
                var targetTop = slider.height();
            } else {
                var targetTop = parseInt(header.height() / 2);
            }

            if (windowTop > targetTop) {
                if (header.hasClass('fix') === false) {
                    header.addClass('fix');
                }
            } else {
                header.removeClass('fix');
            }
        }
    },
    productSlider: function() {
        $('.slider-1').slick({
            slidesToShow: 1,
            dots: false,
            arrows: true,
            fade: true,
            asNavFor: '.slider-2'
        });
        $('.slider-2').slick({
            slidesToShow: 5,
            dots: false,
            arrows: false,
            asNavFor: '.slider-1',
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 999,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 759,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 479,
                    settings: {
                        slidesToShow: 2
                    }
                },
            ]
        });
    },
    selectboxStyle: function() {
        //SelectBox Style
        $("select").selectbox();
    },
    loadMoreTeam: function() {
        var size_list = $(".team-page .team").size();
        var x = 4;
        $('.team-page .team:lt(' + x + ')').show();
        $('#loadTeam').click(function() {
            x = (x + 5 <= size_list) ? x + 5 : size_list;
            $('.team-page .team:lt(' + x + ')').slideDown();
            $('#loadTeam').hide();
        });
    },
    scrollToFaq: function() {
        $('.quest a').click(function() {
            var id = $(this).data('id');
            $('html, body').animate({
                scrollTop: $('#' + id).offset().top - 100
            }, 500);
        });
    },
    scrolltoHash: function() {
        if (location.hash) {
            setTimeout(function() {
                /*
                 * Scroll to top to make sure all elements
                 * are loaded before scroll to anchor
                 */
                window.scrollTo(0, 0);
                $('html, body').animate({
                    scrollTop: $(location.hash).offset().top - 70 + 'px'
                }, 700);
            }, 1);
        }
    },
    webmail: function() {
        $('.web a').click(function() {
            $('.webmail').toggle();
        });
    },
    inputLabelAnimation: function() {
        $(".input-holder input, .textarea-holder textarea").each(function() {
            if ($(this).val() != "") {
                $(this).addClass("has-content");
            } else {

                $(this).removeClass("has-content");
            }
            ;
        });
        $(".input-holder input, .textarea-holder textarea").focusout(function() {
            if ($(this).val() != "") {
                $(this).addClass("has-content");
            } else {
                $(this).removeClass("has-content");
            }
            ;
        });
    },
    inputLabelVerification: function($this) {
        if ($(this).val() != "") {
            $(this).addClass("has-content");
        } else {
            $(this).removeClass("has-content");
        }
        ;
    },
    scrollProducts: function() {
        $('.product-list .data').each(function() {
            $(this).jScrollPane();
        });
    },
    homeItemsSlider: function() {
        $('.glance-slider').slick({
            dots: false,
            infinite: true,
            speed: 1200,
            slidesToShow: 3,
            slidesToScroll: 1,
            cssEase: 'ease-out',
            nextArrow: '<i class="arrow-right">&nbsp;</i>',
            prevArrow: '<i class="arrow-left">&nbsp;</i>',
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 760,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    },
    sitemapFooterBottom: function() {
        var bodyHeight = $("#page").height();
        if (bodyHeight <= $(window).height() && $(window).width() > 1024) {
            $(".sitemap").height($(window).height() - $("#footer").height());
        } else {
            $(".sitemap").css("height", "auto");
        }
    },
    menuMobileHide: function() {
        var menu = $('.main-menu');
        var page = $('#page');
        var slider = $('.home-slider');
        var header = $('#header');
        if ($(window).width() >= 1000) {
            menu.removeClass('open');
             page.removeClass('open');
            header.removeClass('open');
            if ($('body').hasClass('home')) {
                slider.removeClass('open');
            }
        }
        if (menu.hasClass('open')) {
            $('body').addClass('addBackground');
        } else {
            $('body').removeClass('addBackground');
        }
    }
};
script.bindEvents();
