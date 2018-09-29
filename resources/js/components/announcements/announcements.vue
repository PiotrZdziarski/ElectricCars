<template>
    <div class="wrapper">
        <div class="claim">
            <div class="mainTitle">
                <h1 class="mainTitle">Electric car adverts</h1>
                <h4 class="subTitle">123 vehicles to buy</h4>
            </div>
        </div>
        <section class="main">
            <settings></settings>
            <div class="announcements">
                <sort-by @changeView="changeView"></sort-by>
                <announcements-list :viewType="viewType"></announcements-list>
            </div>
        </section>
    </div>
</template>

<script>
    import sortBy from './sortBy.vue';
    import settings from './settings.vue';
    import announcementsList from './announcementsList.vue';

    export default {
        name: "announcements",
        components: {
            sortBy: sortBy,
            settings: settings,
            announcementsList: announcementsList
        },
        data() {
           return {
                viewType: 'list'
           }
        },
        methods: {
            changeView(type) {
                this.viewType = type;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .wrapper {
        background: white;

        .claim {
            height: 30vh;
            background: #1e2124;
            text-transform: uppercase;
            font-family: 'Overpass', sans-serif;
            font-weight: bold;
            display: flex;
            padding-bottom: 1%;
            padding-left: 4%;

            @media(min-width: 476px) {
                padding-left: 8%;

            }


            .mainTitle {
                align-self: flex-end;
                font-weight: 700;
                color:white;
                font-size: 30px;

                @media(min-width: 476px) {
                    font-size: 40px;
                }

                @media(min-width: 1000px) {
                    font-size: 44px;
                }
            }

            .subTitle {
                color: #dddddd;
                font-weight: 600;
            }
        }


        .main {
            margin-left: auto;
            margin-right: auto;
            font-family: "Roboto", sans-serif;
            width: 100%;

            @media (min-width: 1000px) {
                display: flex;
                width: 970px;
            }

            @media(min-width: 1200px) {
                width: 1170px;
            }


            .announcements {
                background: #f8fafc;
                padding-top: 50px;
                @media(min-width: 1000px) {
                    width: 70%;
                }

                position: relative;
            }
        }
    }
</style>