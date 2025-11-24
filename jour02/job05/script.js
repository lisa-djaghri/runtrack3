window.addEventListener("scroll", function () {
    const footer = document.querySelector("footer");

    const scrollMax = document.documentElement.scrollHeight - window.innerHeight;

    const percent = window.scrollY / scrollMax;

    const red = Math.round(255 * (1 - percent));
    const green = Math.round(255 * percent);

    footer.style.backgroundColor = `rgb(${red}, ${green}, 0)`;
});