
$(".sec-links .nav-link").click(function(){
		
		var aHref = $(this).attr("href");
    var d = $(aHref).offset().top;
    if ( $(window).width() > 1200)
     {
      var z=d-180
    }
   else{
    var z=d-100
   }
		$("html,body").animate({scrollTop:z} );
	});


  $(".read-btn").click(function(){
    $(".read-btn").fadeToggle(function(){
    $(".read-text").fadeToggle();
    $(".less-btn").fadeToggle();
  });
});

$(".less-btn").click(function(){
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
$(".sec4 .nav-link").on("click",function (e) {
 
  $(".fly-green").animate({top:x+"px"} );
  var y = $(this).data('zohlaa');
  $(".fly-green").css({ transform: 'translateY(' + y + 'px)' });
  console.log(e);

});



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
$(document).ready(function () {
  $("form.ajax").submit(function (e) {
    e.preventDefault();
    var $this = $(this);
    var target = $(this).attr('action');
    var formData = new FormData(this);
    postData(target, formData).then(data => {
      if(data.state){

      }else{
        
      }
      console.log(data.msg);
    
    //  $this.children('.msg-alrt').html();
    });
    $(this).children(".alert").show("show").delay(3000).hide("show");
  });
});
var clicks = 0;

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

var x = window.location.href;
if (document.getElementById("face-btn")) {
  document.getElementById("face-btn").href = "http://www.facebook.com/sharer?u=" + x;
  document.getElementById("twitter-btn").href = "https://twitter.com/share?url=" + x;
  document.getElementById("whatapp-btn").href = "whatsapp://send?text=" + x;
  document.getElementById("pinterest-btn").href = "https://www.pinterest.com/pin/create/button/?url=" + x;
}
$(".share-btn").click(function () {
  $(".share-buttons  ").toggleClass("flexshare");
})



