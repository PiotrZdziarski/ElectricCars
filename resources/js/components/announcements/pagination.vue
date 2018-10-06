<template>
    <div class="pages" v-if="meta.path">
        <div class="page" @click="changePage('first')" v-if="visible['first']">1</div>
        <div class="page" @click="changePage('backwardBy2')" v-if="visible['backwardBy2']">{{ meta.current_page - 2 }}</div>
        <div class="page" @click="changePage('backward')" v-if="visible['backward']">{{ meta.current_page - 1 }}</div>
        <div class="page activePage" v-if="!nothingHere"> {{ meta.current_page }}</div>
        <div class="page" @click="changePage('forward')" v-if="visible['forward']">{{ meta.current_page + 1 }}</div>
        <div class="page" @click="changePage('forwardBy2')" v-if="visible['forwardBy2']">{{ meta.current_page + 2 }}</div>
        <div class="page" @click="changePage('last')" v-if="visible['last']">{{ meta.last_page }}</div>
    </div>
</template>

<script>
    export default {
        name: "pagination",
        props: {
            links: {
                Type: Object
            },
            meta: {
                Type: Object
            }
        },
        data() {
            return {
                nothingHere: false,
                visible: {
                    first: false,
                    backwardBy2: false,
                    backward: false,
                    forward: false,
                    forwardBy2: false,
                    last: false,
                }
            }
        },
        watch: {
            meta: function () {
                this.configurePages();
            }
        },
        methods: {
            configurePages() {

                //if no records
                if(this.meta.from === null) {
                    this.nothingHere = true;
                    this.visible.first = false;
                    this.visible.backwardBy2 = false;
                    this.visible.backward = false;
                    this.visible.forward = false;
                    this.visible.forwardBy2 = false;
                    this.visible.last = false;
                } else {
                    this.nothingHere = false;
                }

                //if there are only 2 pages
                if (this.meta.last_page === 2) {

                    if (this.meta.current_page === 1) {
                        this.visible.last = false;
                        this.visible.backwardBy2 = false;
                        this.visible.backward = false;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = false;
                        this.visible.last = false;
                    } else {
                        this.visible.last = false;
                        this.visible.backwardBy2 = false;
                        this.visible.backward = true;
                        this.visible.forward = false;
                        this.visible.forwardBy2 = false;
                        this.visible.last = false;
                    }
                }

                //if there are only 3 pages
                if (this.meta.last_page === 3) {

                    if(this.meta.current_page === 1) {
                        this.visible.first = false;
                        this.visible.backwardBy2 = false;
                        this.visible.backward = false;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = true;
                        this.visible.last = false;
                    }

                    else if(this.meta.current_page === 2) {
                        this.visible.first = false;
                        this.visible.forwardBy2 = false;
                        this.visible.backwardBy2 = false;
                        this.visible.backward = true;
                        this.visible.forward = true;
                        this.visible.last = false;
                    }

                    else {
                        this.visible.first = false;
                        this.visible.forwardBy2 = false;
                        this.visible.forward = false;
                        this.visible.backward = true;
                        this.visible.backwardBy2 = true;
                        this.visible.last = false;
                    }
                }

                //if page number equals 4 or is above 4 we can already set up last and first page
                if(this.meta.last_page >= 4) {
                    if(this.meta.current_page === 1) {
                        this.visible.first = false;
                        this.visible.backwardBy2 = false;
                        this.visible.backward = false;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = true;
                        this.visible.last = true;
                    }

                    else if(this.meta.current_page === this.meta.last_page) {
                        this.visible.first = true;
                        this.visible.backwardBy2 = true;
                        this.visible.backward = true;
                        this.visible.forward = false;
                        this.visible.forwardBy2 = false;
                        this.visible.last = false;
                    }
                }

                //if there are only 4 pages
                if(this.meta.last_page === 4) {

                    if(this.meta.current_page === 2) {
                        this.visible.first = false;
                        this.visible.backwardBy2 = false;
                        this.visible.backward = true;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = true;
                        this.visible.last = false;
                    }

                    else if(this.meta.current_page === 3) {
                        this.visible.first = false;
                        this.visible.backwardBy2 = true;
                        this.visible.backward = true;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = false;
                        this.visible.last = false;
                    }
                }


                //if there are 5 or above 5 pages we can already set one before last page and one after first page
                if(this.meta.last_page >= 5) {

                    if (this.meta.current_page === 2) {
                        this.visible.first = false;
                        this.visible.backwardBy2 = false;
                        this.visible.backward = true;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = true;
                        this.visible.last = true;
                    }

                    else if(this.meta.current_page === this.meta.last_page - 1) {
                        this.visible.first = true;
                        this.visible.backwardBy2 = true;
                        this.visible.backward = true;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = false;
                        this.visible.last = false;
                    }
                }

                //if there are only 5 pages
                if(this.meta.last_page === 5) {

                    if(this.meta.current_page === 3) {
                        this.visible.first = false;
                        this.visible.backwardBy2 = true;
                        this.visible.backward = true;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = true;
                        this.visible.last = false;
                    }

                }

                //if there are 6 or above 6 pages we can set two before last page and two after first page
                if(this.meta.last_page >= 6) {

                    if(this.meta.current_page === 3) {
                        this.visible.first = false;
                        this.visible.backwardBy2 = true;
                        this.visible.backward = true;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = true;
                        this.visible.last = true;
                    }

                    else if(this.meta.current_page === this.meta.last_page - 2) {
                        this.visible.first = true;
                        this.visible.backwardBy2 = true;
                        this.visible.backward = true;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = true;
                        this.visible.last = false;
                    }
                }

               //if there are 7 or above 7 pages we can finally display all 6 page buttons
                if(this.meta.last_page >= 7) {

                    if(this.meta.current_page > 3 && this.meta.current_page < this.meta.last_page - 2) {
                        this.visible.first = true;
                        this.visible.backwardBy2 = true;
                        this.visible.backward = true;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = true;
                        this.visible.last = true;
                    }
                }

            },

            changePage(page) {
                this.$emit('changePage', page);
            }
        }
    }
</script>

<style lang="scss" scoped>
    .pages {
        display: flex;
        justify-content: center;
        margin-bottom: 50px;

        .page {
            min-height: 40px;
            min-width: 40px;
            padding: 10px;
            margin-right: 5px;
            background: #e8e8e8;
            text-align: center;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: .2s background-color ease-in-out;
            color: #333;

            box-shadow: 0 1px 2px #b9bbbe;
        }

        .activePage {
            background: #d9d9d9;
            border: 1px solid #d1d1d1;
            cursor: auto;
        }

        .activePage:hover {
            background: #d9d9d9 !important;
        }

        .page:hover {
            background: #f5f5f5;
        }
    }

</style>