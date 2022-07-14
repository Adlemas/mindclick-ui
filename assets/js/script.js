"use strict";

$(".works-slider").slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [{
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }, {
    breakpoint: 769,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  } // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
});
$(".plans-slider").slick({
  dots: true,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [{
    breakpoint: 2000,
    settings: "unslick"
  }, {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }, {
    breakpoint: 769,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  } // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
});
$("#app-modal-btn").on("click", function () {
  $("#app-modal").css("display", "none");
});

function openModal() {
  $("#app-modal").css({
    display: "flex",
    opacity: "0"
  }); // animate the modal opacity to 1 ease-in-out

  $("#app-modal").animate({
    opacity: "1"
  }, 200);
}
/**
 * Handle app form submit
 * @param {SubmitEvent} e
 */


function sendRequest(e) {
  // prevent default form submit
  e.preventDefault();
  var form = e.target;
  console.log(form); // get form data

  var formData = new FormData(form); // show #loading-modal and hide #app-modal

  $("#loading-modal").css("display", "flex");
  $("#app-modal").css("display", "none");
  fetch("http://localhost:8080/application", {
    method: "POST",
    // send form data as json
    body: JSON.stringify(Object.fromEntries(formData)),
    headers: {
      "Content-Type": "application/json"
    }
  }).then(function (response) {
    return response.json();
  }).then(function (data) {
    // hide #loading-modal
    $("#loading-modal").css("display", "none");
    console.log(data);

    if (data.message) {
      $("#app-modal-status-text").text(data.message);
      $("#app-modal-status-image").attr("src", "assets/images/jpg/mail-sent.jpg");
      openModal();
    }
  })["catch"](function (error) {
    // hide #loading-modal
    $("#loading-modal").css("display", "none");
    console.error(error);
    $("#app-modal-status-text").text("Что-то пошло не так...");
    $("#app-modal-status-image").attr("src", "assets/images/jpg/failure.jpg");
    openModal();
  });
} // handle app form submit


$("#app-form").on("submit", sendRequest);