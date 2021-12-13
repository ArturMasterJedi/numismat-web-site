jQuery(document).ready(function($){
    //open/close lateral filter
    $('.cd-filter-trigger').on('click', function(){
        triggerFilter(true);
    });
    $('.cd-filter .cd-close').on('click', function(){
        triggerFilter(false);
    });

    function triggerFilter($bool) {
        var elementsToTrigger = $([$('.cd-filter-trigger'), $('.cd-filter'), $('.cd-tab-filter'), $('.cd-gallery')]);
        elementsToTrigger.each(function(){
            $(this).toggleClass('filter-is-visible', $bool);
        });
    }

    //mobile version - detect click event on filters tab
    var filter_tab_placeholder = $('.cd-tab-filter .placeholder a'),
        filter_tab_placeholder_default_value = 'Select',
        filter_tab_placeholder_text = filter_tab_placeholder.text();

    $('.cd-tab-filter li').on('click', function(event){
        //detect which tab filter item was selected
        var selected_filter = $(event.target).data('type');

        //check if user has clicked the placeholder item
        if( $(event.target).is(filter_tab_placeholder) ) {
            (filter_tab_placeholder_default_value == filter_tab_placeholder.text()) ? filter_tab_placeholder.text(filter_tab_placeholder_text) : filter_tab_placeholder.text(filter_tab_placeholder_default_value) ;
            $('.cd-tab-filter').toggleClass('is-open');

            //check if user has clicked a filter already selected
        } else if( filter_tab_placeholder.data('type') == selected_filter ) {
            filter_tab_placeholder.text($(event.target).text());
            $('.cd-tab-filter').removeClass('is-open');

        } else {
            //close the dropdown and change placeholder text/data-type value
            $('.cd-tab-filter').removeClass('is-open');
            filter_tab_placeholder.text($(event.target).text()).data('type', selected_filter);
            filter_tab_placeholder_text = $(event.target).text();

            //add class selected to the selected filter item
            $('.cd-tab-filter .selected').removeClass('selected');
            $(event.target).addClass('selected');
        }
    });

    //close filter dropdown inside lateral .cd-filter
    $('.cd-filter-block h4').on('click', function(){
        $(this).toggleClass('closed').siblings('.cd-filter-content').slideToggle(300);
    })

    //fix lateral filter and gallery on scrolling
    $(window).on('scroll', function(){
        (!window.requestAnimationFrame) ? fixGallery() : window.requestAnimationFrame(fixGallery);
    });

    function fixGallery() {
        var offsetTop = $('.cd-main-content').offset().top,
            scrollTop = $(window).scrollTop();
        ( scrollTop >= offsetTop ) ? $('.cd-main-content').addClass('is-fixed') : $('.cd-main-content').removeClass('is-fixed');
    }

    /************************************
     MitItUp filter settings
     More details:
     https://mixitup.kunkalabs.com/
     or:
     http://codepen.io/patrickkunka/
     *************************************/

    buttonFilter.init();
    $('.cd-gallery ul').mixItUp({
        controls: {
            enable: false
        },
        callbacks: {
            onMixStart: function(){
                $('.cd-fail-message').fadeOut(200);
            },
            onMixFail: function(){
                $('.cd-fail-message').fadeIn(200);
            }
        }
    });

    //search filtering
    //credits http://codepen.io/edprats/pen/pzAdg
    var inputText;
    var $matching = $();

    var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })();

    $(".cd-filter-content input[type='search']").keyup(function(){
        // Delay function invoked to make sure user stopped typing
        delay(function(){
            inputText = $(".cd-filter-content input[type='search']").val().toLowerCase();
            // Check to see if input field is empty
            if ((inputText.length) > 0) {
                $('.mix').each(function() {
                    var $this = $(this);

                    // add item to be filtered out if input text matches items inside the title
                    if($this.attr('class').toLowerCase().match(inputText)) {
                        $matching = $matching.add(this);
                    } else {
                        // removes any previously matched item
                        $matching = $matching.not(this);
                    }
                });
                $('.cd-gallery ul').mixItUp('filter', $matching);
            } else {
                // resets the filter to show all item if input is empty
                $('.cd-gallery ul').mixItUp('filter', 'all');
            }
        }, 200 );
    });
});

/*****************************************************
 MixItUp - Define a single object literal
 to contain all filter custom functionality
 *****************************************************/
