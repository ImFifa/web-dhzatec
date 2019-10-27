self.oninstall = function(event) {
    caches.open('DHWEB1')
    .then(function(cache) {
        cache.addAll([
            '/',
            'index.php',
            'cenik.php',
            'kontakt.php',
            'prubeh-vysetreni.php',
            'footer.php',
            'header.php',
            '404.html',
            'css/style.min.css',
            'js/javascript.min.js',
            'img/clock-icon.png',
            'img/cross-icon.png',
            'img/dental-hygiene.jpg',
            'img/dental-treatment.jpg',
            'img/dhicon.png',
            'img/email-icon.png',
            'img/hamburger-icon.png',
            'img/chair-in-ordination.jpg',
            'img/ordination.jpg',
            'img/phone-icon.png',
            'img/poukaz1.png',
            'img/poukaz2.png',
            'img/tooth-icon.png',
            'img/toothbrush-icon.png',
            'img/urban-logo.png',
            'img/fbimg.jpg'
        ])
        .then(function() {
            console.log('cached!');
        })
        .catch(function(err) {
            console.log('err ', err);
        });
    })
}

self.onactivate = function() {
    console.log("activated!");
}

self.onfetch = function(event) {
    event.respondWith(
        caches.match(event.request)
        .then(function(response) {
            if(response) {
                return response;
            } else {
                return fetch(event.request);
            }
        })
    )
}
