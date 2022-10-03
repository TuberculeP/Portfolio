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
