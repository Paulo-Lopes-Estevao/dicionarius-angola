let row = document.querySelector(".row");

window.addEventListener("load", e => {
	loadDialetus();
});

const loadDialetus = async () => {
	const res = await fetch("./database/drinks.json");
	const data = await res.json();

	row.innerHTML = data.map(renderHTML).join("");
}

const renderHTML = word => {
	return ` 
		<div class="col-md-3" id="colun">
			<h3 class="text-center">${word.dialect}</h3>
            <span>Significado</span>
            <p>${word.meanings}</p>
            <span>Exemplos:</span>
            <p>${word.examples}</p>
        </div>
	`;
}
