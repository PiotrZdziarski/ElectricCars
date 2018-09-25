<template>
    <nav class="mainnav">
        <div class="desktopNav">
            <div class="title">
                <a href="/" class="titleHref">Electric Cars</a>
            </div>
            <div class="menu">
                <div class="menuItem">
                    <a class="hrefNav" href="#">Classifieds</a>
                </div>
                <div class="menuItem">
                    <a class="hrefNav" href="#">Sell</a>
                </div>
                <div class="menuItem">
                    <a class="hrefNav" href="#">Cars</a>
                </div>
                <div class="menuItem">
                    <a class="hrefNav" href="#">Best</a>
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
    .mainnav {
        width: 100%;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 4px #d9dbde;
        background: white;

        @media(min-width: 1000px) {

            .desktopNav {
                height: 70px;
                display: flex;
                width: 100%;
                justify-content: center;
                align-items: center;


                .title {
                    text-align: center;
                    width: 35%;
                    font-size:42px;

                    .titleHref {
                        color: #22292c;
                    }
                }

                .menu {
                    width: 65%;
                    display: flex;
                    margin-left: 10%;

                    .menuItem {
                        width: 50%;
                        font-size: 16px;
                        font-family: "Roboto", sans-serif;

                        .hrefNav {
                            color: #444345;
                            font-weight: 500;
                            transition: color .2s ease-in-out;
                        }

                        .hrefNav:hover {
                            color: #1d68a7;
                        }
                    }
                }
            }
        }
    }
</style>