<script type="text/javascript" src="js/jssor.js"></script>
<script type="text/javascript" src="js/jssor.slider.js"></script>
<script>
    jssor_slider1_starter = function(containerId) {
        var _CaptionTransitions = [];
        _CaptionTransitions["L"] = {$Duration: 800, x: 0.6, $Easing: {$Left: $JssorEasing$.$EaseInOutSine}, $Opacity: 2};
        _CaptionTransitions["R"] = {$Duration: 800, x: -0.6, $Easing: {$Left: $JssorEasing$.$EaseInOutSine}, $Opacity: 2};
        _CaptionTransitions["T"] = {$Duration: 800, y: 0.6, $Easing: {$Top: $JssorEasing$.$EaseInOutSine}, $Opacity: 2};
        _CaptionTransitions["B"] = {$Duration: 800, y: -0.6, $Easing: {$Top: $JssorEasing$.$EaseInOutSine}, $Opacity: 2};
        _CaptionTransitions["TL"] = {$Duration: 800, x: 0.6, y: 0.6, $Easing: {$Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine}, $Opacity: 2};
        _CaptionTransitions["TR"] = {$Duration: 800, x: -0.6, y: 0.6, $Easing: {$Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine}, $Opacity: 2};
        _CaptionTransitions["BL"] = {$Duration: 800, x: 0.6, y: -0.6, $Easing: {$Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine}, $Opacity: 2};
        _CaptionTransitions["BR"] = {$Duration: 800, x: -0.6, y: -0.6, $Easing: {$Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine}, $Opacity: 2};

        _CaptionTransitions["WAVE|L"] = {$Duration: 1500, x: 0.6, y: 0.3, $Easing: {$Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave}, $Opacity: 2, $Round: {$Top: 2.5}};
        _CaptionTransitions["MCLIP|B"] = {$Duration: 600, $Clip: 8, $Move: true, $Easing: $JssorEasing$.$EaseOutExpo};

        var options = {
            $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            $CaptionSliderOptions: {//[Optional] Options which specifies how to animate caption
                $Class: $JssorCaptionSlider$, //[Required] Class to create instance to animate caption
                $CaptionTransitions: _CaptionTransitions, //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                $PlayInMode: 1, //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$(containerId, options);
    }
</script>
<!-- Jssor Slider Begin -->
<!-- You can move inline styles to css file or css block. -->
<div id="slider1_container" style="position: relative; width: 920px; height: 500px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:920px; height:520px; overflow: hidden;">
        <!-- Slide -->
        <div>
            <img u="image" src="img/Tea.jpg" />
            <div u="caption" t="MCLIP|B" style="position: absolute; top: 250px; left: 0px;
                 width: 920px; height: 50px;">
                <div style="position: absolute; top: 0px; left: 0px; width: 920px; height: 50px;
                     background-color: Black; opacity: 0.5; filter: alpha(opacity=50);">
                </div>
                <div style="position: absolute; top: 0px; left: 0px; width: 920px; height: 50px;
                     color: White; font-size: 16px; font-weight: bold; line-height: 50px; text-align: center;">
                    Eat Herbal Foods
                </div>
            </div>
        </div>
        <!-- Slide -->
        <div>
            <img u="image" src="img/slide1.jpg" />
            <div u="caption" t="MCLIP|B" t2="T" style="position: absolute; top: 250px; left: 0px;
                 width: 920px; height: 50px;">
                <div style="position: absolute; top: 0px; left: 0px; width: 920px; height: 50px;
                     background-color: Black; opacity: 0.5; filter: alpha(opacity=50);">
                </div>
                <div style="position: absolute; top: 0px; left: 0px; width: 920px; height: 50px;
                     color: White; font-size: 16px; font-weight: bold; line-height: 50px; text-align: center;">
                    Stay Healthy With Us
                </div>
            </div>
        </div>
        <!-- Slide -->
        <div>
            <img u="image" src="img/Tea.jpg" />
            <div u="caption" t="MCLIP|B" t2="NO" style="position: absolute; top: 250px; left: 0px;
                 width: 920px; height: 50px;">
                <div style="position: absolute; top: 0px; left: 0px; width: 920px; height: 50px;
                     background-color: Black; opacity: 0.5; filter: alpha(opacity=50);">
                </div>
                <div style="position: absolute; top: 0px; left: 0px; width: 920px; height: 50px;
                     color: White; font-size: 16px; font-weight: bold; line-height: 50px; text-align: center;">
                   Be Health Conscious
                </div>
            </div>
        </div>
        <!-- Slide -->

    </div>
    <a style="display: none" href="http://www.jssor.com">bootstrap carousel</a>
    <!-- Trigger -->
    <script>
        jssor_slider1_starter('slider1_container');
    </script>
</div>
<!-- Jssor Slider End -->
<script>
    jssor_slider1_starter('slider1_container');
</script>