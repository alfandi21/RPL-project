/** @format */

/* ===== GREETINGS =====  */
const date = new Date();
const hour = date.getHours();
let time;
if (hour < 12) {
	time = "Morning";
}
if (hour >= 12 && hour < 18) {
	time = "Afternoon";
}
if (hour >= 18) {
	time = "Evening";
}
let greetings = document.querySelector(".greetings");
greetings.innerHTML = `Good ${time}, <span class="text-success">Admin</span>`;
