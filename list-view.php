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
            <li class="active"><a href="list-view.php">List View</a></li>
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
  <?php include("template/sidebar.html") ?>

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
<li style="border:0"> &nbsp;</li>
<li> <a class="totalInCart" href="cart.html"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
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
<div class="well well-small">
<a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a>
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
    <!-- <div class="span9"> -->
    <div class="well well-small">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/a.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/b.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/c.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/d.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/e.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/f.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/g.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/h.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/i.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/a.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
      <hr class="soften">
      <div class="row-fluid">
        <div class="span2">
          <img src="assets/img/b.jpg" alt="">
        </div>
        <div class="span6">
          <h5>Product Name </h5>
          <p>
            Nowadays the lingerie industry is one of the most successful business spheres. We always stay in touch with the latest fashion tendencies - that is why our goods are so popular..
          </p>
        </div>
        <div class="span4 alignR">
          <form class="form-horizontal qtyFrm">
            <h3> $140.00</h3>
            <label class="checkbox">
              <input type="checkbox"> Adds product to compair
            </label>
            <br>
            <div class="btn-group">
              <a href="product_details/product_details.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
              <a href="product_details/product_details.php" class="shopBtn">VIEW</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!--
Clients
-->
    <?php include('template/footer.html') ?>