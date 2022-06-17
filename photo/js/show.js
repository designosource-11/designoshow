let designoPosts = ["./assets/designoPosts/qr_black.png",
                    "./assets/designoPosts/dinoshow_post.png",
                    "./assets/designoPosts/qr_yellow.png",
                    "./assets/designoPosts/dino_post.png",
                    "./assets/designoPosts/qr_red.png",
                    "./assets/designoPosts/designosource_post.png",
                    "./assets/designoPosts/qr_blue.png"];

let amountAudiencePosts = 0;

let grid = document.querySelector('.image-grid');
let lastTime = '1069-06-02 10:49:33';

let formData = new FormData();
formData.append("lastTime", lastTime);

fetch("./ajax/getPicture.php", {
    method: "POST",
    body:formData
})
.then(response => response.json())
.then(result => {

    result['result'].forEach(img => {
        let imageWrapper = document.createElement('button');
        let imgElement = document.createElement('img');

        imageWrapper.classList.add('image-wrapper');
        imgElement.classList.add('img');

        imgElement.src = img['url'];

        imageWrapper.appendChild(imgElement);
        
        grid.prepend(imageWrapper);
    });

    lastTime = result['result'][result['result'].length -1]['created_at'];
})
.catch(error => {
    console.error("Error:", error);
})

let intervalAjax = setInterval(ajaxTimer, 10000);

function ajaxTimer()
{
    let formData = new FormData();
    formData.append("lastTime", lastTime);

    fetch("./ajax/getPicture.php", {
        method: "POST",
        body:formData
    })
    .then(response => response.json())
    .then(result => {

        result['result'].forEach(img => {

            let imageWrapper = document.createElement('button');
            let imgElement = document.createElement('img');

            imageWrapper.classList.add('image-wrapper');
            imgElement.classList.add('img');

            imgElement.src = img['url'];
            imageWrapper.appendChild(imgElement);
            
            grid.prepend(imageWrapper);
            amountAudiencePosts++;

        });

        if(result['result'].length == 0) {
            return;
        }
        lastTime = result['result'][result['result'].length -1]['created_at'];

    })
    .catch(error => {
        console.error("Error:", error);
    })
}

let intervalDesignoPost = setInterval(addDesignoPosts, 60000);

let designoPostCounter = 0;
function addDesignoPosts() {
    if (amountAudiencePosts < 6) {
        return;
    }
    amountAudiencePosts = 0;

    let imageWrapper = document.createElement('button');
    let imgElement = document.createElement('img');

    imageWrapper.classList.add('image-wrapper');
    imgElement.classList.add('img');

    imgElement.src = designoPosts[designoPostCounter];
    imageWrapper.appendChild(imgElement);

    grid.prepend(imageWrapper);

    designoPostCounter++;

    if(designoPostCounter == designoPosts.length) {
        designoPostCounter = 0;
    }
}