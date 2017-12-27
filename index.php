<?php include("template/header.html")?>

  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="index.php">Home	</a></li>
            <li class=""><a href="list-view.php">List View</a></li>
            <li class=""><a href="grid-view.php">Grid View</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li class=""><a href="general.php">General Content</a></li>
          </ul>
          <form action="#" class="navbar-search pull-left">
            <input type="text" placeholder="Search" class="search-query span2">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--
Body Section
-->
  <!-- <div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
<nav>
<ul class="nav nav-list">
<li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false"><span class="icon-chevron-down"></span>Health & Household</a>
<ul class="nav nav-list collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
<li><a href="#">Link 2.1</a></li>
<li><a href="#">Link 2.2</a></li>
<li><a href="#">Link 2.3</a></li>
</ul>
</li>
<li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu2" aria-expanded="false"><span class="icon-chevron-down"></span>Link 2 (toggle)</a>
<ul class="nav nav-list collapse" id="submenu2" role="menu" aria-labelledby="btn-1">
<li><a href="#">Link 2.1</a></li>
<li><a href="#">Link 2.2</a></li>
<li><a href="#">Link 2.3</a></li>
</ul>
</li>
<li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu3" aria-expanded="false"><span class="icon-chevron-down"></span>Link 2 (toggle)</a>
<ul class="nav nav-list collapse" id="submenu3" role="menu" aria-labelledby="btn-1">
<li><a href="#">Link 2.1</a></li>
<li><a href="#">Link 2.2</a></li>
<li><a href="#">Link 2.3</a></li>
</ul>
</li>
<li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu4" aria-expanded="false"><span class="icon-chevron-down"></span>Link 2 (toggle)</a>
<ul class="nav nav-list collapse" id="submenu4" role="menu" aria-labelledby="btn-1">
<li><a href="#">Link 2.1</a></li>
<li><a href="#">Link 2.2</a></li>
<li><a href="#">Link 2.3</a></li>
</ul>
</li>
<li><a href="#" id="btn-1" data-toggle="collapse" data-target="#submenu5" aria-expanded="false"><span class="icon-chevron-down"></span>Link 2 (toggle)</a>
<ul class="nav nav-list collapse" id="submenu5" role="menu" aria-labelledby="btn-1">
<li><a href="#">Link 2.1</a></li>
<li><a href="#">Link 2.2</a></li>
<li><a href="#">Link 2.3</a></li>
</ul>
</li>
</ul>
</nav>
</div>

<div class="well well-small alert alert-warning cntr">
<h2>50% Discount</h2>
<p>
only valid for online order.
    <br>
<br><a class="defaultBtn" href="#">Click here </a>
</p>
</div>

<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
<br>
<br>
<ul class="nav nav-list promowrapper">
<li>
<div class="thumbnail">
<a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
<img src="assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
<div class="caption">
<h4><a class="defaultBtn" href="product_details/product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
</div>
</div>
</li>
<li style="border:0"> &nbsp;</li>
<li>
<div class="thumbnail">
<a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
<img src="assets/img/shopping-cart-template.png" alt="shopping cart template">
<div class="caption">
<h4><a class="defaultBtn" href="product_details/product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
</div>
</div>
</li>
<li style="border:0"> &nbsp;</li>
<li>
<div class="thumbnail">
<a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
<img src="assets/img/bootstrap-template.png" alt="bootstrap template">
<div class="caption">
<h4><a class="defaultBtn" href="product_details/product_details.php">VIEW</a> <span class="pull-right">$22.00</span></h4>
</div>
</div>
</li>
</ul>

</div>
<div class="span9">
<div class="well np">
<div id="myCarousel" class="carousel slide homCar">
<div class="carousel-inner">
<div class="item">
<img style="width:100%" src="assets/img/bootstrap_free-ecommerce.png" alt="bootstrap ecommerce templates">
<div class="carousel-caption">
<h4>Bootstrap shopping cart</h4>
<p><span>Very clean simple to use</span></p>
</div>
</div>
<div class="item">
<img style="width:100%" src="assets/img/carousel1.png" alt="bootstrap ecommerce templates">
<div class="carousel-caption">
<h4>Bootstrap Ecommerce template</h4>
<p><span>Highly Google seo friendly</span></p>
</div>
</div>
<div class="item active">
<img style="width:100%" src="assets/img/carousel3.png" alt="bootstrap ecommerce templates">
<div class="carousel-caption">
<h4>Twitter Bootstrap cart</h4>
<p><span>Very easy to integrate and expand.</span></p>
</div>
</div>
<div class="item">
<img style="width:100%" src="assets/img/bootstrap-templates.png" alt="bootstrap templates">
<div class="carousel-caption">
<h4>Bootstrap templates integration</h4>
<p><span>Compitable to many more opensource cart</span></p>
</div>
</div>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
</div> -->
  <?php include("template/sidebar.html") ?>
    <!--
