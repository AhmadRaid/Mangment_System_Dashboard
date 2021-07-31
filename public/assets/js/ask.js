const fields = document.querySelectorAll(".ask");
fields.forEach((field) => {
    field.onchange = function (e) {
        if (e.target.getAttribute("type") === "radio") {
            if (e.target.value === "0") {
                field.querySelector(".ask-box").classList.add("hidden");
            } else {
                field.querySelector(".ask-box").classList.remove("hidden");
            }
        }
    };
});
