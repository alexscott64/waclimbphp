// Commonly Reset Site content caches

const BlogPagesCache = 'site-blog-index-230805-v9';
const dynamicCache = 'site-dynamic-230805-v9';
const blogCache = 'site-blog-230615-v3'; //blog images


      // Satic content caches

const staticCacheName = 'site-static-220605-v2';

      // Topo content caches
const topoCache_Aspotogen = 'site-topocache-aspotogen-230615';
const topoCache_Chebucto = 'site-topocache-chebucto-230615';
const topoCache_Dover = 'site-topocache-dover-230615';
const topoCache_Halifax = 'site-topocache-halifax-230615';
const topoCache_LOC = 'site-topocache-loc-230615';
const topoCache_Pennant = 'site-topocache-pennant-230615';
const topoCache_Pollys = 'site-topocache-pollys-230615';
const topoCache_Prospect = 'site-topocache-prospect-230615';
const topoCache_Sambro = 'site-topocache-sambro-230709';
const topoCache_Solitary = 'site-topocache-solitary-230615';
const topoCache_TBay = 'site-topocache-tbay-230724';
const topoCache_Unlisted = 'site-topocache-unlisted-230615';
const topoCache_Other = 'site-topo-other-230801-v4';

// Topo image caches

const topoImageCache = 'site-topoimage-2300620';
const topoImageCache_Aspotogen = 'site-topoimage-aspotogen-220309';
const topoImageCache_Chebucto = 'site-topoimage-chebucto-210602';
const topoImageCache_Dover = 'site-topoimage-dover-210918';
const topoImageCache_Halifax = 'site-topoimage-halifax-211006';
const topoImageCache_Pollys = 'site-topoimage-pollys-210518';
const topoImageCache_Prospect = 'site-topoimage-prospect-220922v2';
const topoImageCache_Sambro = 'site-topoimage-sambro-230709';
const topoImageCache_Solitary = 'site-topoimage-solitary-221030';

const topoImageCache_TBay_GV = 'site-topoimage-tbay-GV-220911';
const topoImageCache_TBay_GL = 'site-topoimage-tbay-GL-220911';
const topoImageCache_TBay_GM = 'site-topoimage-tbay-GM-230115';
const topoImageCache_TBay_GP = 'site-topoimage-tbay-GP-220911';
const topoImageCache_TBay_GRH = 'site-topoimage-tbay-GRH-220911';
const topoImageCache_TBay_GS = 'site-topoimage-tbay-GS-220911';
const topoImageCache_TBay_GW = 'site-topoimage-tbay-GW-220911';
const topoImageCache_TBay_TBGE = 'site-topoimage-tbay-TBGE-220911';
const topoImageCache_TBay_TBHH = 'site-topoimage-tbay-TBHH-220911';
const topoImageCache_TBay_TBND = 'site-topoimage-tbay-TBND-221001';
const topoImageCache_TBay_CHMP = 'site-topoimage-tbay-CHMP-220911';
const topoImageCache_TBay_VT = 'site-topoimage-tbay-GV-220911';

const topoImageCache_Unlisted = 'site-topoimage-unlisted-210412';
const topoImageCache_Pennant = 'site-topoimage-pennant-2300614-v2';


// Seldom Reset Site content caches

const mapImageCache = 'site-map-image-cache-230502-v2'; //map images

const areaCache = 'site-area-aug2022'; //area images
const googleCache = 'site-google-v2';
const logoCache = 'site-logo-v4'; //logo images




const homeassets = [
    '/',
    '/index.php',
    '/index.php?full=n&grade=h',
];