New Products
-->
    <div class="well well-small">
      <h3>New Products </h3>
      <hr class="soften" />
      <div class="row-fluid">
        <div id="newProductCar" class="carousel slide">
          <div class="carousel-inner">
            <div class="item active">
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                    <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                    <a href="#" class="tag"></a>
                    <a href="product_details/product_details.php"><img src="assets/img/bootstrap-ring.png" alt="bootstrap-ring"></a>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                    <a href="#" class="tag"></a>
                    <a href="product_details/product_details.php"><img src="assets/img/i.jpg" alt=""></a>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                    <a href="#" class="tag"></a>
                    <a href="product_details/product_details.php"><img src="assets/img/g.jpg" alt=""></a>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                    <a href="product_details/product_details.php"><img src="assets/img/s.png" alt=""></a>
                  </div>
                </li>
              </ul>
            </div>
            <div class="item">
              <ul class="thumbnails">
                <li class="span3">
                  <div class="thumbnail">
                    <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                    <a href="product_details/product_details.php"><img src="assets/img/i.jpg" alt=""></a>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                    <a href="product_details/product_details.php"><img src="assets/img/f.jpg" alt=""></a>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                    <a href="product_details/product_details.php"><img src="assets/img/h.jpg" alt=""></a>
                  </div>
                </li>
                <li class="span3">
                  <div class="thumbnail">
                    <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
                    <a href="product_details/product_details.php"><img src="assets/img/j.jpg" alt=""></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
          <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
        </div>
      </div>
      <div class="row-fluid">
        <ul class="thumbnails">
          <li class="span4">
            <div class="thumbnail">

              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/b.jpg" alt=""></a>
              <div class="caption cntr">
                <p>Manicure & Pedicure</p>
                <p><strong> $22.00</strong></p>
                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                <div class="actionList">
                  <a class="pull-left" href="#">Add to Wish List </a>
                  <a class="pull-left" href="#"> Add to Compare </a>
                </div>
                <br class="clr">
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail">
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/c.jpg" alt=""></a>
              <div class="caption cntr">
                <p>Manicure & Pedicure</p>
                <p><strong> $22.00</strong></p>
                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                <div class="actionList">
                  <a class="pull-left" href="#">Add to Wish List </a>
                  <a class="pull-left" href="#"> Add to Compare </a>
                </div>
                <br class="clr">
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail">
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/a.jpg" alt=""></a>
              <div class="caption cntr">
                <p>Manicure & Pedicure</p>
                <p><strong> $22.00</strong></p>
                <h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
                <div class="actionList">
                  <a class="pull-left" href="#">Add to Wish List </a>
                  <a class="pull-left" href="#"> Add to Compare </a>
                </div>
                <br class="clr">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!--
Featured Products
-->
    <div class="well well-small">
      <h3><a class="btn btn-mini pull-right" href="products.php" title="View more">VIew More<span class="icon-plus"></span></a> Featured Products  </h3>
      <hr class="soften" />
      <div class="row-fluid">
        <ul class="thumbnails">
          <li class="span4">
            <div class="thumbnail">
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/d.jpg" alt=""></a>
              <div class="caption">
                <h5>Manicure & Pedicure</h5>
                <h4>
<a class="defaultBtn" href="product_details/product_details.php" title="Click to view"><span class="icon-zoom-in"></span></a>
<a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
<span class="pull-right">$22.00</span>
</h4>
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail">
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/e.jpg" alt=""></a>
              <div class="caption">
                <h5>Manicure & Pedicure</h5>
                <h4>
<a class="defaultBtn" href="product_details/product_details.php" title="Click to view"><span class="icon-zoom-in"></span></a>
<a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
<span class="pull-right">$22.00</span>
</h4>
              </div>
            </div>
          </li>
          <li class="span4">
            <div class="thumbnail">
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/f.jpg" alt="" /></a>
              <div class="caption">
                <h5>Manicure & Pedicure</h5>
                <h4>
<a class="defaultBtn" href="product_details/product_details.php" title="Click to view"><span class="icon-zoom-in"></span></a>
<a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a>
<span class="pull-right">$22.00</span>
</h4>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="well well-small">
      <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a> Popular Products
    </div>
    <hr>
    <div class="well well-small">
      <a class="btn btn-mini pull-right" href="#">View more <span class="icon-plus"></span></a> Best selling Products
    </div>
    </div>
    </div>
    <!--
Clients
-->
    <?php include('template/footer.html') ?>