<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Spa in India, Spa Treatments in India</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <?php $this->load->view('common/css') ?>
    </head>
    <body data-spy="scroll"  data-offset="60">
        <main class=" box-shadow-wide">
            <div class="main-box">
                <section class="font-1 p-0">
                    <div class="container">
                        <?php $this->load->view('common/header') ?>
                        <div class="flexslider flexslider-simple">
                            <img src="<?= base_url('assets') ?>/images/inner-banner.jpeg" />
                        </div>
                    </div>
                </section>
                <section class="font-1 pt-2 pl-0 pb-0 pr-0">
                    <div class="container">
                        <h1 class="gglsrc lng_commn">Beauty Spas in Delhi-NCR   </h1>
                        <div class="row">
                            <div class="col-lg-2 pl-3 pr-0 pb-0 pt-0"><a class="sortbyresult" href="#">SORT RESULTS BY</a><i class="left_arrow"></i></div>
                            <div class="col-lg-10 row pl-0 pr-0 pb-0 pt-0">
                                <div class="col-lg-2 topsbar"><a href="top-results.html">Top Results</a></div>
                                <div class="col-lg-2 topsbar"><a href="popularity.html">Popularity</a></div>
                                <div class="col-lg-2 topsbar"><a href="#"id="myBtn">Location</a></div>
                                <div class="col-lg-2 topsbar">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Distance
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">1 km</a></li>
                                            <li><a href="#">2 km</a></li>
                                            <li><a href="#">3 km</a></li>
                                            <li><a href="#">4 km</a></li>
                                            <li><a href="#">5 km</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 topsbar"><a href="ratings.html">Ratings <i class="fa fa-long-arrow-up"></i></a></div>
                                <div class="col-lg-2 topsbar"><a href="special-offer.html">Special Offer</a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="font-1 pt-2 pl-0 pb-0 pr-0">
                    <div class="container">
                        <div class="row">
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <span class="ptxt">Sort By Location</span>
                                    <p>Where in Delhi</p>
                                    <p>
                                    <div class="search-container">
                                        <form action="#">
                                            <input type="text" placeholder="Search.." name="search">
                                            <button type="submit">Go</button>
                                        </form>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <?php $this->load->view('common/footer') ?>
        </main>
        <?php $this->load->view('common/js') ?>
    </body>
</html>