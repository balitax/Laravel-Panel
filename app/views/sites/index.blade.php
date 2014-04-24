<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{$title}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$description}}">
    <meta name="keyword" content="{{$keyword}}">
    <meta name="author" content="Agus Cahyono">

    {{HTML::script('assets/home/js/jquery.min.js')}}

    <!-- Styles And Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic,900|Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
    {{HTML::style('assets/home/css/bootstrap.min.css')}}
    {{HTML::style('assets/home/css/main.css')}}
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/favicon.html">

</head>
<body class="body-container">
<!-- Background Slider -->
<section class="background-slider">
    
        <div class="flexslider">
                
                <ul class="slides">
                    <li><img src="{{asset('assets/home/img/demo/bg1.jpg')}}"></li>
                    <li><img src="{{asset('assets/home/img/demo/bg2.jpg')}}"></li>
                    <li><img src="{{asset('assets/home/img/demo/bg3.jpg')}}"></li>
                    <li><img src="{{asset('assets/home/img/demo/bg4.jpg')}}"></li>
                </ul>

        </div>
        <!-- end flex slider -->

</section>
<!-- end background slider -->
<!-- Hidden Menu / Responsive Second Menu -->
<section class="top-menu hidden-section fullwidth-section">

    <a href="#hidden-menu" class="open-menu">Menu</a>
    
    <nav class="menu" id="hidden-menu">
        <ul>
            <li><a href="#">Home</a>
                    <ul>
                        <li><a href="#">Drop Down Menu</a></li>
                        <li><a href="#">Drop Down Menu</a></li>
                        <li><a href="#">Drop Down Menu</a></li>
                    </ul>
            </li>
            <li><a href="page.html">About</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="archives.html">Archives</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

</section>
<!-- end top menu -->

