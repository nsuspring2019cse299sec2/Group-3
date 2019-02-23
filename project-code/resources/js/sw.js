self.addEventListener('install', function(e) {
    e.waitUntil(
      caches.open('resources-store').then(function(cache) {
        return cache.addAll([
          '/',
          '/js/index.js',
          '/css/style.css',
        ]);
      })
    );
   });
   
   self.addEventListener('fetch', function(e) {
     console.log(e.request.url);
     e.respondWith(
       caches.match(e.request).then(function(response) {
         return response || fetch(e.request);
       })
     );
   });