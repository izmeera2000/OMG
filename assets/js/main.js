/**
 * Template Name: Medilab
 * Updated: Jan 29 2024 with Bootstrap v5.3.2
 * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
window.addEventListener("load", (event) => {
  localStorage.setItem("cart_adjust", "0");
});

(function () {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };

  /**
   * Navbar links active state on scroll
   */
  // let navbarlinks = select('#navbar .scrollto', true)
  // const navbarlinksActive = () => {
  //   let position = window.scrollY + 200
  //   navbarlinks.forEach(navbarlink => {
  //     if (!navbarlink.hash) return
  //     let section = select(navbarlink.hash)
  //     if (!section) return
  //     if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
  //       navbarlink.classList.add('active')
  //     } else {
  //       navbarlink.classList.remove('active')
  //     }
  //   })
  // }
  // window.addEventListener('load', navbarlinksActive)
  // onscroll(document, navbarlinksActive)

  jQuery(function ($) {
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $("ul a").each(function () {
      if (this.href === path) {
        $(this).addClass("active");
      }
    });
  });

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select("#header");
    let offset = header.offsetHeight;

    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos - offset,
      behavior: "smooth",
    });
  };

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select("#header");
  let selectTopbar = select("#topbar");
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add("header-scrolled");
        if (selectTopbar) {
          selectTopbar.classList.add("topbar-scrolled");
        }
      } else {
        selectHeader.classList.remove("header-scrolled");
        if (selectTopbar) {
          selectTopbar.classList.remove("topbar-scrolled");
        }
      }
    };
    window.addEventListener("load", headerScrolled);
    onscroll(document, headerScrolled);
  }

  /**
   * Back to top button
   */
  let backtotop = select(".back-to-top");
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add("active");
      } else {
        backtotop.classList.remove("active");
      }
    };
    window.addEventListener("load", toggleBacktotop);
    onscroll(document, toggleBacktotop);
  }

  /**
   * Mobile nav toggle
   */
  on("click", ".mobile-nav-toggle", function (e) {
    select("#navbar").classList.toggle("navbar-mobile");
    this.classList.toggle("bi-list");
    this.classList.toggle("bi-x");
  });

  /**
   * Mobile nav dropdowns activate
   */
  on(
    "click",
    ".navbar .dropdown > a",
    function (e) {
      if (select("#navbar").classList.contains("navbar-mobile")) {
        e.preventDefault();
        this.nextElementSibling.classList.toggle("dropdown-active");
      }
    },
    true
  );

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on(
    "click",
    ".scrollto",
    function (e) {
      if (select(this.hash)) {
        e.preventDefault();

        let navbar = select("#navbar");
        if (navbar.classList.contains("navbar-mobile")) {
          navbar.classList.remove("navbar-mobile");
          let navbarToggle = select(".mobile-nav-toggle");
          navbarToggle.classList.toggle("bi-list");
          navbarToggle.classList.toggle("bi-x");
        }
        scrollto(this.hash);
      }
    },
    true
  );

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener("load", () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
  });

  /**
   * Initiate Gallery Lightbox
   */
  const galelryLightbox = GLightbox({
    selector: ".galelry-lightbox",
  });

  /**
   * Testimonials slider
   */
  new Swiper(".testimonials-slider", {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      1200: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
    },
  });

  /**
   * recent-order slider
   */
  new Swiper(".recent-order-slider", {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
    },
  });

  /**
   * Initiate Pure Counter
   */
  new PureCounter();
  // Input number
  $(".input-number").each(function () {
    var $this = $(this),
      $input = $this.find('input[type="number"]'),
      up = $this.find(".qty-up"),
      down = $this.find(".qty-down");

    down.on("click", function () {
      var value = parseInt($input.val()) - 1;
      value = value < 1 ? 1 : value;
      $input.val(value);
      $input.change();
      updatePriceSlider($this, value);
    });

    up.on("click", function () {
      var value = parseInt($input.val()) + 1;
      $input.val(value);
      $input.change();
      updatePriceSlider($this, value);
    });
  });

  var priceInputMax = document.getElementById("price-max"),
    priceInputMin = document.getElementById("price-min");

  // priceInputMax.addEventListener('change', function(){
  // 	updatePriceSlider($(this).parent() , this.value)
  // });

  // priceInputMin.addEventListener('change', function(){
  // 	updatePriceSlider($(this).parent() , this.value)
  // });

  function updatePriceSlider(elem, value) {
    if (elem.hasClass("price-min")) {
      console.log("min");
      priceSlider.noUiSlider.set([value, null]);
    } else if (elem.hasClass("price-max")) {
      console.log("max");
      priceSlider.noUiSlider.set([null, value]);
    }
  }

  // // Price Slider
  var priceSlider = document.getElementById("price-slider");
  if (priceSlider) {
    noUiSlider.create(priceSlider, {
      start: [1, 999],
      connect: true,
      step: 1,
      range: {
        min: 1,
        max: 999,
      },
    });

    priceSlider.noUiSlider.on("update", function (values, handle) {
      var value = values[handle];
      handle ? (priceInputMax.value = value) : (priceInputMin.value = value);
    });
  }

  // Product Main img Slick
  $("#product-main-img").slick({
    infinite: true,
    speed: 300,
    dots: false,
    arrows: true,
    fade: true,
    asNavFor: "#product-imgs",
  });

  // Product imgs Slick
  $("#product-imgs").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: 0,
    vertical: true,
    asNavFor: "#product-main-img",
    responsive: [
      {
        breakpoint: 991,
        settings: {
          vertical: false,
          arrows: false,
          dots: true,
        },
      },
    ],
  });

  // Product img zoom
  var zoomMainProduct = document.getElementById("product-main-img");
  if (zoomMainProduct) {
    $("#product-main-img .product-preview").zoom();
  }
})();