<!-- main content -->
<section class="main-content">
    
        <!-- container -->
        <div class="container">
                
                <div class="row">
                    
                            
                            <!-- sidebar -->
                            <div class="col-mx-12 col-md-4 sidebar" id="sidebar">


                                <div class="sidebar-content-wrapper">

                                
                                <!-- logo wrapper -->
                                <div class="logo-wrapper">
                                        
                                        <a href="index-2.html" class="logo">
                                            <img src="{{asset('assets/home/img/demo/logo.png')}}" />
                                        </a>

                                        <!-- site description -->
                                        <div class="site-description"><p>Not Just Another Wordpress Theme</p></div>

                                        <!-- site meta -->
                                        <div class="site-meta">
                                                
                                                <a href="#" data-title="Home" class="home"></a>
                                                <a href="#" data-title="Search" class="search"></a>
                                                <a href="#" data-title="Reader" class="reader toggleSidebar"></a>
                                                
                                                <!-- hidden search form -->
                                                <form action="#" class="search hidden-search-form">
                                                    
                                                    <input type="text" class="s" placeholder="Type and hit enter...">

                                                </form>
                                        </div>
                                        <!-- end site meta -->

                                </div>
                                <!-- end logo wrapper -->



                                <!-- main menu -->
                                <nav class="second-menu">
                                    
                                    <ul>
                                        <li><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="#">Drop Down Menu</a></li>
                                                    <li><a href="#">Drop Down Menu</a></li>
                                                    <li><a href="#">Drop Down Menu</a></li>
                                                </ul>
                                        </li>
                                        <li><a href="page.html">About</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="archives.html">Archives</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>

                                </nav>
                                <!-- end second menu -->



                                <!-- widgets -->
                                <div class="widgets-wrapper">
                                    
                                        
                                        <!-- search widget -->
                                        <div class="widget">
                                                
                                                 <div class="widget-content">

                                                     <form action="#" class="search">
                                                        
                                                        <input type="text" class="s" placeholder="Type and hit enter...">

                                                    </form>

                                                </div><!-- end widget content -->
                                                

                                        </div>
                                        <!-- end widget -->


                                        <!-- categories -->
                                        <div class="widget">

                                                <h3>Categories</h3>
                                            
                                                <!-- widget content -->
                                                <div class="widget-content">
                                                    
                                                   <div class="cats-widget">
                                                            
                                                             <ul>
                                                                <li><a href="#">Technology</a><span>37</span></li>
                                                                <li><a href="#">Photography</a><span>49</span></li>
                                                                <li><a href="#">Miscellaneous</a><span>16</span></li>
                                                                <li><a href="#">Off Topics</a><span>16</span></li>
                                                                <li><a href="#">Music And Videos</a><span>149</span></li>
                                                            </ul>

                                                   </div>
                                                   <!-- end -->

                                                </div>
                                                <!-- end widget content -->


                                        </div>
                                        <!-- end widget -->



                                        <!-- flickr widget -->
                                        <div class="widget">
                                            
                                                <h3>Flickr</h3>

                                                <div class="widget-content">
                                                            
                                                        <div class="flickr-wrapper">
                                                            

                                                                 <div class="flexslider"><!-- jflickrfeed wrapper -->
                                                                <ul class="slides"></ul></div>


                                                        </div>
                                                        <!-- end flickr wrapper -->

                                                </div>
                                                <!-- end widget content -->


                                        </div>
                                        <!-- end widget -->


                                        <!-- twitter widget -->
                                        <div class="widget">
                                            

                                            <h3>Twitter</h3>

                                            <div class="widget-content">
                                                
                                                        <div class="tweet">
                                                            <p>
                                                                <a href="#">@SuitsTheme</a> Our featured 
                                                                WordPress Theme 'Verona' is 
                                                                up-to-date with great new features. 
                                                                Check it out! <a href="#">http://t.co/PIMqhlU</a>
                                                            </p>

                                                        </div>
                                                        <!-- end tweet -->


                                                        <div class="tweet">
                                                            <p>
                                                                We are the owner of 'shiny silver 
                                                                paw' on ThemeForest now! Thanks 
                                                                everyone!
                                                            </p>

                                                        </div>
                                                        <!-- end tweet -->


                                                        <a href="#" class="follow-us"><span class="bg"></span>Follow Us!</a>


                                            </div>
                                            <!-- end twitter -->

                                        </div>
                                        <!-- end widget -->
                                        

                                        <!-- popular posts -->
                                        <div class="widget">
                                            

                                                <h3>Popular Posts</h3>

                                                <div class="widget-content">
                                                    

                                                        <div class="popular-post">
                                                            

                                                                <a href="single.html" class="title">Life Isn’t Just a Sequence of Waiting For Things To Be Done!</a>
                                                                <span class="date">October 12, 2013</span>


                                                        </div>
                                                        <!-- end post -->


                                                        <div class="popular-post">
                                                            

                                                                <a href="single.html" class="title">I Don’t Have a Bucket List, I Have a To Do List</a>
                                                                <span class="date">September 12, 2013</span>


                                                        </div>
                                                        <!-- end post -->


                                                        <div class="popular-post">
                                                            

                                                                <a href="single.html" class="title">Self-Hosted Audio Player With an Awesome Featured Image</a>
                                                                <span class="date">September 8, 2013</span>


                                                        </div>
                                                        <!-- end post -->


                                                </div>
                                                <!-- end widget content -->


                                        </div>
                                        <!-- end widget -->

                                        <!-- dribble -->
                                        <div class="widget">
                                            

                                                <h3>Dribbble</h3>

                                                <div class="widget-content">
                                                    
                                                        <div class="dribbble-wrapper">
                                                            <a href="#" class="shot"></a>
                                                            <a href="#" class="shot"></a>
                                                            <a href="#" class="shot"></a>
                                                            <a href="#" class="shot"></a>
                                                        </div>
                                                        <!-- end dribbble wrapper -->


                                                </div>
                                                <!-- end widget content -->


                                        </div>
                                        <!-- end widget -->


                                        <!-- recent comments -->
                                        <div class="widget">
                                                
                                                    
                                                    <h3>Recent Comments</h3>

                                                    <div class="widget-content">
                                                        
                                                            <div class="recent-comments-wrapper">
                                                                    

                                                                    <div class="recent-comment">
                                                                            
                                                                            <a href="#" class="avatar">
                                                                                <img src="{{asset('assets/home/img/demo/author-2.png')}}" alt="">

                                                                                </a>

                                                                            <a href="single.html#comments" class="content"><span class="author">Nicole Kidman</span><p>Mauris vitae velit sit amet 
                                                                            nequerla dignissim commodo.</p></a>

                                                                    </div>
                                                                    <!-- end recent comment -->


                                                                     <div class="recent-comment">
                                                                            
                                                                            <a href="#" class="avatar"><img src="{{asset('assets/home/img/demo/author-1.png')}}" alt=""></a>

                                                                            <a href="single.html#comments" class="content"><span class="author">Brad Pitt</span><p>Mauris vitae velit sit amet 
                                                                            nequerla dignissim commodo.</p></a>

                                                                    </div>
                                                                    <!-- end recent comment -->


                                                                     <div class="recent-comment">
                                                                            
                                                                            <a href="#" class="avatar"><img src="{{asset('assets/home/img/demo/author-3.png')}}" alt=""></a>

                                                                            <a href="single.html#comments" class="content"><span class="author">Angelina Jolie</span><p>Mauris vitae velit sit amet 
                                                                            nequerla dignissim commodo.</p></a>

                                                                    </div>
                                                                    <!-- end recent comment -->



                                                            </div>
                                                            <!-- end recent comments -wrapper -->


                                                    </div>
                                                    <!-- end widget content -->
                                            

                                        </div>
                                        <!-- end recent comments widget -->





                                        <!-- tags widget -->
                                        <div class="widget">
                                            
                                                    
                                                    <h3>Tagcloud</h3>

                                                    <div class="widget-content">
                                                        
                                                        <div class="tagcloud">
                                                                
                                                                    <a href="#">blog</a>
                                                                    <a href="#">suits theme</a>
                                                                    <a href="#">wordpress</a>
                                                                    <a href="#">technology</a>
                                                                    <a href="#">design</a>
                                                                    <a href="#">unique</a>
                                                                    <a href="#">dark</a>    
                                                        
                                                        </div>
                                                        <!-- end tagcloud -->


                                                    </div>
                                                    <!-- end widget content -->



                                        </div>
                                        <!-- end tags -->




                                        <!-- text widget -->
                                        <div class="widget">
                                            

                                                    <h3>Text Widget</h3>

                                                    <div class="widget-content">
                                                            
                                                                    <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. 
                                                                    <br><br>
                                                                    Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque suspendisse in orci denim odio ferment.</p>
    

                                                    </div>
                                                    <!-- end widget content -->
                                            
                                        </div>
                                        <!-- end widget -->


                                        <!-- social widget -->
                                        <div class="widget">
                                            
                                                    
                                                    <h3>Social</h3>

                                                    <div class="widget-content">
                                                        
                                                            
                                                            <div class="social-wrapper">
                                                                
                                                                    <a href="#" class="facebook"></a>
                                                                    <a href="#" class="twitter"></a>
                                                                    <a href="#" class="dribbble"></a>
                                                                    <a href="#" class="flickr"></a>
                                                                    <a href="#" class="youtube"></a>
                                                                    <a href="#" class="rss"></a>

                                                            </div>
                                                            <!-- end scoial wrapper -->
                                                            

                                                    </div>
                                                    <!-- end widget content -->



                                        </div>
                                        <!-- end social -->



                                </div>
                                <!-- end widgets wrapper -->



                                <!-- copyrights -->
                                <div class="copyrights">
                                    

                                        <p>@2013 Journal Wordpress Theme</p>

                                </div>
                                <!-- end copyrights -->




                            </div><!-- end sidebar content wrapper -->

                            </div>
                            <!-- end sidebar -->



                            <!-- page content wrapper -->
                            <div class="col-mx-12 col-md-8 page-wrapper" id="page-wrapper">
                                
                                        
                                        <!-- page -->
                                        <div class="page">
                                                    

                                            <!-- single post -->
                                            <div class="single-post">
                                                
                                                    
                                                    <!-- post image -->
                                                    <div class="post-image image">
                                                            
                                                        <a href="single.html"><img src="{{asset('assets/home/img/demo/post1.png')}}" alt="Post"></a>                                        
                                                    </div>
                                                    <!-- end post image -->



                                                    <!-- post content -->
                                                    <div class="post-content">
                                                                
                                                                <!-- title -->
                                                                <h2 class="post-title"><a href="single.html">Grand Designs for Small Workspaces: 
                                                                The freelancer’s dream office</a></h2>


                                                                <!-- post meta -->
                                                                <div class="post-meta">
                                                                    
                                                                        <div class="date"><i></i><span>October 12 , 2013</span></div>
                                                                        <div class="comments"><i></i><span>7 Comments</span></div>
                                                                        <div class="like"><i></i><span>25 Likes</span></div>


                                                                </div>
                                                                <!-- end post meta -->


                                                                <!-- post inner content -->
                                                                <div class="post-inner-content">
                                                                    

                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute dolor reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                                                                </div>
                                                                <!-- end post inner content -->


                                                                <!-- read more button -->
                                                                <a href="single.html" class="readmore">Read More</a>
        

                                                    </div>
                                                    <!-- end post content -->


                                            </div>
                                            <!-- end single post -->





                                            <!-- single post -->
                                            <div class="single-post">
                                                
                                                    
                                                   



                                                    <!-- post content -->
                                                    <div class="post-content">
                                                                
                                                                <!-- title -->
                                                                <h2 class="post-title"><a href="single.html">How to Optimize Your Website for Users</a></h2>


                                                                <!-- post meta -->
                                                                <div class="post-meta">
                                                                    
                                                                        <div class="date"><i></i><span>October 12 , 2013</span></div>
                                                                        <div class="comments"><i></i><span>7 Comments</span></div>
                                                                        <div class="like"><i></i><span>25 Likes</span></div>


                                                                </div>
                                                                <!-- end post meta -->


                                                                <!-- post inner content -->
                                                                <div class="post-inner-content">
                                                                    

                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute dolor reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                                                                    <p class="light-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>

                                                                </div>
                                                                <!-- end post inner content -->


                                                                <!-- read more button -->
                                                                <a href="single.html" class="readmore">Read More</a>
        

                                                    </div>
                                                    <!-- end post content -->


                                            </div>
                                            <!-- end single post -->



                                            <!-- single post -->
                                            <div class="single-post">
                                                
                                                    
                                                    <!-- post image -->
                                                    <div class="post-image gallery flexslider">
                                                            
                                                        <ul class="slides">
                                                            <li><img src="{{asset('assets/home/img/demo/post2.png')}}" alt="Slider Image 1"></li>
                                                            <li><img src="{{asset('assets/home/img/demo/post5.png')}}" alt="Slider Image 2"></li>
                                                            <li><img src="{{asset('assets/home/img/demo/post1.png')}}" alt="Slider Image 3"></li>
                                                            <li><img src="{{asset('assets/home/img/demo/post4.png')}}" alt="Slider Image 4"></li>
                                                        </ul>                                        
                                                    </div>
                                                    <!-- end post image -->



                                                    <!-- post content -->
                                                    <div class="post-content">
                                                                
                                                                <!-- title -->
                                                                <h2 class="post-title"><a href="single.html">Cool Gifts for Web Designers & Geeks</a></h2>


                                                                <!-- post meta -->
                                                                <div class="post-meta">
                                                                    
                                                                        <div class="date"><i></i><span>October 12 , 2013</span></div>
                                                                        <div class="comments"><i></i><span>7 Comments</span></div>
                                                                        <div class="like"><i></i><span>25 Likes</span></div>


                                                                </div>
                                                                <!-- end post meta -->


                                                                <!-- post inner content -->
                                                                <div class="post-inner-content">
                                                                    

                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute dolor reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                                                                </div>
                                                                <!-- end post inner content -->


                                                                <!-- read more button -->
                                                                <a href="single.html" class="readmore">Read More</a>
        

                                                    </div>
                                                    <!-- end post content -->


                                            </div>
                                            <!-- end single post -->




                                            <!-- single post -->
                                            <div class="single-post">
                                                
                                                    
                                                    <!-- post image -->
                                                    <div class="post-image quote">
                                                        
                                                        <div class="quote-wrapper">
                                                                
                                                                <a href="single.html" class="quotelink">
                                                                    <p>Design is not just what it looks like and feels like. Design is how it works.</p>

                                                                    <span class="author">Steve Jobs</span></a>


                                                        </div>
                                                        <!-- end quote wrapper -->    
                                                                                         
                                                    </div>
                                                    <!-- end post image -->





                                            </div>
                                            <!-- end single post -->




                                            <!-- single post -->
                                            <div class="single-post">
                                                
                                                    
                                                    <!-- post image -->
                                                    <div class="post-image audio">

                                                        <div class="bg_image"><img src="{{asset('assets/home/img/demo/post3.png')}}" alt="Audio Player Background"></div>
                                                            
                                                        <audio controls>
                                                          <source src="http://files.suitstheme.com/music/audio.ogg" type="audio/ogg">
                                                          <source src="http://files.suitstheme.com/music/audio.mp3" type="audio/mpeg">
                                                            <p>Your browser does not support the audio element.</p>
                                                        </audio>                                     
                                                    </div>
                                                    <!-- end post image -->



                                                    <!-- post content -->
                                                    <div class="post-content">
                                                                
                                                                <!-- title -->
                                                                <h2 class="post-title"><a href="single.html">Self-Hosted Audio Player With an Awesome Featured Image</a></h2>


                                                                <!-- post meta -->
                                                                <div class="post-meta">
                                                                    
                                                                        <div class="date"><i></i><span>October 12 , 2013</span></div>
                                                                        <div class="comments"><i></i><span>7 Comments</span></div>
                                                                        <div class="like"><i></i><span>25 Likes</span></div>


                                                                </div>
                                                                <!-- end post meta -->


                                                                <!-- post inner content -->
                                                                <div class="post-inner-content">
                                                                    

                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute dolor reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                                                                </div>
                                                                <!-- end post inner content -->


                                                                <!-- read more button -->
                                                                <a href="single.html" class="readmore">Read More</a>
        

                                                    </div>
                                                    <!-- end post content -->


                                            </div>
                                            <!-- end single post -->



                                            <!-- single post -->
                                            <div class="single-post">
                                                
                                                    
                                                    <!-- post image -->
                                                    <div class="post-image link">
                                                        
                                                        <div class="link-wrapper">
                                                                
                                                                <a href="single.html" class="link">
                                                                    <p>Awesome Wordpress Theme</p>

                                                                    <span class="description">Some of our WordPress Themes over on ThemeForest. Go check out 
                                                                    some more awesomeness.</span></a>


                                                        </div>
                                                        <!-- end link wrapper -->    
                                                                                         
                                                    </div>
                                                    <!-- end post image -->





                                            </div>
                                            <!-- end single post -->




                                            <!-- single post -->
                                            <div class="single-post">
                                                
                                                    
                                                    <!-- post image -->
                                                    <div class="post-image video">

                                                      
                                                            
                                                        <video height="100%" poster="{{asset('assets/home/img/demo/post4.png')}}" controls="controls" preload="none">
                                                            <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                                                            <source type="video/mp4" src="http://waleedomar.com/demo/j/src/video.mp4" />
                                                            <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
                                                            <source type="video/webm" src="http://waleedomar.com/demo/j/src/video.webm" />
                                                            
                                                            <!-- Flash fallback for non-HTML5 browsers without JavaScript -->
                                                            <object type="application/x-shockwave-flash" data="http://waleedomar.com/demo/j/src/flashmediaelement.swf">
                                                                <param name="movie" value="http://waleedomar.com/demo/j/src/flashmediaelement.swf" />
                                                                <param name="flashvars" value="controls=true&file=myvideo.mp4" />
                                                                <!-- Image as a last resort -->
                                                                <img src="{{asset('assets/home/img/demo/post4.png')}}" title="No video playback capabilities" />
                                                        </object>
                                                        </video>                          
                                                    </div>
                                                    <!-- end post image -->



                                                    <!-- post content -->
                                                    <div class="post-content">
                                                                
                                                                <!-- title -->
                                                                <h2 class="post-title"><a href="single.html">Self-Hosted Video Player With an Awesome Featured Image</a></h2>


                                                                <!-- post meta -->
                                                                <div class="post-meta">
                                                                    
                                                                        <div class="date"><i></i><span>October 12 , 2013</span></div>
                                                                        <div class="comments"><i></i><span>7 Comments</span></div>
                                                                        <div class="like"><i></i><span>25 Likes</span></div>


                                                                </div>
                                                                <!-- end post meta -->


                                                                <!-- post inner content -->
                                                                <div class="post-inner-content">
                                                                    

                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis aute dolor reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>

                                                                </div>
                                                                <!-- end post inner content -->


                                                                <!-- read more button -->
                                                                <a href="single.html" class="readmore">Read More</a>
        

                                                    </div>
                                                    <!-- end post content -->


                                            </div>
                                            <!-- end single post -->




                                        </div>
                                        <!-- end page -->


                                        
                                        <!-- load more button -->
                                        <div id="load-more">
                                        <a href="#" class="load-more">Page 2</a>
                                        <a href="#" class="load-more">Index Page</a>
                                        </div>
                                        <!-- end load more -->
                                            


                            </div>
                            <!-- end posts wrapper -->
            

                </div>
                <!-- end row -->

        </div>
        <!-- end container -->

</section>
<!-- end main content -->
<!-- Scripts -->
{{HTML::script('assets/home/js/jquery.flexslider-min.js')}}
{{HTML::script('assets/home/js/jquery-ui-1.10.3.custom.min.js')}}
{{HTML::script('assets/home/js/mediaelement.min.js')}}
{{HTML::script('assets/home/js/jflickrfeed.js')}}
{{HTML::script('assets/home/js/placeholder.js')}}
{{HTML::script('assets/home/js/jquery.browser.js')}}
{{HTML::script('assets/home/js/retina.min.js')}}
{{HTML::script('assets/home/js/custom.js')}}

</body>
</html>