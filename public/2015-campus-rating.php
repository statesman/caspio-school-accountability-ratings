<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    "title" => "2015 Texas school accountability ratings | Statesman.com",
    "description" => "Texas Education Agency ratings for all Texas public schools.",
    "thumbnail" => "http://projects.statesman.com/databases/school-accountability-ratings/assets/share.png", // needs update
    "shortcut_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_5126cb2068bd43d1ab4e17660ac48255.ico",
    "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_fa2d2d6e73614535b997734c7e7d2287.png",
    "url" => "http://projects.statesman.com/databases/school-accountability-ratings/",
    "twitter" => "statesman"
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="<?php print $meta['shortcut_icon']; ?>" />
  <link rel="apple-touch-icon" href="<?php print $meta['apple_touch_icon']; ?>" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>


  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
        <img class="visible-xs visible-sm" width="103" height="26" src="assets/logo-short-black.png" />
        <img class="hidden-xs hidden-sm" width="273" height="26" src="assets/logo.png" />
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="2013-search.php">2013</a></li>
        <li><a href="2014-search.php">2014</a></li>
        <li class="active"><a href="2015-search.php">2015</a></li>
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
      </ul>
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </div>
</nav>
<div id="back">

  <div class="container">
    <div class="row">
      <div class="col-lg-12 header">
      <h1 id="pagetitle">2015 Texas school accountability ratings</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">

        <h5>Use buttons below to see how this school performed in other years.</h5>

        <div class="btn-group" role="group" aria-label="Years">
          <a class="btn btn-default" href="2013-campus-rating.php" role="button">2013</a>
          <a class="btn btn-default" href="2014-campus-rating.php" role="button">2014</a>
          <a class="btn btn-primary" href="2015-campus-rating.php" role="button">2015</a>
          <a class="btn btn-default" href="./" role="button">New search</a>
        </div>

        <!-- 2015 Campus Detail goes here -->
        <div id="cbe76c0000a8fcf80ac7ee4c578327"></div>
        <script type="text/javascript" src="http://b1.caspio.com/scripts/e1.js"></script>
        <script type="text/javascript">try{f_cbload("e76c0000a8fcf80ac7ee4c578327","http:");}catch(v_e){;}</script>
        <div id="cxkg"><a href="http://b1.caspio.com/dp.asp?AppKey=e76c0000a8fcf80ac7ee4c578327">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>

      </div>
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4>2015 Accountability Ratings</h4>
            <p>The Texas Education Agency rates more than 8,600 public schools in the state. Districts and campuses are given a rating of either <strong>met standard</strong> or <strong>improvement required</strong> under the accountability system, which has four components, or indices largely based on the state-mandated STAAR exams: student achievement, student progress, closing performance gaps and post-secondary readiness. In 2015, the state allowed schools to meet either student achievement or student progress to pass, instead of both, as it did in 2014. The state also is not including performance on the math tests in third through eighth grades because the state introduced more rigorous curriculum standards.</p>
            <p>Schools receiving the Met Standard rating may also qualify for distinctions, which are special honors given in a variety of areas.</p>
            <p>For more on the ratings system, TEA offers the <a href="http://ritter.tea.state.tx.us/perfreport/account/2015/manual/index.html" target="_blank">2015 Accountability Manual</a>, or this <a href="http://tea.texas.gov/WorkArea/linkit.aspx?LinkIdentifier=id&ItemID=25769815110&libID=25769815157" target="_blank">one-page summary</a>.</p>
          </div>
        </div>
      </div>
    </div>



  </div>

    <!-- bottom matter -->
    <?php include "includes/banner-ad.inc";?>
    <?php include "includes/legal.inc";?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>

</div>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
