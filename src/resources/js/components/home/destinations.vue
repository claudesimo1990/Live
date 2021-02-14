<template>
<section id="services" class="my-5 py-4">
  <div class="container">
      <div class="section-header">
        <h2 class="text-center">
            Quelques Destinations preferes <br> de nos utilisateurs
        </h2>
      </div>
    <div id="myCarousel" class="carousel slide carousel-fade mt-4" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 col-12 order-md-1 order-2">
                  <h4>Douala<b-icon class="mx-1 icon-from-to-destination" icon="arrow-right-circle-fill" variant="info" aria-hidden="true"></b-icon>Berlin</h4>
                  <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                    necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                  </div>
                <div class="col-xs-12 col-md-12 col-lg-5 order-md-2 order-1"><img width="600" height="400" src="/images/imgs/popularDestination/douala.png" class="" alt="slide"></div>
                <div class="col-xs-12 col-md-12 col-lg-5 order-md-2 order-1"><img width="600" height="400" src="/images/imgs/popularDestination/berlin.jpeg" class="" alt="slide"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 col-12 order-md-1 order-2">
                  <h4>Paris<b-icon class="mx-1 icon-from-to-destination" icon="arrow-right-circle-fill" variant="info" aria-hidden="true"></b-icon>Douala</h4>
                  <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                    necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                  </div>
                <div class="col-xs-12 col-md-12 col-lg-5 order-md-2 order-1"><img width="600" height="400" src="/img/intro-carousel/5.jpg" class="" alt="slide"></div>
                <div class="col-xs-12 col-md-12 col-lg-5 order-md-2 order-1"><img width="600" height="400" src="/img/intro-carousel/5.jpg" class="" alt="slide"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="mask flex-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-7 col-12 order-md-1 order-2">
                  <h4>Dusseldorf<b-icon class="mx-1 icon-from-to-destination" icon="arrow-right-circle-fill" variant="info" aria-hidden="true"></b-icon>Douala</h4>
                  <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                    necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                  </div>
                <div class="col-xs-12 col-md-12 col-lg-5 order-md-2 order-1"><img width="600" height="400" src="/img/intro-carousel/1.jpg" class="" alt="slide"></div>
                <div class="col-xs-12 col-md-12 col-lg-5 order-md-2 order-1"><img width="600" height="400" src="/img/intro-carousel/1.jpg" class="" alt="slide"></div>
              </div>
            </div>
          </div>
      </div>
  </div>
  </div>
<!--slide end-->
  </div>
</section>
</template>

<script>
export default {

}
</script>

<style lang="scss">
@import "./../../../sass/_variables.scss";

#myCarousel .carousel-item .mask {
  position: absolute;
  top: 0;
	left:0;
	height:100%;
    width: 100%;
    background-attachment: fixed;
}
#myCarousel h4{
	font-size:50px;
	margin-bottom:15px;
	color:$quigo;
	line-height:100%;
	letter-spacing:0.5px;
	font-weight:600;
}
#myCarousel p{
	font-size:18px;
	margin-bottom:15px;
	color:$gray-600;
}
#myCarousel .carousel-item a{background:#F47735; font-size:14px; color:#FFF; padding:13px 32px; display:inline-block; }
#myCarousel .carousel-item a:hover{background:#394fa2; text-decoration:none;  }

#myCarousel .carousel-item h4{-webkit-animation-name:fadeInLeft; animation-name:fadeInLeft;}
#myCarousel .carousel-item p{-webkit-animation-name:slideInRight; animation-name:slideInRight;}
#myCarousel .carousel-item a{-webkit-animation-name:fadeInUp; animation-name:fadeInUp;}
#myCarousel .carousel-item .mask img{-webkit-animation-name:slideInRight; animation-name:slideInRight; display:block; height:auto; max-width:100%;}
#myCarousel h4, #myCarousel p, #myCarousel a, #myCarousel .carousel-item .mask img{-webkit-animation-duration: 1s;
    animation-duration: 1.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
#myCarousel .container {max-width: 1430px;  }
#myCarousel .carousel-item{height:100%; min-height:550px; }
#myCarousel{position:relative; z-index:1; background-color:$white; background-size:cover; }

.carousel-control-next, .carousel-control-prev{height:40px; width:40px; padding:12px; top:50%; bottom:auto; transform:translateY(-50%); background-color: #f47735; }


.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease,-webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
}
.carousel-fade .carousel-item {
	opacity: 0;
	-webkit-transition-duration: .6s;
	transition-duration: .6s;
	-webkit-transition-property: opacity;
	transition-property: opacity
}
.carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
	opacity: 1
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active {
	opacity: 0
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform: translateX(0);
	-ms-transform: translateX(0);
	transform: translateX(0)
}
@supports (transform-style:preserve-3d) {
	.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
	-webkit-transform:translate3d(0, 0, 0);
	transform:translate3d(0, 0, 0)
	}
}
.carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}



@-webkit-keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInLeft {
  from {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}

@-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

@-webkit-keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slideInRight {
  from {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    visibility: visible;
  }

  to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.slideInRight {
  -webkit-animation-name: slideInRight;
  animation-name: slideInRight;
}

.icon-from-to-destination {
  color:$quigo !important;
}

</style>
