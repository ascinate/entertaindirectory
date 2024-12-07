$(document).ready(function() {

    $( window ).scroll(function() {

          var height = $(window).scrollTop();

          if(height >= 100) {

              $('header').addClass('fixed-menu');

          } else {

              $('header').removeClass('fixed-menu');

          }

      });

});



 $(document).ready(function(){



	$('.just-sliders').owlCarousel({

	   loop: true,

	   margin:20,

	   autoplay:true,

	   nav:false,

	   dots:true,

	   responsive: {

		   0: {

			   items:1

		   },

		   600: {

			   items:1

		   },

		   667: {

			 items:2

		   },

		   1000: {

			   items:3

		   },

		   1200: {

			items:4

		   }

	   }

	})

	$('.products-slider').owlCarousel({

		loop: true,

		margin:20,

		autoplay:true,

		nav:false,

		dots:true,

		responsive: {

			0: {

				items:1

			},

			600: {

				items:1

			},

			667: {

			  items:2

			},

			1000: {

				items:3

			},

			1200: {

			 items:4

			}

		}

	 })

	 $('.blogs').owlCarousel({

		loop: true,

		margin:20,

		autoplay:true,

		nav:false,

		dots:true,

		responsive: {

			0: {

				items:1

			},

			600: {

				items:1

			},

			667: {

			  items:2

			},

			1000: {

				items:3

			},

			1200: {

			 items:4

			}

		}

	 })

	 $('.occurs-filters2').owlCarousel({

		loop: true,

		margin:30,

		autoplay:true,

		nav:false,

		dots:true,

		responsive: {

			0: {

				items:1

			},

			600: {

				items:1

			},

			667: {

			  items:2

			},

			1000: {

				items:3

			},

			1200: {

			 items:2

			}

		}

	 })



	$('.shop-slider').owlCarousel({

		loop: true,

		margin:20,

		autoplay:true,

		nav:false,

		dots:true,

		responsive: {

			0: {

				items:1

			},

			600: {

				items:1

			},

			667: {

			  items:2

			},

			1000: {

				items:3

			},

			1200: {

			 items:4

			}

		}

	 })

	 $('.offers').owlCarousel({

		loop: false,
 
		margin:20,
 
		autoplay:true,
 
		nav:false,
 
		dots:true,
 
		responsive: {
 
			0: {
 
				items:1
 
			},
 
			600: {
 
				items:1
 
			},
 
			667: {
 
			  items:2
 
			},
 
			1000: {
 
				items:3
 
			},
 
			1200: {
 
			 items:4
 
			}
 
		}
 
	 })



	







});





$(document).ready(function() {

    $( window ).scroll(function() {

          var height = $(window).scrollTop();

          if(height >= 100) {

              $('header').addClass('fixed-menu');

          } else {

              $('header').removeClass('fixed-menu');

          }

      });

  });







  $(document).ready(function(){



	$(".collist").slice(0, 12).show();

	$(".load-more3").click(function(e){

		e.preventDefault();

		$(".collist:hidden").slice(0, 6).slideDown();

		if ($(".collist:hidden").length == 0) {

			$(".load-more3").fadeOut("slow");

		}

	});



	



	

});





