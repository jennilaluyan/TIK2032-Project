document.addEventListener("DOMContentLoaded", function() {
    const boxes = document.querySelectorAll(".box-link");

    boxes.forEach(box => {
        box.addEventListener("mouseenter", function() {
            this.style.transform = "scale(1.1)";
            this.style.transition = "transform 0.3s ease";
        });

        box.addEventListener("mouseleave", function() {
            this.style.transform = "scale(1)";
            this.style.transition = "transform 0.3s ease";
        });
    });
});
