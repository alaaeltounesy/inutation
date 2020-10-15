<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "https://www.inutrition4u.com/",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://www.inutrition4u.com/?q={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<link rel="stylesheet" href="/css/style.min.css?v=1.1" type="text/css" media="" />

<meta name="theme-color" content="#F1F9F1">
<link rel="apple-touch-icon" sizes="152x152" href="/appicons/android-chrome-512x512.png">
<link rel="icon" type="image/png" sizes="192x192" href="/appicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/appicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/appicons/favicon-16x16.png">

<link rel="apple-touch-icon" sizes="180x180" href="/appicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/appicons/favicon.png">
</head>

<body>

  <!--header-->
  <section class="sec-header d-lg-block d-none">
    <nav class="navbar navbar-expand-lg navbar-light py-4 w-80 ">
      <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="Inutation4U" class="w-100"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

        <button class="btn  my-2 my-sm-0 sch-btn scdform-btn">SCHEDULE</button>

      </div>
    </nav>
  </section>


  <!--header mobile-->



  <section class="sec-header head-mob px-4 d-lg-none d-block">
    <nav class="navbar navbar-expand-lg navbar-light   ">

      <button class="btn   my-sm-0 sch-btn-m scdform-btn">SCHEDULE</button>

      <a class="navbar-brand mx-auto" href="/"><img src="/images/logo.png" alt="Inutation4U logoo " class="w-100 d-md-block d-none">
        <img src="/images/logo.png" alt="Inutation4U logo phone" style="width:100px;" class="d-md-none d-block mx-auto">
      </a>
      <button class="navbar-toggler" type="button" class="" style="border:none;padding:0px!important;" data-toggle="collapse" data-target="#navbarSupportedContentm" aria-controls="navbarSupportedContentm" aria-expanded="false" aria-label="Toggle navigation">


        <svg xmlns="http://www.w3.org/2000/svg" alt="Inutation4U menu" width="31" height="23" viewBox="0 0 31 23">
          <g id="Group_54" data-name="Group 54" transform="translate(-620 -81)">
            <rect id="Rectangle_70" data-name="Rectangle 70" width="31" height="3" transform="translate(620 81)" fill="#00b806" />
            <rect id="Rectangle_73" data-name="Rectangle 73" width="31" height="3" transform="translate(620 91)" fill="#00b806" />
            <rect id="Rectangle_72" data-name="Rectangle 72" width="31" height="3" transform="translate(620 101)" fill="#00b806" />
          </g>
        </svg>
      </button>

      <div class="collapse navbar-collapse mx-auto" id="navbarSupportedContentm">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  <?php if ($pn == "Home") echo 'active'; ?> ">
            <a class="nav-link " href="/">HOME</a>
          </li>
          <li class="nav-item <?php if ($pn == "About") echo 'active'; ?>">
            <a class="nav-link  " href="/About">ABOUT</a>
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
  <!-- popup SCHEDULE-->
  <div class="overlay">
    <div class="over2">
    </div>
   
    <div class="popup p-lg-5  p-4 col-xl-6">
        <h1 class="mb-5 text-center">
          MEET <SPAN class="SemiBold"> SHADIA</SPAN>
        </h1>
                          <form class="form ajax contact-form" action="/mail.php" >

                          <div class="row">
                            
                        <div class="form-group col-xl-6">
                            <label for="exampleInputName1">Name </label>
                            <input type="text" name="name" required class="form-control" id="exampleInputName1" aria-describedby="NameHelp">
                        </div>
                        <div class="form-group col-xl-6">
            <label for="exampleInputAge">Age</label>
            <input type="number" name="Age" class="form-control" id="exampleInputAge" aria-describedby="AgeHelp">
          </div>
                        <div class="form-group col-xl-6">
                            <label for="exampleInputEmail1">Email </label>
                            <input type="email" name="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-xl-6">
                            <label for="exampleInputPhone">Phone</label>
                            <input name="phone" type="tel" required class="form-control" id="exampleInputPhone">
                        </div>


                        <div class="form-group col-12">
                            <label for="exampleInputHelpyou">How can I help You ?</label>
                            <textarea class="form-control" name="message2" id="exampleInputHelpyou" aria-describedby="HelpyouHelp" col="12" rows="5"></textarea>
                        </div>
                        <div class="form-group text-center col-md-7 col-10 mx-auto">
                            <button type="submit" class="btn col-lg-5 submit-form-btn col-6 py-2 mx-auto my-4 text-center sent-btn">SEND</button>
                        </div>

                      
                          </div>
                          <input name="subject" type="hidden" value="Message From Web Site">
                        <div class="alert text-capitalize  alert-success my-lg-5 mx-auto px-5 text-center" role="alert">
                            Thank you for reaching out to us, we will get back to you as soon as possible!
                        </div>
                    </form>
    </div>
  </div>