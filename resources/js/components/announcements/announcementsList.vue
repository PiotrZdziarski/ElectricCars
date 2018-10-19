<template>
    <section>
        <transition name="fade">
            <div :class="{listView: view_type === 'list', gridView: view_type ==='grid'}">
                <div @click="hrefAdvert(record.id)" class="announcement" v-for="record in records">

                    <div class="imageContainer">
                        <img class="image" src="/images/cars/teslas.jpg">
                    </div>

                    <div class="info">
                        <a :href="'/advert/' + record.id">
                            <h5 class="title">{{ record.title }}</h5>
                        </a>
                        <span class="subtitle">Year</span> {{ record.year }}
                        <br><span class="subtitle">Mileage</span> {{ record.mileage }} KM
                        <br><span class="subtitle">Location</span> Poland, Los Angeles
                        <span class="description">{{ record.type_of_drive }}, {{ record.engine }}, {{ record.torque }}, {{ record.body_style }}, {{ record.exterior_color }}</span>
                    </div>

                    <div class="utilities">
                        <span class="price">${{ record.price }}</span>
                        <div class="utility">
                        <span class="subtitle">
                        Condition:
                        </span>Used
                        </div>
                        <div class="utility" title="Date of addition">
                            <i class="icon-calendar"></i>{{ record.date.slice(0,10) }}
                        </div>
                    </div>
                </div>
            </div>
        </transition>

        <pagination @changePage="changePage($event)" :links="links" :meta="meta"></pagination>
    </section>
</template>

<script>
    import pagination from './pagination.vue';

    export default {
        name: "announcementsList",
        components: {
            pagination: pagination
        },
        props: {
            view_type: {
                Type: String
            },
            records: {
                Type: Array
            },
            links: {
                Type: Object
            },
            meta: {
                Type: Object
            }
        },
        methods: {
            changePage(page) {
                this.$emit('changePage', page);
            },
            hrefAdvert(advert_id) {
                window.location.href = `/advert/${advert_id}`;
            }
        }
    }
</script>

<style lang="scss" scoped>

    .fade-enter-active, .fade-leave-active {
        transition: opacity .2s;
    }

    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
    {
        opacity: 0;
    }

    .listView {

        padding: 2% 15px 1% 15px;
        margin-bottom: 30px;
        @media(min-width: 1000px) {
            padding: 2% 2.5% 1% 3.5%;
        }

        .announcement {
            border: 1px solid #ededed;
            width: 100%;
            margin-bottom: 15px;
            background: white;
            border-radius: 2px;
            transition: background-color .2s ease-in-out;

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
                @media(min-width: 768px) {
                    padding-left: 15px;
                }

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

                .description {
                    display: block;
                    font-size: 12px;
                    color: #777;
                    padding-top: 15px;
                }
            }

            .utilities {
                @media(min-width: 768px) {
                    width: 18%;
                }

                padding: 0 15px 15px 15px;

                @media(min-width: 476px) {
                    padding: 15px;
                }
                word-wrap: break-word;
                position: relative;
                font-size: 12px;
                color: #444;

                .utility {
                    @media(min-width: 476px) and (max-width: 759.99px) {
                        width: 70%;
                        margin-left: auto;
                        margin-right: auto;
                    }
                }

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
        @media(min-width: 1000px) {
            padding: 1% 15px 1% 15px;
        }
        margin-bottom: 50px;

        .announcement {
            margin: 2.25%;

            @media(min-width: 476px) {
                width: 45.5%;
            }

            @media(min-width: 768px) {
                width: 30.33%;
                margin: 1.5%;
            }

            background: white;
            border: 1px solid #ededed;
            border-radius: 2px;

            .imageContainer {

                .image {
                    width: 100%;
                    border-radius: 4px;
                }
            }

            .info {
                padding: 20px;
                color: #444444;

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

    .title {
        color: #3a3e45;
        font-size: 18px;
        font-family: "Overpass", sans-serif;
    }

    .price {
        display: block;
        font-weight: 500;
        font-size: 20px;
        text-align: center;
        padding: 0 10px 10px 10px;
        margin-bottom: 20px;
        border-bottom: 1px solid #efefef;
        color: #3a4e58;
        border-radius: 4px;

        @media(min-width: 476px) {
            padding: 10px;
        }
    }

    .utility {
        border-bottom: 1px solid #f4d6de;
        width: 100%;
        color: black;
        padding: 5px;
        border-radius: 3px;
        margin-bottom: 10px;

        .icon-phone {
            margin-right: 2px;
        }

        .icon-calendar {
            margin-right: 4px;
        }
    }

    .utility:last-child {
        margin-top: 15px;
        border-bottom: 1px solid #c0c6d7;
    }

    .subtitle {
        color: #777777;
        text-transform: uppercase;
        font-size: 12px;
        padding-right: 5px;
    }

    .announcement:hover {
        background: #fafafa;
        border: 1px solid #e5e5e5;
        cursor: pointer;
    }

    .fade-enter-active {
        transition: .5s opacity ease-in-out;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>