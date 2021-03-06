@extends('app')
@section('header_content')
    <!--Get Quote Model Popup-->
    <div class="animated-modal hidden quote-content" id="animatedModal">
        <!--Heading-->
        <div class="heading-area pb-2 mx-570">
            <span class="sub-title">We are megaone company</span>
            <h2 class="title mt-2">Lets start your <span class="alt-color js-rotating">project, website</span></h2>
        </div>
        <!--Contact Form-->
        <form class="contact-form">
            <div class="row">
                <!--Result-->
                <div class="col-12" id="quote_result"></div>

                <!--Left Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_name" name="quote_name" placeholder="Name" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_contact" name="quote_contact" placeholder="Contact #" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_type" name="quote_type" placeholder="Project type" required=""
                               type="text">
                    </div>
                </div>

                <!--Right Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_email" name="quote_email" placeholder="Email" required=""
                               type="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_address" name="quote_address" placeholder="City / Country"
                               required="" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_budget" name="quote_budget" placeholder="Budget" required=""
                               type="text">
                    </div>
                </div>

                <!--Full Column-->
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" id="quote_message"
                                  name="quote_message" placeholder="Please explain your project in detail."></textarea>
                    </div>
                </div>

                <!--Button-->
                <div class="col-md-12">

                    <div class="form-check">
                        <label class="checkbox-lable">Contact by phone ins preffered
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <a class="btn btn-large btn-rounded btn-blue btn-hvr-pink" href="javascript:void(0);"
                       id="quote_submit_btn">Send Message
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </a>
                </div>

            </div>
        </form>
    </div>
