/* Toggle between adding and removing the "responsive" class to navigationBar when the user clicks on the icon */
(function () {
	"use strict";
	window.jd = window.jd || {};
}());

jd.vars = {
	locationsConstruct: '<a class="ajax-nav" href="day.php">Day</a><a class="ajax-nav" href="night.php">Night</a>',
	isTaken: 0,
	resBool: true,
	rotateInterval: 0,
	rotateCount: 1,
	imageList: ["home_1.JPG", "home_2.jpg", "home_3.jpg", "home_4.jpg", "home_5.JPG", "home_6.JPG"]
};
jd.funcs = {
	newImg: function() {
		if(jd.vars.rotateCount >= jd.vars.imageList.length) {
			jd.vars.rotateCount = 0;
		}
		var constr = "includes/images/" + jd.vars.imageList[jd.vars.rotateCount];
		jd.vars.rotateCount += 1;
		return constr;
	},
	imageRotate: function() {
		if(document.getElementById("mainimg") !== null) {
			var imgHolder = document.getElementById("mainimg");
			imgHolder.setAttribute("src", jd.funcs.newImg());
		}
	}
};
jd.navi = {
	menuShow: function() {
		var navBar = document.getElementById("naviBar");
		if (navBar.className === "navigationBar") {
			navBar.className += " responsive";
		} else {
			navBar.className = "navigationBar";
		}
	},
	showDayNight: function() {
		document.getElementById("naviLocations").classList.toggle("yesShow");
		//document.getElementById("naviLocations").innerHTML = jd.vars.locationsConstruct;
	},
	injectHtml: function() {
		document.getElementById("naviLocations").innerHTML = "<a class=\"ajax-nav\" href=\"day\">Day</a><a class=\"ajax-nav\" href=\"night\">Night</a>"
	}
};

jd.rsvp = {
	noneEmpty: function(id) {
		if(document.getElementsByName(id)[0].value != "") {
			return true;
		} else {
			return false;
		}
	},
	valEmail: function() {
			var emailaddr = document.getElementById("email").value;
			var resBool = true;
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					jd.vars.isTaken = this.responseText;
					if (jd.vars.isTaken > 0) {
						jd.vars.resBool =  false;
					} else {
						jd.vars.resBool = true;
					}
			}
		};
		xhttp.open("GET", "check_email.php?email="+emailaddr, false);
		xhttp.send();
		return jd.vars.resBool;
	}
};

jd.init = function() {
	document.getElementById("naviBar").addEventListener("click", jd.navi.menuShow);
	//document.getElementById("naviLocation").addEventListener("click", jd.navi.showDayNight);
	if(document.getElementById("mainimg") !== null) {
		setInterval(jd.funcs.imageRotate, 3000);
	}
	if(document.getElementById("email")) {
		var email = document.getElementById("email");

		email.addEventListener("input", function (event) {
		  if (!jd.rsvp.valEmail()) {
		    email.setCustomValidity("This email address is already in use!");
		  } else {
		    email.setCustomValidity("");
		  }
		});
	}
};


//Page load init call
var funcCalled = 0;
(function () {
	if (document.addEventListener) {
		document.addEventListener("DOMContentLoaded", function () {
			jd.init()
		}, !1)
	} else {
		if (document.all && !window.opera) {
			document.write('<script type="text/javascript" id="contentLoadTest" defer="defer" src="javascript:void(0)"><\/script>'), document.getElementById("contentLoadTest").onreadystatechange = function () {
				"complete" == this.readyState && jd.init()
			}
		} else {
			if (/Safari/i.test(navigator.userAgent)) {
				var a = setInterval(function () {
					/loaded|complete/.test(document.readyState) && (clearInterval(a), jd.init())
				}, 10)
			} else {
			window.onload = function () {
		setTimeout("if (!funcCalled) jd.init()", 0)
	};
}
		}
	}
	return;
})();
