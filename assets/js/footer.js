const items = document.querySelectorAll(".list-group-item[data-toggle='collapse'");
const color = '#1E1E34';

function cambiarFondo(e){
	setTimeout(() => {
		if ($(this).attr('aria-expanded') === "false") {
			this.style.backgroundColor = '#ffffff';
			this.style.color = '#333';
		} else {
			this.style.backgroundColor = color;
			this.style.color = '#ffffff';
		}
	},100);
}

items.forEach(item => item.addEventListener('click', cambiarFondo));