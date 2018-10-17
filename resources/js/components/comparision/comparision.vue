<template>
    <div class="modal fade" id="comparision" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="icon-flow-cross"></i>
                        <span class="text-header">Classifieds compare list</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="close-sign" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="error-div" v-if="error">
                    <span class="error-info">
                        <i class="icon-exclamation"></i>You can maximally add only 3 products
                    </span>
                    <button type="button" class="close" aria-label="Close">
                        <span class="close-sign" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-title">
                        You have the following classifieds for comparison:
                    </div>
                    <div class="comparision-list">
                        <div class="list-item">
                            <div class="item-image">
                                <img class="image" src="/images/cars/carvertical.jpg">
                            </div>
                            <div class="item-title">
                                New Brand Nissan Leaft Poggers 30 2 4 p5 hstr wfvuw
                            </div>
                            <div class="item-delete">
                                Delete
                                <i class="icon-minus-circled"></i>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="item-image">
                                <img class="image" src="/images/cars/nissanleaf.jpg">
                            </div>
                            <div class="item-title">
                                s 30 2 4 p5 hstr wfvuw
                            </div>
                            <div class="item-delete">
                                Delete
                                <i class="icon-minus-circled"></i>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="item-image">
                                <img class="image" src="/images/cars/nissanleaf.jpg">
                            </div>
                            <div class="item-title">
                                s 30 2 4 p5 hstr wfvuw
                            </div>
                            <div class="item-delete">
                                Delete
                                <i class="icon-minus-circled"></i>
                            </div>
                        </div>

                        <div class="list-item">
                            <div class="item-image">
                                <img class="image" src="/images/cars/nissanleaf.jpg">
                            </div>
                            <div class="item-title">
                                s 30 2 4 p5 hstr wfvuw
                            </div>
                            <div class="item-delete">
                                Delete
                                <i class="icon-minus-circled"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-modal-btn" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "comparision",
        props: {
            comparision_products: {
                Type: Object
            }
        },
        data() {
            return {
                error: false,
                comparision_products_json: {}
            }
        },
        computed: {
            comparision_products_to_json: function () {
                return JSON.parse(this.comparision_products);
            }
        },
        mounted() {
            this.comparision_products_json = this.comparision_products_to_json;
            console.log(this.comparision_products_json);
            $(document).ready(function () {
                $('#comparision').modal('show');
            });
        },
        methods: {
            compare(id) {
                console.log(id);
            }
        }
    }
</script>

<style lang="scss" scoped>
    .modal {
        padding-right: 0;
    }

    .modal-content {
        padding: 8px;
        border-radius: 5px;
        font-family: "Roboto", sans-serif;

        .text-header {
            font-size: 26px;
            font-weight: 700;
        }

        .icon-flow-cross {
            font-size: 24px;
            padding-right: 5px;
        }

        .modal-header {
            border-bottom: 0;

            .close {
                opacity: 0.90;
                padding: .9rem 22px .9rem .9rem;

                .close-sign {
                    text-align: right;
                    display: block;
                    color: black;
                    font-size: 42px;
                    font-weight: 700;
                }
            }

            .close:hover {
                opacity: 0.8;
            }

            .close:active, .close:focus {
                outline: none;
            }
        }

        .error-div {
            background: #f8e7e7;
            margin: 5px;
            padding: 15px 10px 14px;
            border-radius: 2px;
            color: #d50000;
            display: table;
            position: relative;

            .error-info {
                display: table-cell;
                vertical-align: middle;
                font-size: 16px;
                font-weight: 500;

                .icon-exclamation {
                    font-size: 20px;
                    padding-right: 5px;
                }
            }

            .close {
                opacity: 0.60;
                padding-right: 5px;
                padding-left:5px;

                .close-sign {
                    height: 100%;
                    display: block;
                    color: black;
                    font-size: 28px;
                    font-weight: 700;
                }
            }

            .close:hover {
                opacity: 0.5;
            }

            .close:active, .close:focus {
                outline: none;
            }

        }

        .modal-body {
            padding: 10px 10px 10px 10px;

            .list-title {
                font-size: 18px;
                font-weight: 500;
                padding-bottom: 5px;
                color: #333;
            }

            .comparision-list {

                .list-item {
                    display: flex;
                    padding: 0 5px 10px 5px;
                    position: relative;
                    border-bottom: 1px solid #eaeaea;

                    @media (min-width: 476px) {
                        padding: 10px;
                    }

                    .item-image {
                        width: 25%;
                        display: flex;
                        justify-content: center;
                        align-items: center;

                        .image {
                            max-width: 100%;
                            max-height: 100%;
                        }
                    }

                    .item-title {
                        color: #555;
                        width: 60%;
                        padding: 0 10px 10px 10px;
                    }

                    .item-delete {
                        cursor: pointer;
                        position: absolute;
                        color: #444;
                        bottom: 5px;
                        right: 5px;

                        .icon-minus-circled {
                            color: dodgerblue;
                        }

                    }

                    .item-delete:hover {
                        opacity: 0.9;
                    }
                }

                .list-item:last-child {
                    border: 0;
                }
            }
        }

        .modal-footer {
            border-top: 0;

            .close-modal-btn {
                margin-right: 0;
                left: 25px;
                position: absolute;
                background: transparent;
                color: #444;
            }

            .close-modal-btn:focus, .close-modal-btn:active {
                box-shadow: none;
            }

            .close-modal-btn:hover {
                color: #222;
                box-shadow: 0 2px 4px #ddd;
            }

            .btn-primary {
                box-shadow: none;
            }
        }

    }
</style>