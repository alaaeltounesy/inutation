


 <link rel="icon" href="favicon.ico" type="/image/png">
  <link rel="stylesheet" href="/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="/css/style.css" />
 
</head>
<body>

  <!--header-->
  <section class="sec-header d-lg-block d-none">
    <nav class="navbar navbar-expand-lg navbar-light py-4 w-80 ">
      <a class="navbar-brand" href="/"><img src="/images/logo.png" class="w-100"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  <?php if ($pn == "Home") echo 'active'; ?>">
            <a class="nav-link " href="/">HOME</a>
          </li>
          <li class="nav-item  <?php if ($pn == "About") echo 'active'; ?>">
            <a class="nav-link" href="/About">ABOUT</a>
          </li>
          <li class="nav-item <?php if ($pn == "Services") echo 'active'; ?>">
            <a class="nav-link" href="/Services">SERVICES</a>
          </li>
          <li class="nav-item <?php if ($pn == "Blog") echo 'active'; ?>">
            <a class="nav-link" href="/Blog">BLOG</a>
          </li>


          <li class="nav-item <?php if ($pn == "Contact") echo 'active'; ?>">
            <a class="nav-link" href="/Contact">CONTACT</a>
          </li>
        </ul>


        <a href="/Services"> <button class="btn  my-2 my-sm-0 sch-btn">SCHEDULE</button>
        </a>
      </div>
    </nav>
  </section>


  <!--header mobile-->



  <section class="sec-header head-mob px-4 d-lg-none d-block">
    <nav class="navbar navbar-expand-lg navbar-light   ">

    <a href="/Services"> <button class="btn   my-sm-0 sch-btn-m">SCHEDULE</button>
        </a>
      <a class="navbar-brand mx-auto" href="/"><img src="/images/logo.png" class="w-100 d-md-block d-none">
      <img src="/images/logo.png" style="width:100px;" class="d-md-none d-block mx-auto">
    </a>
      <button class="navbar-toggler" type="button" class="" style="border:none;padding:0px!important;" data-toggle="collapse" data-target="#navbarSupportedContentm"
        aria-controls="navbarSupportedContentm" aria-expanded="false" aria-label="Toggle navigation">
     <img src="/images/menu.svg" class="w-100">
      </button>

      <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContentm">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  <?php if ($pn == "Home") echo 'active'; ?> ">
            <a class="nav-link " href="/">HOME</a>
          </li>
          <li class="nav-item <?php if ($pn == "About") echo 'active'; ?>">
            <a class="nav-link  " href="/about">ABOUT</a>
          </li>
          <li class="nav-item <?php if ($pn == "Services") echo 'active'; ?> ">
            <a class="nav-link" href="Services">SERVICES</a>
          </li>
          <li class="nav-item <?php if ($pn == "Blog") echo 'active'; ?>">
            <a class="nav-link" href="/Blog">BLOG</a>
          </li>


          <li class="nav-item <?php if ($pn == "Contact") echo 'active'; ?>">
            <a class="nav-link" href="Contact">CONTACT</a>
          </li>
        </ul>


        
      </div>
    </nav>
  </section>

  <div style="width: 100%;
     height: 100px;
                             ">

</div>