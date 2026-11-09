# Hyun

Website for a local clothing company called Hyun based in Ottawa available [here](https://www.taharhidouani.com/projects/hyun/).

Build using HTML/CSS, Javascript/Jquery and a bit of Bootstrap for the frontend, this website has a beautiful gorgeous smooth animations, that complement the design of the clothing sold.

With Paypal integration for a safe and encrypted purchases, this website has all the features of a regular shopify e-commerce website but with the looks of a blue chip clothing company, with custom matching animations that you can interact with for almost all the 22+ items. The website also has modern interactive slideshows and product listings that make you want to click on them. On top of that, the UI and animations adapt and work perfectly on mobile devices which is important nowadays.

![intro](https://github.com/TahaInc/hyun/blob/master/images/screenshot_1.png?raw=true)

![homepage](https://github.com/TahaInc/hyun/blob/master/images/screenshot_2.png?raw=true)

![product page](https://github.com/TahaInc/hyun/blob/master/images/screenshot_3.png?raw=true)

![product page](https://github.com/TahaInc/hyun/blob/master/images/screenshot_4.png?raw=true)

![product page](https://github.com/TahaInc/hyun/blob/master/images/screenshot_5.png?raw=true)

## Run

Every push to `main` builds `ghcr.io/taharhidouani/hyun` (tags `main` and `sha-<commit>`) on GitHub Actions. The image serves the site with FrankenPHP on port 8080 and answers `GET /healthz`. It writes no files.

```sh
docker build -t hyun .
docker run --rm -p 8080:8080 hyun
```

The order notification (`Payment_Validation.php`) uses PHP `mail()`, which needs a mail transport the image does not include.
