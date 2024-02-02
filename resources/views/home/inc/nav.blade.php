<nav id="menu" class="navbar">
    <div class="container">
        <div class="navbar-header"><!--<span id="heading" class="visible-xs">Categories</span>-->
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse"
                data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
            <a class="navbar-brand" href="/">
                <img src="images/logo.png" width="250px" />
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home.index') }}">Home</a></li>
                <li><a href="{{ route('home.menu') }}">Menu</a></li>
                {{-- <li class="dropdown"><a href="#" class="dropdown-toggle"
                        data-toggle="dropdown">Category <i class="fa fa-chevron-down"></i></a>
                    <div class="dropdown-menu" style="margin-left: -203.625px;">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                                <li><a href="archive.html">Text 301</a></li>
                                <li><a href="archive.html">Text 302</a></li>
                                <li><a href="archive.html">Text 303</a></li>
                                <li><a href="archive.html">Text 304</a></li>
                                <li><a href="archive.html">Text 305</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="archive.html">Text 306</a></li>
                                <li><a href="archive.html">Text 307</a></li>
                                <li><a href="archive.html">Text 308</a></li>
                                <li><a href="archive.html">Text 309</a></li>
                                <li><a href="archive.html">Text 310</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="archive.html">Text 311</a></li>
                                <li><a href="archive.html">Text 312</a></li>
                                <li><a href="archive.html#">Text 313</a></li>
                                <li><a href="archive.html#">Text 314</a></li>
                                <li><a href="archive.html">Text 315</a></li>
                            </ul>
                        </div>
                    </div>
                </li> --}}
                <li><a href="{{ route('home.archive') }}">Blog</a></li>
                <li><a href="{{ route('home.contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
