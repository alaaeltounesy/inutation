

"use strict";
// Example POST method implementation:
async function postData(url = '', data = {}) {
  // Default options are marked with *
  const response = await fetch(url, {
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, *cors, same-origin
    cache: 'no-cache', // *default, no-cache, reloadforce-cache, only-if-cached
    credentials: 'same-origin', // include, *same-origin, omit
    headers: {
      'Content-Type': 'application/json'
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    redirect: 'follow', // manual, *follow, error
    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    body: JSON.stringify(data) // body data type must match "Content-Type" header
  });
  return response.json(); // parses JSON response into native JavaScript objects
}
//const cform = document.querySelector(".contact-form");




$(".contact-form").submit(function (e) {

  // cform.addEventListener("submit", function (e) {
  e.preventDefault();
  const formData = new FormData(this);
  var object = {};
  formData.forEach(function (value, key) {
    object[key] = value;
  });

  postData("/mail.php", object).then(data => {
    if (data === true) {

      $(this).children(".alert").show("show").delay(1000).hide(function () {
        $('.popup ').fadeOut('slow');
        $('.overlay ').fadeOut('slow');
      });
      this.reset();
    } else {

    }
    console.log(data);
  });
});
$(document).ready(function () {
  $(".sec-links .nav-link").click(function () {
    var aHref = $(this).attr("href");
    var d = $(aHref).offset().top;
    if ($(window).width() > 1200) {
      var z = d - 180
    }
    else {
      var z = d - 100
    }
    $("html,body").animate({ scrollTop: z });
  });

  $(".read-btn").click(function () {
    $(".read-btn").fadeToggle(function () {
      $(".read-text").fadeToggle();
      $(".less-btn").fadeToggle();
    });
  });

  $(".less-btn").click(function () {
    $(".less-btn").fadeToggle();
    $(".read-text").fadeToggle();
    $(".read-btn").fadeToggle();
  });

  $(".cardser").hover(function () {
    $(this).children(".cardser .fade-s").fadeToggle();
    $(this).children(".cardser .s-h").fadeToggle();
  },
    function () {
      $(this).children(".cardser .s-h").fadeToggle()
      $(this).children(".fade-s").fadeToggle();
    });
  $(".cardser .learn-more").click(function (e) {
    e.preventDefault();
    $(this).children(".cardser .s-h").fadeToggle(function () {
      $(this).children(".fade-s").fadeToggle();
    });
  });
  $(".sec4 .nav-link").on("click", function (e) {
    $(".fly-green").animate({ top: x + "px" });
    var y = $(this).data('zohlaa');
    $(".fly-green").css({ transform: 'translateY(' + y + 'px)' });
    console.log(e);
  });

  $('.btn-like').click(function () {
    var likeid = $(this).data("id");

    if (!localStorage.getItem(likeid)) {
      $(this).children(".svgheart").addClass("redheart");
      clicks = Number($(this).children('.clicks').text());
      console.log(clicks);
      clicks++;
      $(this).children('.clicks').text(clicks);
      localStorage.setItem(likeid, "1");
      postData('test', { action: 'add' })
        .then(data => {
          console.log(data); // JSON data parsed by `data.json()` call
        });
    } else {
      $(this).children(".svgheart").removeClass("redheart");
      clicks = Number($(this).children('.clicks').text());
      console.log(clicks);
      clicks--;
      $(this).children('.clicks').text(clicks);
      localStorage.removeItem(likeid);
      postData('test', { action: 'remove' })
        .then(data => {
          console.log(data); // JSON data parsed by `data.json()` call
        });
    }
  })

  $('.btn-like').each(function (i, obj) {
    var likeid = $(this).data("id");
    console.log(likeid);
    if (localStorage.getItem(likeid)) {
      $(this).children(".svgheart").addClass("redheart");

      localStorage.setItem(likeid, "1");
    }
  });


  /* $("form.ajax").submit(function (e) {
    e.preventDefault();
    var form = document.querySelector("form.ajax.cont");
    var target = $(this).attr('action');
    var formData = new FormData(this);
    console.log(formData);
    postData(target, formData).then(data => {
      if (data) {
        $(this).children(".alert").show("show").delay(3000).hide("show");
        form.reset();
      } else {

      }
      console.log(data);

      //  $this.children('.msg-alrt').html();
    });

  }); */
  $(".share-btn").click(function () {
    $(".share-buttons  ").toggleClass("flexshare");
  })

});
var clicks = 0;

var x = window.location.href;
if (document.getElementById("face-btn")) {
  document.getElementById("face-btn").href = "http://www.facebook.com/sharer?u=" + x;
  document.getElementById("twitter-btn").href = "https://twitter.com/share?url=" + x;
  document.getElementById("whatapp-btn").href = "whatsapp://send?text=" + x;
  document.getElementById("pinterest-btn").href = "https://www.pinterest.com/pin/create/button/?url=" + x;
}


$(".scdform-btn").click(function () {
  $(' .popup ').fadeIn('slow');
  $(' .overlay ').fadeIn('slow');
});
$(".over2").click(function () {
  $(".popup ").hide(1000);
  $(".overlay ").hide(1000);
});

