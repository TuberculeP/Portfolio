let path = window.location.pathname;
tempPath = path.split("/");
let page = tempPath.pop();
let pageDir = tempPath.pop();
if(page ==="") page = "index.html";
console.log("Path : "+path+" | Dir : "+pageDir+" | Page : "+page);

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
		aside.style.transition = "0s";
		main.style.transition = "0";
	}, 500);
});

//animations de l'accueil
if(page==="index.html" && (path ==="/" || pageDir ==="/Portfolio/")){
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
	//réseaux animation

	setTimeout(() => {
		document.querySelectorAll(".hidden").forEach((object, index) => {
			setTimeout(() => {
				object.classList.remove("hidden");
				object.style.transition = "0.5s";
			}, 200 * index);
		});
	}, 500);
}

//bouton projet

if(page==="index.html" && pageDir ==="projets"){
	let randomDuPif = document.querySelector("button");
	let listeProjets = document.querySelectorAll("ul a");
	randomDuPif.addEventListener('click', ()=>{
		window.location.href = listeProjets[Math.floor(Math.random() * listeProjets.length)].href;
	})

	document.querySelectorAll("ul li").forEach((item, index)=>{
		setTimeout(()=>{
			item.style.transition = "0.5s ease-out";
			item.classList.remove("list-hidden");
			console.log(index);
		}, 300*index);
	})

}
