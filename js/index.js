const hiddenGalleryImages = document.querySelectorAll(".hidden");
const seeMoreButton = document.querySelector(".gallery-seemore");
const galleryForHeight = document.querySelector(".gallery");
console.log(galleryForHeight.clientHeight);

let posTop = 0;

seeMoreButton.addEventListener("click", () => {
    hiddenGalleryImages.forEach((element) => {
        console.log(element.scrollHeight);
        if (element.style.maxHeight){
            element.style.maxHeight = null;
            seeMoreButton.style.transform = "rotate(-45deg)";
            seeMoreButton.style.borderColor = "#0f70b7";
            window.location.hash="gallery";
        } else {
            posTop = window.pageYOffset;
            window.scrollTo(0, posTop + galleryForHeight.clientHeight + galleryForHeight.clientHeight*0.25);
            window.location.hash="none";
            element.style.maxHeight = element.scrollHeight + "px";
            seeMoreButton.style.transform = "rotate(-225deg)";
            seeMoreButton.style.borderColor = "#cc1e27";
        } 
    })
});


