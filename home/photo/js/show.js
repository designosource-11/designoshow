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
    console.log('AJAX');
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

        if(result['result'].length == 0) {
            return;
        }
        lastTime = result['result'][result['result'].length -1]['created_at'];

    })
    .catch(error => {
        console.error("Error:", error);
    })
}