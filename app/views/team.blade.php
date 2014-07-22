@extends('layouts.master')


@section('content')




    <body>



            <div role="main" class="main">

                <section class="page-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">The Team</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h2>The Team</h2>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container">

                    <div class="row center">
                        <div class="col-md-12">
                            <h2 class="short word-rotator-title">Who we are <strong class="inverted" data-appear-animation="bounceIn">
                                    <span class="word-rotate">
                                        <span class="word-rotate-items">
                                            <span>success.</span>
                                            <span>Web Developers.</span>
                                            <span>Project Management.</span>
                                        </span>
                                    </span>
                                </strong>
                            </h2>
                            <p class="featured lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh.
                            </p>
                        </div>
                    </div>

                    <hr class="tall" />
                </div>

                <!--  -->



                <section class="video valign-video" style="background-image: url(img/slides/dark-cover.jpg);">
                    <div class="container">
                        <div class="row center">
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="owl-carousel" data-plugin-options='{"items": 1}'>
                                        <div>
                                            <blockquote>
                                                <p><i class="icon icon-quote-left"></i> Hello, We want to thank you for coming out to demo day. creating this project has been challanging and very rewarding. Our team would like to say thanks to Codeup for giving us valuable skills that will further our careers in Web development.</p>
                                                <span>- Greg McCabe, Caitlin Daily and Michael Jaime.</span>
                                            </blockquote>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p><i class="icon icon-quote-left"></i> Just want to say Okler RULES. Provide great tech service for each template and allows me to become more knowledgeable as a designer.</p>
                                                <span>- Edward Chelton</span>
                                            </blockquote>
                                        </div>
                                        <div>
                                            <blockquote>
                                                <p><i class="icon icon-quote-left"></i> Just came here to say a big thank you to the author of this template. It works amazingly well, the documentation is top-notch, and the theme looks beautiful.</p>
                                                <span>- Bruce Ericson</span>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="video-overlay"></div>
                    <video autoplay loop poster="img/slides/dark-cover.jpg" data-plugin-options='{"videoWidth": "100%", "videoHeight": "100%", "enableAutosize": "true"}'>
                        <source src="video/dark.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                        <source src="video/dark.ogv" type='video/ogg; codecs="theora, vorbis"'>
                    </video>
                </section>


                    <hr class="tall" />
                </div>

                <div class="container">
                    <div class="row" id="team">
                        <div class="col-md-12">

                            <div class="row">

                                <ul class="team-list">
                                    <li class="col-md-4">
                                        <div class="team-item thumbnail">
                                            <a href="about-me.html" class="thumb-info team">
                                                <img alt="" height="270" src="img/team/team-1.jpg">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Greg McCabe</span>
                                                    <span class="thumb-info-type">Web Developer</span>
                                                </span>
                                            </a>
                                            <span class="thumb-info-caption">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
                                                <span class="thumb-info-social-icons">
                                                    <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="icon icon-facebook"></i><span>Facebook</span></a>
                                                    <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="icon icon-twitter"></i><span>Twitter</span></a>
                                                    <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="icon icon-linkedin"></i><span>Linkedin</span></a>
                                                </span>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <div class="team-item thumbnail">
                                            <a href="about-me.html" class="thumb-info team">
                                                <img alt="" height="270" src="img/team/team-2.jpg">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Caitlin Daily</span>
                                                    <span class="thumb-info-type">Web Developer</span>
                                                </span>
                                            </a>
                                            <span class="thumb-info-caption">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
                                                <span class="thumb-info-social-icons">
                                                    <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="icon icon-facebook"></i><span>Facebook</span></a>
                                                    <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="icon icon-twitter"></i><span>Twitter</span></a>
                                                    <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="icon icon-linkedin"></i><span>Linkedin</span></a>
                                                </span>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <div class="team-item thumbnail">
                                            <a href="about-me.html" class="thumb-info team">
                                                <img alt="" height="270" src="img/team/team-3.jpg">
                                                <span class="thumb-info-title">
                                                    <span class="thumb-info-inner">Michael Jaime</span>
                                                    <span class="thumb-info-type">Web Developer</span>
                                                </span>
                                            </a>
                                            <span class="thumb-info-caption">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</p>
                                                <span class="thumb-info-social-icons">
                                                    <a rel="tooltip" data-placement="bottom" target="_blank" href="http://www.facebook.com" data-original-title="Facebook"><i class="icon icon-facebook"></i><span>Facebook</span></a>
                                                    <a rel="tooltip" data-placement="bottom" href="http://www.twitter.com" data-original-title="Twitter"><i class="icon icon-twitter"></i><span>Twitter</span></a>
                                                    <a rel="tooltip" data-placement="bottom" href="http://www.linkedin.com" data-original-title="Linkedin"><i class="icon icon-linkedin"></i><span>Linkedin</span></a>
                                                </span>
                                            </span>
                                        </div>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>



            </div>


        </div>

@stop