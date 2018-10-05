<template>
    <div class="pages" v-if="meta.path">
        <div class="page" @click="changePage('first')" v-if="visible['first']"> 1</div>
        <div class="page" @click="changePage('backwardBy2')" v-if="visible['backwardBy2']">{{ meta.current_page - 2 }}</div>
        <div class="page" @click="changePage('backward')" v-if="visible['backward']">{{ meta.current_page - 1 }}</div>
        <div class="page activePage"> {{ meta.current_page }}</div>
        <div class="page" @click="changePage('forward')" v-if="visible['forward']">{{ meta.current_page + 1 }}</div>
        <div class="page" @click="changePage('forwardBy2')" v-if="visible['forwardBy2']">{{ meta.current_page + 2 }}</div>
        <div class="page" @click="changePage('last')" v-if="visible['last']"> 1231</div>
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
                visible: {
                    first: false,
                    backwardBy2: false,
                    backward: false,
                    forward: false,
                    forwardBy2: false,
                    last: false
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

                //if there are only 2 pages
                if (this.meta.last_page === 2) {

                    if (this.meta.current_page === 1) {
                        this.visible.forward = true;
                    } else {
                        this.visible.backward = true;
                    }
                }

                //if there are only 3 pages
                if (this.meta.last_page === 3) {

                    if(this.meta.current_page === 1) {
                        this.visible.backwardBy2 = false;
                        this.visible.backward = false;
                        this.visible.forward = true;
                        this.visible.forwardBy2 = true;
                    }

                    else if(this.meta.current_page === 2) {
                        this.visible.forwardBy2 = false;
                        this.visible.backwardBy2 = false;
                        this.visible.backward = true;
                        this.visible.forward = true;
                    }

                    else {
                        this.visible.forwardBy2 = false;
                        this.visible.forward = false;
                        this.visible.backward = true;
                        this.visible.backwardBy2 = true;
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