@endsection
@section('content')
    <!--Slider Start-->
    <section class="p-0 no-transition cursor-light" id="home">
        <h2 class="d-none">hidden</h2>
        <div class="rev_slider_wrapper fullscreen-container" data-alias="megaone-agency-1" data-source="gallery"
             id="rev_slider_17_1_wrapper" style="background:transparent;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
            <div class="rev_slider fullscreenbanner" data-version="5.4.8.1" id="rev_slider_17_1" style="display:none;">
                <ul>    <!-- SLIDE  -->
                    <li data-description="" data-easein="default" data-easeout="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-43" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5=""
                        data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-title="Slide" data-transition="fade">
                        <!--OVERLAY-->
                        <div class="gradient-bg1 bg-overlay"></div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme"
                             data-frames='[{"delay":220,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;rZ:339;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-height="none" data-hoffset="['-26','-26','83','83']"
                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"

                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-type="image"

                             data-voffset="['98','98','60','60']"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-x="['left','left','left','left']"
                             data-y="['bottom','bottom','bottom','bottom']"
                             id="slide-43-layer-5"

                             style="z-index: 7;">
                            <div class="rs-looped rs-slideloop" data-easing="" data-speed="5" data-xe="0" data-xs="0"
                                 data-ye="15" data-ys="-15"><img alt="" data-hh="['87px','87px','87px','87px']"
                                                                 data-no-retina
                                                                 data-ww="['44px','44px','44px','44px']" src="{{asset('_landing/agency/img/shape-6.png')}}">
                            </div>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme"
                             data-basealign="slide"
                             data-frames='[{"delay":210,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;rZ:358;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="none"
                             data-hoffset="['700','700','700','530']" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"

                             data-responsive_offset="on"
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-type="image"

                             data-voffset="['148','148','148','148']"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             id="slide-43-layer-6"

                             style="z-index: 8;">
                            <div class="rs-looped rs-slideloop" data-easing="Power0.easeIn" data-speed="5" data-xe="0"
                                 data-xs="0" data-ye="20" data-ys="0"><img alt="" data-hh="['87px','87px','87px','87px']"
                                                                           data-no-retina
                                                                           data-ww="['24px','24px','24px','24px']"
                                                                           src="{{asset('_landing/agency/img/shape-5.png')}}"></div>
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme"
                             data-fontsize="['20','20','20','20']"
                             data-frames='[{"delay":220,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="none"
                             data-hoffset="['275','275','171','120']" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"

                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-type="image"

                             data-voffset="['270','270','261','190']"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             id="slide-43-layer-7"

                             style="z-index: 9;">
                            <div class="rs-looped rs-wave" data-angle="0" data-origin="50% 50%" data-radius="15px"
                                 data-speed="12"><img alt="" data-hh="['67px','67px','67px','67px']"
                                                      data-no-retina
                                                      data-ww="['68px','68px','68px','68px']" src="{{asset('_landing/agency/img/shape-4.png')}}"></div>
                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme"
                             data-frames='[{"delay":190,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-height="none" data-hoffset="['413','413','268','204']"
                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"

                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-type="image"

                             data-voffset="['-205','-205','-259','-145']"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             id="slide-43-layer-8"

                             style="z-index: 10;">
                            <div class="rs-looped rs-rotate" data-easing="Power0.easeIn" data-enddeg="360" data-origin="50% 50%"
                                 data-speed="15" data-startdeg="0"><img alt="" data-hh="['69px','69px','69px','69px']"
                                                                        data-no-retina
                                                                        data-ww="['67px','67px','67px','67px']"
                                                                        src="{{asset('_landing/agency/img/shape-3.png')}}"></div>
                        </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption   tp-resizeme"
                             data-frames='[{"delay":190,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-height="none" data-hoffset="['436','436','259','145']"
                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"

                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-type="image"

                             data-voffset="['204','204','96','73']"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-x="['left','left','left','left']"
                             data-y="['top','top','top','top']"
                             id="slide-43-layer-9"

                             style="z-index: 11;">
                            <div class="rs-looped rs-pendulum" data-easing="" data-enddeg="20" data-origin="50% 50%"
                                 data-speed="12" data-startdeg="-20"><img alt="" data-hh="['52px','52px','52px','52px']"
                                                                          data-no-retina
                                                                          data-ww="['51px','51px','51px','51px']"
                                                                          src="{{asset('_landing/agency/img/shape-1.png')}}"></div>
                        </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption   tp-resizeme"
                             data-basealign="slide"
                             data-frames='[{"delay":170,"speed":500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="none"
                             data-hoffset="['39','39','94','58']" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"

                             data-responsive_offset="on"
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-type="image"

                             data-voffset="['109','109','64','69']"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-x="['right','right','right','right']"
                             data-y="['top','top','top','top']"
                             id="slide-43-layer-10"

                             style="z-index: 12;">
                            <div class="rs-looped rs-slideloop" data-easing="" data-speed="2" data-xe="15" data-xs="0"
                                 data-ye="0" data-ys="0"><img alt="" data-hh="['14px','14px','14px','14px']"
                                                              data-no-retina
                                                              data-ww="['50px','50px','50px','50px']" src="{{asset('_landing/agency/img/shape-2.png')}}"></div>
                        </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption tp-resizeme gradient-text1"
                             data-fontsize="['70','65','60','50']"
                             data-frames='[{"delay":660,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="none"
                             data-hoffset="['320','250','0','0']" data-lineheight="['80','75','70','60']"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"

                             data-textAlign="['left','left','center','center']"
                             data-type="text"

                             data-voffset="['-125','-125','-125','-110']"
                             data-whitespace="nowrap"
                             data-width="['650','650','600','500']"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             id="slide-43-layer-13"

                             style="z-index: 13; min-width: 650px; max-width: 700px; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 800; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                            Power Your Brand With
                        </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption   tp-resizeme"
                             data-fontsize="['70','65','60','50']"
                             data-frames='[{"delay":1840,"split":"chars","splitdelay":0.1,"speed":1000,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]' data-height="none"
                             data-hoffset="['320','250','0','0']" data-lineheight="['70','75','70','60']"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"

                             data-textAlign="['left','left','center','center']"
                             data-type="text"

                             data-voffset="['-40','-40','-40','-40']"
                             data-whitespace="nowrap"
                             data-width="['650','650','600','500']"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             id="slide-43-layer-11"

                             style="z-index: 14; min-width: 650px; max-width: 650px; white-space: nowrap; font-size: 70px; line-height: 70px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                            Photo Editing
                        </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption   tp-resizeme"
                             data-fontsize="['20','20','18','17']"
                             data-frames='[{"delay":2360,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-height="none"
                             data-hoffset="['325','210','0','0']" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"

                             data-textAlign="['left','left','center','center']"
                             data-type="text"

                             data-voffset="['80','75','65','57']"
                             data-whitespace="normal"
                             data-width="['651','550','600','500']"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             id="slide-43-layer-14"

                             style="z-index: 15; min-width: 651px; max-width: 651px; white-space: normal; font-size: 20px; line-height: 30px; font-weight: 300; color: #ffffff; letter-spacing: 0px;font-family:Roboto;">
                            Create scroll-stopping images for Facebook, Instagram, Youtube and more. Ads, logos? Them too.
                        </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption   tp-resizeme"
                             data-frames='[{"delay":2970,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-height="none" data-hoffset="['325','260','0','0']"
                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-textAlign="['left','left','center','center']"
                             data-type="text"
                             data-voffset="['200','186','176','156']"
                             data-whitespace="nowrap"
                             data-width="['650','650','600','500']"
                             data-x="['center','center','center','center']"
                             data-y="['middle','middle','middle','middle']"
                             id="slide-43-layer-15"

                             style="z-index: 16; white-space: nowrap;">
                            <a class="btn btn-slider btn-rounded btn-blue btn-hvr-white" href="javascript:void(0);">
                                Start a Free Trial
                                <div class="btn-hvr-setting">
                                    <ul class="btn-hvr-setting-inner">
                                        <li class="btn-hvr-effect"></li>
                                        <li class="btn-hvr-effect"></li>
                                        <li class="btn-hvr-effect"></li>
                                        <li class="btn-hvr-effect"></li>
                                    </ul>
                                </div>
                            </a>
                        </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption   tp-resizeme"
                             data-frames='[{"delay":990,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-height="none" data-hoffset="['0','0','-412','-412']"
                             data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"
                             data-responsive_offset="on"
                             data-textAlign="['inherit','inherit','inherit','inherit']"

                             data-type="image"
                             data-visibility="['on','on','off','off']"

                             data-voffset="['-1','-1','72','72']"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-x="['left','left','left','left']"
                             data-y="['middle','middle','middle','middle']"
                             id="slide-43-layer-16"

                             style="z-index: 17;">
                            <div class="rs-looped rs-slideloop" data-easing="" data-speed="5" data-xe="15" data-xs="-10"
                                 data-ye="0" data-ys="0"><img alt="" data-hh="['604px','510','510','510']"
                                                              data-no-retina
                                                              data-ww="['434px','350','350','350']" src="{{asset('_landing/agency/img/vector-art-1.png')}}"></div>
                        </div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption tp-resizeme hide-cursor"
                             data-actions='[{"event":"click","action":"scrollbelow","offset":"-50px","delay":"","speed":"1200","ease":"Power3.easeInOut"}]'
                             data-fontsize="['20','20','20','17']" data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-height="none" data-hoffset="['0','0','0','0']"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingtop="[0,0,0,0]"

                             data-responsive_offset="on"
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-type="text"

                             data-voffset="['25','25','5','5']"
                             data-whitespace="nowrap"
                             data-width="none"
                             data-x="['center','center','center','center']"
                             data-y="['bottom','bottom','bottom','bottom']"
                             id="slide-43-layer-17"

                             style="z-index: 18; white-space: nowrap; cursor: pointer; font-size: 20px; line-height: 30px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                            Scroll Down <i class="ml-2 fas fa-long-arrow-alt-down"></i></div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </section>
    <!--Slider End-->

    <!--About Us-->
    <section class="pb-0" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="heading-area">
                        <!-- <span class="sub-title">We are megaone company</span> -->
                        <br><br>
                        <h2 class="title">Design<span class="alt-color js-rotating"> Creative, ideas</span></h2>
                        <p class="para">Powerful design tools that are also easy to use? You got it. Create unique digital assets with versatile text tools, vector graphics, effects, and more.</p>
                        <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" href="javascript:void(0);">Learn
                            More
                            <div class="btn-hvr-setting">
                                <ul class="btn-hvr-setting-inner">
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                        <img alt="vector" src="{{asset('_landing/img/f1d6839f5f67d454b79b00cf6ac98262.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Us End-->


    <!--About Us-->
    <section class="pb-0" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                        <img alt="vector" src="{{asset('_landing/img/4dbae4bc8dfd43df4ee5c17ffbac93b3.png')}}">
                        <
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="heading-area">
                        <!-- <span class="sub-title">We are megaone company</span> -->
                        <h2 class="title">Templates<span class="alt-color js-rotating"> Creative, ideas</span></h2>
                        <p class="para">Hundreds of artist-made templates, sized right for social media posts, flyers, biz cards, and more. Just click-and-replace our pics and text with yours.</p>
                        <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" href="javascript:void(0);">
                            Browse templates
                            <div class="btn-hvr-setting">
                                <ul class="btn-hvr-setting-inner">
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
                <br><br> <br><br> <br><br>
            </div>
        </div>
    </section>
    <!--About Us End-->



    <!--Counters Start-->
    <section class="gradient-bg2" id="counters">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pl-lg-4 order-lg-2 wow fadeInRight">
                    <div class="heading-area">
                        <span class="sub-title text-white">We are megaone company</span>
                        <h2 class="title text-white">Photo <span class="js-rotating">Editing, Design</span>.
                        </h2>
                        <p class="para text-white">Transform images with dazzling filters and effects. Easily add text and graphics to your photos, or get advanced with one-click background remover.</p>
                    </div>
                    <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" href="javascript:void(0);">
                        Browse templates
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                        <img alt="vector" src="{{asset('_landing/agency/img/vector-art-3.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counters End-->

    <!--Services Start-->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="process-wrapp">
                        <span class="pro-step blue"><i aria-hidden="true" class="fas fa-folder-open"></i></span>
                        <h4 class="service-heading">6,000+ graphics & textures</h4>
                        <p>Build designs with vector shapes and lush textures. Customize with brand colors.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-wrapp">
                        <span class="pro-step midnight"><i aria-hidden="true" class="fas fa-code"></i></span>
                        <h4 class="service-heading">100s of gorgeous fonts</h4>
                        <p>So many font vibes: zany, serious, artsy, and more. Or upload your own to use everywhere.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-wrapp">
                        <span class="pro-step purple"><i aria-hidden="true" class="fas fa-cog"></i></span>
                        <h4 class="service-heading">1000s of design templates</h4>
                        <p>Quickly make business cards, banners, ads, and more with these artist-crafted beauts.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-wrapp">
                        <span class="pro-step pink"><i aria-hidden="true" class="fas fa-edit"></i></span>
                        <h4 class="service-heading">Oodles of collages</h4>
                        <p>Loads of blank collage layouts, and tons of collage-y templates—swap in your own pics.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services End-->



    <!--Testimonial Start-->
    <section class="gradient-bg1 text-center" id="clients">
        <div class="container">

            <!--Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-area mx-570 mb-5">
                        <h2 class="title text-white m-0">Some <span class="js-rotating">great, ideal</span> words from
                            our clients</h2>
                    </div>
                </div>
            </div>

            <!--Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel wow zoomIn" id="testimonial-slider">
                        <div class="item">
                            <p class="para">"The more I use PicMonkey, the more amazed I am! Thank you. You make image creation easier & funner :-)"</p>
                            <h5 class="name gradient-text1">PsychArticles</h5>
                            <span class="designation">Designer, Company Name</span>
                            <ul class="ratings list-unstyled">
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="item">
                            <p class="para">My go-to image tool is @PicMonkeyApp. I like that it's simple and I can quickly create a professional image</p>
                            <h5 class="name gradient-text1">FreshPressMe</h5>
                            <span class="designation">Designer, Company Name</span>
                            <ul class="ratings list-unstyled">
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="item">
                            <p class="para">“We love PicMonkey! Use it all the time and recommend it to our designers. Best online design tool out there!”</p>
                            <h5 class="name gradient-text1">Spoonflower Designs</h5>
                            <span class="designation">Designer, Company Name</span>
                            <ul class="ratings list-unstyled">
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                                <li><i aria-hidden="true" class="fas fa-star"></i></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <!--Testimonial Thumbs-->
            <div class="owl-dots" id="testimonials-avatar">
                <!--data-position[top,right,bottom,left]-->
                <button class="owl-dot active" data-position="22%,auto,auto,5%">
                    <img alt="image" src="{{asset('_landing/agency/img/avatar-1.png')}}"></button>
                <button class="owl-dot active" data-position="30%,auto,auto,16%">
                    <img alt="image" src="{{asset('_landing/agency/img/avatar-2.png')}}"></button>
                <button class="owl-dot active" data-position="auto,auto,38%,7%">
                    <img alt="image" src="{{asset('_landing/agency/img/avatar-3.png')}}"></button>
                <button class="owl-dot active" data-position="auto,auto,23%,18%">
                    <img alt="image" src="{{asset('_landing/agency/img/avatar-7.png')}}"></button>
                <!--data-position[top,right,bottom,left]-->
                <button class="owl-dot active" data-position="20%,19%,auto,auto">
                    <img alt="image" src="{{asset('_landing/agency/img/avatar-5.png')}}"></button>
                <button class="owl-dot active" data-position="28%,6%,auto,auto">
                    <img alt="image" src="{{asset('_landing/agency/img/avatar-6.png')}}"></button>
                <button class="owl-dot active" data-position="40%,15%,auto,auto">
                    <img alt="image" src="{{asset('_landing/agency/img/avatar-4.png')}}"></button>
                <button class="owl-dot active" data-position="auto,21%,22%,auto">
                    <img alt="image" src="{{asset('_landing/agency/img/avatar-2.png')}}"></button>
            </div>
        </div>
    </section>
    <!--Testimonial End-->


    <!--Contact Start-->
    <section class="contact-us" id="contact">

        <div class="container">

            <div class="row align-items-top">

                <div class="col-lg-5 order-lg-2 wow fadeInRight">
                    <div class="contact-detail">
                        <div class="contact-dots" data-dots=""></div>
                        <!--Heading-->
                        <div class="heading-area pb-5">
                            <h2 class="title mt-0 pb-1">Our Location</h2>
                            <p class="para">There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered .</p>
                        </div>

                        <!--Address-->
                        <ul class="address list-unstyled">
                            <li>
                            <span class="address-icon gradient-text2"><i aria-hidden="true"
                                                                         class="fas fa-map-marker-alt"></i></span>
                                <span class="address-text">123 Park Avenue, Nava Vadaj, Ahmedabad</span>
                            </li>
                            <li>
                            <span class="address-icon gradient-text2"><i aria-hidden="true"
                                                                         class="fas fa-phone-volume"></i></span>
                                <span class="address-text"><a class="mr-3" href="javascript:void(0)">+1 123 1234 1234</a><a
                                        href="javascript:void(0)">+1 123 1234 1234</a></span>
                            </li>
                            <li>
                            <span class="address-icon gradient-text2"><i aria-hidden="true"
                                                                         class="fas fa-paper-plane"></i></span>
                                <span class="address-text"><a class="mr-3 alt-color" href="javascript:void(0)">info@website.com</a><a
                                        class="mr-3 alt-color" href="javascript:void(0)">support@website.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 mt-4 pt-3 mt-lg-0 pt-lg-0 wow fadeInLeft">
                    <!--Heading-->
                    <div class="heading-area pb-2">
                        <h2 class="title mt-0">Get In Touch</h2>
                    </div>
                    <!--Contact Form-->
                    <form class="contact-form" method="post" action="{{route('homepage.get-in-touch')}}">
                        @csrf
                        <div class="row">
                            <!--Result-->
                            <div class="col-12" id="result"></div>
                            <!--Left Column-->
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input class="form-control" id="your_name" name="name" placeholder="Name" required=""
                                           type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="your_email" name="email" placeholder="Email" required=""
                                           type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="subject" name="subject" placeholder="Subject" required=""
                                           type="text">
                                </div>
                            </div>

                            <!--Right Column-->
                            <div class="col-md-7">
                                <div class="form-group">
                                <textarea class="form-control" id="message" name="message"
                                          placeholder="Message"></textarea>
                                </div>
                            </div>

                            <!--Button-->
                            <div class="col-md-12">
                                <button style="width: 100%" class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block mt-4" type="submit"
                                   id="submit_btn">Send Message
                                    <div class="btn-hvr-setting">
                                        <ul class="btn-hvr-setting-inner">
                                            <li class="btn-hvr-effect"></li>
                                            <li class="btn-hvr-effect"></li>
                                            <li class="btn-hvr-effect"></li>
                                            <li class="btn-hvr-effect"></li>
                                        </ul>
                                    </div>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>
    <!--Contact End-->
@endsection
