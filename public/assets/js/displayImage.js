const img_box = document.querySelector(".img-box");
// function to upload image and display it in page
function changeImage(event) {
	if (event.target.files.length > 0) {
		let src = URL.createObjectURL(event.target.files[0]);
		let image = document.createElement("img");
		image.src = src;
		image.style.display = "block";
		img_box.innerHTML = "";
		img_box.appendChild(image);
	}
	if (img_box.childElementCount === 0) {
		img_box.style.display = "none";
	} else {
		img_box.style.display = "block";
	}
}
