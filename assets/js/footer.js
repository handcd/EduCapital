const items = document.querySelectorAll(".list-group-item[data-toggle='collapse'");

function cambiarFondo(e){
	setTimeout(() => {
		if ($(this).attr('aria-expanded') === "false") {
			$(this).removeClass('list-group-item-active');
		} else {
			$(this).addClass('list-group-item-active');
		}
	},100);
}

items.forEach(item => item.addEventListener('click', cambiarFondo));