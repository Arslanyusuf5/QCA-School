jQuery(document).ready(function($) {
    $('.switches-container').on('click', function(event) {

        event.preventDefault();

        var currentURL = window.location.href;

        var SiteBaseUrl = $.trim(boysSiteBaseUrl);

        var urlSegments = currentURL.split('/');

        urlSegments = urlSegments.filter(function(segment) {
            return segment !== '';
        });

        if (currentURL === SiteBaseUrl) {
            var targetSiteBaseURL = girlsSiteUrl;

        } else {
            
            var targetSiteBaseURL = girlsSiteUrl;

            var targetSiteBaseURLSegments = targetSiteBaseURL.split('/');

            for (var i = 0; i < urlSegments.length; i++) {

                if (!targetSiteBaseURLSegments.includes(urlSegments[i])) {
                    targetSiteBaseURL += urlSegments[i] + '/';
                }
            }
        }

        window.location.href = targetSiteBaseURL;
    });
});

$(window).scroll(function(){
    var sticky = $('header'),
        scroll = $(window).scrollTop();
  
    if (scroll >= 100) sticky.addClass('sticky');
    else sticky.removeClass('sticky');
  });