var buttonFilter = {
    // Declare any variables we will need as properties of the object
    $filters: null,
    groups: [],
    outputArray: [],
    outputString: '',

    // The "init" method will run on document ready and cache any jQuery objects we will need.
    init: function(){
        var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "buttonFilter" object so that we can share methods and properties between all parts of the object.

        self.$filters = $('.cd-main-content');
        self.$container = $('.cd-gallery ul');

        self.$filters.find('.cd-filters').each(function(){
            var $this = $(this);

            self.groups.push({
                $inputs: $this.find('.filter'),
                active: '',
                tracker: false
            });
        });

        self.bindHandlers();
    },

    // The "bindHandlers" method will listen for whenever a button is clicked.
    bindHandlers: function(){
        var self = this;

        self.$filters.on('click', 'a', function(e){
            self.parseFilters();
        });
        self.$filters.on('change', function(){
            self.parseFilters();
        });
    },

    parseFilters: function(){
        var self = this;

        // loop through each filter group and grap the active filter from each one.
        for(var i = 0, group; group = self.groups[i]; i++){
            group.active = [];
            group.$inputs.each(function(){
                var $this = $(this);
                if($this.is('input[type="radio"]') || $this.is('input[type="checkbox"]')) {
                    if($this.is(':checked') ) {
                        group.active.push($this.attr('data-filter'));
                    }
                } else if($this.is('select')){
                    group.active.push($this.val());
                } else if( $this.find('.selected').length > 0 ) {
                    group.active.push($this.attr('data-filter'));
                }
            });
        }
        self.concatenate();
    },

    concatenate: function(){
        var self = this;

        self.outputString = ''; // Reset output string

        for(var i = 0, group; group = self.groups[i]; i++){
            self.outputString += group.active;
        }

        // If the output string is empty, show all rather than none:
        !self.outputString.length && (self.outputString = 'all');

        // Send the output string to MixItUp via the 'filter' method:
        if(self.$container.mixItUp('isLoaded')){
            self.$container.mixItUp('filter', self.outputString);
        }
    }
};
/*SideBar*/
$(document).ready(function() {
    $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }
    });
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop:true,
        slideMargin: 0,
        thumbItem: 9
    });
});
/*Sidebar*/
$(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
    }

    var accordion = new Accordion($('#accordion'), false);
});

/*Slider recenly*/
$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});

