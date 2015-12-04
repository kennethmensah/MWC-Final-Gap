<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="google-signin-client_id" content="reservationappmwc.apps.googleusercontent.com">
    <!--STYLESHEETS -->

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

    <!--Font awesome -->
    <link rel="stylesheet" href="../assets/css/css/font-awesome.min.css">

    <!--material design iconic font-->
    <link type="text/css" rel="stylesheet" href="../assets/css/css/material-design-iconic-font.css">

    <link type="text/css" rel="stylesheet" href="../assets/css/admin.css">

    <style>
        #heading {
            background-color: #222b30;
        }

        #search-div{
            background-color:#ef962d;
        }


        a{
            color: #ef962d;
        }


        @media screen and (min-width: 480px) {
            #heading {
                background-color: #222b30;
            }

            #search-div{
                background-color:#ef962d;
            }


            a{
                color: #ef962d;
            }

        }

        @media screen and (min-width: 768px) {
            #heading {
                background-color: #4f6a77;
            }

            a{
                color: #394a53;
            }

            #search-div{
                background-color: #dadcdf;
            }
        }
    </style>

    <!--STYLESHEETS ENDED-->
</head>
<body id="body_page">

<!-- NAVBAR -->
<div class=" row navbar-fixed">
    <nav class="col s12" id="heading">
        <div class="nav-wrapper ">
            <a href="#" class="brand-logo center" accesskey="l"> <span class="mdi-action-book medium"></span> Book-Reviews  </a>
            <ul  class="right hide-on-med-and-down">
                <li><i class="zmdi zmdi-account-circle circle"></i></li>
                <li><span id="username"> </span></li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse">
                <i class="mdi-navigation-menu"></i>
            </a>
        </div>
    </nav>

</div>

<!-- END NAVBAR -->


