<template>
    <section>
        <div class="claim">
            <div class="mainTitle">
                <h1 class="mainTitle">{{ advertJSON.title }}</h1>
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

                        <div class="detail" v-if="advertJSON.make !== ''">
                            <div class="detailTitle">
                                Make
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.make }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.model !== ''">
                            <div class="detailTitle">
                                Model
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.model }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.condition !== ''">
                            <div class="detailTitle">
                                Condition
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.condition }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.mileage !== ''">
                            <div class="detailTitle">
                                Mileage
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.mileage }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.weight !== ''">
                            <div class="detailTitle">
                                Weight
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.weight }} KG
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.country !== ''">
                            <div class="detailTitle">
                                Country
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.country }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.engine !== ''">
                            <div class="detailTitle">
                                Engine
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.engine }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.torque !== ''">
                            <div class="detailTitle">
                                Torque
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.torque }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.transmission !== ''">
                            <div class="detailTitle">
                                Transmission
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.transmission }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.type_of_drive !== ''">
                            <div class="detailTitle">
                                Type of drive
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.type_of_drive }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.year !== ''">
                            <div class="detailTitle">
                                Year
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.year }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.number_of_seats !== ''">
                            <div class="detailTitle">
                                Number of seats
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.number_of_seats }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.body_style !== ''">
                            <div class="detailTitle">
                                Body style
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.body_style }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.exterior_color !== ''">
                            <div class="detailTitle">
                                Exterior Color
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.exterior_color }}
                            </div>
                        </div>

                        <div class="detail" v-if="advertJSON.interior_color !== ''">
                            <div class="detailTitle">
                                Interior Color
                            </div>
                            <div class="detailValue">
                                {{ advertJSON.interior_color }}
                            </div>
                        </div>


                    </div>

                    <div class="sellerComment">
                        <h2 class="leftTitle">Seller comment</h2>
                        <p>
                            {{ advertJSON.description }}
                        </p>
                    </div>

                    <div class="features">
                        <h2 class="leftTitle">Features</h2>
                        <ul>
                            <li v-for="feature in featuresJSON">
                                <span>{{ feature.feature }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="rightContent" class="right">
                    <div class="price">
                        $76123
                    </div>

                    <div class="textRight">
                        <i class="icon-calendar"></i> ADDED:  <span class="value">{{ advertJSON.date }}</span>
                    </div>
                    <div class="textRight">
                        <i class="icon-location-circled"></i> COUNTRY:  <span class="value">{{ advertJSON.country }}</span>
                    </div>
                    <div class="textRight">
                        <i class="icon-location"></i> LOCATION:  <span class="value">{{ advertJSON.location }}</span>
                    </div>

                    <div class="contactNumber utility">
                        <i class="icon-phone"></i> 487 472 123
                    </div>

                    <div class="email utility">
                        <i class="icon-mail"></i> jan.kowalski1960Stefan@gmail.com
                    </div>
                    <a class="href" href="#" data-toggle="modal" data-target="#comparision">
                        <div class="compare utility">
                            <i class="icon-flow-cross"></i>Compare
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <comparision></comparision>
    </section>
</template>

<script>
    import carouselAnnouncement from './carouselAnnouncement.vue';

    export default {
        name: "announcement",
        components: {
            carouselAnnouncement: carouselAnnouncement
        },
        props: {
            advert: {
                Type: Object
            },
            features: {
                Type: Object
            }
        },
        computed: {
            advert_to_json: function() {
                return JSON.parse(this.advert);
            },
            features_to_json: function () {
                return JSON.parse(this.features);
            }
        },
        data() {
            return {
                advertJSON: {},
                featuresJSON: {},
            }
        },
        mounted() {
            this.advertJSON = this.advert_to_json;
            this.featuresJSON = this.features_to_json;
        }
    }
</script>

<style lang="scss" scoped>
    .claim {
        background-image: linear-gradient(rgba(48, 84, 198, 0.5), rgba(48, 84, 198, 0.5)), url("/images/advertisementsHome.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-position: 50%;
        min-height: 60vh;
        display: flex;
        align-items: center;
        color: white;
        font-family: "Roboto", sans-serif;
        padding-top: 5%;
        @media(min-width: 768px) {
            min-height: 40vh;
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
        width: 100%;
        height: 1px;
        background: #ddd;

        margin: 10vh auto 5vh auto;

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
            width: 100%;
            padding: 2% 2% 0 2%;
        }

        .mainContent {
            width: 100%;
            @media(min-width: 1000px) {
                display: flex;
            }

            .left {
                padding-bottom: 100px;
                border-radius: 5px;
                @media(min-width: 1000px) {
                    width: 70%;
                    padding: 0 30px 100px 30px;
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
                border-radius: 5px;
                padding: 15px 5px 100px 5px;

                @media(min-width: 1000px) {
                    width: 30%;
                    padding: 0 30px 100px 30px;
                }

                .price {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 38px;
                    color: #2c3a4b;
                    font-weight: 700;
                    padding: 30px 0 30px 0;
                    border-bottom: 1px solid #ddd;

                    @media(min-width: 1000px) {
                        padding-top: 40px;
                    }
                }

                .textRight {
                    margin-top: 20px;
                    font-size: 16px;

                    .value {
                        padding-left: 5px;
                        color: #555;
                    }
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