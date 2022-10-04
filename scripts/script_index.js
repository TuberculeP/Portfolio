var path = window.location.pathname;
var page = path.split("/").pop();

//discord animation
let discordClicked = false;
document.querySelector("#discord").addEventListener("click", () => {
	let titre = document.querySelector("h1");
	titre.style.transition = "0.2s";
	titre.style.transform = "scale(1,0)";
	setTimeout(() => {
		if (discordClicked) {
			titre.innerHTML = "FÉLIX LAVIÉVILLE";
		} else {
			titre.innerHTML = 'Tubercule Poirot<span class="hashtag">#6113</span>';
		}
		discordClicked = !discordClicked;
		titre.style.transform = "scale(1)";
	}, 200);
	console.log("Discord Clicked");
});

//reseaux animation

setTimeout(() => {
	document.querySelectorAll(".hidden").forEach((object, index) => {
		setTimeout(() => {
			object.classList.remove("hidden");
			object.style.transition = "0.5s";
		}, 200 * index);
	});
}, 500);

//burger

let burgerButton = document.querySelector("#burger");
let header = document.querySelector("header");
let main = document.querySelector("main");
let burgerToggle = false;

burgerButton.addEventListener("click", () => {
	main.style.transition = "0.5s ease-in-out";
	if (burgerToggle) {
		main.style.transform = "translateX(0)";
	} else {
		main.style.transform = "translateX(-100vw)";
	}
	burgerToggle = !burgerToggle;
	setTimeout(() => {
		main.style.transition = "0";
	}, 500);
});
