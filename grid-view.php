<?php include("template/header.html") ?>
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
            <li class=""><a href="index.php">Home	</a></li>
            <li class=""><a href="list-view.php">List View</a></li>
            <li class="active"><a href="grid-view.php">Grid View</a></li>
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
<ul class="nav nav-list">
<li><a href="products.php"><span class="icon-chevron-right"></span>Fashion</a></li>
<li><a href="products.php"><span class="icon-chevron-right"></span>Watches</a></li>
<li><a href="products.php"><span class="icon-chevron-right"></span>Fine Jewelry</a></li>
<li><a href="products.php"><span class="icon-chevron-right"></span>Fashion Jewelry</a></li>
<li><a href="products.php"><span class="icon-chevron-right"></span>Engagement & Wedding</a></li>
<li><a href="products.php"><span class="icon-chevron-right"></span>Men's Jewelry</a></li>
<li><a href="products.php"><span class="icon-chevron-right"></span>Vintage & Antique</a></li>
<li><a href="products.php"><span class="icon-chevron-right"></span>Loose Diamonds </a></li>
<li><a href="products.php"><span class="icon-chevron-right"></span>Loose Beads</a></li>
<li><a href="products.php"><span class="icon-chevron-right"></span>See All Jewelry & Watches</a></li>
</ul>
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

</div> -->
  <?php include("template/sidebar.html") ?>


    <!-- <div class="span9"> -->
    <!--
New Products
-->
    <div class="well well-small">
      <h3>Our Products </h3>
      <div class="row-fluid">
        <ul class="thumbnails">
          <li class="span4">
            <div class="thumbnail">
              <a href="product_details/product_details.php" class="overlay"></a>
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
          <li class="span4">
            <div class="thumbnail">
              <a href="product_details/product_details.php" class="overlay"></a>
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
              <a href="product_details/product_details.php" class="overlay"></a>
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
        </ul>
      </div>
      <div class="row-fluid">
        <ul class="thumbnails">
          <li class="span4">
            <div class="thumbnail">
              <a href="product_details/product_details.php" class="overlay"></a>
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/d.jpg" alt=""></a>
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
              <a href="product_details/product_details.php" class="overlay"></a>
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/e.jpg" alt=""></a>
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
              <a href="product_details/product_details.php" class="overlay"></a>
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/f.jpg" alt=""></a>
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
      <div class="row-fluid">
        <ul class="thumbnails">
          <li class="span4">
            <div class="thumbnail">
              <a href="product_details/product_details.php" class="overlay"></a>
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/g.jpg" alt=""></a>
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
              <a href="product_details/product_details.php" class="overlay"></a>
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/h.jpg" alt=""></a>
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
              <a href="product_details/product_details.php" class="overlay"></a>
              <a class="zoomTool" href="product_details/product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
              <a href="product_details/product_details.php"><img src="assets/img/i.jpg" alt=""></a>
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
      <div class="row-fluid">
        <ul class="thumbnails">
          <li class="span4">
            <div class="thumbnail">
              <a href="product_details/product_details.php" class="overlay"></a>
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
          <li class="span4">
            <div class="thumbnail">
              <a href="product_details/product_details.php" class="overlay"></a>
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
              <a href="product_details/product_details.php" class="overlay"></a>
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
        </ul>
      </div>

    </div>
    </div>
    </div>
    <!--
Clients
-->
    <?php include('template/footer.html') ?>