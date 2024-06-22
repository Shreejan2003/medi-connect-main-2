const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle");

console.log({ sidebar });
toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});


document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll(".nav-link");
  console.log({ navLinks });

  const tabContents = document.querySelectorAll(".tab-content");

  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      const tab = this.getAttribute("data-tab");

      navLinks.forEach((link) => link.classList.remove("active"));
      this.classList.add("active");

      tabContents.forEach((content) => {
        if (content.id === tab) {
          content.classList.add("active");
        } else {
          content.classList.remove("active");
        }
      });
    });
  });
});
