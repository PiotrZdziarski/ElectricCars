<template>
    <section>
        <transition name="fade">
            <div v-if="viewType === 'list'" class="listView">
                <article>
                    <div class="announcement">
                        <div class="imageContainer">
                            <img class="image" src="/images/cars/nissanleaf.jpg">
                        </div>
                        <div class="info">
                            <h5 class="title">New Nissan Leaf 2017 LTZ CPZ</h5>
                            <span class="subtitle">Type</span> Electric
                            <br><span class="subtitle">Mileage</span> 10234 KM
                            <span class="description">Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD</span>
                        </div>
                        <div class="utilities">
                            <i class="icon-phone">123 435 235</i>
                            <i class="icon-mail">pzdziarski.2001@gmail.com</i>
                            <span class="price">$14000</span>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="announcement">
                        <div class="imageContainer">
                            <img class="image" src="/images/cars/nissanleaf.jpg">
                        </div>
                        <div class="info">
                            <h5 class="title">New Nissan Leaf 2017 LTZ CPZ</h5>
                            <span class="subtitle">Type</span> Electric
                            <br><span class="subtitle">Mileage</span> 10234 KM
                            <span class="description">Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD</span>
                        </div>
                        <div class="utilities">
                            <i class="icon-phone">123 435 235</i>
                            <i class="icon-mail">pzdziarski.2001@gmail.com</i>
                            <span class="price">$14000</span>
                        </div>
                    </div>
                </article>

                <article>
                    <div class="announcement">
                        <div class="imageContainer">
                            <img class="image" src="/images/cars/nissanleaf.jpg">
                        </div>
                        <div class="info">
                            <h5 class="title">New Nissan Leaf 2017 LTZ CPZ</h5>
                            <span class="subtitle">Type</span> Electric
                            <br><span class="subtitle">Mileage</span> 10234 KM
                            <span class="description">Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD</span>
                        </div>
                        <div class="utilities">
                            <i class="icon-phone">123 435 235</i>
                            <i class="icon-mail">pzdziarski.2001@gmail.com</i>
                            <span class="price">$14000</span>
                        </div>
                    </div>
                </article>
            </div>
        </transition>

        <transition name="fade">
            <div v-if="viewType === 'grid'" class="gridView">
                <div class="announcement">
                    <div class="imageContainer">
                        <img class="image" src="/images/cars/nissanleaf.jpg">
                    </div>
                    <div class="info">
                        <h5 class="title">New Nissan Leaf 2017 LTZ CPZ</h5>
                        <span class="subtitle">Type</span> Electric
                        <br><span class="subtitle">Mileage</span> 10234 KM
                        <span class="description">Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD</span>
                    </div>
                    <div class="utilities">
                        <i class="icon-phone">123 435 235</i>
                        <i class="icon-mail">pzdziarski.2001@gmail.com</i>
                        <span class="price">$14000</span>
                    </div>
                </div>

                <div class="announcement">
                    <div class="imageContainer">
                        <img class="image" src="/images/cars/nissanleaf.jpg">
                    </div>
                    <div class="info">
                        <h5 class="title">New Nissan Leaf 2017 LTZ CPZ</h5>
                        <span class="subtitle">Type</span> Electric
                        <br><span class="subtitle">Mileage</span> 10234 KM
                        <span class="description">Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD</span>
                    </div>
                    <div class="utilities">
                        <i class="icon-phone">123 435 235</i>
                        <i class="icon-mail">pzdziarski.2001@gmail.com</i>
                        <span class="price">$14000</span>
                    </div>
                </div>
                <div class="announcement">
                    <div class="imageContainer">
                        <img class="image" src="/images/cars/nissanleaf.jpg">
                    </div>
                    <div class="info">
                        <h5 class="title">New Nissan Leaf 2017 LTZ CPZ</h5>
                        <span class="subtitle">Type</span> Electric
                        <br><span class="subtitle">Mileage</span> 10234 KM
                        <span class="description">Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD</span>
                    </div>
                    <div class="utilities">
                        <i class="icon-phone">123 435 235</i>
                        <i class="icon-mail">pzdziarski.2001@gmail.com</i>
                        <span class="price">$14000</span>
                    </div>
                </div>

                <div class="announcement">
                    <div class="imageContainer">
                        <img class="image" src="/images/cars/nissanleaf.jpg">
                    </div>
                    <div class="info">
                        <h5 class="title">New Nissan Leaf 2017 LTZ CPZ</h5>
                        <span class="subtitle">Type</span> Electric
                        <br><span class="subtitle">Mileage</span> 10234 KM
                        <span class="description">Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD</span>
                    </div>
                    <div class="utilities">
                        <i class="icon-phone">123 435 235</i>
                        <i class="icon-mail">pzdziarski.2001@gmail.com</i>
                        <span class="price">$14000</span>
                    </div>
                </div>
            </div>
        </transition>
    </section>
</template>

<script>
    export default {
        name: "announcementsList",
        props: {
            viewType: {
                Type: String
            }
        }
    }
</script>

<style lang="scss" scoped>
    .listView {
        padding: 2.5%;

        .announcement {
            box-shadow: 0 1px 2px #dddddd;
            width: 100%;
            margin-bottom: 40px;
            background: white;
            border-radius: 4px;

            @media(min-width: 768px) {
                display: flex;
            }

            .imageContainer {
                @media(min-width: 768px) {
                    width: 42%;
                }
                display: flex;
                justify-content: center;
                align-items: center;
                /*background-image: url("/images/cars/nissanleaf.jpg");*/
                /*background-size: cover;*/
                /*background-position: 50%;*/
                /*min-height: 150px;*/

                .image {
                    width: 100%;
                    border-radius: 4px;
                }
            }

            .info {
                @media(min-width: 768px) {
                    width: 40%;
                }

                padding: 20px;
                color: #444444;

                .title {
                    color: #444444;
                }

                .subtitle {
                    color: #777777;
                    text-transform: uppercase;
                    font-size: 12px;
                    padding-right: 5px;
                }

                .description {
                    display: block;
                    font-size: 12px;
                    padding-top: 15px;
                }
            }

            .utilities {
                @media(min-width: 768px) {
                    width: 18%;
                }
                padding: 15px;
                word-wrap: break-word;

                @media(max-width: 768px) {
                    .icon-mail {
                        padding-left: 5px;
                    }
                }
            }
        }
    }

    .gridView {
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        position: relative;
        padding: 1%;

        .announcement {

            @media(min-width: 476px) {
                width: 45.5%;
            }

            @media(min-width: 768px) {
                width: 30.33%;
            }

            background: white;
            box-shadow: 0 1px 2px #dddddd;
            margin: 1.5%;
            border-radius: 4px;

            .imageContainer {

                .image {
                    width: 100%;
                    border-radius: 4px;
                }
            }

            .info {
                padding: 20px;
                color: #444444;

                .title {
                    color: #444444;
                }

                .subtitle {
                    color: #777777;
                    text-transform: uppercase;
                    font-size: 12px;
                    padding-right: 5px;
                }

                .description {
                    display: block;
                    font-size: 12px;
                    padding-top: 15px;
                }
            }

            .utilities {
                padding: 0 15px 15px 15px;
                word-wrap: break-word;
            }
        }
    }

    .price {
        display: block;
        margin-top: 10px;
        font-weight: 700;
        font-size: 18px;
        color: #a12932;
    }

    .fade-enter-active {
        transition: .5s opacity ease-in-out;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>