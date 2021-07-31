const editIcons = document.querySelectorAll("table .edit-tr") || "",
    popUp = document.querySelector(".popup") || "",
    popBox = document.querySelector(".popup .box") || "",
    closeBtn = document.querySelector(".popup .box i") || "",
    deleteIcons = document.querySelectorAll("table .delete-tr") || "",
    deleteBox = document.querySelector(".box .deleteBox") || "",
    formBox = document.querySelector(".box form") || "",
    noBtn = document.querySelector(".box .no-btn") || "",
    yesBtn = document.querySelector(".box .yes-btn") || "";

const removeClass = (theClass) => {
    popUp.classList.remove(theClass);
    popBox.classList.remove(theClass);
};

const addClass = (theClass) => {
    popUp.classList.add(theClass);
    popBox.classList.add(theClass);
};

const showPopUp = () => {
    addClass("active");
};

const hidePopUp = () => {
    removeClass("active");
};

const clearClasses = () => {
    formBox.removeAttribute("class");
    deleteBox.removeAttribute("class");
};

editIcons.forEach((icon) => {
    icon.onclick = (event) => {
        clearClasses();
        formBox.classList.add("show");
        deleteBox.classList.add("hidden");
        showPopUp(event);
    };
});

deleteIcons.forEach((icon) => {
    icon.onclick = (event) => {
        clearClasses();
        formBox.classList.add("hidden");
        deleteBox.classList.add("show");
        showPopUp(event);

        // remove row from table when clicking on yes of remove box
        yesBtn.onclick = (e) => {
            event.target.parentElement.parentElement.remove();
            hidePopUp(e);
        };
    };
});

closeBtn.onclick = (event) => hidePopUp(event);
noBtn.onclick = (event) => hidePopUp(event);

popUp.onclick = () => {
    removeClass("active");
};

popBox.onclick = (event) => event.stopPropagation();
