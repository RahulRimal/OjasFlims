// Important function for dropdown on hover instead of click starts here


$(document).ready(function () {
  $('.dropdown-toggle').mouseover(function() {
      $('.dropdown-menu').show();
  })

  $('.dropdown-toggle').mouseout(function() {
      t = setTimeout(function() {
          $('.dropdown-menu').hide();
      }, 100);

      $('.dropdown-menu').on('mouseenter', function() {
          $('.dropdown-menu').show();
          clearTimeout(t);
      }).on('mouseleave', function() {
          $('.dropdown-menu').hide();
      })
  })
})

// Important function for dropdown on hover instead of click ends here



// LightSlider Section for main carousel Starts here

$(document).ready(function() {
  $("#lightSlider-main-carousel").lightSlider({
      item: 1,
      autoWidth: false,
      slideMove: 1, // slidemove will be 1 if loop is true
      slideMargin: 10,

      addClass: '',
      mode: "slide",
      useCSS: true,
      cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
      easing: 'linear', //'for jquery animation',////

      speed: 900, //ms'
      auto: true,
      loop: true,
      pauseOnHover: true,
      slideEndAnimation: true,
      pause: 2500,

      keyPress: true,
      controls: true,
      prevHtml: '<i class="fas fa-chevron-circle-left" style="font-size: 30px; color: white;" aria-hidden="true"></i>',
      nextHtml: '<i class="fas fa-chevron-circle-right" style="font-size: 30px; color: white;" aria-hidden="true"></i>',

      rtl:false,
      adaptiveHeight:false,

      vertical:false,
      verticalHeight:500,
      vThumbWidth:100,

      thumbItem:10,
      pager: false,
      gallery: false,
      galleryMargin: 5,
      thumbMargin: 5,
      currentPagerPosition: 'middle',

      enableTouch:true,
      enableDrag:true,
      freeMove:true,
      swipeThreshold: 40,

      responsive : [],

      onBeforeStart: function (el) {},
      onSliderLoad: function (el) {},
      onBeforeSlide: function (el) {},
      onAfterSlide: function (el) {},
      onBeforeNextSlide: function (el) {},
      onBeforePrevSlide: function (el) {}
  });
});

// LightSlider Section for carousel ends here


// LightSlider for courses section Starts here

$(document).ready(function() {
  $("#course-section").lightSlider({
      item: 3,
      autoWidth: false,
      slideMove: 1, // slidemove will be 1 if loop is true
      slideMargin: 10,

      addClass: '',
      mode: "slide",
      useCSS: true,
      cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
      easing: 'linear', //'for jquery animation',////

      speed: 900, //ms'
      auto: true,
      loop: true,
      pauseOnHover: false,
      slideEndAnimation: true,
      pause: 2000,

      keyPress: false,
      controls: true,
      // prevHtml: '<i class="fas fa-chevron-circle-left" style="font-size: 30px; color: black;" aria-hidden="true"></i>',
      // nextHtml: '<i class="fas fa-chevron-circle-right" style="font-size: 30px; color: black;" aria-hidden="true"></i>',
      nextHtml: '',
      prevHtml: '',

      rtl:false,
      adaptiveHeight:false,

      vertical:false,
      verticalHeight:500,
      vThumbWidth:100,

      thumbItem:10, 
      pager: true,
      gallery: false,
      galleryMargin: 5,
      thumbMargin: 5,
      currentPagerPosition: 'middle',

      enableTouch:true,
      enableDrag:true,
      freeMove:true,
      swipeThreshold: 40,

      responsive : [
        {
          breakpoint: 480,
          settings:{
            item: 1,
          }
        }
      ],

      onBeforeStart: function (el) {},
      onSliderLoad: function (el) {},
      onBeforeSlide: function (el) {},
      onAfterSlide: function (el) {},
      onBeforeNextSlide: function (el) {},
      onBeforePrevSlide: function (el) {}
  });
});

