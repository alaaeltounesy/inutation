<<<<<<< Updated upstream

<!DOCTYPE html>
<html>

<head>
  <title>
  Inutrition4u 
  </title>


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta name="title" content="Inutrition4u">

  <meta name="description" content="">

  <meta property="og:title" content="Inutrition4u">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og: type" content="">

  <meta name="twitter:card" content="">
 <meta name="twitter:image:alt" content="">

  <meta name="theme-color" content="">
  <link rel="icon" href="favicon.ico" type="image/png">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="css/style.css" />

</head>



<?php $pn = "Home"; ?>


<?php
include 'header.php';
?>
=======
>>>>>>> Stashed changes
<?php
require __DIR__."/vendor/autoload.php";
$klein = new \Klein\Klein();


$klein->respond('GET', "/[:page]/?", function ($request) {

    require_once __DIR__ . "/" . $request->page . ".php";
});

$klein->dispatch();

<<<<<<< Updated upstream
                        <a class="nav-link active" data-zohlaa="0" id="pills-nut1-tab" data-toggle="pill" href="#pills-nut1" role="tab" aria-controls="pills-nut1" aria-selected="true">
                            Medical Nutrition Therapy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-0" data-zohlaa="110" 
                        id="pills-nut2-tab" data-toggle="pill" href="#pills-nut2"
                         role="tab" aria-controls="pills-nut2" aria-selected="false">Customized Nutrition Plan for Medical Conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-zohlaa="220" id="pills-nut3-tab" data-toggle="pill" href="#pills-nut3" role="tab" aria-controls="pills-nut3" aria-selected="false">Weight Management Plan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-zohlaa="330" id="pills-nut4-tab" data-toggle="pill" href="#pills-nut4" role="tab" aria-controls="pills-nut4" aria-selected="false">Pre and Post Pregnancy Plan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-zohlaa="440" id="pills-nut5-tab" data-toggle="pill" href="#pills-nut5" role="tab" aria-controls="pills-nut5" aria-selected="false"> Health & Wellness Plan
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-xl-6 col-lg-10  row px-lg-0  col-11 mx-auto">
                <div class="tab-content w-100" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-nut1" role="tabpanel" aria-labelledby="pills-nut1-tab"><img src="images/nut1.png" class="w-100">
                        <div class="cont-tabs pl-xl-0 pr-xl-5 py-5 ">
                            <p>
                                Having diabetes is a nightmare which requires proper
                                dietary attention. If neglected, it could lead to grave
                                consequences. A medical nutrition therapy would help
                                you manage and control your diabetes, and keep your
                                diet in check while making sure that you’re getting the
                                necessary nutrition that your body needs.

                            </p>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-nut2" role="tabpanel" aria-labelledby="pills-nut2-tab"><img src="images/nut2.png" class="w-100">

                        <div class="cont-tabs pl-xl-0 pr-xl-5 py-5 ">
                            <p>Different medical conditions require different
                                medical attention, and each and every person is
                                different and requires a specific diet plan, for that
                                reason I give each and every patient a custommade nutrition plan dedicated to his own diet
                                needs.
                            </p>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="pills-nut3" role="tabpanel" aria-labelledby="pills-nut3-tab"><img src="images/nut3.png" class="w-100">


                        <div class="cont-tabs pl-xl-0 pr-xl-5 py-5 ">
                            <p>
                                Every body type is unique. Following fad diets is
                                unhealthy and could be harmful to your body and mind.
                                What is working for someone else doesn’t necessarily
                                have to work for you as well. Don’t prevent your body
                                from consuming the right vitamins and minerals. I have
                                always believed that in order to lose weight, you have to
                                eat right, not eat less.

                            </p>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="pills-nut4" role="tabpanel" aria-labelledby="pills-nut4-tab"><img src="images/nut4.png" class="w-100">

                        <div class="cont-tabs pl-xl-0 pr-xl-5 py-5 ">
                            <p>
                                Motherhood is an amazing thing. Taking care
                                of your health and your baby’s needs requires
                                you to find the right nutritional plan for during
                                pregnancy and after giving birth. Because
                                Focusing on getting all the good stuff and
                                avoiding junk would help you create a healthy
                                life for your child, and prevent childhood
                                disease like childhood obesity.
                            </p>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-nut5" role="tabpanel" aria-labelledby="pills-nut5-tab"><img src="images/nut5.png" class="w-100">
                        <div class="cont-tabs pl-xl-0 pr-xl-5 py-5 ">
                            <p>
                                “We are indeed much more than what we eat, but what
                                we eat can nevertheless help us to be much more than
                                what we are.” I have always believed that nothing is
                                impossible. If you believe in yourself, put the right effort
                                and work towards achieving your goal, you will succeed.
                                Living the happy, healthy, and comfortable life you want
                                for you and your family requires you to understand that
                                the right nutrition is your way to achieving that.

                            </p>

                        </div>

                    </div>

                </div>
            </div>


            <!--row cont-->
        </div>
    </div>
</section>
<section class="sec5 py-lg-5">
    <div class="container-fluid w-80 mx-auto py-lg-5">

        <div class="row text-center justify-content-center">
            <div class="col-xl-10">
                <h1 class="mb-5 SemiBold">
                    I SPECIALIZE IN

                </h1>
                <h3 class="mb-5 mx-xl-3 ">
                    With the unique combination of nutrition and lactation specializations, the joy and fulfillment I felt
                    through my career while supporting pregnant and postpartum mothers, infants, and children is
                    overwhelming.
                    </h4>

                    <h2 class="green SemiBold mb-5">
                        I have specialized in different areas in nutrition like

                </h3>
            </div>

            <div class="col-12 py-lg-5">
                <img src="images/icon3.png" class="w-100 d-lg-block d-none">
                <img src="images/iconm.png" class="w-100 d-lg-none d-block">
            </div>

            <div class="col-lg-4 col-8 text-center mx-auto">
                <a href="services.php">
                    <button class="btn my-5 lrn-btn w-80 ">
                        LEARN MORE
                    </button>
                </a>
            </div>

        </div>
    </div>
</section>


<section class="sec6 py-5">
    <div class="container-fluid px-0">
        <h3 class="my-lg-5 mb-3 italic-SemiBold text-center p-0 col-lg-9 mx-auto col-11">
            “The food you eat can be the safest and most powerful form of
            medicine, or the slowest form of poison.”
        </h3>
        <div class="col-12 px-0">

            <img src="images/veg.png" class="w-100">
        </div>

    </div>
</section>
<!--footer-->
<?php
include 'footer.php';
?>
=======
>>>>>>> Stashed changes
