import './bootstrap';
import Swal from 'sweetalert2'
window.Swal = Swal

document.addEventListener("DOMContentLoaded", function () {
    console.log("JavaScript Loaded!");

    const menuToggle = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
            console.log("Hamburger menu toggled");
        });
    } else {
        console.error("Hamburger menu elements not found!");
    }

    const slides = document.querySelectorAll(".slide");
    const buttons = document.querySelectorAll(".slider-button");
    const prevButton = document.querySelector(".prev-button");
    const nextButton = document.querySelector(".next-button");
    let currentIndex = 0;

    if (slides.length && buttons.length && prevButton && nextButton) {
        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle("hidden", i !== index);
            });
            buttons.forEach((button, i) => {
                button.classList.toggle("bg-yellow-500", i === index);
                button.classList.toggle("bg-gray-300", i !== index);
                button.classList.toggle("text-white", i === index);
                button.classList.toggle("text-gray-700", i !== index);
            });
        }

        buttons.forEach((button, index) => {
            button.addEventListener("click", () => {
                console.log(`Button ${index} clicked`);
                currentIndex = index;
                showSlide(currentIndex);
            });
        });

        prevButton.addEventListener("click", () => {
            console.log("Prev Button clicked");
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        });

        nextButton.addEventListener("click", () => {
            console.log("Next Button clicked");
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        });

        showSlide(currentIndex);
    } else {
        console.warn("Slider elements not found, skipping slider logic.");
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById('aspiration-form');

    if (!form) {
        console.warn("Form dengan ID 'aspiration-form' tidak ditemukan.");
        return;
    }

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: data.message,
                        icon: 'success',
                    });
                }
            });
    });
});



