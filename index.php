<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
    <div class="top">
      <div class="topBar">
        <div class="logo"><img src="/img/logo.png" alt="sesame booking logo"></div>
        <div class="contact">
          <p>www.sesamebooking.com</p>
        </div>
      </div>
    </div>
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div class="container">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                <div>
                    <img data-u="image" src="img/001.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/002.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/003.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/004.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/005.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/006.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/007.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/008.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/009.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/010.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/011.jpg" />
                </div>
                <div>
                    <img data-u="image" src="img/012.jpg" />
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>

        <div class="title">
            Price & Status
        </div>
        <div class="contents">
            <div class="content">
                <div class ="left">List Price</div>
                <div class = "right">200,000</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Status</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Possession Date</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Maintenance Fee</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Tax</div>
                <div class = "right"></div>
            </div>
        </div>

        <div class="title">
            Location
        </div>
        <div class="contents">
            <div class="content">
                <div class ="left">Address</div>
                <div class = "right">Address content</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Crossroad</div>
                <div class = "right"></div>
            </div>      
        </div>

        <div class="title">
            Property Description
        </div>
        <div class="contents">
            <div class="content">
                <div class ="left">Style</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Bedroom</div>
                <div class = "right">1-5</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Bath</div>
                <div class = "right">1-5</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Kitchen</div>
                <div class = "right">1-5</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Parking Type</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Parking Space</div>
                <div class = "right">1-5</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Age</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Square Footage</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Level</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Unit No.</div>
                <div class = "right"></div>
            </div>
            <div class="content">
                <div class ="left">Exposure</div>
                <div class = "right"></div>
            </div>
        </div>

        <div class="title">
            Amenities
        </div>
        <div class="contents">
            <div class="content">
                <div class ="left">Basement</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Den</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Balcony</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Garden</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Gym</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Pool</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Free Parking on Premise:</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Locker</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Fireplace</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Hot Tub</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">A/C</div>
                <div class = "right"></div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Heating</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Wifi</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">TV</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Washer</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Dryer</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Fridge</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Micro Oven</div>
                <div class = "right">Yes/No</div>
            </div>
            <hr>
            <div class="content">
                <div class ="left">Furnished</div>
                <div class = "right">Yes/No</div>
            </div>
        </div>

        <div class="title">
            Remark
        </div>
        <div class="contents">
            <div class="content">
                <div class ="left right">The remark goes here</div>
            </div>
        </div>
        <div class="emptySpaec" style="height: 70px">

        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
    <div class="bottomAds">
        <div class="picAndWords">
          <div class="appLogo">
            <img src="/img/downLogo.png" alt="">
          </div>
          <div class="words">
            <div class="title">
              <p>sesamebooking</p>
            </div>
            <div class="expl">
              多伦多免费房地产专业服务平台
            </div>
          </div>
        </div>
        <div class="moreBtn">
          <a href="http://www.sesamebooking.com/?p=downloadapp&lan=en">More</a>
        </div>
      </div>
</body>
</html>
