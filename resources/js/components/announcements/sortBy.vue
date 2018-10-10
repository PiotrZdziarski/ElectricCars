<template>
    <div class="sorting">
        <div class="sortBy">
            <div class="sortChild">
                Sort By
            </div>
            <div class="sortChild">
                <select @change="sortByMethod" class="input">
                    <option value="newest">Newest</option>
                    <option value="oldest">Oldest</option>
                    <option value="name">Name</option>
                    <option value="lowest_price">Lowest Price</option>
                    <option value="highest_price">Highest Price</option>
                </select>
            </div>
            <div class="sortChild perPage">
                Per Page
            </div>
            <div class="sortChild">
                <select @change="perPageMethod" class="input">
                    <option value="12">12</option>
                    <option value="18">18</option>
                    <option value="24">24</option>
                </select>
            </div>
        </div>
        <div class="lookType">
            <div @click="viewType('list')" id="listView" title="List View" class="chooseView activeView">
                <i class="icon-menu-outline"></i>
            </div>
            <div @click="viewType('grid')" id="gridView" title="Grid View" class="chooseView">
                <i class="icon-th-outline"></i>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "sortBy",
        methods: {
            viewType(type) {
                if (type === 'list') {
                    document.getElementById('listView').classList.add('activeView');
                    document.getElementById('gridView').classList.remove('activeView');
                    this.$emit('changeView', 'list');
                } else {
                    document.getElementById('gridView').classList.add('activeView');
                    document.getElementById('listView').classList.remove('activeView');
                    this.$emit('changeView', 'grid');
                }
            },

            sortByMethod(event) {
                this.$emit('sortBy', event.target.value);
            },

            perPageMethod(event) {
                this.$emit('perPage', event.target.value);
            }
        }
    }
</script>

<style lang="scss" scoped>
    .sorting {
        display: flex;
        position: relative;
        padding: 20px;
        background: white;
        border-radius: 2px;
        border: 1px solid #ededed;

        @media(min-width: 1000px) {
            margin-left: 3.3%;
            margin-right: 2%;
        }

        .sortBy {
            display: flex;
            align-items: center;

            .sortChild {
                margin-left: 2px;
                color: #666;
                text-transform: uppercase;
                @media(min-width: 476px) {
                    margin-left: 5px;
                }
            }

            .perPage {
                margin-left: 10px;

                @media(min-width: 476px) {
                    margin-left: 25px;
                }

                @media(min-width: 476px) and (max-width: 510px) {
                    margin-left: 0;
                }
             }
        }

        .lookType {
            width: 120px;
            position: absolute;
            display: flex;
            right: 0;
            bottom: 12px;

            @media(max-width: 476px) {
                display: none;
            }

            .chooseView {
                width: 45px;
                height: 45px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 22px;
                cursor: pointer;
                border-radius: 5px;
                margin: 5px;
                background: white;
                border: 1px solid #efefef;
                color: #4e4f51;
                transition: background-color .2s ease-in-out;
            }

            .chooseView:hover {
                background: #efefef;
                border: 1px solid #dfdfdf;
            }

            .activeView {
                cursor: auto;
                background: #ebe3ef;
                box-shadow: 0 1px 1px 1px #b9bbbe;
            }
            .activeView:hover {
                background: #ebe3ef;
                border: 1px solid #efefef;
            }
        }
    }

    .input {
        background: transparent;
        cursor: pointer;
        border: 0;
        border-bottom: 1px solid #b9bbbe;
        transition: .2s box-shadow ease-in-out;
        padding: 7px;

        @media(min-width: 476px) {
            padding: 10px;
        }
    }

     .input:focus, .input:hover {
        outline: none;
         box-shadow: 0 8px 16px -8px #999999;
    }

    .input:focus, .input:active {
        outline: none;
    }

</style>