    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="http://twitter.github.com/bootstrap/assets/img/examples/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Over 50 Citations for $59</h1>
              <p class="lead">Get your local business listed in over 50 local citation sources and business directories</p>
              <a class="btn btn-large btn-primary" href="#go-to-form">Get Started</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://twitter.github.com/bootstrap/assets/img/examples/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Easy Citation Management</h1>
              <p class="lead">Get an overview of your citations from one easy-to-use interface</p>
              <a class="btn btn-large btn-primary" href="#go-to-form">Get Started</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://twitter.github.com/bootstrap/assets/img/examples/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Bulk Pricing Available</h1>
              <p class="lead">Bulk options are available for your SEO agency. $49 for 10 submission, $39 for 50 submissions</p>
              <a class="btn btn-large btn-primary" href="#go-to-form">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Over 50 Local Citations</h2>
          <p>Get your local business listed in over 50 local citation sources and business directories. Submit your listing to us once and 
            we start submitting it for you. SubmitMeLocal handles the grunt work for you.</p>
          <p><a class="btn btn-info" href="#">View Citations &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Easy to Manage</h2>
          <p>SubmitMeLocals management interface shows you where your business has been submitted, if its active, and allows you to easily manage
            your citations from one easy to use interface.</p>
          <p><a class="btn btn-info" href="#">Screenshot &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140">
          <h2>Get Started</h2>
          <p>Start your submission for just $59.00. Bulk Pricing is Available for your SEO agency. SubmitMeLocal costs less, works better, and submits faster than the other competing services.</p>
          <p><a class="btn btn-primary" href="#go-to-form">Get Started &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->
      
      <!-- START THE FEATURETTES -->
      <?=$this->element('submissions'); ?>