// LightSlider for courses section ends here



// LightSlider for our team section Starts here

$(document).ready(function() {
  $("#our-team-carousel").lightSlider({
      item: 4,
      autoWidth: false,
      slideMove: 1, // slidemove will be 1 if loop is true
      slideMargin: 50,

      addClass: '',
      mode: "slide",
      useCSS: true,
      cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
      easing: 'linear', //'for jquery animation',////

      speed: 900, //ms'
      auto: false,
      loop: true,
      pauseOnHover: false,
      slideEndAnimation: true,
      pause: 2000,

      keyPress: false,
      controls: true,
      prevHtml: '<i class="fas fa-chevron-circle-left" style="font-size: 30px; color: black;" aria-hidden="true"></i>',
      nextHtml: '<i class="fas fa-chevron-circle-right" style="font-size: 30px; color: black;" aria-hidden="true"></i>',

      rtl:false,
      adaptiveHeight:false,

      vertical:false,
      verticalHeight:500,
      vThumbWidth:100,

      thumbItem:10, 
      pager: true,
      gallery: false,
      galleryMargin: 5,
      thumbMargin: 5,
      currentPagerPosition: 'middle',

      enableTouch:true,
      enableDrag:true,
      freeMove:true,
      swipeThreshold: 40,

      responsive : [
        {
          breakpoint: 480,
          settings:{
            item: 1,
          }
        }
      ],

      onBeforeStart: function (el) {},
      onSliderLoad: function (el) {},
      onBeforeSlide: function (el) {},
      onAfterSlide: function (el) {},
      onBeforeNextSlide: function (el) {},
      onBeforePrevSlide: function (el) {}
  });
});

// LightSlider for our team section ends here


// LightSlider for our client feedback section Starts here

$(document).ready(function() {
  $("#client-feedback-carousel").lightSlider({
      item: 1,
      autoWidth: false,
      slideMove: 1, // slidemove will be 1 if loop is true
      slideMargin: 50,

      addClass: '',
      mode: "slide",
      useCSS: true,
      cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
      easing: 'linear', //'for jquery animation',////

      speed: 900, //ms'
      auto: true,
      loop: true,
      pauseOnHover: false,
      slideEndAnimation: true,
      pause: 2000,

      keyPress: false,
      controls: true,
      prevHtml: '<i class="fas fa-chevron-circle-left" style="font-size: 30px; color: black;" aria-hidden="true"></i>',
      nextHtml: '<i class="fas fa-chevron-circle-right" style="font-size: 30px; color: black;" aria-hidden="true"></i>',

      rtl:false,
      adaptiveHeight:false,

      vertical:false,
      verticalHeight:500,
      vThumbWidth:100,

      thumbItem:10, 
      pager: false,
      gallery: false,
      galleryMargin: 5,
      thumbMargin: 5,
      currentPagerPosition: 'middle',

      enableTouch:true,
      enableDrag:true,
      freeMove:true,
      swipeThreshold: 40,

      responsive : [
        {
          breakpoint: 480,
          settings:{
            item: 1,
          }
        }
      ],

      onBeforeStart: function (el) {},
      onSliderLoad: function (el) {},
      onBeforeSlide: function (el) {},
      onAfterSlide: function (el) {},
      onBeforeNextSlide: function (el) {},
      onBeforePrevSlide: function (el) {}
  });
});

// LightSlider for our client feedback section ends here


// Home page simple-lightbox gallery starts here



// Home page simple-lightbox gallery ends here






// Pic gallery page starts here

$(document).ready(function(){
  $('.nailthumb-container').nailthumb({
    // width:300, height:300,
    method:'resize',
    // fitDirection: 'bottom center',
});
});

$('.pic-gallery-page a').simpleLightbox();

// simple-lightbox gallery starts here


// simple-lightbox gallery ends here




// Pic gallery page ends here



