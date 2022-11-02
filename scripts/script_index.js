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

//background-color automatique du burger

/* La hauteur de l'écran se situe entre 0 et hauteurTotale
* La couleur doit évoluer entre (G23,B38) => (G42,B46)
* Tentons de créer une fonction de compute transition
* */
function compute_transition(value1, value2, maxheight, height) {
	let diff = Math.abs(value2 - value1);
	let percentage = height/maxheight;
	return value1 + Math.floor(diff*percentage)
}
let hauteurTotale = document.body.clientHeight;
window.onscroll = () =>{
	burgerButton.style.backgroundColor = `rgb(
	38, 
	${compute_transition(23, 42, hauteurTotale, window.scrollY)},
	 ${compute_transition(38, 46, hauteurTotale, window.scrollY)}`;
}


//animations de l'accueil
if(document.body.classList.contains("home")){
	//discord animation

	document.querySelector('#navAccueil').classList.add("active");


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
				setTimeout(()=>{
					object.style.transition = "0.1s";
				}, 500)
			}, 200 * index);
		});
	}, 500);

	//icones languages
	document.querySelectorAll(".languages div i").forEach(icon =>{
		icon.addEventListener('mouseover', ()=>{
			icon.classList.add('colored');
		})
		icon.addEventListener('mouseleave', () =>{
			icon.classList.remove('colored');
		})
	})
}

//bouton projet

if(document.body.classList.contains("project")){

	document.querySelector('#navProjet').classList.add("active");

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