const assets = [
   
    '/js/app.js',
    '/style.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2?v=4.7.0',
    'https://fonts.googleapis.com/css?family=Montserrat',
    'https://fonts.googleapis.com/css?family=Roboto',
    'https://fonts.googleapis.com/css?family=Inconsolata',
    '/fallback.php',
    'img/ico/sundial40.png',
    'img/ico/sundial30.png',
    'img/ico/sundial20.png',
    'img/ico/sundial60.png',
    'img/ico/sundial80.png',
    'img/ico/sundial50.png',
    'img/ico/sundial40m.png',
    'img/ico/sundial30m.png',
    'img/ico/sundial20m.png',
    'img/ico/sundial70m.png',
    'img/ico/sundial80m.png',
    'img/ico/sundial60m.png',
    'img/ico/sun20-75.PNG',
    'img/ico/sun20-75.png',
    'img/ico/windrtk.png',
    'img/ico/windgrizzly.png',
    'img/ico/windfull.png',
    'img/ico/windfynnished.png',
    'img/ico/star.png',
    'img/ico/bench.png',
    'img/ico/best.png',
    'img/ico/gps.png',
    'img/ico/poke.png',
    'img/ico/risky.png',
    'img/ico/sun.png',
    'img/ico/sundial70.png',
    'img/ico/tall.png',
    'img/ico/turd.png',
    'img/ico/vid.png',
    'img/ico/wind.png',
    'img/ico/sundial50m.png',
    'img/ico/windnw.png',
    'img/ico/vachesun.png',
    'img/ico/vizzy.png',
    '/manifest.json',
    '/favicon.ico',
    '/img/cpt/monero.png',
 
];

const limitCacheSize = (name, size) => {
    caches.open(name).then(cache => {
      cache.keys().then(keys => {
        if(keys.length > size){
          cache.delete(keys[0]).then(limitCacheSize(name, size));
        }
      });
    });
  };

self.addEventListener('install', evt => {
    self.skipWaiting();
    //console.log('service worker has been installed');
    evt.waitUntil(
        caches.open(staticCacheName).then(cache =>{
            console.log('caching shell assets');
            cache.addAll(assets);    
        })
    );
    
});

function isCacheablePhpFile(url) {
    const parsedUrl = new URL(url);
    const pathName = parsedUrl.pathname;
    return (
        pathName.endsWith('index.php') || 
        pathName.endsWith('blog.php') || 
        pathName.endsWith('blogpost.php')
    );
}

self.addEventListener('activate', evt => {
    //console.log('service worker has been activate');
    self.clients.claim()
    evt.waitUntil(
        caches.keys().then(keys =>{
            //console.log(keys);
            return Promise.all(keys
                .filter(key => key !== staticCacheName && key !== dynamicCache && key !== BlogPagesCache && key !== mapImageCache && key !== googleCache && key !== areaCache && key !== blogCache && key !== logoCache && key !== topoImageCache && key !== topoImageCache_Aspotogen && key !== topoImageCache_Chebucto && key !== topoImageCache_Dover && key !== topoImageCache_Halifax && key !== topoImageCache_Pollys && key !== topoImageCache_Prospect && key !== topoImageCache_Sambro && key !== topoImageCache_Solitary  && key !== topoImageCache_TBay_GV  && key !== topoImageCache_TBay_GL  && key !== topoImageCache_TBay_GM  && key !== topoImageCache_TBay_GP  && key !== topoImageCache_TBay_GRH  && key !== topoImageCache_TBay_GS  && key !== topoImageCache_TBay_GW  && key !== topoImageCache_TBay_TBGE  && key !== topoImageCache_TBay_TBHH  && key !== topoImageCache_TBay_TBND  && key !== topoImageCache_TBay_CHMP  && key !== topoImageCache_TBay_VT && key !== topoImageCache_Unlisted && key !== topoImageCache_Pennant && key !== topoCache_Aspotogen  && key !== topoCache_Chebucto  && key !== topoCache_Dover  && key !== topoCache_Halifax  && key !== topoCache_Other  && key !== topoCache_Pennant  && key !== topoCache_Pollys  && key !== topoCache_Prospect  && key !== topoCache_Sambro  && key !== topoCache_Solitary  && key !== topoCache_TBay  && key !== topoCache_Unlisted)
                .map(key => caches.delete(key))
                )
        })
    );
});

