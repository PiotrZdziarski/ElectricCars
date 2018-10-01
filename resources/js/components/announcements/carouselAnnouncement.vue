<template>
    <div class="carouselAnnouncement">
        <section>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div  class="carousel-inner imageContainer">
                    <div id="slide1" class="carousel-item active">
                        <div class="carouselItemContainer">
                            <a data-fancybox="gallery" href="/images/cars/nissanleaf.jpg">
                            <img class="image" src="/images/cars/nissanleaf.jpg">
                            </a>
                        </div>
                    </div>
                    <div id="slide2" class="carousel-item ">
                        <div class="carouselItemContainer">
                            <a data-fancybox="gallery" href="/images/cars/bmwi3.jpg">
                            <img class="image" src="/images/cars/bmwi3.jpg">
                            </a>
                        </div>
                    </div>
                    <div id="slide3" class="carousel-item  ">
                        <div class="carouselItemContainer">
                            <div>
                            <img class="image" src="/images/cars/teslas.jpg">
                            </div>
                        </div>
                    </div>
                    <div id="slide3" class="carousel-item">
                        <div class="carouselItemContainer">
                            <div>
                            <img class="image" src="/images/cars/carvertical.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="angle" aria-hidden="true"><i class="icon-angle-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="angle" aria-hidden="true"><i class="icon-angle-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <section>
            <div class="carouselPreview">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
                <img class="image" src="/images/cars/bmwi3.jpg">
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
        },
        methods: {
            showImageBox() {
                alert(0);
            }
        }
    }
</script>

<style lang="scss" scoped>


    .carouselAnnouncement {
        width: 100%;
        padding: 5px;

        .imageContainer {
            background: #f1f1f1;
            height: 400px;
            position: relative;

            .carouselItemContainer {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 400px;
            }

            .image {
                max-width: 100%;
                max-height: 100%;
            }
        }

        .carousel-control-next {
            transition: opacity .2s  ease-in-out;
        }
        .angle {
            font-size: 24px;
            font-weight: 500;
            color: white;
            background: rgba(100,100,100, 0.6);
            border-radius: 4px;
        }

        .carouselPreview {
            margin-top: 10px;
            width: 100%;
            height: 150px;
            border: 1px solid #f3f3f3;
            padding: 5px;
            overflow-x: auto;
            overflow-y: hidden;
            display: flex;

            .image {
                height: 100%;
                padding: 7px;
            }
        }

        .carouselPreview::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(187, 187, 187, 0.4);
            background-color: #efefef;
        }

        .carouselPreview::-webkit-scrollbar {
            background-color: #F5F5F5;
            height: 11px;
        }

        .carouselPreview::-webkit-scrollbar-thumb {
            background-color: #403b3e;
            border-radius: 4px;
        }
    }
</style>