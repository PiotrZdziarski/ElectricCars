<template>
    <div class="sorting">
        <div class="sortBy">
            <div class="sortChild">
                Sort By
            </div>
            <div class="sortChild">
                <select class="input">
                    <option class="input">Name</option>
                    <option class="input">Lowest Price</option>
                    <option class="input">Highest Price</option>
                </select>
            </div>
            <div class="sortChild">
                Per Page
            </div>
            <div class="sortChild">
                <select class="input">
                    <option class="input">12</option>
                    <option class="input">16</option>
                    <option class="input">20</option>
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
                margin-left: 5px;
                margin-right: 5px;
            }

            .sortChild:first-child {
            }
        }

        .lookType {
            width: 120px;
            position: absolute;
            display: flex;
            right: 0;

            @media(max-width: 1000px) {
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
                margin: 5px;
                background: white;
                border: 1px solid #efefef;
                transition: background-color .3s ease-in-out;
            }

            .chooseView:hover {
                background: #efefef;
            }

            .activeView {
                background: #dfdfdf;
            }
            .activeView:hover {
                background: #dfdfdf;
            }
        }
    }

    .input {
        padding: 10px;
        background: white;
        cursor: pointer;
        border: 1px solid #efefef;
    }

    .input:focus, .input:active {
        outline: none;
    }

</style>