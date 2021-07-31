function changeImage(event) {
	if (event.target.files.length > 0) {
		let src = URL.createObjectURL(event.target.files[0]);
		let img_box = document.querySelector(".img-box");
		let image = document.createElement("img");
		image.src = src;
		image.style.display = "block";
		img_box.innerHTML = "";
		img_box.appendChild(image);
	}
}

const properties_box = document.querySelector(".ask-box");
const fields = document.querySelectorAll("input[type=radio][name=check]");
fields.forEach((field) => {
	field.onchange = function (e) {
		if (e.target.value === "0") {
			properties_box.classList.add("hidden");
		} else {
			properties_box.classList.remove("hidden");
		}
	};
});