/*-----------------------------------------------------*/
jQuery(document).ready(function($){
    //if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
    var MqL = 1170;
    //move nav element position according to window width
    moveNavigation();
    $(window).on('resize', function(){
        (!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
    });

    //mobile - open lateral menu clicking on the menu icon
    $('.cd-nav-trigger').on('click', function(event){
        event.preventDefault();
        if( $('.cd-main-content').hasClass('nav-is-visible') ) {
            closeNav();
            $('.cd-overlay').removeClass('is-visible');
        } else {
            $(this).addClass('nav-is-visible');
            $('.cd-primary-nav').addClass('nav-is-visible');
            $('.cd-main-header').addClass('nav-is-visible');
            $('.cd-main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                $('body').addClass('overflow-hidden');
            });
            toggleSearch('close');
            $('.cd-overlay').addClass('is-visible');
        }
    });

    //open search form
    $('.cd-search-trigger').on('click', function(event){
        event.preventDefault();
        toggleSearch();
        closeNav();
    });

    //close lateral menu on mobile
    $('.cd-overlay').on('swiperight', function(){
        if($('.cd-primary-nav').hasClass('nav-is-visible')) {
            closeNav();
            $('.cd-overlay').removeClass('is-visible');
        }
    });
    $('.nav-on-left .cd-overlay').on('swipeleft', function(){
        if($('.cd-primary-nav').hasClass('nav-is-visible')) {
            closeNav();
            $('.cd-overlay').removeClass('is-visible');
        }
    });
    $('.cd-overlay').on('click', function(){
        closeNav();
        toggleSearch('close')
        $('.cd-overlay').removeClass('is-visible');
    });


    //prevent default clicking on direct children of .cd-primary-nav
    $('.cd-primary-nav').children('.has-children').children('a').on('click', function(event){
        event.preventDefault();
    });
    //open submenu
    $('.has-children').children('a').on('click', function(event){
        if( !checkWindowWidth() ) event.preventDefault();
        var selected = $(this);
        if( selected.next('ul').hasClass('is-hidden') ) {
            //desktop version only
            selected.addClass('selected').next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('moves-out');
            selected.parent('.has-children').siblings('.has-children').children('ul').addClass('is-hidden').end().children('a').removeClass('selected');
            $('.cd-overlay').addClass('is-visible');
        } else {
            selected.removeClass('selected').next('ul').addClass('is-hidden').end().parent('.has-children').parent('ul').removeClass('moves-out');
            $('.cd-overlay').removeClass('is-visible');
        }
        toggleSearch('close');
    });

    //submenu items - go back link
    $('.go-back').on('click', function(){
        $(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');
    });

    function closeNav() {
        $('.cd-nav-trigger').removeClass('nav-is-visible');
        $('.cd-main-header').removeClass('nav-is-visible');
        $('.cd-primary-nav').removeClass('nav-is-visible');
        $('.has-children ul').addClass('is-hidden');
        $('.has-children a').removeClass('selected');
        $('.moves-out').removeClass('moves-out');
        $('.cd-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            $('body').removeClass('overflow-hidden');
        });
    }

    function toggleSearch(type) {
        if(type=="close") {
            //close serach
            $('.cd-search').removeClass('is-visible');
            $('.cd-search-trigger').removeClass('search-is-visible');
            $('.cd-overlay').removeClass('search-is-visible');
        } else {
            //toggle search visibility
            $('.cd-search').toggleClass('is-visible');
            $('.cd-search-trigger').toggleClass('search-is-visible');
            $('.cd-overlay').toggleClass('search-is-visible');
            if($(window).width() > MqL && $('.cd-search').hasClass('is-visible')) $('.cd-search').find('input[type="search"]').focus();
            ($('.cd-search').hasClass('is-visible')) ? $('.cd-overlay').addClass('is-visible') : $('.cd-overlay').removeClass('is-visible') ;
        }
    }

    function checkWindowWidth() {
        //check window width (scrollbar included)
        var e = window,
            a = 'inner';
        if (!('innerWidth' in window )) {
            a = 'client';
            e = document.documentElement || document.body;
        }
        if ( e[ a+'Width' ] >= MqL ) {
            return true;
        } else {
            return false;
        }
    }

    function moveNavigation(){
        var navigation = $('.cd-nav');
        var desktop = checkWindowWidth();
        if ( desktop ) {
            navigation.detach();
            navigation.insertBefore('.cd-header-buttons');
        } else {
            navigation.detach();
            navigation.insertAfter('.cd-main-content');
        }
    }
});



