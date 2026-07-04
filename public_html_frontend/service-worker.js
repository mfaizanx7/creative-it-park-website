// Name of the cache
const CACHE_NAME = 'my-cache-v1';

// Files to cache
const FILES_TO_CACHE = [
  '/index.html',
  '/styles.css',
  '/script.js',
  '/img/icon-192x192.png',
  '/img/icon-512x512.png',
  '/img/imagesa1.png',
  '/img/1280x720.png'
];

// Install event - caches the files
self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function(cache) {
      return cache.addAll(FILES_TO_CACHE)
        .then(() => {
          console.log('All files cached successfully!');
        })
        .catch(function(error) {
          console.error('Failed to cache files:', error);
        });
    })
  );
  self.skipWaiting(); // Forces the waiting service worker to become active
});

// Activate event - clears old caches
self.addEventListener('activate', function(event) {
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.map(function(cacheName) {
          if (cacheName !== CACHE_NAME) {
            console.log('Deleting old cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
  self.clients.claim(); // Claims control over any clients
});

// Fetch event - serves files from cache or fetches them from the network if not cached
self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(response) {
      if (response) {
        // Serve from cache
        return response;
      }
      // Fetch from network
      return fetch(event.request).catch(function() {
        // Handle fetch failure (optional: return fallback page)
        console.error('Fetch failed:', event.request.url);
        return caches.match('/index.html'); // Example: fallback to index.html
      });
    })
  );
});
