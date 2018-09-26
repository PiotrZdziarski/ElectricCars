<template>
    <nav id="mainnav">
        <div class="desktopNav">
            <div class="title">
                <a href="/" class="titleHref">Electric Cars</a>
            </div>
            <div class="menu" id="menu">
                <div class="menuItem">
                    <a class="hrefNav" href="#">Announcements</a>
                </div>
                <div class="menuItem">
                    <a class="hrefNav" href="#">Sell</a>
                </div>
                <div class="menuItem" style="margin-right: 5%;">
                    <a class="hrefNav" href="#">Comparision</a>
                </div>
                <div class="menuItem">
                    <a class="hrefNav" href="#">Cars</a>
                </div>
                <div class="menuItem">
                    <a class="hrefNav" href="#">Login</a>
                </div>
            </div>
        </div>
        <div class="mobileNav">

        </div>
    </nav>
</template>

<script>
    export default {
        name: "navbar"
    }
</script>

<style lang="scss" scoped>
    #mainnav {
        width: 100%;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 1000;
        background: transparent;
        color: white;

        @media(min-width: 1000px) {

            .desktopNav {
                height: 70px;
                display: flex;
                width: 100%;
                justify-content: center;
                align-items: center;


                .title {
                    text-align: center;
                    width: 30%;
                    font-size:42px;

                    .titleHref {
                        font-weight: 500;
                        color: #323a3d;
                        font-family: "Roboto", sans-serif;
                    }
                }

                .menu {
                    width: 60%;
                    display: flex;
                    margin-left: 4%;

                    .menuItem {
                        width: 50%;
                        font-size: 16px;
                        font-family: "Roboto", sans-serif;

                        .hrefNav {
                            color: inherit;
                            font-weight: 500;
                            transition: color .2s ease-in-out;
                        }

                        .hrefNav:hover {
                            color: #2684ba;
                        }
                    }

                    .menuItem:first-child {
                        margin-right: 10%;
                    }
                }
            }
        }
    }
</style>