$(document).on("click", "#edit_address", function () {
  console.log();

  $.ajax({
    type: "POST",
    url: "edtaddress",
    data: {
      add_id: $(this).data("id"),
    },
    success: function (response) {
      console.log(response);
      $("#edit_addr_modal").html(response);

      $("#editaddress").modal("show");
    },
  });
});

var carttable = new DataTable('#carttable', {
  info: false,
  ordering: false,
  paging: false,
  searching: false
});

function adjust() {
  // console.log("test")
  selectedid = [];
  newtotal = 0;

  $(".input-select").each(function () {
    let splitarr = $(this).val().split("-", 2);
    // console.log(splitarr);
    // console.log(splitarr[0]);
    // console.log(splitarr[1]);
    selectedid.push(splitarr[0]);
    newtotal = newtotal + parseInt(splitarr[1]);
    // console.log(selectedid);
  });
  // console.log(newtotal);
  price = document.getElementById("product-price-ori").innerHTML;
  // console.log(price);
  newprice = parseInt(price) + newtotal;
  document.getElementById("product-price-new").innerHTML =
    "RM" + parseFloat(newprice).toFixed(2);
}

function addtoCart() {
  // let text = "";

  // for (let i = 0; i < document.getElementById("option").innerHTML; i++) {
  //   text += test[i] + "<br>";
  // }
  // console.log(text);

  newtotal = 0;
  selectedid = [];
  $(".input-select").each(function () {
    let splitarr = $(this).val().split("-", 2);
    // console.log(splitarr);
    // console.log(splitarr[0]);
    // console.log(splitarr[1]);
    selectedid.push(splitarr[0]);
    newtotal = newtotal + parseInt(splitarr[1]);
    // console.log(selectedid);
    // console.log(newtotal);
  });
  price = document.getElementById("product-price-ori").innerHTML;
  // console.log(price);
  newprice = parseInt(price) + newtotal;
  $.ajax({
    type: "POST",
    url: "addcart",
    data: {
      addcart: {
        user_id: document.getElementById("user_id").innerHTML,
        product_id: document.getElementById("product_id").innerHTML,
        product_option_selected_id: selectedid,
        totalprice: newprice,
      },
    },
    success: function (response) {
      // console.log(response);
      // $('#edit_addr_modal').html(response);
      // $("#editaddress").modal("show");
      localStorage.setItem("cart_adjust", "1");
    },
  });

  // document.cookie = "cart_adjust=1";
}

function deletecart(cart_id) {
  $.ajax({
    type: "POST",
    url: "deletecart",
    data: {
      deletecart: {
        cart_id: cart_id,
      },
    },
    success: function (response) {
      var myEle = document.getElementById("insidecart");

      if (myEle) {
        // myEle.innerHTML = response;
        $.ajax({
          type: "POST",
          url: "updatecart",
          data: {
            test: {
              cart_id: "tesr",
            },
          },
          success: function (response) {
            // console.log(response);

            if (myEle) {
              myEle.innerHTML = response;
            }
            // $('#edit_addr_modal').html(response);
            // $("#editaddress").modal("show");
          },
        });
      } else {
        localStorage.setItem("cart_adjust", "1");
      }
      // localStorage.setItem("cart_adjust", "1");

      // $('#edit_addr_modal').html(response);
      // $("#editaddress").modal("show");
    },
  });
}

// function setback() {
//   localStorage.setItem("cart_adjust", "0");
// }
// setInterval(chechCookie, 500);

window.addEventListener("storage", () => {
  // When local storage changes, dump the list to
  // the console.
  console.log(window.localStorage.getItem("cart_adjust"));
  // localStorage.setItem("cart_adjust", "0");
  var myEle = document.getElementById("insidecart");

  if (window.localStorage.getItem("cart_adjust") != 0) {
    console.log("test3");
  
    if (myEle) {
      // myEle.innerHTML = response;
      $.ajax({
        type: "POST",
        url: "updatecart",
        data: {
          test: {
            cart_id: "tesr",
          },
        },
        success: function (response) {
          // console.log(response);
          var myEle = document.getElementById("insidecart");
  
          if (myEle) {
            myEle.innerHTML = response;
          }
          carttable.reload();
          // $("#editaddress").modal("show");
        },
      });
    }
    
    setTimeout(function () {
      localStorage.setItem("cart_adjust", "0");
    }, 100);
    }



});
