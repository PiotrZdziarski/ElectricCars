<template>
    <section class="advertisements">
        <h1 class="title">Featured Announcements</h1>
        <div class="featured">

            <div class="advertisement">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="carInfo">
                    <h5 class="titleAdvertisement">New Brand Nissan Leaf 2017</h5>
                    <span class="price">PRICE</span>
                    <span class="priceCount">$14000.00</span>

                    <div class="carDetails">
                        Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD
                    </div>

                    <div class="carUtility">
                        <a class="utility" href="#">More Info</a>
                        |
                        <a class="utility" href="#">Add to compare</a>
                    </div>
                </div>
            </div>

            <div class="advertisement">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="carInfo">
                    <h5 class="titleAdvertisement">New Brand Nissan Leaf 2017</h5>
                    <span class="price">PRICE</span>
                    <span class="priceCount">$14000.00</span>

                    <div class="carDetails">
                        Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD
                    </div>

                    <div class="carUtility">
                        <a class="utility" href="#">More Info</a>
                        |
                        <a class="utility" href="#">Add to compare</a>
                    </div>
                </div>
            </div>

            <div class="advertisement">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="carInfo">
                    <h5 class="titleAdvertisement">New Brand Nissan Leaf 2017</h5>
                    <span class="price">PRICE</span>
                    <span class="priceCount">$14000.00</span>

                    <div class="carDetails">
                        Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD
                    </div>

                    <div class="carUtility">
                        <a class="utility" href="#">More Info</a>
                        |
                        <a class="utility" href="#">Add to compare</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</template>

<script>
    export default {
        name: "advertisementsHome"
    }
</script>

<style lang="scss" scoped>

    .advertisements {

        margin-top: 100px;

        @media(min-width: 768px) {
            margin-top: 175px;
        }
        width: 100%;
        background-image: url("/images/advertisementsHome.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-position: 50%;
        padding-bottom: 50px;
        position: relative;

        .title {
            color: white;
            font-size: 38px;
            font-weight: 500;
            padding-top: 60px;
            text-align: center;
            margin-left: 15px;
            margin-right: 15px;
            font-family: "Roboto", sans-serif;
        }

        .featured {
            margin-top: 50px;
            position: relative;
            margin-left: auto;
            margin-right: auto;

            @media(min-width: 476px) {
                width: 400px;
            }

            @media(min-width: 768px) {
                display: flex;
                width: 750px;
            }

            @media(min-width: 1000px) {
                width: 980px;
            }

            @media(min-width: 1200px) {
                width: 1180px;
            }

            .advertisement {
                background: white;
                box-shadow: 0 1px 2px #b9bbbe;
                margin: 5% 5% 30px 5%;
                position: relative;

                @media(min-width: 476px) {
                    margin: 2% 2% 30px 2%;
                }

                @media(min-width: 768px) {
                    width: 100%;
                    margin-bottom: 2%;
                }

                .image {
                    width: 100%;
                }

                .carInfo {
                    padding: 20px;
                    font-family: "Roboto", sans-serif;

                    .titleAdvertisement {
                        color: #666666;
                        font-weight: 500;
                    }

                    .price {
                        color: #385d7a;
                        font-weight: 700;
                    }

                    .priceCount {
                        padding-left: 10px;
                    }
                    .carDetails {
                        margin-top: 10px;
                        color: #666666;
                        font-size: 12px;
                    }

                    .carUtility {
                        margin-top: 10px;
                        color: #666666;
                        font-size: 18px;

                        .utility {
                            font-size: 14px;
                        }
                    }
                }
            }

            .twoInRow {
                @media(max-width: 1000px) {
                    display: none;
                }
            }
        }
    }
</style>