(function ($) {
    $(function () {

        function agPanelShow(btn, panel) {
            if (panel.css('display') != 'block') {
                btn.next(panel).fadeIn();
            }
        }

        function agPanelClose(panel) {
            $(document).bind('keyup', function (e) {
                if (e.keyCode != 27) {
                    return true;
                }
                /* 'Esc' key (27) */
                if (e.keyCode == 27 && panel.is(':visible')) {
                    panel.fadeOut();
                }
            });

            $(document).mouseup(function (e) {
                if (!panel.is(e.target) && panel.has(e.target).length === 0) {
                    panel.fadeOut();
                }
            });
        }

        /* login */
        var agLoginBtn = $('.js-start-login_link'),
            agLoginPanel = $('.js-start-login_panel');

        agLoginBtn.on('click', function (e) {
            e.preventDefault();

            agLoginBtnWidth = agLoginBtn.width();
            agLanguageBtnWidth = agLanguageBox.width();
            agPanelPosition = (agLanguageBtnWidth + 4),
                agArrowPosition = ((Math.floor(agLoginBtnWidth / 2) + agLanguageBtnWidth) - 4);

            agLoginPanel.css({right: - agPanelPosition});
            $('.js-start-login_panel-arrow').css({right: agArrowPosition});
            agPanelShow(agLoginBtn, agLoginPanel);
        });

        agPanelClose(agLoginPanel);
        /* /login */

        /* language */
        var agLanguageCurrent = $('.js-language_current'),
            agLanguagePanel = $('.js-language_panel'),
            agLanguageLocal = $('.js-language_item'),
            agLanguageBox = $('.js-language_box');

        agLanguageCurrent.on('click', function () {
            agLanguageCurrent.toggleClass('js-ag-language_current-show');

            agPanelShow(agLanguageCurrent, agLanguagePanel);
        });

        agPanelClose(agLanguagePanel);

        agLanguageLocal.on('click', function () {
            var agLanguageCurrentName = $(this).children('a').html();

            agLanguageLocal.removeClass('js-ag-language_item-active');
            $(this).addClass('js-ag-language_item-active');
            agLanguageCurrent.html(agLanguageCurrentName);
            $('.js-language_panel-arrow').css({right: Math.floor(agLanguageCurrent.width() / 2) - 5}); // calculates the width agLanguageCurrent and aligns the arrow of the panel in the middle agLanguageCurrent
        });
        /* /language */

        /* search */
        var agSearchBlock = $('.js-search-block'),
            agSearchBtn = $('.js-search_btn'),
            agCloseBtn = $('.js-search_btn-close'),
            agSubmitBtn = $('#ag-search_btn-submit');

        agSearchBtn.on('click', function () {
            agSearchBtn.next(agSearchBlock).addClass('js-ag-search-block');
            agCloseBtn.show();
            agSubmitBtn.show();
        });

        agCloseBtn.on('click', function () {
            agSearchBlock.removeClass('js-ag-search-block');
            $(this).hide();
            agSubmitBtn.hide();
            $('.js-search_input').val('');
        });

        agSubmitBtn.on('click', function () {
            $('#ag-search_form').submit();
        });
        /* /search */

        /* mobile menu */
        var agFlagScreenToggle,

            agBody = $('body'),
            agHeader = $('.js-header-wrap'),
            agMenuBtn = $('.js-menu_btn-wrap'),
            agMenuBlock = $('.js-menu-block'),
            agMenuNav = $('.js-menu_nav'),

            agParentCat = $('.js-menu-subcat_title-list'),
            agSubcatList = $('.js-menu-subcat_list');

        function agMenuClose() {
            agMenuBtn.children().removeClass('js-ag-menu_btn-show');
            agMenuBlock.removeClass('js-ag-menu-block');
            agMenuNav.removeClass('js-ag-menu_nav'); // remove animation for categories items

            agBody.removeClass('js-ag-body-noscroll');
            agHeader.removeAttr('data-pos');
            setTimeout(function () {
                agHeader.removeClass('js-ag-header-wrap__overlay');
            }, 305);
        }

        function agSubcatListHide() {
            agParentCat.next('.js-menu-subcat_list').removeClass('js-ag-menu-subcat_list');
            agParentCat.next('.js-menu-subcat_list').slideUp();
            agParentCat.parent().removeClass('js-ag-menu-parent_item');
        }

        $(window).resize(function () {
            var width = $(window).width();

            if (width <= 767) { // screen <= 767
                if (agFlagScreenToggle === true || agFlagScreenToggle == undefined) {

                    //agLanguagePanel.removeAttr('style'); // uncomment, if you need to hide the panel after resizing
                    //agLoginPanel.removeAttr('style'); // uncomment, if you need to hide the panel after resizing

                    /* toggle menu */
                    agMenuBtn.on('click', function () {

                        if(agMenuBtn.children().hasClass('js-ag-menu_btn-show')) {
                            var agPagePos = agHeader.attr('data-pos');

                            agMenuClose();
                            agSubcatListHide();

                            $('body, html').animate({scrollTop: agPagePos}, 0);

                        } else {

                            if(!agHeader.hasClass('js-ag-header-wrap__overlay')) { // if the menu closing animation hasn't ended
                                var agScrollSelector = '';

                                if (!agScrollSelector && $('html').scrollTop()) {
                                    agScrollSelector = 'html';
                                }
                                if (!agScrollSelector && $('body').scrollTop()) {
                                    agScrollSelector = 'body';
                                }

                                agScrollPos = $(agScrollSelector).scrollTop() ? $(agScrollSelector).scrollTop() : 0;  // page position before opening the menu

                                agMenuBtn.children().addClass('js-ag-menu_btn-show');

                                agMenuBlock.animate({scrollTop: 0}, 100).addClass('js-ag-menu-block');  // scroll menu to top (to the starting position)
                                agMenuNav.addClass('js-ag-menu_nav');  // add animation for categories items

                                agBody.addClass('js-ag-body-noscroll');
                                agHeader.addClass('js-ag-header-wrap__overlay').attr('data-pos', agScrollPos);
                            }

                        }

                    });
                    /* /toggle menu */


                    /* show header when scrolling */
                    var agScrollPrev = 100;

                    $(window).scroll(function () {
                        var agScrolled = $(window).scrollTop();

                        if (agScrolled > 100) {
                            if (agScrolled > agScrollPrev) {
                                agHeader.addClass('js-ag-header-wrap__scroll');
                            } else {
                                agHeader.removeClass('js-ag-header-wrap__scroll');
                            }
                            agScrollPrev = agScrolled;
                        }
                    });
                    /* /show header when scrolling */

                    /* select country */
                    var agLanguageSelectbox = $('#ag-mob-language_selectbox'),
                        agGetClass = agLanguageSelectbox.attr('class');

                    function agGetFlag() {
                        var agLanguageSelectbox = $('#ag-mob-language_selectbox'),
                            agLanguageCode = $('.js-mob-language_select option:selected').val(),
                            agLanguageFlag = 'ag-language_icon-' + agLanguageCode;

                        agLanguageSelectbox.attr('class', agGetClass).addClass(agLanguageFlag);
                    }

                    agGetFlag();

                    $('.js-mob-language_select').change(function () {
                        agGetFlag();
                    });
                    /* /select country */

                    /* show subcategories */
                    agParentCat.on('click', function (e) {
                        e.preventDefault();

                        if ($(this).next('.js-menu-subcat_list').css('display') == 'none') {
                            agSubcatListHide();

                            agParentCat.removeClass('js-ag-menu-parent_item');
                            $(this).next('.js-menu-subcat_list').addClass('js-ag-menu-subcat_list');
                            $(this).next('.js-menu-subcat_list').slideDown();
                            $(this).parent().addClass('js-ag-menu-parent_item');
                        }else{
                            agSubcatListHide();
                        }
                    });
                    /* /show subcategories */

                    agFlagScreenToggle = false;
                }
            }else{ // screen > 767
                if (agFlagScreenToggle === false || agFlagScreenToggle == undefined) {

                    agMenuBtn.off('click');
                    agParentCat.off('click');
                    agSubcatList.removeAttr('style');

                    agMenuClose();

                    agSubcatListHide();

                    agFlagScreenToggle = true;
                }
            }
        }).resize();
        /* /mobile menu */

    });
})(jQuery);



