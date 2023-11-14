'use strict'

const userName = 'Kieran'
// As this is included with type="module", it won't be executed until the page is loaded
document.getElementById('demo').innerHTML = `Hello ${userName} from a module!`

const MAX_SIZE = 512

// Get 10 images from the cat API and display each of them in the div with id="cats"
fetch('https://api.thecatapi.com/v1/images/search?limit=10')
    .then(response => response.json())
    .then(data => {
        const cats = document.getElementById('cats')
        data.forEach(cat => {
            const img = document.createElement('img')
            img.src = cat.url

            // Resize the image if it's too big
            if (cat.width > MAX_SIZE || cat.height > MAX_SIZE) {
                if (cat.width > cat.height) {
                    img.width = MAX_SIZE
                } else {
                    img.height = MAX_SIZE
                }
            }

            cats.appendChild(img)
        })
    })
    .catch(error => console.error(error))
