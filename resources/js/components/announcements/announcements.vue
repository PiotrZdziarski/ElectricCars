<template>
    <div class="wrapper">
        <transition name="fade">
            <progress-bar v-if="loading" @finishedLoading="finishedLoading" :data_retrieved="data_retrieved"></progress-bar>
        </transition>
        <div class="claim">
            <div class="mainTitle">
                <h1 class="mainTitle">Electric car adverts</h1>
                <h4 class="subTitle">123 vehicles to buy</h4>
            </div>
        </div>
        <section class="main">
            <settings
                    @advancedSearching="advancedSearching($event)"
                    @advancedSearchBegin="advancedSearchBegin"
                    :per_page="per_page"
                    :order_by="sort_by"
                    :looking_for="looking_for"
                    :searching_settings="searching_settings"
                    @basicSearching="basicSearching($event)">
            </settings>
            <div class="announcements" id="announcements">
                <sort-by @perPage="perPage($event)" @sortBy="sortBy($event)" @changeView="changeView"></sort-by>
                <announcements-list @changePage="changePage($event)" :links="links" :meta="meta" :records="records" :view_type="view_type"></announcements-list>
            </div>
        </section>
    </div>
</template>

<script>
    import sortBy from './sortBy.vue';
    import settings from './settings.vue';
    import announcementsList from './announcementsList.vue';
    import progressBar from '../app/progressBar.vue';

    export default {
        name: "announcements",
        components: {
            sortBy: sortBy,
            settings: settings,
            announcementsList: announcementsList,
            progressBar: progressBar
        },
        props: {
            searching_settings: {
                Type: Object
            }
        },
        data() {
            return {
                view_type: 'list',
                records: [],
                per_page: 12,
                sort_by: 'newest',
                loading: true,
                data_retrieved: false,
                meta: {},
                links: {},
                page: 1,
                looking_for: '',
            }
        },
        mounted() {
            this.retrieveRecords();
        },
        methods: {
            //retrieve adverts from db
            retrieveRecords(scroll = false) {
                axios.get(`/api/announcements?per_page=${this.per_page}&order_by=${this.sort_by}&page=${this.page}&looking_for=${this.looking_for}`).then(Response => {
                    this.records = Response.data.data;
                    this.meta = Response.data.meta;
                    this.links = Response.data.links;

                    if(scroll === true) {
                        document.getElementById('announcements').scrollIntoView();
                    }
                    this.data_retrieved = true;
                });
            },

            sortBy(type) {
                this.sort_by = type;
                this.sorting();
            },

            perPage(perPage) {
                this.per_page = perPage;
                this.sorting();
            },

            //parent method for choosing sorting type and how much adverts display by page
            sorting() {
                this.loading = true;
                this.page = 1;
                this.retrieveRecords();
            },

            finishedLoading() {
                this.data_retrieved = false;
                this.loading = false;
            },

            //choose view type grid or list
            changeView(type) {
                this.view_type = type;
            },

            changePage(page) {
                this.loading = true;

                if(page === 'first'){
                    this.page = 1;
                }

                else if(page === 'backwardBy2') {
                    this.page -= 2;
                }

                else if(page === 'backward') {
                    this.page -= 1;
                }

                else if(page === 'forward') {
                    this.page += 1;
                }

                else if(page === 'forwardBy2') {
                    this.page += 2;
                }

                else if(page === 'last') {
                    this.page = this.meta.last_page;
                }

                this.retrieveRecords(true);
            },

            basicSearching(looking_for) {
                this.looking_for = looking_for;
                this.page = 1;
                this.loading = true;
                this.retrieveRecords();
            },

            advancedSearchBegin() {
                this.loading = true;
            },

            advancedSearching(Response) {
                this.records = Response.data.data;
                this.meta = Response.data.meta;
                this.links = Response.data.links;
                this.page = 1;
                this.data_retrieved = true;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .wrapper {
        background: linear-gradient(to right, white 50%, #f4f6f8 50%);

        .fade-enter-active, .fade-leave-active {
            transition: opacity .2s;
        }
        .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
            opacity: 0;
        }

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

    .fade {

    }
</style>