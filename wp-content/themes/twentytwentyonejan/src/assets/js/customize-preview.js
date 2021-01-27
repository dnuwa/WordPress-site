import $ from 'jquery';
import strip_tags from './helpers/strip-tags';

//check these
wp.customize('blogname', (value) => {
    value.bind((to) => {
        $('.h-link').html(to);
    })
})

wp.customize('_themename_site_info', (value) => {
    value.bind((to) => {
        $('.f-text').html(strip_tags(to, '<a>'));
    })
})