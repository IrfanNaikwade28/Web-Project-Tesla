function changeColr() {
  const slider = document.getElementById("Slider");
    const navLinks = document.querySelectorAll(".navbar a");
    var icon = document.getElementById("icon");
    const scrollPosition = slider.scrollTop;

    if (scrollPosition.toFixed() > 850) {
      navLinks.forEach((a) => {
        a.style.color = "#000000";
        icon.src = "assets/img/Tesla-Black-logo.svg";
      });
    } else {
      navLinks.forEach((a) => {
        a.style.color = "white";
        icon.src = "assets/img/Tesla-White-logo.svg";
      });
    }
}