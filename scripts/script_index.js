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
let aside = document.querySelector("aside");
let main = document.querySelector("main");
let burgerToggle = false;

burgerButton.addEventListener("click", () => {
	//ajouter le temps de transition
	aside.style.transition = "0.5s";
	main.style.transition = "0.5s";

	//condition
	if (!burgerToggle) {
		aside.style.transform = "translateX(0)";
		main.style.transform = "translateX(-100%)";
	} else {
		aside.style.transform = "translateX(100%)";
		main.style.transform = "translateX(0)";
	}
	burgerToggle = !burgerToggle;

	//supprimer le temps de transition
	setTimeout(() => {
		aside.style.transition = "0";
		main.style.transition = "0";
	}, 500);
});
