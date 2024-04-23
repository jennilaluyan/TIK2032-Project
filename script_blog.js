document.addEventListener("DOMContentLoaded", function() {
    const toTopButton = document.createElement("button");
    toTopButton.innerHTML = "Back to Top";
    toTopButton.classList.add("to-top-button");

    document.body.appendChild(toTopButton);

    toTopButton.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    window.addEventListener("scroll", function() {
        if (window.pageYOffset > 100) {
            toTopButton.style.display = "block";
        } else {
            toTopButton.style.display = "none";
        }
    });
});
