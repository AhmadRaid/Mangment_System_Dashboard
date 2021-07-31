const menu = document.querySelector(".fa-bars"),
    sidebar = document.querySelector(".sidebar"),
    expands = document.querySelectorAll(".expand") || "";

expands.forEach((ex) => {
    ex.onclick = (event) => {
        const element = event.target;
        if (element.classList.contains("fa-expand-arrows-alt")) {
            ex.classList.toggle("growActive");
        } else if (element.classList.contains("fa-compress-alt")) {
            ex.classList.toggle("shrinkActive");
        }
    };
});

menu.onclick = () => {
    sidebar.classList.toggle("active");
};

document.querySelector(".fa-expand").onclick = () => {
    let elem = document.documentElement;
    if (
        !document.fullscreenElement &&
        !document.mozFullScreenElement &&
        !document.webkitFullscreenElement &&
        !document.msFullscreenElement
    ) {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }
};
