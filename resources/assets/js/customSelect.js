const customSelect = (select, array) => {
	const list = select.querySelector(".custom-select__list");
	const input = select.querySelector(".custom-select__input");

	const createListItem = (text, id) => {
		const elem = document.createElement("div");
		elem.innerText = text;
		elem.classList.add("custom-select__item");
		elem.dataset.value = id;

		elem.addEventListener("click", () => {
			input.value = elem.innerText;
		});
		return elem;
	};

	const renderList = (array) => {
		list.innerHTML = "";

		const listToRender = array.map((service) => {
			return createListItem(service.name, service.id);
		});

		listToRender.forEach((item) => {
			list.appendChild(item);
		});
	};

	renderList(array);

	const windowListener = () => {
		list.classList.remove("list-open");
		window.removeEventListener("click", windowListener);
	};

	input.addEventListener("click", (e) => {
		e.stopPropagation();
		list.classList.add("list-open");
		window.addEventListener("click", windowListener);
	});

	const inputHandler = () => {
		const newArr = array.filter((item) => item.name.toLowerCase().includes(input.value.toLowerCase()));
		renderList(newArr);
	};

	input.oninput = inputHandler;
};

export default customSelect;
