/* Toggle between adding and removing the "responsive" class to navigationBar when the user clicks on the icon */
(function () {
	"use strict";
	window.jd = window.jd || {};
}());

jd.vars = {
	locationsConstruct: '<a class="ajax-nav" href="day.php">Day</a><a class="ajax-nav" href="night.php">Night</a>'
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
	}
};

jd.init = function() {
	document.getElementById("naviBar").addEventListener("click", jd.navi.menuShow);
	document.getElementById("naviLocation").addEventListener("click", jd.navi.showDayNight);
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