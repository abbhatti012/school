<!DOCTYPE html>

<head>
 
    <meta charset="utf-8">  
    
    <title>School</title>  
    <meta name="description" content="nicdark Framework">
    <meta name="author" content="nicdark">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('front_assets/nicdark_style.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/nicdark_shortcodes.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/nicdark_menu.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/nicdark_responsive.css')}}">

    <link rel="stylesheet" href="{{asset('front_assets/settings.css')}}">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{asset('front_assets/img/favicon.ico')}}">
    <style>
        .nicdark_width_percentage25{
            width: 50% !important;
        }
        .nicdark_space3{
            height: 15px;
        }
    </style>
</head>
<body id="start_nicdark_framework">

<div class="nicdark_site">
    <div class="nicdark_site_fullwidth nicdark_clearfix">
        <div class="nicdark_overlay"></div>
        <div class="nicdark_section nicdark_navigation slowdown">
            <div class="nicdark_menu_boxed">
                <div class="nicdark_section nicdark_bg_greydark nicdark_displaynone_responsive">
                    <div class="nicdark_container nicdark_clearfix">
                        <div class="grid grid_6">
                            <div class="nicdark_focus">
                                <h6 class="white">
                                    <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a class="white" href="blog-masonry.php">info@yopmail.com</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey">·</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="fa fa-phone"></i>&nbsp;&nbsp;(00) +1234567890
                                </h6>
                            </div>
                        </div>
                        <div class="grid grid_6 right">
                            <div class="nicdark_focus right">
                                <h6 class="white">
                                    <i class="fa fa-sign-out"></i>&nbsp;&nbsp;<a class="white nicdark_mpopup_ajax" href="{{ route('logout') }}">SIGN OUT</a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<section class="nicdark_section">
	<div class="tp-banner-container">
		<div class="nicdark_slide1" >
			<ul>				
				<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="FRIENDS">
					<img src="{{asset('front_assets/img/1.jpg')}}"  alt="" data-lazyload="{{asset('front_assets/img/1.jpg')}}" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
				</li>
				<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on" data-title="FRIENDS">
					<img src="{{asset('front_assets/img/2.jpg')}}"  alt="" data-lazyload="{{asset('front_assets/img/2.jpg')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="nicdark_section nicdark_margintop45_negative">
    <div class="nicdark_container nicdark_clearfix">
		<div class="grid grid_12 percentage nomargin">    
			<div class="nicdark_textevidence center">
                <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_yellow nicdark_shadow">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="{{ route('student-gifts') }}">STORE / GIFTS</a></h2>
			           </div>
			            <i class="nicdark_zoom icon-money-1 nicdark_iconbg left extrabig yellow nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_textevidence nicdark_width_percentage25 nicdark_bg_blue nicdark_shadow nicdark_radius_left">
			        <div class="nicdark_textevidence">
			            <div class="nicdark_margin30">
			                <h2 class="white subtitle"><a class="white" href="{{ route('student-dashboard') }}">POINT VALUE</a></h2>
			           </div>
			            <i class="nicdark_zoom icon-pencil-2 nicdark_iconbg left extrabig blue nicdark_displaynone_ipadland nicdark_displaynone_ipadpotr"></i>
			        </div>
			    </div>
			    <div class="nicdark_space5"></div>
			</div>
		</div>
	</div>
</section>
<style>
    .grid_4{
        width: 100%;
    }
    .custom-danger{
        background: white !important;
        border: 1px solid red !important;
        border-style: dotted !important;
        color: black !important;
    }
    .custom-success{
        background: white !important;
        border: 1px solid green !important;
        border-style: dotted !important;
        color: black !important;
    }
    .nicdark_archive1 .gift-image{
        height: 200px !important;
        object-fit: cover !important;
    }
</style>

<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_space50"></div>
        <div class="grid grid_12">
            <h1 class="subtitle greydark">GIFTS TO PURCHASE</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle grey">DON'T MISS THE GREAT CHANCE</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_green nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        <div class="grid grid_12">
            <a href="javascript:void(0)" class="nicdark_press nicdark_btn nicdark_bg_bluedark white nicdark_radius nicdark_shadow medium custom-success">Yes We're Open</a>
            <a href="javascript:void(0)" class="nicdark_press nicdark_btn nicdark_bg_reddark white nicdark_radius nicdark_shadow medium custom-danger">Sorry We're Closed</a>
        </div>
        <div class="grid grid_3">
            <div class="nicdark_archive1 nicdark_bg_green nicdark_radius nicdark_shadow">
                <img class="gift-image" src="./front_assets/img/pencil.avif">
                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">PENCIL</h4>
                </div>
                <div class="nicdark_margin20">
                    <div class="nicdark_space20"></div>
                    <a href="javascript:void(0)" class=" nicdark_press nicdark_btn nicdark_bg_greendark white nicdark_radius nicdark_shadow medium">Get Now</a>
                </div>
            </div>
        </div>
        <div class="grid grid_3">
            <div class="nicdark_archive1 nicdark_bg_blue nicdark_radius nicdark_shadow">
                <img class="gift-image" src="./front_assets/img/sticker.webp">
                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">LION STICKER</h4>
                </div>
                <div class="nicdark_margin20">
                    <div class="nicdark_space20"></div>
                    <a href="javascript:void(0)" class="nicdark_press nicdark_btn nicdark_bg_bluedark white nicdark_radius nicdark_shadow medium">Get Now</a>
                </div>
            </div>
        </div>
        <div class="grid grid_3">
            <div class="nicdark_archive1 nicdark_bg_yellow nicdark_radius nicdark_shadow">
                <img class="gift-image" src="./front_assets/img/candies.avif">
                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">CANDIES</h4>
                </div>
                <div class="nicdark_margin20">
                    <div class="nicdark_space20"></div>
                    <a href="javascript:void(0)" class="nicdark_press nicdark_btn nicdark_bg_yellowdark white nicdark_radius nicdark_shadow medium">Get Now</a>
                </div>
            </div>
        </div>
        <div class="grid grid_3">
            <div class="nicdark_archive1 nicdark_bg_orange nicdark_radius nicdark_shadow">
                <img class="gift-image" src="./front_assets/img/choclate.avif">
                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">CHOCOLATE</h4>
                </div>
                <div class="nicdark_margin20">
                    <div class="nicdark_space20"></div>
                    <a href="javascript:void(0)" class="nicdark_press nicdark_btn nicdark_bg_orangedark white nicdark_radius nicdark_shadow medium">Get Now</a>
                </div>
            </div>
        </div>
        <div class="nicdark_space50"></div>
   </div>
