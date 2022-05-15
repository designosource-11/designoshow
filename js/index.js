document.querySelector(".fien").addEventListener("mouseenter", ()=>{
    document.querySelector(".fien_2").classList.remove("hidden");
    document.querySelector(".fien_3").classList.remove("hidden");
});

document.querySelector(".fien").addEventListener("mouseleave", ()=>{
    document.querySelector(".fien_2").classList.add("hidden");
    document.querySelector(".fien_3").classList.add("hidden");
});

document.querySelector(".sarah").addEventListener("mouseenter", ()=>{
    document.querySelector(".sarah_2").classList.remove("hidden");
    document.querySelector(".sarah_3").classList.remove("hidden");
});

document.querySelector(".sarah").addEventListener("mouseleave", ()=>{
    document.querySelector(".sarah_2").classList.add("hidden");
    document.querySelector(".sarah_3").classList.add("hidden");
});

document.querySelector(".ilya").addEventListener("mouseenter", ()=>{
    document.querySelector(".ilya_2").classList.remove("hidden");
    document.querySelector(".ilya_3").classList.remove("hidden");
});

document.querySelector(".ilya").addEventListener("mouseleave", ()=>{
    document.querySelector(".ilya_2").classList.add("hidden");
    document.querySelector(".ilya_3").classList.add("hidden");
});

document.querySelector(".bailey").addEventListener("mouseenter", ()=>{
    document.querySelector(".bailey_2").classList.remove("hidden");
    document.querySelector(".bailey_3").classList.remove("hidden");
});

document.querySelector(".bailey").addEventListener("mouseleave", ()=>{
    document.querySelector(".bailey_2").classList.add("hidden");
    document.querySelector(".bailey_3").classList.add("hidden");
});

document.querySelector(".bastien").addEventListener("mouseenter", ()=>{
    document.querySelector(".bastien_2").classList.remove("hidden");
    document.querySelector(".bastien_3").classList.remove("hidden");
});

document.querySelector(".bastien").addEventListener("mouseleave", ()=>{
    document.querySelector(".bastien_2").classList.add("hidden");
    document.querySelector(".bastien_3").classList.add("hidden");
});

document.querySelector(".nick").addEventListener("mouseenter", ()=>{
    document.querySelector(".nick_2").classList.remove("hidden");
    document.querySelector(".nick_3").classList.remove("hidden");
});

document.querySelector(".nick").addEventListener("mouseleave", ()=>{
    document.querySelector(".nick_2").classList.add("hidden");
    document.querySelector(".nick_3").classList.add("hidden");
});

document.querySelector(".nicolas").addEventListener("mouseenter", ()=>{
    document.querySelector(".nicolas_2").classList.remove("hidden");
    document.querySelector(".nicolas_3").classList.remove("hidden");
});

document.querySelector(".nicolas").addEventListener("mouseleave", ()=>{
    document.querySelector(".nicolas_2").classList.add("hidden");
    document.querySelector(".nicolas_3").classList.add("hidden");
});

document.querySelector(".nathalie").addEventListener("mouseenter", ()=>{
    document.querySelector(".nathalie_2").classList.remove("hidden");
    document.querySelector(".nathalie_3").classList.remove("hidden");
});

document.querySelector(".nathalie").addEventListener("mouseleave", ()=>{
    document.querySelector(".nathalie_2").classList.add("hidden");
    document.querySelector(".nathalie_3").classList.add("hidden");
});

document.querySelector(".brian").addEventListener("mouseenter", ()=>{
    document.querySelector(".brian_2").classList.remove("hidden");
    document.querySelector(".brian_3").classList.remove("hidden");
});

document.querySelector(".brian").addEventListener("mouseleave", ()=>{
    document.querySelector(".brian_2").classList.add("hidden");
    document.querySelector(".brian_3").classList.add("hidden");
});

document.querySelector(".stephanie").addEventListener("mouseenter", ()=>{
    document.querySelector(".stephanie_2").classList.remove("hidden");
    document.querySelector(".stephanie_3").classList.remove("hidden");
});

document.querySelector(".stephanie").addEventListener("mouseleave", ()=>{
    document.querySelector(".stephanie_2").classList.add("hidden");
    document.querySelector(".stephanie_3").classList.add("hidden");
});

