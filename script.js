cookie = document.querySelector("section.cookie");
cookie.style.transform = "translateX(300px)";
cookie.style.transition = "0.2s";

window.onload = setTimeout(() => {
	cookie.style.transform = "translateX(0)";
}, 5000);

document.querySelector(".cookie.false").addEventListener("click", () => {
	cookie.style.transform = "translateX(300px)";
});
