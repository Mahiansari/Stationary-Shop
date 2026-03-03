<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<STYLe>
    body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
img {
  width: 350px;
  margin: 10% 10%;
}


#page-transition {
	position: relative;
	display: block;
	z-index: 99999;
}

/* Transition overlay */
.ptr-overlay {
	position: fixed;
	display: block;
	top: 0;
	left: 0;
	width: 100%;
	height: 100vh;
	background-color: #0a0a0a;
	z-index: 1;
}

/* Transition preloader */
.ptr-preloader {
	position: fixed;
	top: 50%;
	left: 50%;
	z-index: 2;
	transform: translate(-50%, -50%);
}
.ptr-prel-content {
	margin-top: 10px;
	text-align: center;
	text-transform: uppercase;
	font-size: 28px;
	font-weight: bold;
	color: #666;
}

 

</STYLe>
<body>
<script>
    // From: https://greensock.com/forums/topic/29275-how-to-make-preloader-transitions-using-gsap/#comment-145834


const $images = $("img");
let $isLoaded = false;
let $isLoadingAnimationEnd = false;
const $imgLoad = imagesLoaded($images);

// Transitions In (when "ptr-overlay" slides in).
// =================
function RevealLoad() {
  const tl = gsap.timeline();
	tl.to(".ptr-overlay", { duration: 1.5, scaleY: 1, transformOrigin: "center bottom", ease: Expo.easeInOut });
  tl.to(".ptr-preloader", { duration: 1.5, autoAlpha: 1, ease: Expo.easeInOut }, 0.4);
  
  tl.to( ".image", { duration: 1.5, y: -100, autoAlpha: 0, ease: Expo.easeInOut }, 0);
}

// Transitions Out (when "ptr-overlay" slides out)
// ================
function HideLoad() {
  const tl = gsap.timeline({
    onComplete: () => {
      $isLoadingAnimationEnd = true;
      // if ($isLoaded) RevealLoad();
    }
  });
  tl.to( ".ptr-preloader", { duration: 1.5, autoAlpha: 0, ease: Expo.easeInOut });
  tl.to(".ptr-overlay", { duration: 1.5, scaleY: 0, transformOrigin: "center top", ease: Expo.easeInOut }, 01);
  
  tl.from( ".image", { duration: 2, y: 100, autoAlpha: 0, stagger: 0.3, ease: Expo.easeOut }, 02);
}

HideLoad();

$imgLoad.on("always", function () {
  $isLoaded = true;
  // if ($isLoadingAnimationEnd) RevealLoad();
});


// On link click
// ==============
$("a")
  .not('[target="_blank"]') // omit from selection
  .not('[href^="#"]') // omit from selection
  .not('[href^="mailto"]') // omit from selection
  .not('[href^="tel"]') // omit from selection
  .not(".lg-trigger") // omit from selection
  .not(".no-transition") // omit from selection
  .on('click', function(e) {
  e.preventDefault();

  setTimeout(function (url) {
    window.location = url
  }, 1500, this.href);

  RevealLoad(); // call in animations.
});
</script>

    <!-- Begin page transition
=========================== -->
<div id="page-transition">
  <div class="ptr-overlay"></div>
  <div class="ptr-preloader">
    <div class="ptr-prel-content">
      LOADING...
    </div> <!-- /.ptr-prel-content -->
  </div> <!-- /.ptr-preloader -->
</div>
<!-- End page transition -->



<div><a href="">Link</a></div>

<img class="image"     src="immm\2eaaab53804e8b0c1e0578e11ce2031b.jpg"></img>

<img class="image" src="immm\71zuZBHfPIL.jpg"></img>








</body>
</html>