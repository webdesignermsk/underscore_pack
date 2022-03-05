console.log('init js');

import Swup from 'swup';
import SwupScrollPlugin from '@swup/scroll-plugin';

import SwupFadeTheme from '@swup/fade-theme';
import SwupProgressPlugin from '@swup/progress-plugin';

const swurp = new Swup({
    plugins: [
        new SwupProgressPlugin(),
        new SwupFadeTheme(),
        new SwupScrollPlugin({
            doScrollingRightAway: false,
            animateScroll: false,
            scrollFriction: 0.1,
            scrollAcceleration: 0.01,
        })
    ]
});