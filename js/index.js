const hiddenGalleryImages = document.querySelectorAll(".hidden");
const seeMoreButton = document.querySelector(".gallery-seemore");

seeMoreButton.addEventListener("click", () => {
    hiddenGalleryImages.forEach((element) => {
        console.log(element.scrollHeight);
        if (element.style.maxHeight){
            window.scrollTo(0, 1900);
            gallery.style.height = 90 + "vh";
            element.style.maxHeight = null;
            gallery.style.padding = 50 + "px" + " " + 0 + "px";
            seeMoreButton.style.transform = "rotate(-45deg)";
            seeMoreButton.style.borderColor = "#0f70b7";
        } else {
            window.scrollTo(0, 2600);
            gallery.style.height = "auto";
            gallery.style.padding = 70 + "px" + " " + 0 + "px";
            element.style.maxHeight = element.scrollHeight + "px";
            seeMoreButton.style.transform = "rotate(-225deg)";
            seeMoreButton.style.borderColor = "#cc1e27";
        } 
    })
});


