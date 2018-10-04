<template>
    <div class="pages" v-if="meta.path">
        <div class="page" v-if="visible['first']"> 1 </div>
        <div class="page" v-if="visible['backwardBy2']">4</div>
        <div class="page" v-if="visible['backward']">5</div>
        <div class="page activePage"> {{ meta.current_page }}</div>
        <div class="page" v-if="visible['forward']">7</div>
        <div class="page" v-if="visible['forwardBy2']">8</div>
        <div class="page" v-if="visible['last']"> 1231 </div>
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
                    first: true,
                    backwardBy2: true,
                    backward: true,
                    forward: true,
                    forwardBy2: true,
                    last: true
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

                //if there is only one page
                if(this.meta.current_page === this.meta.last_page) {
                    this.visible =  _.mapValues(this.visible, () => false);
                }

                //if there are only 2 pages
                if(this.meta.last_page === 2) {
                    if(this.meta.current_page === 1) {
                        this.visible = _.mapValues(this.visible, (param, index) =>  {
                            console.log(index);
                        });
                    }
                }



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
            cursor:pointer;
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