@extends('layouts.master')
@section('title', 'blog')
@section('content')
    <!--slider sec strat-->
    <section id="slider-sec" class="slider-sec parallax" style="background: url('./img/blogs/single-blog-slider.jpg');">
        <div class="overlay text-center d-flex justify-content-center align-items-center">
            <div class="slide-contain">
                <h4>BLOG DETAIL</h4>
                <div class="crumbs">
                    <nav aria-label="breadcrumb" class="breadcrumb-items">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index-film.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="single-blog.html">Blog Detail</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--slider sec end-->


    <!--main page content-->
    <section class="main" id="main">
        <!--content-->
        <div class="blog-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="main_content text-center text-lg-left">
                            <div class="detail_blog">
                                <div class="blog_detail">
                                    <p class="blog-sub-heading text-center"><span></span>Most flexible one page</p>
                                    <h2>Post With A Preview Images</h2>
                                    <span class="d-blog-text"><a href="#">JUNE 24, 2019</a> | BY <a href="#">MARK ANDERSON</a> | <a href="#">PHOTOGRAPHY</a>, <a href="#">MUSIC</a></span>
                                    <p class="d-text">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Aliquam erat volutpat.
                                        <br/><br/>Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. .Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit.</p>
                                    <!--                                                <p class="blog-sub-heading text-center"><span></span>Most flexible one page</p>-->
                                    <!--                                                <h2>Post With A Preview Images</h2>-->
                                    <p class="d-text">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Ut bibendum lacus vestibulum maximus suscipit. Nam ut rutrum ex, venenatis sollicitudin urna.
                                        <br/><br/>Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Nam ut rutrum ex, venenatis sollicitudin urna.
                                        Ut bibendum lacus vestibulum maximus suscipit...</p>
                                    <ul class="text-left">
                                        <li>Nam ut rutrum ex venenatis sollicitudin.</li>
                                        <li>Aliquam erat volutpat.</li>
                                        <li>Nam ut rutrum ex erat volutpat.</li>
                                    </ul>
                                    <video id="player1" style="max-width: 100%" preload="none" controls poster="img/blogs/1.jpg" playsinline>
                                        <source src="img/blogs/video.mp4" type="video/mp4">
                                    </video>
                                    <p class="d-text">
                                        Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis neque blandit euismod.
                                        <br/><br/>
                                        Maecenas sit amet purus eget ipsum elementum venenatis. Aenean maximus urna magna, quis rutrum mi semper non. Cras rhoncus elit non arcu hendrerit rhoncus. Pellentesque dignissim volutpat orci at interdum. In id ipsum volutpat.
                                    </p>
                                    <div class="qoute">
                                        <p class="blog-sub-heading text-center"><span></span>Most flexible one page</p>
                                        <p class="q-text">You’ve gotta dance like there’s nobody watching, love like you’ll never be hurt, sing like there’s nobody listening, and live like it’s heaven on earth.</p>
                                        <span class="q-name">Archard . William</span>
                                    </div>
                                    <p class="d-text">Maecenas sit amet purus eget ipsum elementum venenatis. Aenean maximus urna magna, quis rutrum mi semper non. Cras rhoncus elit non arcu hendrerit rhoncus.</p>
                                    <div class="row cube-sec no-gutters">
                                        <div class="col-12 col-md-6 pr-0 pr-md-2 pb-3">
                                            <img src="img/blogs/b2.jpg" alt="image">
                                        </div>
                                        <div class="col-12 col-md-6 pl-0 pl-md-2 pb-3">
                                            <img src="img/blogs/b3.jpg" alt="image">
                                        </div>
                                        <div class="col-12">
                                            <img src="img/blogs/b4.jpg" alt="image">
                                        </div>
                                    </div>

                                    <p class="d-text">Nam ut rutrum ex, venenatis sollicitudin urna. Aliquam erat volutpat. Integer eu ipsum sem. Ut bibendum lacus vestibulum maximus suscipit. Quisque vitae nibh iaculis neque blandit euismod.
                                        <br/><br/>
                                        Maecenas sit amet purus eget ipsum elementum venenatis. Aenean maximus urna magna, quis rutrum mi semper non. Cras rhoncus elit non arcu hendrerit rhoncus. Pellentesque dignissim volutpat orci at interdum. In id ipsum volutpat.</p>

                                    <div class="row social">
                                        <div class="col-12 col-md-8 tags pb-3 pb-md-0">
                                            <span><a href=""> Image</a></span>
                                            <span><a href="">Project</a></span>
                                            <span><a href="">Studio</a></span>
                                        </div>
                                        <div class="col-12 col-md-4 social-tags text-center text-md-right">
                                            <span class="fb"><a href=""> <i class="fab fa-facebook-f"></i></a></span>
                                            <span class="twit"><a href=""><i class="fab fa-twitter"></i></a></span>
                                            <span class="in"><a href=""><i class="fab fa-linkedin-in"></i></a></span>
                                            <span class="pin"><a href=""><i class="fab fa-pinterest-p"></i></a></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="writer-detail">
                                <div class="post_navigation">
                                    <div class="row">
                                        <div class="col-6 left-row text-left">
                                            <div class="row">
                                                <div class="col-12 col-md-2 text-right text-md-left">
                                                    <a href=""><i class="fa fa-angle-left"></i></a>
                                                </div>
                                                <div class="col-10 left-arr-d d-none d-md-block">
                                                    <span class="links">Previous Post</span>
                                                    <h5>Standard Post with a Video</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 right-row text-right">
                                            <div class="row">
                                                <div class="col-10 right-arr-d d-none d-md-block">
                                                    <span class="links">Next Post</span>
                                                    <h5>Standard Post with a Video</h5>
                                                </div>
                                                <div class="col-2">
                                                    <a href=""><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="posted_by">
                                    <div class="media row">
                                        <div class="col-12 col-lg-3">
                                            <img src="img/blogs/writer.jpg" class="align-self-center mr-3 rounded-circle" alt="img">
                                        </div>
                                        <div class="media-body mt-auto mb-auto col-12 col-lg-9">
                                            <span>Written By</span>
                                            <h5 class="mt-1 mb-1">Andria Richard</h5>
                                            <p class="d-text">Maecenas sit amet purus eget ipsum elementum venenatis. Quis rutrum mi semper non.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-form">
                                    <div class="msg-heading"><span>Write a Message</span></div>

                                    <form>
                                        <div class="row my-form">
                                            <div class="col-12 col-md-4">
                                                <input type="text" required="required" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <input type="email" required="required" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <input type="text" required="required" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control" placeholder="Message" rows="7"></textarea>
                                            </div>
                                            <div class="col-12 text-center">
                                                <a class="btn yellow-and-white-slider-btn" href="single-blog.html">Post Comment</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="side_tags">
                                    <div class="search-bar">
                                        <form method="get" id="searchform" action="#" role="search">
                                            <label class="sr-only" for="s">Search</label>
                                            <div class="input-group">
                                                <input class="field form-control" id="s" name="s" type="text" placeholder="Search …" value="">
                                                <span class="input-group-append">
                                    <button class="submit btn-search" id="searchsubmit" name="submit" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="cat_sec">
                                    <h4 class="text-center text-lg-left">Categories</h4>
                                    <ul>
                                        <li><a href="">ART </a> <span class="dots"></span> <p>2</p></li>
                                        <li><a href="">FASHION </a> <span class="dots"></span> <p>5</p></li>
                                        <li><a href="">PHOTOGRAPHY </a> <span class="dots"></span> <p>12</p></li>
                                        <li><a href="">LIFESTYLE </a> <span class="dots"></span> <p>22</p></li>
                                        <li><a href="">MOTIVATION </a> <span class="dots"></span> <p>1</p></li>
                                    </ul>
                                </div>
                                <div class="popular_posts">
                                    <h4 class="text-center text-lg-left">Popular Posts</h4>
                                    <div class="media-box row">
                                        <div class="col-5 box-img">
                                            <img src="img/blogs/p1.jpg" alt="image">
                                        </div>
                                        <div class="col-7 box-detail">
                                            <h2>Post With A Preview Images</h2>
                                            <p>July 18 , 2019 | by <span>Mark Aderson</span></p>
                                        </div>
                                    </div>
                                    <div class="media-box row">
                                        <div class="col-5 box-img">
                                            <img src="img/blogs/p2.jpg" alt="image">
                                        </div>
                                        <div class="col-7 box-detail">
                                            <h2>Post With A Image Gallery</h2>
                                            <p>July 18 , 2019 | by <span>Mark Aderson</span></p>
                                        </div>
                                    </div>
                                    <div class="media-box row">
                                        <div class="col-5 box-img">
                                            <img src="img/blogs/p3.jpg" alt="image">
                                        </div>
                                        <div class="col-7 box-detail">
                                            <h2>Post With A Slide Images</h2>
                                            <p>July 18 , 2019 | by <span>Mark Aderson</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tags_sec">
                                    <h4 class="text-center text-lg-left">Tags</h4>
                                    <div class="tags text-center text-lg-left">
                                        <span class="rounded-pill">AUDIO</span>
                                        <span class="rounded-pill">VEDIO</span>
                                        <span class="rounded-pill">BRANDINGS</span>
                                        <span class="rounded-pill">GRAPHICS</span>
                                        <span class="rounded-pill">FASHION</span>
                                        <span class="rounded-pill">DIGITAL</span>
                                        <span class="rounded-pill">SCANNING</span>
                                    </div>
                                </div>
                                <div class="cat_sec">
                                    <h4 class="text-center text-lg-left">Archieves</h4>
                                    <ul>
                                        <li><a href="">2 Jan , 2019 </a> <span class="dots"></span> <p>2</p></li>
                                        <li><a href="">2 Feb , 2019 </a> <span class="dots"></span> <p>5</p></li>
                                        <li><a href="">2 Mar , 2019 </a> <span class="dots"></span> <p>12</p></li>
                                        <li><a href="">2 June , 2019 </a> <span class="dots"></span> <p>22</p></li>
                                        <li><a href="">2 Aug , 2019 </a> <span class="dots"></span> <p>1</p></li>
                                    </ul>
                                </div>
                                <div class="advertisment">
                                    <img src="img/blogs/advertisment.jpg" alt="image"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--main page content end-->

@endsection