(function($) {
    "use strict"

    // Mobile Nav toggle
    $('.menu-toggle > a').on('click', function (e) {
        e.preventDefault();
        $('#responsive-nav').toggleClass('active');
    })

    // Fix cart dropdown from closing
    $('.cart-dropdown').on('click', function (e) {
        e.stopPropagation();
    });

    /////////////////////////////////////////

    // Products Slick
    $('.products-slick').each(function() {
        var $this = $(this),
            $nav = $this.attr('data-nav');

        $this.slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            infinite: true,
            speed: 300,
            dots: false,
            arrows: true,
            appendArrows: $nav ? $nav : false,
            responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
            ]
        });
    });

    // Products Widget Slick
    $('.products-widget-slick').each(function() {
        var $this = $(this),
            $nav = $this.attr('data-nav');

        $this.slick({
            infinite: true,
            autoplay: true,
            speed: 300,
            dots: false,
            arrows: true,
            appendArrows: $nav ? $nav : false,
        });
    });

    /////////////////////////////////////////

    // Product Main img Slick
    $('#product-main-img').slick({
        infinite: true,
        speed: 300,
        dots: false,
        arrows: true,
        fade: true,
        asNavFor: '#product-imgs',
    });

    // Product imgs Slick
    $('#product-imgs').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: 0,
        vertical: true,
        asNavFor: '#product-main-img',
        responsive: [{
            breakpoint: 991,
            settings: {
                vertical: false,
                arrows: false,
                dots: true,
            }
        },
        ]
    });

    // Product img zoom
    var zoomMainProduct = document.getElementById('product-main-img');
    if (zoomMainProduct) {
        $('#product-main-img .product-preview').zoom();
    }

    /////////////////////////////////////////

    // Input number
    $('.input-number').each(function() {
        var $this = $(this),
            $input = $this.find('input[type="number"]'),
            up = $this.find('.qty-up'),
            down = $this.find('.qty-down');

        down.on('click', function () {
            var value = parseInt($input.val()) - 1;
            value = value < 1 ? 1 : value;
            $input.val(value);
            $input.change();
            updatePriceSlider($this , value)
        })

        up.on('click', function () {
            var value = parseInt($input.val()) + 1;
            $input.val(value);
            $input.change();
            updatePriceSlider($this , value)
        })
    });

    var priceInputMax = document.getElementById('price-max'),
        priceInputMin = document.getElementById('price-min');

    priceInputMax.addEventListener('change', function(){
        updatePriceSlider($(this).parent() , this.value)
    });

    priceInputMin.addEventListener('change', function(){
        updatePriceSlider($(this).parent() , this.value)
    });

    function updatePriceSlider(elem , value) {
        if ( elem.hasClass('price-min') ) {
            console.log('min')
            priceSlider.noUiSlider.set([value, null]);
        } else if ( elem.hasClass('price-max')) {
            console.log('max')
            priceSlider.noUiSlider.set([null, value]);
        }
    }

    // Price Slider
    var priceSlider = document.getElementById('price-slider');
    if (priceSlider) {
        noUiSlider.create(priceSlider, {
            start: [1, 999],
            connect: true,
            step: 1,
            range: {
                'min': 1,
                'max': 999
            }
        });

        priceSlider.noUiSlider.on('update', function( values, handle ) {
            var value = values[handle];
            handle ? priceInputMax.value = value : priceInputMin.value = value
        });
    }

})(jQuery);