self.addEventListener('fetch', evt =>{
    //console.log('fetch', evt);
    
    evt.respondWith(
        caches.match(evt.request).then(cacheRes =>{
            return cacheRes || fetch(evt.request).then(fetchRes =>{

                const requestUrl = evt.request.url;
                
                // Check if the request is a .jpg file with _map_ in the file name
                if (requestUrl.endsWith('.jpg') && requestUrl.includes('_map_')) {
                    return caches.open(mapImageCache).then(cache => {
                        cache.put(requestUrl, fetchRes.clone());
                        return fetchRes;
                    });
                }

                                      // Check if the request is for index.php, blog.php, or blogpost.php with GET parameters
                if (isCacheablePhpFile(requestUrl)) {
                    return caches.open(BlogPagesCache).then(cache => {
                        cache.addAll(homeassets);
                        cache.put(requestUrl, fetchRes.clone());
                        return fetchRes;
                    });
                }
                
                if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=5800') > -1) || (evt.request.url.indexOf('topo=8100') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Aspotogen).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=1200') > -1) || (evt.request.url.indexOf('topo=1300') > -1) || (evt.request.url.indexOf('topo=8000') > -1) || (evt.request.url.indexOf('topo=1700') > -1) || (evt.request.url.indexOf('topo=1600') > -1) || (evt.request.url.indexOf('1500') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Chebucto).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=8900') > -1) || (evt.request.url.indexOf('topo=6600') > -1) || (evt.request.url.indexOf('topo=4900') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Halifax).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=5500') > -1) || (evt.request.url.indexOf('topo=5400') > -1) || (evt.request.url.indexOf('topo=5200') > -1) || (evt.request.url.indexOf('topo=5300') > -1) || (evt.request.url.indexOf('topo=4600') > -1) || (evt.request.url.indexOf('topo=4400') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Dover).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=900&') > -1) || (evt.request.url.indexOf('topo=700&') > -1) || (evt.request.url.indexOf('topo=800&') > -1) || (evt.request.url.indexOf('topo=1000') > -1) || (evt.request.url.indexOf('topo=600&') > -1) || (evt.request.url.indexOf('topo=500&') > -1) || (evt.request.url.indexOf('topo=400&') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Pollys).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=6500') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Prospect).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=5700') > -1) || (evt.request.url.indexOf('topo=5100') > -1) || (evt.request.url.indexOf('topo=5600') > -1) || (evt.request.url.indexOf('topo=4800') > -1) || (evt.request.url.indexOf('topo=6900') > -1) || (evt.request.url.indexOf('topo=6700') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Sambro).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=1100') > -1) || (evt.request.url.indexOf('topo=4700') > -1) || (evt.request.url.indexOf('topo=5600') > -1) || (evt.request.url.indexOf('topo=8100') > -1) || (evt.request.url.indexOf('topo=8100') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Solitary).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=3800') > -1) || (evt.request.url.indexOf('topo=4500') > -1) || (evt.request.url.indexOf('topo=7200') > -1) || (evt.request.url.indexOf('topo=7100') > -1) || (evt.request.url.indexOf('topo=7000') > -1) || (evt.request.url.indexOf('topo=3900') > -1) || (evt.request.url.indexOf('topo=4000') > -1) || (evt.request.url.indexOf('topo=4100') > -1) || (evt.request.url.indexOf('topo=4200') > -1) || (evt.request.url.indexOf('topo=3700') > -1) || (evt.request.url.indexOf('topo=4300') > -1) || (evt.request.url.indexOf('topo=6000') > -1) || (evt.request.url.indexOf('topo=5900') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_TBay).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=6800') > -1) || (evt.request.url.indexOf('topo=5000') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Unlisted).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && (evt.request.url.indexOf('topo=7500') > -1) || (evt.request.url.indexOf('topo=6100') > -1) || (evt.request.url.indexOf('topo=6200') > -1) || (evt.request.url.indexOf('topo=6300') > -1) || (evt.request.url.indexOf('topo=6400') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Pennant).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if ((evt.request.url.indexOf('topo') > -1) && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1 && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(topoCache_Other).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('topo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1 && evt.request.url.indexOf('_sm.jpg') <= -1 && evt.request.url.indexOf('google') <= -1 && evt.request.url.indexOf('stats') <= -1 && evt.request.url.indexOf('/img/are/') <= -1 && evt.request.url.indexOf('/img/blo/') <= -1  && evt.request.url.indexOf('logo') <= -1 && evt.request.url.indexOf('/img/pro/') <= -1){
                return caches.open(dynamicCache).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    limitCacheSize(dynamicCache, 50);
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('google') > -1 || evt.request.url.indexOf('stats') > -1){
                return caches.open(googleCache).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/are/') > -1){
                return caches.open(areaCache).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/blo/') > -1){
                return caches.open(blogCache).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('logo') > -1){
                return caches.open(logoCache).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/pf') > -1) || (evt.request.url.indexOf('/show') > -1)){
                return caches.open(topoImageCache_Aspotogen).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/DCove') > -1) || (evt.request.url.indexOf('/chaa') > -1) || (evt.request.url.indexOf('/chts') > -1) || (evt.request.url.indexOf('/cht') > -1) || (evt.request.url.indexOf('/chf') > -1) || (evt.request.url.indexOf('/chcf') > -1)){
                return caches.open(topoImageCache_Chebucto).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/de') > -1) || (evt.request.url.indexOf('/dw') > -1) || (evt.request.url.indexOf('/do') > -1) || (evt.request.url.indexOf('/ds2') > -1) || (evt.request.url.indexOf('/dwa') > -1) || (evt.request.url.indexOf('/dc') > -1)){
                return caches.open(topoImageCache_Dover).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/kl') > -1) || (evt.request.url.indexOf('/ppp') > -1) || (evt.request.url.indexOf('/yr') > -1)){
                return caches.open(topoImageCache_Halifax).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/pcwa') > -1) || (evt.request.url.indexOf('/pcp') > -1) || (evt.request.url.indexOf('/pcjr') > -1) || (evt.request.url.indexOf('/pcb') > -1) || (evt.request.url.indexOf('/pcdv') > -1) || (evt.request.url.indexOf('/pca') > -1) || (evt.request.url.indexOf('/pch') > -1)){
                return caches.open(topoImageCache_Pollys).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/pr_') > -1)){
                return caches.open(topoImageCache_Prospect).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/mp') > -1) || (evt.request.url.indexOf('/ccbi') > -1) || (evt.request.url.indexOf('/ccbm') > -1) || (evt.request.url.indexOf('/dh') > -1) || (evt.request.url.indexOf('/scb') > -1) || (evt.request.url.indexOf('/spr') > -1)){
                return caches.open(topoImageCache_Sambro).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/bb') > -1) || (evt.request.url.indexOf('/le') > -1)){
                return caches.open(topoImageCache_Solitary).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

// Start Terrance bay

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/gv') > -1)){
                return caches.open(topoImageCache_TBay_GV).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/gl') > -1)){
                return caches.open(topoImageCache_TBay_GL).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/gm') > -1)){
                return caches.open(topoImageCache_TBay_GM).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/gp') > -1)){
                return caches.open(topoImageCache_TBay_GP).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/grh') > -1)){
                return caches.open(topoImageCache_TBay_GRH).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/gs') > -1)){
                return caches.open(topoImageCache_TBay_GS).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/gw') > -1)){
                return caches.open(topoImageCache_TBay_GW).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/tbge') > -1)){
                return caches.open(topoImageCache_TBay_TBGE).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/tbhh') > -1)){
                return caches.open(topoImageCache_TBay_TBHH).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/tbnd') > -1)){
                return caches.open(topoImageCache_TBay_TBND).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/chmp') > -1)){
                return caches.open(topoImageCache_TBay_CHMP).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }
            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/vt') > -1)){
                return caches.open(topoImageCache_TBay_VT).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

// End Terrance bay


            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/u') > -1) || (evt.request.url.indexOf('/utf') > -1)){
                return caches.open(topoImageCache_Unlisted).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1 && (evt.request.url.indexOf('/wpj') > -1) || (evt.request.url.indexOf('/wph') > -1) || (evt.request.url.indexOf('/wpo') > -1) || (evt.request.url.indexOf('/wpt') > -1) || (evt.request.url.indexOf('/wphh') > -1)){
                return caches.open(topoImageCache_Pennant).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            if (evt.request.url.indexOf('/img/pro/') > -1){
                return caches.open(topoImageCache).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone());
                    return fetchRes;
                })
            }

            });

           

        }).catch(() => {

            // Fallback logic for HTML and PHP files
            // ...
        if (evt.request.url.indexOf('.php') > -1 || evt.request.url.indexOf('.html') > -1 ){
        return caches.match('/fallback.php')
        }
        })
    );
    

});

