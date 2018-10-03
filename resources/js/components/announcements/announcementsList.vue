<template>
    <section>
        <div v-if="loading" class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <transition name="fade">
            <div v-if="viewType === 'list'" class="listView">
                <article v-for="record in records">
                    <div class="announcement">
                        <div class="imageContainer">
                            <img class="image" src="/images/cars/nissanleaf.jpg">
                        </div>
                        <div class="info">
                            <h5 class="title">{{ record.title }}</h5>
                            <span class="subtitle">Year</span> {{ record.year }}
                            <br><span class="subtitle">Mileage</span> {{ record.mileage }} KM
                            <span class="description">{{ record.type_of_drive }}, {{ record.engine }}, {{ record.torque }}, {{ record.body_style }}, {{ record.exterior_color }}</span>
                        </div>
                        <div class="utilities">
                            <i class="icon-phone">{{ record.contact_number }}</i>
                            <i class="icon-mail">{{ record.email }}</i>
                            <span class="price">${{ record.price }}</span>
                        </div>
                    </div>
                </article>
            </div>
        </transition>

        <transition name="fade">
            <div v-if="viewType === 'grid'" class="gridView">

                <div class="announcement" v-for="record in records">
                    <div class="imageContainer">
                        <img class="image" src="/images/cars/nissanleaf.jpg">
                    </div>
                    <div class="info">
                        <h5 class="title">{{ record.title }}</h5>
                        <span class="subtitle">Year</span> {{ record.year }}
                        <br><span class="subtitle">Mileage</span> {{ record.mileage }} KM
                        <span class="description">{{ record.type_of_drive }}, {{ record.engine }}, {{ record.torque }}, {{ record.body_style }}, {{ record.exterior_color }}</span>
                    </div>
                    <div class="utilities">
                        <i class="icon-phone">{{ record.contact_number }}</i>
                        <i class="icon-mail">{{ record.email }}</i>
                        <span class="price">${{ record.price }}</span>
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
            },
            records: {
                Type: Array
            },
            loading: {
                Type: Boolean
            }
        }
    }
</script>

<style lang="scss" scoped>
    .listView {
        padding: 2.5% 2.5% 2.5% 3.5%;

        .announcement {
            box-shadow: 0 2px 6px #e5e8eb;
            width: 100%;
            margin-bottom: 40px;
            background: white;
            border-radius: 2px;

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
                    border-radius: 2px;
                }
            }

            .info {
                @media(min-width: 768px) {
                    width: 40%;
                }

                padding: 20px;
                color: #444444;

                .title {
                    color: #2a3744;;
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
        padding: 1% 1% 1% 2%;
        margin-bottom: 50px;

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
        color: #bc4755;
    }

    .fade-enter-active {
        transition: .5s opacity ease-in-out;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }

    .lds-ring {
        display: inline-block;
        position: absolute;
        top: 350px;
        left: 50%;
        width: 120px;
        height: 120px;
    }

    .lds-ring div {
        box-sizing: border-box;
        display: block;
        position: absolute;
        width: 70px;
        height: 70px;
        margin: 6px;
        border: 8px solid #999;
        border-radius: 50%;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        border-color: #b4aab4 transparent transparent transparent;
    }

    .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
    }

    .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
    }

    .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
    }

    @keyframes lds-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>