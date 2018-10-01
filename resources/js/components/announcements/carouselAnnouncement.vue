<template>
    <div class="carouselAnnouncement">
        <section>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner imageContainer">
                    <div id="slide1" class="carousel-item active  ">
                        <!--<div class="slider" id="slider1"></div>-->
                        <div class="carouselItemContainer">
                            <img class="image" src="/images/cars/nissanleaf.jpg">
                        </div>
                        <!--<transition name="slide-fade" appear>
                            <span class="autoname" v-if="slide === 1">Nissan <br> Leaf</span>
                        </transition>-->
                    </div>
                    <div id="slide2" class="carousel-item ">
                        <div class="carouselItemContainer">
                            <img class="image" src="/images/cars/bmwi3.jpg">
                        </div>
                        <!--<transition name="slide-fade">
                            <span class="autoname" v-if="slide === 2">Tesla <br>Model S</span>
                        </transition>-->
                    </div>
                    <div id="slide3" class="carousel-item  ">
                        <div class="carouselItemContainer">
                            <div>
                            <img class="image" src="/images/cars/teslas.jpg">
                            </div>
                        </div>
                        <!--<transition name="slide-fade">
                            <span class="autoname" v-if="slide === 3">BMW <br>I3</span>
                        </transition>-->
                    </div>
                    <div id="slide3" class="carousel-item">
                        <div class="carouselItemContainer">
                            <div>
                            <img class="image" src="/images/cars/carvertical.jpg">
                            </div>
                        </div>
                        <!--<transition name="slide-fade">
                            <span class="autoname" v-if="slide === 3">BMW <br>I3</span>
                        </transition>-->
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

        <section>
            <div class="carouselPreview">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
                <img class="image" src="/images/cars/teslas.jpg">
                <img class="image" src="/images/cars/carvertical.jpg">
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "carouselAnnouncement",
        data() {
            return {
                currentSlide: 1
            }
        }
    }
</script>

<style lang="scss" scoped>

    .carouselAnnouncement {
        width: 100%;
        padding: 5px;

        .imageContainer {
            height: 400px;
            position: relative;

            .carouselItemContainer {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 400px;
            }

            .image {
                width: 100%;
                height: 100%;
            }
        }

        .carouselPreview {
            margin-top: 10px;
            width: 100%;
            height: 150px;
            border: 1px solid black;
            overflow-x: scroll;
            overflow-y: hidden;
            display: flex;

            .image {
                height: 100%;
                padding-right: 2.5px;
                padding-left: 2.5px;
            }
        }
    }
</style>