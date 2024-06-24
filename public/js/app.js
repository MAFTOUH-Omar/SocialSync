import '../../resources/js/bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


let photoProfile = document.getElementById("photoProfile");
let changePhoto = document.getElementById("changePhoto");

photoProfile.addEventListener("click", () => {
	changePhoto.classList.toggle("active");
});

// -------------------Post------------------------------
let infoPosts = document.querySelectorAll("#infoPost");
let settingPosts = document.querySelectorAll("#settingPost");

infoPosts.forEach((infoPost, index) => {
    infoPost.addEventListener("click", () => {
        let settingPost = settingPosts[index];

        if (settingPost.classList.contains("active-info-post")) {
            settingPost.classList.remove("active-info-post");
            settingPost.classList.add("no-active-info-post");
            infoPost.classList.remove("bg-[#e6f3fa]");
        } else {
            settingPost.classList.remove("no-active-info-post");
            settingPost.classList.add("active-info-post");
            infoPost.classList.add("bg-[#e6f3fa]");
        }
    });
});


let heartInteracts = document.querySelectorAll("#heartInteract");
let animationHearts = document.querySelectorAll("#animationHeart");
let heartIcons = document.querySelectorAll("#heartIcons");

heartInteracts.forEach((heartInteract, index) => {
	console.log("aissa");
    heartInteract.addEventListener("click", () => {
        let animationHeart = animationHearts[index];
        let heartIcon = heartIcons[index];
        if (animationHeart.classList.contains("no-animation-heart")) {
            animationHeart.classList.remove("no-animation-heart");
            animationHeart.classList.add("animation-heart");
            heartIcon.classList.add("active");
            heartInteract.classList.toggle("text-red-600");

            setTimeout(() => {
                animationHeart.classList.remove("animation-heart");
                heartIcon.classList.remove("active");
                animationHeart.classList.add("no-animation-heart");
            }, 800);
        }
    });
});