(function($) {

    var SliceSlider = {

        /**
         * Settings Object
         */
        settings: {
            delta:              0,
            currentSlideIndex:  0,
            scrollThreshold:    40,
            slides:             $('.slide'),
            numSlides:          $('.slide').length,
            navPrev:            $('.slides-nav__prev'),
            navNext:            $('.slides-nav__next'),
        },

        /**
         * Init
         */
        init: function() {
            s = this.settings;
            this.bindEvents();
        },

        /**
         * Bind our click, scroll, key events
         */
        bindEvents: function(){

            // Scrollwheel & trackpad
            s.slides.on({
                'DOMMouseScroll mousewheel' : SliceSlider.handleScroll
            });
            // On click prev
            s.navPrev.on({
                'click' : SliceSlider.prevSlide
            });
            // On click next
            s.navNext.on({
                'click' : SliceSlider.nextSlide
            });
            // On Arrow keys
            $(document).keyup(function(e) {
                // Left or back arrows
                if ((e.which === 37) ||  (e.which === 38)){
                    SliceSlider.prevSlide();
                }
                // Down or right
                if ((e.which === 39) ||  (e.which === 40)) {
                    SliceSlider.nextSlide();
                }
            });
        },

        /**
         * Interept scroll direction
         */
        handleScroll: function(e){

            // Scrolling up
            if (e.originalEvent.detail < 0 || e.originalEvent.wheelDelta > 0) {

                s.delta--;

                if ( Math.abs(s.delta) >= s.scrollThreshold) {
                    SliceSlider.prevSlide();
                }
            }

            // Scrolling Down
            else {

                s.delta++;

                if (s.delta >= s.scrollThreshold) {
                    SliceSlider.nextSlide();
                }
            }

            // Prevent page from scrolling
            return false;
        },

        /**
         * Show Slide
         */
        showSlide: function(){
            // reset
            s.delta = 0;
            // Bail if we're already sliding
            if ($('body').hasClass('is-sliding')){
                return;
            }
            // Loop through our slides
            s.slides.each(function(i, slide) {

                // Toggle the is-active class to show slide
                $(slide).toggleClass('is-active', (i === s.currentSlideIndex));
                $(slide).toggleClass('is-prev', (i === s.currentSlideIndex - 1));
                $(slide).toggleClass('is-next', (i === s.currentSlideIndex + 1));

                // Add and remove is-sliding class
                $('body').addClass('is-sliding');

                setTimeout(function(){
                    $('body').removeClass('is-sliding');
                }, 1000);
            });
        },

        /**
         * Previous Slide
         */
        prevSlide: function(){

            // If on first slide, loop to last
            if (s.currentSlideIndex <= 0) {
                s.currentSlideIndex = s.numSlides;
            }
            s.currentSlideIndex--;

            SliceSlider.showSlide();
        },

        /**
         * Next Slide
         */
        nextSlide: function(){

            s.currentSlideIndex++;

            // If on last slide, loop to first
            if (s.currentSlideIndex >= s.numSlides) {
                s.currentSlideIndex = 0;
            }

            SliceSlider.showSlide();
        },
    };
    SliceSlider.init();
})(jQuery);