document.querySelector(".stefan").addEventListener("mouseenter", ()=>{
    document.querySelector(".stefan_2").classList.remove("hidden");
    document.querySelector(".stefan_3").classList.remove("hidden");
});

document.querySelector(".stefan").addEventListener("mouseleave", ()=>{
    document.querySelector(".stefan_2").classList.add("hidden");
    document.querySelector(".stefan_3").classList.add("hidden");
});

document.querySelector(".schedule_item_1").addEventListener("mouseenter", ()=>{
    document.querySelector(".schedule_item_1").style.padding = "0.25rem 3rem";    
});

document.querySelector(".schedule_item_1").addEventListener("mouseleave", ()=>{
    document.querySelector(".schedule_item_1").style.padding = "0 3rem";
});

document.querySelector(".schedule_item_2").addEventListener("mouseenter", ()=>{
    document.querySelector(".schedule_item_2").style.padding = "0.25rem 3rem";   
});

document.querySelector(".schedule_item_2").addEventListener("mouseleave", ()=>{
    document.querySelector(".schedule_item_2").style.padding = "0 3rem";
});

document.querySelector(".schedule_item_3").addEventListener("mouseenter", ()=>{
    document.querySelector(".schedule_item_3").style.padding = "0.25rem 3rem";   
});

document.querySelector(".schedule_item_3").addEventListener("mouseleave", ()=>{
    document.querySelector(".schedule_item_3").style.padding = "0 3rem";
});

document.querySelector(".schedule_item_4").addEventListener("mouseenter", ()=>{
    document.querySelector(".schedule_item_4").style.padding = "0.25rem 3rem";   
});

document.querySelector(".schedule_item_4").addEventListener("mouseleave", ()=>{
    document.querySelector(".schedule_item_4").style.padding = "0 3rem";
});

let blue = [
    "./assets/team/teammember-1.jpg", 
    "./assets/team/teammember-4.jpg", 
    "./assets/team/teammember-8.jpg", 
    "./assets/team/teammember-9.jpg"];

let red = [
    "./assets/team/teammember-2.jpg",
    "./assets/team/teammember-7.jpg",
    "./assets/team/teammember-10.jpg"];

let green = [
    "./assets/team/teammember-3.jpg",
    "./assets/team/teammember-6.jpg",
    "./assets/team/teammember-11.jpg",
    "./assets/team/teammember-5.jpg"];

function getlength(array){
    let length = array.length;
    return length;
}

function getRandomImage(array){
    let length = getlength(array);
    let num = Math.floor(Math.random() * length);
    let img = array[num];
    return img;
}

window.addEventListener("load", ()=>{
    let one = getRandomImage(red);
    let two = getRandomImage(blue);
    let three = getRandomImage(green);

    let dino1 = document.querySelectorAll(".dino1 img");
    let dino2 = document.querySelectorAll(".dino2 img");
    let dino3 = document.querySelectorAll(".dino3 img");
    for(let i = 0; i < dino1.length; i++){
        dino1[i].setAttribute("src", one);
    }

    for(let i = 0; i < dino2.length; i++){
        dino2[i].setAttribute("src", two);   
    }

    for(let i = 0; i < dino3.length; i++){
        dino3[i].setAttribute("src", three);   
    }
});

let raawrcaptcha = document.querySelector(".raawrcaptcha");
let checkbox = document.querySelector(".raawrcaptcha .checkbox_replace img");
let select_dinos = document.querySelector(".select_dinos");
let dinos = document.querySelector(".dinos");
let check = document.querySelector(".select_dinos .button");

raawrcaptcha.addEventListener('click', function(e) {
    if(checkbox.style.display != "block") {
        select_dinos.style.display = "block"
    }
}, false);

dinos.addEventListener('click', function(e) {
    e = e || window.event;
    let target = e.target;
    if(!target.classList.contains("overlay") && !target.classList.contains("dinos")) {
        target.classList.add("overlay");
    } else if(!target.classList.contains("dinos")){
        target.classList.remove("overlay") ;
    }
}, false);


check.addEventListener('click', function(e) {
    select_dinos.style.display = "none"
    checkbox.style.display = "block"
}, false);