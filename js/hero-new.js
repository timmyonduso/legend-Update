const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active")
})


const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");
let currentSlide = 0;

const sliderNav = function (manual) {
    btns.forEach((btn) => {
        btn.classList.remove("active");
    });

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    contents.forEach((content) => {
        content.classList.remove("active");
    });

    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");

    currentSlide = manual;
};

const nextSlide = function () {
    currentSlide = (currentSlide + 1) % btns.length;
    sliderNav(currentSlide);
};

// Set the interval to 8 seconds (8000 milliseconds)
const slideInterval = setInterval(nextSlide, 8000);

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);
        // Reset the interval when a button is clicked
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 8000);
    });
});
