<?php
	function cow_header() { ?>
<!doctype html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SizeNINE</title>
  <link href="../css/singlePageTemplate.css" rel="stylesheet" type="text/css">
  <script>var __adobewebfontsappname__ = "dreamweaver"</script>
  <script src="http://use.edgefonts.net/source-sans-pro:n2:default.js" type="text/javascript"></script>
  <script src="../index.js" type="text/javascript"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="container">
    <header>
      <a href="../index.html">
        <h4 class="logo">SIZE
          <span class="light">NINE</span>
        </h4>
      </a>
      <nav>
        <ul>
          <li>
            <form>
              <input type="text" size="30" onkeyup="showResult(this.value)">
              <div id="livesearch"></div>
            </form>
          </li>
          <li>
            <a href="../login.html"><img src="../images/account.svg" alt="signin"/></a>
          </li>
        </ul>
      </nav>
    </header>
    <section class="hero" id="hero">
      <h2 class="hero_header">SIZENINE
        <span class="light">admin</span>
      </h2>
      <p class="tagline">Login for Admin Controls</p>
    </section>
<?php	}

	function cow_footer() { ?>
    <div class="copyright">&copy;2018 -
      <strong>SizeNINE
        <strong>
    </div>
  </div>
</body>

</html>
<?php
	}
?>