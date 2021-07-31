const dropdown = document.querySelector('.dropdown');
$(".sidebar ul li").on("click", function () {
  $(".sidebar ul .active").removeClass("active");
  $(this).addClass("active");
});
const sidebar = document.querySelector(".sidebar");
const menuIcon = document.querySelector(".navbar .icon i");

// when clicking on menu icon on the top of page at navbar ===>> [toggle (show/hide) sidebar]
menuIcon.onclick = (event) => {
  sidebar.classList.toggle("active");
};
 