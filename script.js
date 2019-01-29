$('.menu-btn').on('click', function(e) {
  e.preventDefault();
  $('.menu').toggleClass('menu_active');
  $('.content').toggleClass('content_active');
});


$('.menu-btn').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('menu-btn_active');
});



window.onload = function () {
	document.getElementById("menu-btn").onclick = function () {
		/*var x = document.getElementById('myVer');
		if (x.className === "sale" ) {
			x.className += " responsive";
		} else {
			x.className = "sale";
		}

		var x = document.getElementById('myVer2');
		if (x.className === "advantages_total") {
			x.className += " responsive";
		} else {
			x.className = "advantages_total";
		}

		var x = document.getElementById('myVer3');
		if (x.className === "order-form") {
			x.className += " responsive";
		} else {
			x.className = "order-form";
		}


		var x = document.getElementById('myVer4');
		if (x.className === "location") {
			x.className += " responsive";
		} else {
			x.className = "location";
		}*/

		var x = document.getElementById('myVer_header');
		if (x.className === "header") {
			x.className += " responsive";
		} else {
			x.className = "header";
		}


		/*var x = document.getElementById('myVer_media-content');
		if (x.className === "media-content") {
			x.className += " responsive";
		} else {
			x.className = "media-content";
		}
		var x = document.getElementById('myVer_sale-words');
		if (x.className === "sale-words") {
			x.className += " responsive";
		} else {
			x.className = "sale-words";
		}


	}
};


/*window.onload = function () {
	document.getElementById("menu-btn").onclick = function () {
		var x = document.getElementById('myVer');
		if (x.className === "advantages_total") {
			x.className += " responsive";
		} else {
			x.className = "advantages_total";
		}*/


	}
};