<template>
    <section>
        <div class="claim">
            <div class="mainTitle">
                <h1 class="mainTitle">Certified 2016 Porsche Cayenne 2017 ctz 8g</h1>
                <h4 class="subTitle">
                    <a class="advertsHref" href="/adverts">
                        <i class="icon-undo"></i>
                        Back to adverts
                    </a>
                </h4>
            </div>
        </div>
        <div class="borderLine"></div>
        <div class="main">
            <div class="mainContent">
                <div class="left">
                    <carousel-announcement></carousel-announcement>
                    <h2 class="leftTitle">Vehicle details</h2>

                    <div class="details">
                        <div class="detail">
                            <div class="detailTitle">
                                Weight
                            </div>
                            <div class="detailValue">
                                1470kg
                            </div>
                        </div>

                        <div class="detail">
                            <div class="detailTitle">
                                Weight
                            </div>
                            <div class="detailValue">
                                1470kg
                            </div>
                        </div>
                        <div class="detail">
                            <div class="detailTitle">
                                ENGINE
                            </div>
                            <div class="detailValue">
                                3.6L V6 24V GDI DOHC Twin Turbo
                            </div>
                        </div>

                        <div class="detail">
                            <div class="detailTitle">
                                Year
                            </div>
                            <div class="detailValue">
                                106
                            </div>
                        </div>

                        <div class="detail">
                            <div class="detailTitle">
                                Weight
                            </div>
                            <div class="detailValue">
                                1470kg
                            </div>
                        </div>

                        <div class="detail">
                            <div class="detailTitle">
                                VNS
                            </div>
                            <div class="detailValue">
                                12494283 21ob2 12bio
                            </div>
                        </div>

                        <div class="detail">
                            <div class="detailTitle">
                                Full name
                            </div>
                            <div class="detailValue">
                                23981 829 01380 Nissa Leaft
                            </div>
                        </div>


                    </div>

                    <div class="sellerComment">
                        <h2 class="leftTitle">Seller comment</h2>
                        <p>
                            Nulla venenatis. In pede mi, aliquet sit amet, euismod in,auctor ut, ligula. Aliquam dapibus
                            tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac,
                            lorem.
                            Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis unde omnis iste natus
                            error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae
                            ab
                            illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                            ipsam
                            voluptatem quia voluptas sit aspernatur.
                        </p>
                    </div>

                    <div class="features">
                        <h2 class="leftTitle">Features</h2>
                        <ul>
                            <li>
                                <span>Twoja Stara pijana</span>
                            </li>

                            <li>
                                <span>Twoja Stara pijana</span>
                            </li>

                            <li>
                                <span>Twoja Stara pijana</span>
                            </li>

                            <li>
                                <span>Twoja Stara pijana</span>
                            </li>

                            <li>
                                <span>Twoja Stara pijana</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="price">
                        $76.234
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import carouselAnnouncement from './carouselAnnouncement.vue';

    export default {
        name: "announcement",
        components: {
            carouselAnnouncement: carouselAnnouncement
        }
    }
</script>

<style lang="scss" scoped>
    .claim {
        background-image: linear-gradient(rgba(48, 84, 198, 0.5), rgba(48, 84, 198, 0.5)), url("/images/advertisementsHome.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-position: 50%;
        height: 40vh;
        display: flex;
        align-items: center;
        color: white;
        font-family: "Roboto", sans-serif;
        padding-top: 5%;
        padding-left: 8%;

        .mainTitle {
            font-size: 42px;
            font-weight: 500;
            @media(max-width: 476px) {
                padding-top: 20px;
                font-size: 32px;
            }
        }

        .advertsHref {
            font-weight: 400;
            color: #e9e9e9;
            transition: .2s color ease-in-out;
        }

        .advertsHref:hover {
            color: #297ba7;
        }
    }

    .borderLine {
        margin-top: 10vh;
        width: 100%;
        height: 1px;
        background: #ddd;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 5vh;

        @media(min-width: 768px) {
            width: 740px;
        }

        @media (min-width: 1000px) {
            width: 970px;
        }

        @media(min-width: 1200px) {
            width: 1100px;
        }
    }

    .main {
        padding: 5px 15px 5px 15px;

        @media(min-width: 768px) and(max-width: 999.99px) {
            width: 740px;
        }

        @media(min-width: 1000px) {
            padding: 5px;
        }

        .mainContent {
            width: 100%;
            @media(min-width: 1000px) {
                display: flex;
            }

            .left {
                @media(min-width: 1000px) {
                    width: 70%;
                }


                .details {
                    margin-top: 25px;

                    .detail {
                        border-bottom: 1px solid #dddddd;
                        display: flex;
                        padding: 5px 1px 5px 1px;
                        align-items: center;

                        .detailTitle {
                            width: 30%;
                            text-transform: uppercase;
                            color: #888888;
                        }

                        .detailValue {
                            width: 70%;
                            color: #444;

                        }
                    }
                }

                .sellerComment {
                    color: #444;
                }

                .features {
                    ul {
                       padding-left: 16px;
                        margin-top: 15px;
                    }
                    li {
                        color: #ff4d52;
                        font-size: 16px;
                        margin-bottom: 20px;
                    }

                    span {
                        color: #444345;
                    }
                }
            }

            .right {
                background: #f5f5f5;
                @media(min-width: 1000px) {
                    width: 30%;
                }
                height: 100vh;

                .price {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 38px;
                    color: #444444;
                    font-weight: 700;
                    padding: 30px 0 30px 0;
                }
            }

        }
    }


    .leftTitle {
        margin-top: 40px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        color: #212c33;
    }
</style>