$('a.fb').click(function(e) {
    e.preventDefault();
    window.open("http://www.facebook.com/sharer.php?u=" +
        encodeURIComponent(document.URL) + "&t=" + encodeURIComponent(document.title),
        "facebook",
        'height=350, width=550, top=' + 100 + ', left=' + ($(window).width() / 2 - 550) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0, resizable=1');
});
$('a.t').click(function(e) {
    e.preventDefault();
    window.open('http://twitter.com/share?url=' + encodeURIComponent(document.URL) + '&text=' + encodeURIComponent(document.title) + '&',
        'twitter',
        'height=350, width=550, top=' + 100 + ', left=' + ($(window).width() / 2 - 550) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0, resizable=1');
});
$('a.in').click(function(e) {
    e.preventDefault();
    window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title) + '&summary=' + encodeURIComponent($('.movedHeader').text()) + '&source=Wakefield',
        'linkedin',
        'height=455, width=550, top=' + 100 + ', left=' + ($(window).width() / 2 - 550) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0, resizable=1');
});
$('a.gp').click(function(e) {
    e.preventDefault();
    window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL),
        'googleplus',
        'height=455, width=550, top=' + 100 + ', left=' + ($(window).width() / 2 - 550) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0, resizable=1');
});
$('a.pin').click(function(e) {
    e.preventDefault();
    window.open("http://pinterest.com/pin/create/button/?url=" + encodeURIComponent(document.URL) + "&media=" + encodeURIComponent('http://uncubed.com/dev/wp-content/themes/uncubed/images/wakefieldcircle.png') + "&description=" + encodeURIComponent($('.movedHeader').text()),
        'pinterest',
        'height=455, width=550, top=' + 100 + ', left=' + ($(window).width() / 2 - 550) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0, resizable=1');
});
$('a.tum').click(function(e) {
    e.preventDefault();
    window.open("http://www.tumblr.com/share/link?url=" + encodeURIComponent(document.URL) + "&name=" + encodeURIComponent(document.title) + "&description=" + encodeURIComponent($('.movedHeader').text()),
        "tumblr",
        'height=455, width=550, top=' + 100 + ', left=' + ($(window).width() / 2 - 550) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0, resizable=1');
});
$('a.em').attr('href', "mailto:?subject=" + encodeURIComponent(document.title) + "&body=" + "Check it out: " + document.URL);
