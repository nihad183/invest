
document.addEventListener("DOMContentLoaded", function(){

  const toggle = document.querySelector(".menu-toggle");
  const menu = document.querySelector(".nav-menu");
  const navbar = document.querySelector(".navbar");

 toggle.addEventListener("click", function(){
    menu.classList.toggle("active");
    const isOpen = menu.classList.contains("active");
    toggle.setAttribute("aria-expanded", isOpen);
    toggle.innerHTML = isOpen ? "&times;" : "&#9776;";
});


  window.addEventListener("scroll", function(){
    if(window.scrollY > 50){
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

});

  function revealOnScroll() {
    const reveals = document.querySelectorAll(".reveal");

    reveals.forEach((element) => {
        const windowHeight = window.innerHeight;
        const elementTop = element.getBoundingClientRect().top;
        const revealPoint = 100;

        if (elementTop < windowHeight - revealPoint) {
            element.classList.add("active");
        }
    });
}
window.addEventListener("scroll", revealOnScroll);

