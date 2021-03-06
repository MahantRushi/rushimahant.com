<!DOCTYPE html>
<html lang="en" class="no-js{{ ($view_name=='index')?' one-page-layout':'' }}">
<head>
    @include('partials/head')
</head>
<body>
<!-- PAGE -->
<div id="page" class="hfeed site">
    <!-- .site-main -->
    <main id="main" class="site-main cd-main">
        <!-- HEADER -->
        <header id="masthead" class="header" role="banner">
            <!-- header-wrap -->
            <div class="header-wrap layout-full">
                <img src="images/home/home1.jpg" alt="profile-image">
                <!-- image-logo -->
                <!--<a class="header-title-link" href="index.html"><img src="../images/site/avatar.jpg" alt="avatar"></a>-->
                <h1 class="site-title">Rushi Mahant</h1>
                <p class="site-description">I am <strong id="typist-element" data-typist="a coder., a designer., a blogger., a reader., a traveller., a dancer.">a writer.</strong></p>
                <!-- header-social -->
                <div class="header-bottom">
                    <!-- SOCIAL -->
                    <p>
                        <a class="social-link facebook" href="https://www.facebook.com/dreamzrush"></a>
                        <a class="social-link twitter" href="https://twitter.com/mahantrushi"></a>
                        <a class="social-link github" href="https://github.com/MahantRushi"></a>
                        <a class="social-link instagram" href="https://www.instagram.com/dreamzrush/"></a>
                    </p>
                    <!-- SOCIAL -->
                </div>
                <!-- header-social -->
                <!-- NAV MENU -->
                <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                    <div class="nav-menu menu-with-icons">
                        <ul>
                            @if($view_name=='index')
                                <li></li>
                            @else
                                <li><a href="index.html"><i class="pe-7s-home"></i>Home</a></li>
                                <li><a class="search-toggle"><i class="pe-7s-search"></i>Search</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
                <!-- NAV MENU -->
                <!-- SEARCH -->
                <div class="header-search">
                    <form role="search" method="get" id="search-form" action="#">
                        <input type="text" value="" name="s" id="search" placeholder="type and hit enter">
                        <input type="submit" id="search-submit" title="Search" value="→">
                    </form>
                </div>
                <!-- SEARCH -->
            </div>
            <!-- header-wrap -->
            <a class="mouse-scroll" href="#">
                          <span class="mouse">
                            <span class="mouse-movement">
                            </span>
                          </span>
            </a>
        </header>
        <!-- HEADER -->
        <!-- site-middle -->
        <div class="site-middle">
            <div class="{{ ($view_name=='index')?'layout-plain':'layout-medium' }}">
                <div id="primary" class="content-area">
                    <!-- site-content -->
                    <div id="content" class="site-content" role="main"> <!-- .page-single -->
                        @yield('content')
                    </div>
                    <!-- site-content -->
                </div>
                <!-- primary -->
            </div>
            <!-- layout -->
        </div>
        <!-- site-middle -->
        <!-- .site-footer -->
        <footer id="colophon" class="site-footer" role="contentinfo">
            <!-- .site-info -->
            <div class="site-info">
                <div class="textwidget">
                    <a href="#">Copyright &copy; 2016 by Rushi Mahant</a>
                </div>
            </div>
            <!-- .site-info -->
        </footer>
        <!-- .site-footer -->
    </main>
    <!-- .site-main -->
    <!-- .cd-folding-panel -->
    <div class="cd-folding-panel">
        <div class="fold-left"></div>
        <div class="fold-right"></div>
        <div class="cd-fold-content">
            <!-- content will be loaded using javascript -->
        </div>
        <a class="cd-close" href="#"></a>
    </div>
    <!-- .cd-folding-panel -->
    <!-- ALERT : used for contact form mail delivery alert -->
    <div class="site-alert animated"></div>
</div>
<!-- PAGE -->
@if($view_name=='index')
    <!-- PORTFOLIO SINGLE AJAX CONTENT CONTAINER -->
    <div class="p-overlay"></div>
    <div class="p-overlay"></div>
@endif
@include('partials/scripts')
</body>
</html>