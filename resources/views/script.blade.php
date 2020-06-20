<script type="text/javascript">
    var ajaxRevslider;
    jQuery(document).ready(function() {
        var ajaxRemoveRevslider = function(obj) {
            return jQuery(obj.selector + ' .rev_slider').revkill();
        };
        if (jQuery.fn.tpessential !== undefined)
            if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined')
                jQuery.fn.tpessential.defaults.ajaxTypes.push({type: 'revslider', func: ajaxRevslider, killfunc: ajaxRemoveRevslider, openAnimationSpeed: 0.3});
    });
</script>

<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400%7CRoboto:400%7COpen+Sans:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">

<script type="text/javascript">
    if(typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            var err = "<div class='rs_error_message_box'>";
            err += "<div class='rs_error_message_oops'>Oops...</div>";
            err += "<div class='rs_error_message_content'>";
            err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
            err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
            err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
            err += "</div>";
            err += "</div>";
            jQuery(sliderID).show().html(err);
        }
    }
</script>

<script type='text/javascript' src='{{asset('js/js_composer_front.min.js?ver=6.0.5')}}'></script>

<a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
