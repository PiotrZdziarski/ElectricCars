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
        background: linear-gradient(to right, white 50%, #f4f6f8 50%);

        .claim {
            background-image: linear-gradient(rgba(57, 57, 57, 0.4), rgba(72, 70, 74, 0.4)), url("/images/advertisementsHome.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-position: 50%;
            height: 50vh;
            display: flex;
            align-items: center;
            color: white;
            font-weight: 500;
            font-family: "Roboto", sans-serif;
            padding-top: 5%;
            padding-left: 8%;

            .mainTitle {
                font-size: 64px;
                @media(max-width: 476px) {
                    padding-top: 20px;
                    font-size: 52px;
                }
            }

            .subTitle {
                color: #dddddd;
            }
        }

        .announcements {
            background: #f4f6f8;
            padding-top: 50px;
            @media(min-width: 1000px) {
                width: 75%;
            }

            position: relative;
        }

    }
</style>