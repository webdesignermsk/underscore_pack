console.log('init js');
import jQuery from 'jquery';
import Swup from 'swup';
import SwupHeadPlugin from '@swup/head-plugin';
import SwupJsPlugin from '@swup/js-plugin';
import SwupScrollPlugin from '@swup/scroll-plugin';
// import SwupScriptsPlugin from '@swup/scripts-plugin';
import SwupFadeTheme from '@swup/fade-theme';
import SwupProgressPlugin from '@swup/progress-plugin';
import { gsap } from "gsap";
import { TweenMax, TimelineMax } from 'gsap';

import { TweenLite } from 'gsap';
var $ = require('jquery');
window.jQuery = $;
window.$ = $;


const options = [
    {
        from: '(.*)',
        to: '(.*)',
        in: function (next) {
            document.querySelector('#swup').style.opacity = 0;
            gsap.to(document.querySelector('#swup'), 0.5, {
                opacity: 1,
                onComplete: next
            });
        },
        out: (next) => {
            document.querySelector('#swup').style.opacity = 1;
            gsap.to(document.querySelector('#swup'), 0.5, {
                opacity: 0,
                onComplete: next
            });
        }
    }
];


jQuery('.navToggle').click(function () {
    jQuery('.menu').toggleClass('menuOn');
    jQuery('nav').toggleClass('navOn');
    console.log('testt');
})

const swurp = new Swup({
    plugins: [
        new SwupJsPlugin(options),
        // new SwupHeadPlugin(),
        new SwupProgressPlugin(),
        new SwupFadeTheme(),
        new SwupScrollPlugin({
            doScrollingRightAway: false,
            animateScroll: false,
            scrollFriction: 0.1,
            scrollAcceleration: 0.01,
        }),
        // new SwupScriptsPlugin({
        //     optin: yt
        // })

    ]
});