<!-- CONTENT AND SIDENAV-->
<div class="row">




    <div class="col s12 m12 l9 right">

        <div class="row" id="search-div">
            <div class="col s12 container center-align" >
                <div class="col s1">
                    <i class="zmdi zmdi-search" id="search_icon"></i></label></div>
                <div class="col s11">
                    <input id="search" type="search" required onkeyup="searchBook()">
                </div>
            </div>
        </div>

        <!-- page content  -->
        <div class="row" id="main-div">

        </div>

        <div class="row" id="add-div">
            <form class="col s12 ">
                <div class="row">
                    <h2>Add A Book</h2>
                </div>
                <div class="row">
                    <div class="input-field col s12 circle">
                        <i class="mdi-editor-publish prefix"></i>
                        <input id="title" type="tel" class="validate">
                        <label for="title">
                            Book title
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-edit prefix"></i>
                        <input id="author" type="tel" class="validate">
                        <label for="author">
                            Author
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="zmdi zmdi-email prefix"></i>
                        <textarea id="desc" class="materialize-textarea validate"></textarea>

                        <label for="desc">
                            Description
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="zmdi zmdi-time prefix"></i>
                        <input id="year" type="number" class="  validate">
                        <label for="year">
                            Year
                        </label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="zmdi zmdi-money prefix"></i>
                        <input id="price" type="number" class="  validate">
                        <label for="price">
                            Price
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <i class="zmdi zmdi-account prefix"></i>
                        <input id="isbn" type="text" class="datepicker">
                        <label for="isbn">
                            ISBN
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <a class=" col s8 m5 l2 waves-effect orange btn-flat btn-large" href="javascript:addBook()">
                            <i class="zmdi zmdi-upload"></i> ADD
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <div class="row" id="review-div">

        </div>



        <div class="row" >
            <div class="col s12 m12 l12">
                <h5 class="blue-grey-text"><span class="zmdi zmdi-comments"></span> Reviews</h5>
                <div id="reviews"></div>
            </div>
        </div>

        <!-- ADD Review -->
        <div class="row" >
            <div class="col s12 m12 l12 " id="add-review">

            </div>
        </div>


        <!--- ---->

        <div class="row">
            <div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
                <a class="btn-floating btn-large orange tooltipped" href="javascript:getBooks()"
                   data-position="left" data-delay="50"
                   data-tooltip="View Books">
                    <i class="large mdi-action-view-list"></i>
                </a>
                <ul>
                    <li><a class="btn-floating blue-grey tooltipped" href="javascript:showAddForm()"
                           data-position="left" data-delay="50"
                           data-tooltip="Add Book">
                            <i class="zmdi zmdi-edit" ></i></a></li>
                    <li><a class="btn-floating yellow darken-1 tooltipped"
                           data-position="left" data-delay="50"
                           data-tooltip="View Reviews">
                            <i class="zmdi zmdi-comment"></i></a></li>
                    <li>
                        <a class="btn-floating light-blue tooltipped" data-position="left" data-delay="50"
                           data-tooltip="Search Books" href="#">
                            <i class="zmdi zmdi-search"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <!-- Modal Structure -->
            <div id="modal1" class="modal bottom-sheet">
                <div class="modal-content">
                    <h4 id="mod_title">Modal Header</h4>
                    <p id="mod_content">A bunch of text</p>
                    <p><span class="blue-grey-text medium">$ </span> <span id="cost" class="orange-text medium"></span></p>
                </div>
                <div class="modal-footer">
                    <a href="" class=" modal-action modal-close waves-effect waves-green btn-flat orange-text">CANCEL</a>
                    <a href="javascript:sendPurchase()" class=" modal-action modal-close waves-effect waves-green btn-flat blue-grey-text">BUY</a>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col s12 ">
                <h5><span class="fa fa-rss orange-text show-on-medium-and-down"></span> RSS Feeds</h5>

                <div class="hide-on-med-and-down">
                    <?php
                    require_once("magpierss/rss_fetch.inc");
                    $url="http://libwww.freelibrary.org/rss/reviewrss.cfm";
                    $rss=fetch_rss($url);

                    echo "<h5> ". $rss->channel['title']."</h5><p>";
                    echo "<div>";
                    foreach ($rss->items as $item) {
                        $href = $item['link'];
                        $title = $item['title'];
                        $description = $item['description'];
                        $date = $item['dc:date'];
                        echo "<div ><h6> <a href=".$href."><span class='fa fa-rss orange-text medium'></span> ".$title."</a></h6><span class='right'>".$date."</span></div>";
                        echo "<p>".$description."</p>";
                    }
                    echo "</div>";
                    ?>

                </div>


                <div class="show-on-medium-and-down hide-on-large-only">
                    <?php
                        require_once("magpierss/rss_fetch.inc");
                    $url="http://libwww.freelibrary.org/rss/reviewrss.cfm";
                    $rss=fetch_rss($url);

                    echo "<h5> ". $rss->channel['title']."</h5>";
                    echo "<div>";
                    foreach ($rss->items as $item) {
                        $href = $item['link'];
                        $title = $item['title'];
                        $description = $item['description'];
                        echo "<div class='card-panel'><h6><span class='fa fa-rss orange-text'></span>  <a class='black-text' href=".$href.">".$title."</a></h6></div>";
                    }
                    echo "</div>";
                    ?>

                </div>
            </div>
        </div>


    </div>
</div>




<div class="col s12 m4 l2">

    <!-- navigation panel -->
    <ul   class="side-nav">
        <div><a href="javascript:void(0)" >Logo</a></div>
        <li><a href="#!"></a></li>
        <li><a href="#!">Second Sidebar Link</a></li>
    </ul>

    <ul class="side-nav fixed" id="slide-out">

        <div id="side_image" class="col s12 m12 ">
            <img src="afire.jpeg" class="">
        </div>
        <li>
            <a href="javascript:getBooks()">
                <i class="zmdi zmdi-book medium"> </i>
                <span class="side-titles orange-text">Books</span>
            </a>
        </li>
        <li>
            <a href="javascript:viewSales()">
                <i class="zmdi zmdi-archive medium"> </i>
                <span class="side-titles orange-text">My Archive</span>
            </a>
        </li>


        <li>
            <a href="javascript:void(0)">
                <i class=""> </i>
                <span class="side-titles"></span>
            </a>
        </li>

    </ul>

</div>

</div>


<!--JQUERY SCRIPTS -->
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../assets/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="../assets/js/materialize.js"></script>
<script type="text/javascript" src="../assets/js/admin.js"></script>
<!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->

<!--JQUERY ENDED -->

</body>
</html>