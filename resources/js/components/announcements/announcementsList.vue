<template>
    <section>
        <transition name="fade">
            <div :class="{listView: view_type === 'list', gridView: view_type ==='grid'}">
                <div class="announcement" v-for="record in records">

                    <div class="imageContainer">
                        <img class="image" src="/images/cars/nissanleaf.jpg">
                    </div>

                    <div class="info">
                        <a class="hrefTitle" :href="'/advert/' + record.id">
                            <h5 class="title">{{ record.title }}</h5>
                        </a>
                        <span class="subtitle">Year</span> {{ record.year }}
                        <br><span class="subtitle">Mileage</span> {{ record.mileage }} KM
                        <span class="description">{{ record.type_of_drive }}, {{ record.engine }}, {{ record.torque }}, {{ record.body_style }}, {{ record.exterior_color }}</span>
                    </div>

                    <div class="utilities">
                        <div class="utility">
                        <i class="icon-phone"></i>{{ record.contact_number }}1
                        </div>
                        <div class="utility">
                        <i class="icon-calendar"></i>{{ record.date.slice(0,10) }}
                        </div>
                        <span class="price">${{ record.price }}</span>
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
                @media(min-width: 768px) {
                    padding-left: 15px;
                }
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

                .subtitle {
                    color: #777777;
                    text-transform: uppercase;
                    font-size: 12px;
                    padding-right: 5px;
                }

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
                padding: 15px;
                word-wrap: break-word;
                position: relative;
                font-size: 12px;
                color: #444;

                .utility {
                    background: #728aa0;
                    width: 100%;
                    color: white;
                    padding: 5px;
                    border-radius: 4px;
                    margin-bottom: 10px;
                }

                .utility:first-child {
                    color: white;
                    background: #4169e5 !important;
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

    .title {
        color: #394d72;
    }
    .title:hover {
        color: #496292;
    }

    .price {
        display: block;
        font-weight: 700;
        margin-top: 20px;
        font-size: 18px;
        text-align: center;
        padding: 10px;
        background: #ff667d;
        border-radius: 4px;
        color: white;
    }

    .fade-enter-active {
        transition: .5s opacity ease-in-out;
    }

    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>