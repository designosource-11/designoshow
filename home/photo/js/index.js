let imageInput = document.querySelector("#image");
let imageLabel = document.querySelector("#imageLabel");

let uploadedImage = document.querySelector("#imageSelect");

let submitBtn = document.querySelector('.btn-submit');

imageInput.addEventListener("change", function(event){
    uploadedImage.src = URL.createObjectURL(event.target.files[0]);
    submitBtn.style.visibility = "visible";
})