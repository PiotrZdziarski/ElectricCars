<template>
    <div class="sorting">
        <div class="sortBy">
            <div class="sortChild">
                Sort By
            </div>
            <div class="sortChild">
                <select @input="sortByMethod" class="input">
                    <option value="newest" class="input">Newest</option>
                    <option value="oldest" class="input">Oldest</option>
                    <option value="name" class="input">Name</option>
                    <option value="lowest_price" class="input">Lowest Price</option>
                    <option value="highest_price" class="input">Highest Price</option>
                </select>
            </div>
            <div class="sortChild">
                Per Page
            </div>
            <div class="sortChild">
                <select @input="perPageMethod" class="input">
                    <option value="12" class="input">12</option>
                    <option value="16" class="input">16</option>
                    <option value="20" class="input">20</option>
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

        .sortBy {
            display: flex;
            align-items: center;

            .sortChild {
                margin-left: 2px;
                margin-right: 2px;
                @media(min-width: 476px) {
                    margin-left: 5px;
                    margin-right: 5px;
                }
            }

            .sortChild:first-child {
            }
        }

        .lookType {
            width: 120px;
            position: absolute;
            display: flex;
            right: 0;

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
                color: #2a3744;
                transition: background-color .3s ease-in-out;
            }

            .chooseView:hover {
                background: #efefef;
            }

            .activeView {
                background: #dfdfdf;
                border: 1px solid #cfcfcf;
            }
            .activeView:hover {
                background: #dfdfdf;
            }
        }
    }

    .input {
        padding: 10px;
        background: transparent;
        cursor: pointer;
        border: 0;
        border-bottom: 1px solid #b9bbbe;
        transition: .2s box-shadow ease-in-out;
    }

     .input:focus, .input:hover {
        outline: none;
         box-shadow: 0 8px 16px -8px #999999;
    }

    .input:focus, .input:active {
        outline: none;
    }

</style>