<?php
function isMobile() {
    return preg_match("/Mobile|Android|BlackBerry|IEMobile|Silk/", $_SERVER['HTTP_USER_AGENT']);
}
include "./components/header.php";
include "./components/navbar.php";
?>

        <div id="content" class="site-content">
            <style>
                .mobile-hidden {
                    display: block;
                }
                @media (max-width: 768px) {
                    .mobile-hidden {
                        display: none;
                    }
                }
            </style>
            <?php
                $sectionClass = isMobile() ? 'mobile-hidden' : '';
            ?>
            
            <div id="rev_slider_one_wrapper" class="rev_slider_wrapper fullscreen-container d-none d-md-block <?php echo $sectionClass; ?>" data-alias="mask-showcase" data-source="gallery">
                <div id="rev_slider_3" class="rev_slider" style="display:none;" data-version="5.4.1">
                    <ul>
                    
                        <li data-index="rs-70" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            
                            <img src="" data-bgcolor='#a18d75' style='' alt=""  data-bgposition="50% 50%" data-bgfit="auto" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                            
                            <div class="tp-caption tp-resizeme" 
                                id="slide-70-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['90','76','57','35']" 
                                data-width="['830',511','100%','606']"
                                data-height="['590',506','auto','100%']"
                                data-visibility="['on','off','off','off']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":0,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['center','center','center','center']">
                                <img src="assets/images/STVN6156.JPEG" alt="">
                            </div>

                            <!-- LAYER 2  Thin text title-->
                            <div class="tp-caption tp-resizeme tp-img-res" 
                                id="slide-70-layer-2" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','center','center','center']" data-voffset="['0','0','0','0']" 
                                data-width="['100%','1800','2000','2000']"
                                data-height="['100%','1200','1400','1400']"
                                data-visibility="['off','on','on','on']"
                                data-whitespace="nowrap"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":0,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['center','center','center','center']"
            
                                ><img src="assets/images/The-Cloud-Wall.jpg" alt="">
                            </div>
                            
                            <div class="tp-caption tp-resizeme tp-img-ar" 
                                id="slide-70-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['202','149','113','69']" 
                                data-width="['362',100%','100%','100%']"
                                data-height="['366',100%','100%','100%']"
                                data-visibility="['on','off','off','off']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
                                data-basealign="slide" 
            
                                data-frames='[{"delay":850,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']"
            
                                ><img src="assets/images/The-Cloud-Wall.jpg" alt="">
                            </div>
                            
                            <div class="tp-caption tp-resizeme tp-img-ar" 
                                id="slide-70-layer-4" 
                                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['202','149','113','69']" 
                                data-width="['362',100%','100%','100%']"
                                data-height="['366',100%','100%','100%']"
                                data-visibility="['on','off','off','off']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
                                data-basealign="slide" 
            
                                data-frames='[{"delay":850,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']"
            
                                ><img src="assets/images/STVN6178.JPEG" alt="">
                            </div>


                            <div class="tp-caption tp-resizeme" 
                                id="slide-70-layer-6" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['110','-30','-90','-110']" 
                                data-width="['760',660','650','90%']"
                                data-height="['auto',auto','auto','auto']"
                                data-fontweight="['400','400','400','400']"
                                data-fontsize="['90','72','62','42']"
                                data-lineheight="['110','90','76','56']"
                                data-color="#ffffff"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":400,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                
                                data-textAlign="['center','center','center','center']"
            
                                style="font-family: 'Libre Caslon Text';">Where Vision Meets Space 
                            </div> 


                            <div class="tp-caption tp-resizeme" 
                                id="slide-70-layer-7" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['260','110','60','20']" 
                                data-width="['550',550','90%','90%']"
                                data-height="['auto',auto','auto','auto']"
                                data-fontweight="['400','400','400','400']"
                                data-fontsize="['18','18','18','18']"
                                data-lineheight="['32','32','32','32']"
                                data-color="#ffffff"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                
                                data-textAlign="['center','center','center','center']">Step into Luxe16 Studios — a refined creative hub in the heart of London, designed for storytellers, stylists, and brands.
                            </div>
                        
                            
                            <div class="tp-caption" 
                                id="slide-70-layer-8" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"  
                                data-y="['bottom','center','center','center']" data-voffset="['98','220','190','160']"
                                data-lineheight="['18','18','16','16']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"   
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":800,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                ><a href="booking" class="octf-btn octf-btn-white btn-medium">Book Online</a>
                            </div>  
                   
                        </li>  
                                     

                        <li data-index="rs-71" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                            <img src="" data-bgcolor='#a89e8d' style='' alt=""  data-bgposition="50% 50%" data-bgfit="auto" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                            <div class="tp-caption tp-resizeme" 
                                id="slide-71-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['90','76','57','35']" 
                                data-width="['830',511','100%','606']"
                                data-height="['590',506','auto','100%']"
                                data-visibility="['on','off','off','off']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":0,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['center','center','center','center']"
            
                                ><img src="assets/images/STVN6178.JPEG" alt="">
                            </div>

                            <!-- LAYER 2  Thin text title-->
                            <div class="tp-caption tp-resizeme tp-img-res" 
                                id="slide-71-layer-2" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','center','center','center']" data-voffset="['0','0','0','0']" 
                                data-width="['100%','1800','2000','2000']"
                                data-height="['100%','1200','1400','1400']"
                                data-visibility="['off','on','on','on']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":0,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['center','center','center','center']"
            
                                ><img src="assets/images/STVN6156.JPEG" alt="">
                            </div>
                            
                            <div class="tp-caption tp-resizeme tp-img-ar" 
                                id="slide-71-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['202','149','113','69']" 
                                data-width="['362',100%','100%','100%']"
                                data-height="['366',100%','100%','100%']"
                                data-visibility="['on','off','off','off']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
                                data-basealign="slide" 
            
                                data-frames='[{"delay":850,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']"
            
                                ><img src="assets/images/STVN6156.JPEG" alt="">
                            </div>
                            
                            <div class="tp-caption tp-resizeme tp-img-ar" 
                                id="slide-71-layer-4" 
                                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['202','149','113','69']" 
                                data-width="['362',100%','100%','100%']"
                                data-height="['366',100%','100%','100%']"
                                data-visibility="['on','off','off','off']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
                                data-basealign="slide" 
            
                                data-frames='[{"delay":850,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']"
            
                                ><img src="assets/images/The-Cloud-Wall.jpg" alt="">
                            </div>


                            <div class="tp-caption tp-resizeme" 
                                id="slide-70-layer-6" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['110','-30','-90','-110']" 
                                data-width="['760',660','650','90%']"
                                data-height="['auto',auto','auto','auto']"
                                data-fontweight="['400','400','400','400']"
                                data-fontsize="['90','72','62','42']"
                                data-lineheight="['110','90','76','56']"
                                data-color="#ffffff"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":400,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                
                                data-textAlign="['center','center','center','center']"
            
                                style="font-family: 'Libre Caslon Text';">Lifestyle, Elevated
                            </div> 


                            <div class="tp-caption tp-resizeme" 
                                id="slide-70-layer-7" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['260','110','60','20']" 
                                data-width="['550',550','90%','90%']"
                                data-height="['auto',auto','auto','auto']"
                                data-fontweight="['400','400','400','400']"
                                data-fontsize="['18','18','18','18']"
                                data-lineheight="['32','32','32','32']"
                                data-color="#ffffff"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                
                                data-textAlign="['center','center','center','center']">We don’t just capture aesthetics — we create moments. Luxe16 Studios blends elegance with modern design.
                            </div>
                            
                            <div class="tp-caption" 
                                id="slide-71-layer-8" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"  
                                data-y="['bottom','center','center','center']" data-voffset="['98','210','180','180']"
                                data-lineheight="['18','18','16','16']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"   
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":800,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]">
                                <a href="booking" class="octf-btn octf-btn-white btn-medium">Book Online</a>
                            </div>  
                        </li>  

                        <li data-index="rs-72" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="" data-param1="1" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                            <img src="" data-bgcolor='#a89b7e' style='' alt=""  data-bgposition="50% 50%" data-bgfit="auto" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                            <div class="tp-caption tp-resizeme" 
                                id="slide-72-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['90','76','57','35']" 
                                data-width="['830',511','100%','606']"
                                data-height="['590',506','auto','100%']"
                                data-visibility="['on','off','off','off']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":0,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['center','center','center','center']"
            
                                ><img src="assets/images/The-Cloud-Wall.jpg" alt="">
                            </div>

                            <div class="tp-caption tp-resizeme tp-img-res" 
                                id="slide-72-layer-2" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','center','center','center']" data-voffset="['0','0','0','0']" 
                                data-width="['100%','1800','2000','2000']"
                                data-height="['100%','1200','1400','1400']"
                                data-visibility="['off','on','on','on']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":0,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['center','center','center','centercenter']"
            
                                ><img src="assets/images/STVN6178.JPEG" alt="">
                            </div>
                            
                            <!-- LAYER 3  Thin text title-->
                            <div class="tp-caption tp-resizeme tp-img-ar" 
                                id="slide-72-layer-3" 
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['202','149','113','69']" 
                                data-width="['362',100%','100%','100%']"
                                data-height="['366',100%','100%','100%']"
                                data-visibility="['on','off','off','off']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
                                data-basealign="slide" 
            
                                data-frames='[{"delay":850,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']"
            
                                ><img src="assets/images/STVN6178.JPEG" alt="">
                            </div>
                            
                            <div class="tp-caption tp-resizeme tp-img-ar" 
                                id="slide-72-layer-4" 
                                data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['202','149','113','69']" 
                                data-width="['362',100%','100%','100%']"
                                data-height="['366',100%','100%','100%']"
                                data-visibility="['on','off','off','off']"
                                data-whitespace="normal"
                     
                                data-type="image" 
                                data-responsive_offset="on" 
                                data-basealign="slide" 
            
                                data-frames='[{"delay":850,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'

                                data-textAlign="['left','left','left','left']"
            
                                ><img src="assets/images/STVN6156.JPEG" alt="">
                            </div>


                            <div class="tp-caption tp-resizeme" 
                                id="slide-70-layer-6" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['110','-30','-90','-110']" 
                                data-width="['760',660','650','90%']"
                                data-height="['auto',auto','auto','auto']"
                                data-fontweight="['400','400','400','400']"
                                data-fontsize="['90','72','62','42']"
                                data-lineheight="['110','90','76','56']"
                                data-color="#ffffff"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":400,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                
                                data-textAlign="['center','center','center','center']"
            
                                style="font-family: 'Libre Caslon Text';">Your Story, Our Studio
                            </div> 


                            <div class="tp-caption tp-resizeme" 
                                id="slide-70-layer-7" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['260','110','60','20']" 
                                data-width="['550',550','90%','90%']"
                                data-height="['auto',auto','auto','auto']"
                                data-fontweight="['400','400','400','400']"
                                data-fontsize="['18','18','18','18']"
                                data-lineheight="['32','32','32','32']"
                                data-color="#ffffff"
                                data-whitespace="normal"
                     
                                data-type="text" 
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                
                                data-textAlign="['center','center','center','center']">From fashion editorials to branding shoots, Luxe16 Studios empowers creators to express freely. Every detail is intentional.
                            </div>
                            
                            <div class="tp-caption" 
                                id="slide-72-layer-8" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"  
                                data-y="['bottom','center','center','center']" data-voffset="['98','210','180','150']"
                                data-lineheight="['18','18','16','16']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"   
                                data-responsive_offset="on" 
            
                                data-frames='[{"delay":800,"speed":1000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.out"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
            
                                ><a href="booking" class="octf-btn octf-btn-white btn-medium">Book Online</a>
                            </div>  
                        </li>                    
              
                    </ul>
                    <div class="tp-bannertimer"></div>

                </div>
            </div>

            <div class="space-20 d-block d-md-none"></div>
            <section class="project d-block d-md-none">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 mb-lg-0">
                            <div class="ot-heading">
                                <h2 class="ot-heading__title">Your Story, Our Studio</h2>
                                <p>From fashion editorials to branding shoots, Luxe16 Studios empowers creators to express freely. Every detail is intentional.</p>
                            </div>
                        </div>
                    </div>
                    <div class="arrow-home9">
                        <div class="ot-slider ot-project-slider style-4 --outside" data-column="2.5" data-tablet="2" data-dots="false" data-nav="true" data-auto="true" data-loop="true" data-gap="30" data-gapmb="30">
                            <div class="owl-carousel owl-theme">
                                <article class="project-item normal">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <img src="assets/images/STVN6156.JPEG" alt="">
                                            <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                        </div>
                                    </div>
                                </article>
                                <article class="project-item normal">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <img src="assets/images/STVN6163.jpg" alt="">
                                            <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                        </div>
                                    </div>
                                </article>
                                <article class="project-item normal">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <img src="assets/images/The-Cloud-Wall.jpg" alt="">
                                            <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                        </div>
                                    </div>
                                </article>
                                <article class="project-item normal">
                                    <div class="projects-box">
                                        <div class="projects-thumbnail">
                                            <img src="assets/images/STVN6172.jpg" alt="">
                                            <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="space-110"></div>
                    <div class="space-100 d-none d-md-block"></div>
                    <div class="space-5 d-none d-md-block"></div>
                </div>
            </section>

            <section class="ronmi-bg-third">
                <div class="container">
                    <div class="space-80"></div>
                    <div class="space-70 d-none d-md-block"></div>
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6 order-last order-lg-first mt-5 mt-lg-0">
                            <div class="ot-heading">
                                <span class="ot-heading__sub">About Us</span>
                                <h2 class="ot-heading__title">The space is yours.</h2>
                            </div>
                            <div class="space-20"></div>
                            <p class="parap-color">Our studio is a curated space where individuality is celebrated. From fashion-forward shoots and bespoke branding sessions to content creation and personal styling, we offer a dynamic platform for creatives, entrepreneurs, and everyday visionaries to bring their stories to life.</p>
                            
                            <div class="ot-button">
                                <a href="booking" class="octf-btn octf-btn-primary octf-btn-large">Book Now</a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-xl-1">
                            <div class="video-popup s-design">
                                <div class="video-image">
                                    <img src="assets/images/midnight-lounge.jpg" title="video design" alt="video design">
                                </div>
                                <div class="btn-inner flex-middle">
                                    <a class="btn-play" href="./assets/video/video.mp4">
                                        <i class="ot-flaticon-play"></i>
                                        <span class="circle-1"></span>
                                        <span class="circle-2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-80"></div>
                    <div class="space-70 d-none d-md-block"></div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="space-120"></div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 text-center">
                            <div class="ot-heading">
                                <span class="ot-heading__sub">LUXE16 STUDIOS</span>
                                <h2 class="ot-heading__title">Our Space</h2>
                            </div>
                            <div class="space-30"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-filter-wrapper">
                                <div class="projects-grid pf_3_cols style-3 img-popup img-scale">
                                    <div class="grid-sizer"></div>
                                    <div class="project-item f3 normal">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail" data-src="assets/images/STVN6156.JPEG">
                                                <a href="po%CC%89tfolio-detailts-1.html">
                                                    <img src="assets/images/STVN6156.JPEG" class="" alt="">
                                                </a>
                                                <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-item f3 normal">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail" data-src="assets/images/STVN6110.JPEG">
                                                <a href="po%CC%89tfolio-detailts-1.html">
                                                    <img src="assets/images/STVN6110.JPEG" class="" alt="">
                                                </a>
                                                <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-item f1 f4 normal">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail" data-src="assets/images/STVN6128.JPEG">
                                                <a href="po%CC%89tfolio-detailts-2.html">
                                                    <img src="assets/images/STVN6128.JPEG" class="" alt="">
                                                </a>
                                                <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-item f1 f4 normal">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail" data-src="assets/images/STVN6163.JPEG">
                                                <a href="po%CC%89tfolio-detailts-2.html">
                                                    <img src="assets/images/STVN6163.JPEG" class="" alt="">
                                                </a>
                                                <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-item f1 f3 normal">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail" data-src="assets/images/STVN6172.JPEG">
                                                <a href="po%CC%89tfolio-detailts-3.html">
                                                    <img src="assets/images/STVN6172.JPEG" class="" alt="">
                                                </a>
                                                <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-item f2 normal">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail" data-src="assets/images/STVN6146.JPEG">
                                                <a href="po%CC%89tfolio-detailts-1.html">
                                                    <img src="assets/images/STVN6146.JPEG" class="" alt="">
                                                </a>
                                                <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="project-item f4 normal">
                                        <div class="projects-box">
                                            <div class="projects-thumbnail" data-src="assets/images/STVN6074.JPEG">
                                                <a href="po%CC%89tfolio-detailts-1.html">
                                                    <img src="assets/images/STVN6074.JPEG" class="" alt="">
                                                </a>
                                                <span class="overlay"><i class="ot-flaticon-loupe"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-120"></div>
                </div>
            </section>

            <section class="section-design-about align-items-center d-lg-flex ronmi-bg-third" id="features">
                <div class="col-lg-6 position-lg-absolute px-0 ">
                    <div class="mr-lg-115">
                        <div class="video-popup s-design">
                            <div class="video-image">
                                <img src="assets/images/The-midnight-lounge.jpg" title="video design" alt="video design">
                            </div>
                            <!-- <div class="btn-inner flex-middle">
                                <a class="btn-play" href="https://vimeo.com/536187789">
                                    <i class="ot-flaticon-play"></i>
                                    <span class="circle-1"></span>
                                    <span class="circle-2"></span>
                                </a>
                            </div> -->
                        </div>
                        <!-- <div class="space-30"></div>
                        <div class="d-none d-lg-flex justify-content-center justify-content-lg-end">
                            <div class="s-design-about text-center">
                                <a href="./"><img src="assets/images/logo.svg" alt=""></a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="container">
                    <div class="space-80"></div>
                    <div class="space-70 d-none d-md-block"></div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 mt-5 mt-lg-0">
                            <div class="ot-heading version-design pr-lg-5 mr-lg-5">
                                <span class="ot-heading__sub dflex"><span></span>Our Features</span>
                                <h2 class="ot-heading__title">The Luxe Difference in Every Corner</h2>
                            </div>
                            <div class="space-20"></div>
                            <div class="space-4"></div>
                            <p>At Luxe16 Studios, we offer a thoughtfully curated space with panoramic city views, warm neutral tones, and modern accents - perfect for lifestyle shoots, content creation, intimate events, and relaxing overnight stays.</p>
                            <div class="space-5"></div>
                            <div class="row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="ot-icon-list-wrapper">
                                        <ul class="unstyle ot-icon-list-items s-design">
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Panaromic view</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i> </span>
                                                <a href="#"><span class="ot-icon-list-text title-link">o2 view</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Water view</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Skyscraper</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Nice beige sofa</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Black wall panels</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Flowers</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Ad pro 300 photography light</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Gvm 300 video light</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="ot-icon-list-wrapper">
                                        <ul class="unstyle ot-icon-list-items s-design">
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">A lot of warms lights</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i> </span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Focus light</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Photographer light</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Beige rug</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Room for the night at extra cost</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Corridor</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">Kitchen</span></a>
                                            </li>
                                            <li class="ot-icon-list-item ">
                                                <span class="ot-icon-list-icon"><i aria-hidden="true" class="fas fa-circle"></i></span>
                                                <a href="#"><span class="ot-icon-list-text title-link">2 different canvas back drops</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="space-30"></div>
                            <div class="space-5"></div>
                            <div class="ot-title-link s-design">
                                <h5><a href="features" class="title-link">See more features</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="space-80"></div>
                    <div class="space-70 d-none d-md-block"></div>
                </div>
            </section>

            <?php include "./components/testimonial.php"; ?>

        </div>


<?php include "./components/footer.php"; ?>