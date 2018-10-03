<template>
    <section>
        <div class="claim">
            <div class="mainTitle">
                <h1 class="mainTitle">Certified 2016 Porsche  eqwij eqiw eoiqwje oiqw jeoiqwj eoiqwj eoqiCayenne 2017 ctz 8g</h1>
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
                <div id="rightContent" class="right">
                    <div class="price">
                        $76123
                    </div>

                    <div class="contactNumber utility">
                        <i class="icon-phone"></i> 487 472 123
                    </div>

                    <div class="email utility">
                        <i class="icon-mail"></i> jan.kowalski1960Stefan@gmail.com
                    </div>
                    <a class="href" href="#">
                        <div class="compare utility">
                            <i class="icon-flow-cross"></i>Compare
                        </div>
                    </a>
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
        height: 60vh;
        display: flex;
        align-items: center;
        color: white;
        font-family: "Roboto", sans-serif;
        padding-top: 5%;
        @media(min-width: 768px) {
            height: 50vh;
            padding-left: 5%;
        }


        .mainTitle {
            font-size: 42px;
            font-weight: 500;
            padding: 15px;
            @media(max-width: 476px) {
                padding-top: 20px;
                font-size: 32px;
            }
        }

        .advertsHref {
            font-weight: 400;
            padding-left: 15px;
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
            width: 1150px;
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
            margin-bottom: 100px;
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
                background: #f3f3f3;
                @media(min-width: 1000px) {
                    width: 30%;
                }
                margin-left: 15px;
                margin-right: 15px;
                padding: 15px;

                .price {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 38px;
                    color: #2c3a4b;
                    font-weight: 700;
                    padding: 30px 0 30px 0;
                    border-bottom: 1px solid #ddd;
                }

                .utility {
                    margin-top: 30px;
                    padding: 14px 5px 14px 5px;
                    color: white;
                    border-radius: 4px;
                    justify-content: center;
                    display: flex;
                    align-items: center;
                    font-size: 18px;
                    overflow-x: auto;
                }

                .contactNumber {
                    background: #ed1c24;
                }

                .email {
                    background: #22292f;
                    font-size: 16px;
                    .icon-mail {
                        padding-right: 5px;
                    }
                }

                .compare {
                    background: #4159e5;
                    cursor: pointer;
                    transition: .2s background-color ease-in-out;
                    .href {
                        color: white;
                    }
                }
                .compare:hover {
                    background: #4a68ff;
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