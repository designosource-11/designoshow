let grid = document.querySelector('.image-grid');
let lastTime = '1069-06-02 10:49:33';

let formData = new FormData();
formData.append("lastTime", lastTime);

fetch("./ajax/getPictureAdmin.php", {
    method: "POST",
    body:formData
})
.then(response => response.json())
.then(result => {

    result['result'].forEach(img => {
        let imageWrapper = document.createElement('button');
        imageWrapper.classList.add('image-wrapper');

        let imgElement = document.createElement('img');
        imgElement.classList.add('img');
        imgElement.src = img['url'];

        let revokeButton = document.createElement('a');
        revokeButton.classList.add('revoke-btn');
        revokeButton.setAttribute('onClick', 'revokeImage(event, ' + img['id'] + ')');

        let acceptButton = document.createElement('a');
        acceptButton.classList.add('accept-btn');
        acceptButton.setAttribute('onClick', 'acceptImage(event, ' + img['id'] + ')');

        let acceptImg = document.createElement('img');
        acceptImg.src = './assets/accept.png';

        let revokeImg = document.createElement('img');
        revokeImg.src = './assets/revoke.png';

        revokeButton.appendChild(revokeImg);
        acceptButton.appendChild(acceptImg);

        imageWrapper.appendChild(revokeButton);
        imageWrapper.appendChild(imgElement);
        imageWrapper.appendChild(acceptButton);
        
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
    console.log('AJAX');
    let formData = new FormData();
    formData.append("lastTime", lastTime);

    fetch("./ajax/getPictureAdmin.php", {
        method: "POST",
        body:formData
    })
    .then(response => response.json())
    .then(result => {

        result['result'].forEach(img => {

            let imageWrapper = document.createElement('button');
            imageWrapper.classList.add('image-wrapper');

            let imgElement = document.createElement('img');
            imgElement.classList.add('img');
            imgElement.src = img['url'];

            let revokeButton = document.createElement('a');
            revokeButton.classList.add('revoke-btn');
            revokeButton.setAttribute('onClick', 'revokeImage(event,' + img['id'] + ')');

            let acceptButton = document.createElement('a');
            acceptButton.classList.add('accept-btn');
            acceptButton.setAttribute('onClick', 'acceptImage(event,' + img['id'] + ')');

            let acceptImg = document.createElement('img');
            acceptImg.src = './assets/accept.png';

            let revokeImg = document.createElement('img');
            revokeImg.src = './assets/revoke.png';

            revokeButton.appendChild(revokeImg);
            acceptButton.appendChild(acceptImg);

            imageWrapper.appendChild(revokeButton);
            imageWrapper.appendChild(imgElement);
            imageWrapper.appendChild(acceptButton);
            
            grid.prepend(imageWrapper);
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

function acceptImage(e, imageId) {
    let clickedElement = e.path[2];
    

    console.log('Accept image: ' + imageId);
    let formData = new FormData();
    formData.append("action", "accept");
    formData.append("imageId", imageId);

    fetch("./ajax/verifyImage.php", {
        method: "POST",
        body:formData
    })
    .then(response => response.json())
    .then(result => {
        console.log(result);
    })
    .catch(error => {
        console.error("Error:", error);
    })

    clickedElement.remove();
}

function revokeImage(e, imageId) {
    let clickedElement = e.path[2];
    
    console.log('Revoke image: ' + imageId);
    let formData = new FormData();
    formData.append("action", "revoke");
    formData.append("imageId", imageId);

    fetch("./ajax/verifyImage.php", {
        method: "POST",
        body:formData
    })
    .then(response => response.json())
    .then(result => {
        console.log(result);
    })
    .catch(error => {
        console.error("Error:", error);
    })

    clickedElement.remove();
}