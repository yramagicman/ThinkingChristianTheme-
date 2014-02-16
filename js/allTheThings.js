/*jslint browser: true, bitwise: false, continue: false, eqeq: false, newcap: false, undef: false, unparam: false, sloppy: true, stupid: false, vars: false, white: false, css: false, fragment: false */
//Blue Bars
"use strict";
var allthethings = function() { //jQuery function that contains everything I do, makes for a cleaner head.
    var x, itemHeight, numLinks, navWidth, links, linkWidth, tag, selector, stringPos, url;
    //
    //    detect elements
    //    if no custom menus, wrap child menu <li> in span.
    if (jq('ul.children').length) {
        x = jq('ul.children').find('li');
        x.wrap('<span class="pad">');
        itemHeight = jq(x).height();
    }
    //             if custom menus wrap sub-menu <li> in span.
    if (jq('ul.sub-menu').length) {
        x = jq('ul.sub-menu').find('li');
        x.wrap('<span class="pad">');
        itemHeight = jq(x).height();
    }
    if (jq('ul.menu').length) {
        tag = 'ul';
        selector = jq(tag + '.menu>li');
    }
    if (!jq('ul.menu').length) {
        tag = 'div';
        selector = jq(tag + '.menu>ul>li');
    }



            numLinks = selector.length;
            links = selector.find('a');
            navWidth = jq('div.menu').width();
            linkWidth = navWidth / numLinks;
    //
    //    create a pad around drop downs to make up for possible mouse error.
            jq('.pad').css({
                'padding': '0 20px',
    //        set margin of mouse error on left and right side
//                'display': 'block',
    //use for debugging
                'height': itemHeight //use height value here.
            }); // end of pad css.
    //    jQuery CSS, used for cross browser compatibility.
            jq('.pad:last-of-type').css({
                'padding-bottom': '20px'
            }); //add padding to the bottom of stuff
//        optional extras, make things look pretty.
            jq('.pad:first-of-type').find('li').css({
                'border-radius': '5px 5px 0 0'
            });
            jq('.pad:last-of-type').find('li').css({
                'border-radius': '0 0 5px 5px '
            });
            jq('.pad:only-of-type').find('li').css({
                'border-radius': '5px'
            });
    //        dynamic link width
            links.css({
                'width': linkWidth
            });
    //    set width.
    jq('img.size-full').each(function() {
        var x = jq(this).width();
        if (x > 700) {
            jq(this).removeAttr('width');
            jq(this).removeAttr('height');
            jq(this).addClass('toobig');
        }
    });

    //        jq('img').removeAttr('height');
    //        jq('img').removeAttr('width');
    //    slider
    jq('#slider1').bxSlider({
        mode: 'fade',
        auto: true,
        autoHover: true,
        infiniteLoop: true,
        pause: 7000,
        pager: true,
        controls: false
    }); // end slider data


}; //the end of all things​