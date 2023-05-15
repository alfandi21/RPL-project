/** @format */

/* ===== PRELOAD =====  */
onload = function () {
	if (localStorage.getItem("maximized")) {
		localStorage.getItem("maximized");
		document.querySelector(".sidebar").classList.add("maximize");
		document.querySelector("#maximize").classList.toggle("d-none");
		document.querySelector("#maximize").classList.toggle("d-flex");
		document.querySelector("#minimize").classList.toggle("d-flex");
		document.querySelector("#minimize").classList.toggle("d-none");
		localStorage.setItem("maximized", true);
	}
	document.body.classList.toggle("d-none");
	document.body.classList.toggle("d-flex");
};

/* ===== TOGGLE SIDEBAR =====  */
document.querySelector(".toggle").addEventListener("click", function () {
	document.querySelector(".sidebar").classList.toggle("maximize");
	document.querySelector("#maximize").classList.toggle("d-none");
	document.querySelector("#maximize").classList.toggle("d-flex");
	document.querySelector("#minimize").classList.toggle("d-flex");
	document.querySelector("#minimize").classList.toggle("d-none");
	if (localStorage.getItem("maximized")) {
		localStorage.removeItem("maximized");
	} else {
		localStorage.setItem("maximized", true);
	}
});