</section>
<div id="nicdark_parallax_2_btns" class="nicdark_section nicdark_imgparallax nicdark_parallax_img2">
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_space40"></div>
        <div class="nicdark_space50"></div>
        <div class="nicdark_space40"></div>
        <div class="nicdark_space50"></div>
    </div>
</div>
<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_space50"></div>
        <div class="grid grid_12">
            <h1 class="subtitle greydark">GENIUS STUDENTS</h1>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left big"><span class="nicdark_bg_blue nicdark_radius"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        <div class="grid grid_4 nicdark_masonry_item educational">
            <div class="nicdark_archive1 nicdark_bg_violet nicdark_radius nicdark_shadow">
                <img alt=""  src="{{asset('front_assets/img/3.jpg')}}">
                <div class="nicdark_margin20">
                    <h4 class="white">SOME APPRECIATION FOR STUDENT</h4>                        
                </div>
                <i class="icon-picture-outline nicdark_iconbg right medium violet"></i>
            </div>
        </div>
        <div class="grid grid_4 nicdark_masonry_item educational">
            <div class="nicdark_archive1 nicdark_bg_violet nicdark_radius nicdark_shadow">
                <img alt=""  src="{{asset('front_assets/img/4.jpg')}}">
                <div class="nicdark_margin20">
                    <h4 class="white">SOME APPRECIATION FOR STUDENT</h4>                        
                </div>
                <i class="icon-picture-outline nicdark_iconbg right medium violet"></i>
            </div>
        </div>
        <div class="grid grid_4 nicdark_masonry_item educational">
            <div class="nicdark_archive1 nicdark_bg_violet nicdark_radius nicdark_shadow">
                <img alt=""  src="{{asset('front_assets/img/5.jpg')}}">
                <div class="nicdark_margin20">
                    <h4 class="white">SOME APPRECIATION FOR STUDENT</h4>                        
                </div>
                <i class="icon-picture-outline nicdark_iconbg right medium violet"></i>
            </div>
        </div>
        <div class="grid grid_4 nicdark_masonry_item educational">
            <div class="nicdark_archive1 nicdark_bg_violet nicdark_radius nicdark_shadow">
                <img alt=""  src="{{asset('front_assets/img/6.jpg')}}">
                <div class="nicdark_margin20">
                    <h4 class="white">SOME APPRECIATION FOR STUDENT</h4>
                </div>
                <i class="icon-picture-outline nicdark_iconbg right medium violet"></i>
            </div>
        </div>
        <div class="grid grid_4 nicdark_masonry_item educational">
            <div class="nicdark_archive1 nicdark_bg_violet nicdark_radius nicdark_shadow">
                <img alt=""  src="{{asset('front_assets/img/7.jpg')}}">
                <div class="nicdark_margin20">
                    <h4 class="white">SOME APPRECIATION FOR STUDENT</h4>                        
                </div>
                <i class="icon-picture-outline nicdark_iconbg right medium violet"></i>
            </div>
        </div>
    </div>
</section>
<section class="nicdark_section">
    <div class="nicdark_container nicdark_clearfix">
        <div class="nicdark_space30"></div>
        <div class="grid grid_12">
            <div class="nicdark_textevidence center">
                <a href="#" class="nicdark_zoom nicdark_btn nicdark_bg_blue medium nicdark_shadow nicdark_radius white nicdark_margin10"><i class="fa fa-arrow-down"></i>&nbsp;&nbsp;&nbsp;VIEW MORE</a>
            </div>
        </div>
        <div class="nicdark_space40"></div>
    </div>
</section>
<div class="nicdark_space3 nicdark_bg_gradient"></div>
<div class="nicdark_section nicdark_bg_greydark2 nicdark_copyrightlogo">
    <div class="nicdark_container nicdark_clearfix">
        
    </div>
</div>
</div>
    </div>
    <script src="{{asset('front_assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('front_assets/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('.nicdark_slide1').show().revolution(
            {
                dottedOverlay:"none",
                delay:16000,
                startwidth:1170,
                startheight:650,
                hideThumbs:200,
                
                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview2",
                
                touchenabled:"on",
                onHoverStop:"on",
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                                        
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                        
                keyboardNavigation:"off",
                
                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,
                        
                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner4",
                
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",
                
                autoHeight:"off",						
                forceFullWidth:"off",						
                                        
                hideTimerBar: "on",					
                                        
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,						
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,
                
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                videoJsPath:"rs-plugin/videojs/",
                fullScreenOffsetContainer: ""	
            });

            $('#nicdark_parallax_big_image').parallax("50%", 0.3);
            $('#nicdark_parallax_2_btns').parallax("50%", 0.3);
            $('#nicdark_parallax_countdown').parallax("50%", 0.3);
            $('#nicdark_parallax_counter').parallax("50%", 0.3);

        });
    </script>
</body>  
</html>