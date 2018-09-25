<template>
    <section class="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div id="slide1" class="carousel-item active">
                    <div class="slider" id="slider1"></div>
                    <transition name="slide-fade" appear>
                        <span class="autoname" v-if="slide === 1">Nissan <br> Leaf</span>
                    </transition>
                </div>
                <div id="slide2" class="carousel-item">
                    <div class="slider" id="slider2"></div>
                    <transition name="slide-fade">
                        <span class="autoname" v-if="slide === 2">Tesla <br>Model S</span>
                    </transition>
                </div>
                <div id="slide3" class="carousel-item">
                    <div class="slider" id="slider3"></div>
                    <transition name="slide-fade">
                        <span class="autoname" v-if="slide === 3">BMW <br>I3</span>
                    </transition>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</template>

<script>
    export default {
        name: "carousel",
        data() {
            return {
                slide: 1
            }
        },
        mounted() {
            $('#carouselExampleControls').on('slid.bs.carousel', () => {
                for (let i = 1; i <= 3; i++) {
                    if (document.getElementById('slide' + i).classList.contains('active')) {
                        this.slide = i;
                    }
                }
            });
        }
    }
</script>

<style lang="scss" scoped>
    .slide-fade-enter-active {
        transition: transform .8s ease, opacity .8s ease;
    }

    .slide-fade-enter, .slide-fade-leave-to {
        transform: translateX(20%);
        opacity: 0;
    }

    .slider {
        height: 100vh;
        transition: all .3s ease-in-out;
        background-size: cover !important;
        background-position: 50% !important;
    }

    .autoname {
        position: absolute;
        left: 20%;
        top: 45%;
        color: white;
        font-size: 48px;
        font-weight: 500;
        font-family: "Roboto", sans-serif;
        @media(min-width: 768px) {
            font-size: 72px;
        }

    }

    #slider1 {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("/images/cars/nissanleaf.jpg");
    }

    #slider2 {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("/images/cars/teslas.jpg");
    }

    #slider3 {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("/images/cars/bmwi3.jpg");
    }
</style>