$(document).ready(function() {

	$('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});

	$('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});

	$('#list').click(function(event){event.preventDefault();$('#products .item').removeClass('grid-group-item');});

  });

  

  $(document).ready(function(){

  $('.listed-bn ul li a').click(function(){

	$('.listed-bn li a').removeClass("active");

	$(this).addClass("active");

  });

});







$(document).ready(function () {

	var sync1 = $("#sync1");

	var sync2 = $("#sync2");

	var slidesPerPage = 3; //globaly define number of elements per page

	var syncedSecondary = true;

  

	sync1

	  .owlCarousel({

		items: 1,

		slideSpeed: 2000,

		nav: false,

		autoplay: false,

		dots: false,

		loop: true,

		responsiveRefreshRate: 200,

		

	  })

	  .on("changed.owl.carousel", syncPosition);

  

	sync2

	  .on("initialized.owl.carousel", function () {

		sync2.find(".owl-item").eq(0).addClass("current");

	  })

	  .owlCarousel({

		items: slidesPerPage,

		dots: true,

		nav: false,

		smartSpeed: 200,

		slideSpeed: 500,

		slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel

		responsiveRefreshRate: 100

	  })

	  .on("changed.owl.carousel", syncPosition2);

  

	function syncPosition(el) {

	  //if you set loop to false, you have to restore this next line

	  //var current = el.item.index;

  

	  //if you disable loop you have to comment this block

	  var count = el.item.count - 1;

	  var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

  

	  if (current < 0) {

		current = count;

	  }

	  if (current > count) {

		current = 0;

	  }

  

	  //end block

  

	  sync2

		.find(".owl-item")

		.removeClass("current")

		.eq(current)

		.addClass("current");

	  var onscreen = sync2.find(".owl-item.active").length - 1;

	  var start = sync2.find(".owl-item.active").first().index();

	  var end = sync2.find(".owl-item.active").last().index();

  

	  if (current > end) {

		sync2.data("owl.carousel").to(current, 100, true);

	  }

	  if (current < start) {

		sync2.data("owl.carousel").to(current - onscreen, 100, true);

	  }

	}

  

	function syncPosition2(el) {

	  if (syncedSecondary) {

		var number = el.item.index;

		sync1.data("owl.carousel").to(number, 100, true);

	  }

	}

  

	sync2.on("click", ".owl-item", function (e) {

	  e.preventDefault();

	  var number = $(this).index();

	  sync1.data("owl.carousel").to(number, 300, true);

	});

});







jQuery(document).ready(function () {

	ImgUpload();

  });

  

  function ImgUpload() {

	var imgWrap = "";

	var imgArray = [];

  

	$('.upload__inputfile').each(function () {

	  $(this).on('change', function (e) {

		imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');

		var maxLength = $(this).attr('data-max_length');

  

		var files = e.target.files;

		var filesArr = Array.prototype.slice.call(files);

		var iterator = 0;

		filesArr.forEach(function (f, index) {

  

		  if (!f.type.match('image.*')) {

			return;

		  }

  

		  if (imgArray.length > maxLength) {

			return false

		  } else {

			var len = 0;

			for (var i = 0; i < imgArray.length; i++) {

			  if (imgArray[i] !== undefined) {

				len++;

			  }

			}

			if (len > maxLength) {

			  return false;

			} else {

			  imgArray.push(f);

  

			  var reader = new FileReader();

			  reader.onload = function (e) {

				var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";

				imgWrap.append(html);

				iterator++;

			  }

			  reader.readAsDataURL(f);

			}

		  }

		});

	  });

	});

  

	$('body').on('click', ".upload__img-close", function (e) {

	  var file = $(this).parent().data("file");

	  for (var i = 0; i < imgArray.length; i++) {

		if (imgArray[i].name === file) {

		  imgArray.splice(i, 1);

		  break;

		}

	  }

	  $(this).parent().parent().remove();

	});

  }







  $(document).ready(function() {

	if (window.File && window.FileList && window.FileReader) {

	  $("#files").on("change", function(e) {

		var files = e.target.files,

		  filesLength = files.length;

		for (var i = 0; i < filesLength; i++) {

		  var f = files[i]

		  var fileReader = new FileReader();

		  fileReader.onload = (function(e) {

			var file = e.target;

			$("<div class=\"img-thumb-wrapper card shadow\">" +

			  "<img class=\"img-thumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +

			  "<br/><span class=\"remove\">Remove</span>" +

			  "</div>").insertAfter("#files");

			$(".remove").click(function(){

			  $(this).parent(".img-thumb-wrapper").remove();

			});

			

		  });

		  fileReader.readAsDataURL(f);

		}

		console.log(files);

	  });

	} else {

	  alert("Your browser doesn't support to File API")

	}

});









// drag drop



(function() {

	var dragged, listener;



	console.clear();



	dragged = null;



	listener = document.addEventListener;



	listener("dragstart", (event) => {

	  console.log("start !");

	  return dragged = event.target;

	});



	listener("dragend", (event) => {

	  return console.log("end !");

	});



	listener("dragover", function(event) {

	  return event.preventDefault();

	});



	listener("drop", (event) => {

	  console.log("drop !");

	  event.preventDefault();

	  if (event.target.className === "dropzone") {

		dragged.parentNode.removeChild(dragged);

		return event.target.appendChild(dragged);

	  }

	});



  }).call(this);





$(document).ready(function() {

  $('.file-input').change(function(){

    var curElement = $('.image');

    console.log(curElement);

    var reader = new FileReader();



    reader.onload = function (e) {

        curElement.attr('src', e.target.result);

    };

    reader.readAsDataURL(this.files[0]);

  });

});

$(document).ready(function() {

$(".edti").click(function (e) {

	e.preventDefault();

	$(".content").removeClass("active");

	var content_id = $(this).attr("href");

	$(content_id).addClass("active");

});

$(".cancle").click(function (e) {

	e.preventDefault();

	var content_id = $(this).attr("href");

	$(content_id).removeClass("active");

});

});


$(document).ready(function() {

    $('input:radio[name=priceches]').click(function () {
		$('.price-tags').html();
			if ($(this).val() == 'one') {
				$('.price-tags').text('$150.00');
			}if ($(this).val() == 'two') {
				$('.price-tags').text('$140.00');
			}if ($(this).val() == 'six') {
				$('.price-tags').text('$340.00');
			}
	});

});