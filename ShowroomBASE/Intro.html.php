
<!DOCTYPE html><html lang='en' class=''>
<head><script src='//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js'></script><script src='//static.codepen.io/assets/editor/live/css_reload-2a5c7ad0fe826f66e054c6020c99c1e1c63210256b6ba07eb41d7a4cb0d0adab.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/cassie-codes/pen/zWJxXj" />


<style class="cp-pen-styles">body, .bgImage {
  margin: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.bgImage {
  position: absolute;
  background-image: url(https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixlib=rb-0.3.5&s=e20bc3d490c974d9ea190e05c47962f5&auto=format&fit=crop&w=634&q=80);
  background-size: cover;
  background-position: top;
  -webkit-filter: grayscale(70%);
  /* Safari 6.0 - 9.0 */
  filter: grayscale(70%);
  z-index: -1;
}

.blobCont {
  position: absolute;
  width: 100vw;
  height: 100vh;
}

.blob:nth-child(1) {
  animation: move1 20s infinite linear;
}

@keyframes move1 {
  from {
    transform: rotate(90deg) translate(200px, 0.1px) rotate(-90deg);
  }
  to {
    transform: rotate(450deg) translate(200px, 0.1px) rotate(-450deg);
  }
}
.blob:nth-child(2) {
  animation: move2 20s infinite linear;
}

@keyframes move2 {
  from {
    transform: rotate(180deg) translate(200px, 0.1px) rotate(-180deg);
  }
  to {
    transform: rotate(540deg) translate(200px, 0.1px) rotate(-540deg);
  }
}
.blob:nth-child(3) {
  animation: move3 20s infinite linear;
}

@keyframes move3 {
  from {
    transform: rotate(270deg) translate(200px, 0.1px) rotate(-270deg);
  }
  to {
    transform: rotate(630deg) translate(200px, 0.1px) rotate(-630deg);
  }
}
.blob:nth-child(4) {
  animation: move4 20s infinite linear;
}

@keyframes move4 {
  from {
    transform: rotate(360deg) translate(200px, 0.1px) rotate(-360deg);
  }
  to {
    transform: rotate(720deg) translate(200px, 0.1px) rotate(-720deg);
  }
}
.blob:nth-child(5) {
  animation: move5 20s infinite linear;
}

@keyframes move5 {
  from {
    transform: rotate(450deg) translate(200px, 0.1px) rotate(-450deg);
  }
  to {
    transform: rotate(810deg) translate(200px, 0.1px) rotate(-810deg);
  }
}
.blob:nth-child(6) {
  animation: move6 20s infinite linear;
}

@keyframes move6 {
  from {
    transform: rotate(540deg) translate(200px, 0.1px) rotate(-540deg);
  }
  to {
    transform: rotate(900deg) translate(200px, 0.1px) rotate(-900deg);
  }
}
.blob:nth-child(7) {
  animation: move7 20s infinite linear;
}

@keyframes move7 {
  from {
    transform: rotate(630deg) translate(200px, 0.1px) rotate(-630deg);
  }
  to {
    transform: rotate(990deg) translate(200px, 0.1px) rotate(-990deg);
  }
}
.blob:nth-child(8) {
  animation: move8 20s infinite linear;
}

@keyframes move8 {
  from {
    transform: rotate(720deg) translate(200px, 0.1px) rotate(-720deg);
  }
  to {
    transform: rotate(1080deg) translate(200px, 0.1px) rotate(-1080deg);
  }
}
.blob:nth-child(9) {
  animation: move9 20s infinite linear;
}

@keyframes move9 {
  from {
    transform: rotate(810deg) translate(200px, 0.1px) rotate(-810deg);
  }
  to {
    transform: rotate(1170deg) translate(200px, 0.1px) rotate(-1170deg);
  }
}
.blob:nth-child(10) {
  animation: move10 20s infinite linear;
}

@keyframes move10 {
  from {
    transform: rotate(900deg) translate(200px, 0.1px) rotate(-900deg);
  }
  to {
    transform: rotate(1260deg) translate(200px, 0.1px) rotate(-1260deg);
  }
}
.blob:nth-child(11) {
  animation: move11 20s infinite linear;
}

@keyframes move11 {
  from {
    transform: rotate(990deg) translate(200px, 0.1px) rotate(-990deg);
  }
  to {
    transform: rotate(1350deg) translate(200px, 0.1px) rotate(-1350deg);
  }
}
.blob:nth-child(12) {
  animation: move12 20s infinite linear;
}

@keyframes move12 {
  from {
    transform: rotate(1080deg) translate(200px, 0.1px) rotate(-1080deg);
  }
  to {
    transform: rotate(1440deg) translate(200px, 0.1px) rotate(-1440deg);
  }
}
.blob:nth-child(13) {
  animation: move13 20s infinite linear;
}

@keyframes move13 {
  from {
    transform: rotate(1170deg) translate(200px, 0.1px) rotate(-1170deg);
  }
  to {
    transform: rotate(1530deg) translate(200px, 0.1px) rotate(-1530deg);
  }
}
.blob:nth-child(14) {
  animation: move14 20s infinite linear;
}

@keyframes move14 {
  from {
    transform: rotate(1260deg) translate(200px, 0.1px) rotate(-1260deg);
  }
  to {
    transform: rotate(1620deg) translate(200px, 0.1px) rotate(-1620deg);
  }
}
.blob:nth-child(15) {
  animation: move15 20s infinite linear;
}

@keyframes move15 {
  from {
    transform: rotate(1350deg) translate(200px, 0.1px) rotate(-1350deg);
  }
  to {
    transform: rotate(1710deg) translate(200px, 0.1px) rotate(-1710deg);
  }
}
.blob:nth-child(16) {
  animation: move16 20s infinite linear;
}

@keyframes move16 {
  from {
    transform: rotate(1440deg) translate(200px, 0.1px) rotate(-1440deg);
  }
  to {
    transform: rotate(1800deg) translate(200px, 0.1px) rotate(-1800deg);
  }
}
.blob:nth-child(17) {
  animation: move17 20s infinite linear;
}

@keyframes move17 {
  from {
    transform: rotate(1530deg) translate(200px, 0.1px) rotate(-1530deg);
  }
  to {
    transform: rotate(1890deg) translate(200px, 0.1px) rotate(-1890deg);
  }
}
.blob:nth-child(18) {
  animation: move18 20s infinite linear;
}

@keyframes move18 {
  from {
    transform: rotate(1620deg) translate(200px, 0.1px) rotate(-1620deg);
  }
  to {
    transform: rotate(1980deg) translate(200px, 0.1px) rotate(-1980deg);
  }
}
</style></head><body>


<div class="bgImage"></div>


  <center>

    <img width="400" height="300" src="images/logo1.png" alt="Generic placeholder image">

</center>


<svg class="blobCont">
		<image xlink:href="https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixlib=rb-0.3.5&s=e20bc3d490c974d9ea190e05c47962f5&auto=format&fit=crop&w=634&q=80" mask="url(#mask)" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" />

      <mask id="mask" x="0" y="0">
				<g style="filter: url(#gooey)">
          <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
					<circle class="blob" cx="50%" cy="10%" r="40" fill="white" stroke="white"/>
					<circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
					<circle class="blob" cx="90%" cy="20%" r="120" fill="white" stroke="white"/>
					<circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
          <circle class="blob" cx="50%" cy="60%" r="80" fill="white" stroke="white"/>
					<circle class="blob" cx="70%" cy="90%" r="10" fill="white" stroke="white"/>
					<circle class="blob" cx="90%" cy="60%" r="90" fill="white" stroke="white"/>
					<circle class="blob" cx="30%" cy="90%" r="80" fill="white" stroke="white"/>
          <circle class="blob" cx="10%" cy="10%" r="80" fill="white" stroke="white"/>
					<circle class="blob" cx="50%" cy="10%" r="20" fill="white" stroke="white"/>
					<circle class="blob" cx="17%" cy="15%" r="70" fill="white" stroke="white"/>
					<circle class="blob" cx="40%" cy="20%" r="120" fill="white" stroke="white"/>
					<circle class="blob" cx="30%" cy="25%" r="30" fill="white" stroke="white"/>
          <circle class="blob" cx="80%" cy="60%" r="80" fill="white" stroke="white"/>
					<circle class="blob" cx="17%" cy="10%" r="100" fill="white" stroke="white"/>
					<circle class="blob" cx="40%" cy="60%" r="90" fill="white" stroke="white"/>
					<circle class="blob" cx="10%" cy="50%" r="80" fill="white" stroke="white"/>
				</g>
			</mask>

			<filter id="gooey" height="130%">
				<feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />
				<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
    	</filter>
	</svg>


</body></html>
