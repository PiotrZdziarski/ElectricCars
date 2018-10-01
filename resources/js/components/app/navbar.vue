<template>
    <div>
        <nav id="mainnav" class="navTransition">
            <div class="desktopNav">
                <div class="title">
                    <a href="/" class="titleHref"><img class="logo" id="imageNav" :src="'/images/logowhite.png'"></a>
                </div>
                <div class="menu" id="menu">
                    <div class="menuItem">
                        <a class="hrefNav" href="/adverts">Adverts</a>
                    </div>
                    <div class="menuItem">
                        <a class="hrefNav" href="#">Sell</a>
                    </div>
                    <div class="menuItem" style="margin-right: 5%;">
                        <a class="hrefNav" href="#">Comparision</a>
                    </div>
                    <div class="menuItem">
                        <a class="hrefNav" href="/cars">Cars</a>
                    </div>
                    <div class="menuItem">
                        <a class="hrefNav" href="#">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="mobileNav">
            <div id="initialNav" class="initialNav boxShadow">
                <div class="title">
                    <a href="/" class="titleHref"><img class="logo" :src="'/images/nigga.png'"></a>
                </div>
                <div class="hamburger-div">
                    <a id="hamburger" data-toggle="collapse" href="#navbar" class="burger" @click="show_nav">
                        <div></div>
                    </a>
                </div>
            </div>

            <div class="collapse" id="navbar">
                <div class="collapseItem">
                    <a class="href" href="/adverts">Adverts</a>
                </div>
                <div class="collapseItem">
                    <a class="href" href="#">Sell</a>
                </div>

                <div class="collapseItem">
                    <a class="href" href="#">Comparision</a>
                </div>

                <div class="collapseItem">
                    <a class="href" href="/cars">Cars</a>
                </div>

                <div class="collapseItem">
                    <a class="href" href="#">Login</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "navbar",
        data() {
            return {
                nav_active: false,
            }
        },
        methods: {
            show_nav() {
                document.getElementById('hamburger').classList.toggle('open');

                if (this.nav_active === false) {

                    this.nav_active = true;
                    document.getElementById('initialNav').classList.remove('boxShadow');

                } else if (this.nav_active === true) {

                    document.getElementById('initialNav').classList.add('boxShadow');
                    this.nav_active = false;

                }
            }
        }
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

        .desktopNav {
            display: none;
        }

        @media(min-width: 1000px) {

            .mobileNav {
                display: none;
            }

            .desktopNav {
                height: 70px;
                display: flex;
                width: 100%;
                justify-content: center;
                align-items: center;

                .title {
                    text-align: center;
                    width: 30%;

                    .titleHref {

                    }
                }

                .menu {
                    width: 60%;
                    display: flex;
                    margin-left: 10%;

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
                }
            }
        }
    }

    .logo {
        margin-left: 2%;
        width: 50%;
    }

    .boxShadow {
        box-shadow: 0 15px 16px -14px rgba(150, 150, 150, 0.2);
    }

    .mobileNav {
        @media(min-width: 1000px) {
            display: none;
        }
        width: 100%;
        z-index: 1000;
        background: white;
        position: fixed;

        .initialNav {
            height: 60px;
            display: flex;
            align-items: center;
        }

        .collapseItem {
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 1px solid #f1f1f1;

            .href {
                color: #444345;
                font-size: 18px;
                transition: color .2s ease-in-out;
            }
            .href:hover {
                color: #297ba7;
            }
        }

        .collapseItem:first-child {
            border-top: 1px solid #f1f1f1;
        }

        .collapseItem:last-child {
            box-shadow: 0 15px 16px -14px rgba(150, 150, 150, 0.2);
        }

    }

    .burger {
        display: block;
        position: absolute;

        top: 7px;
        right: 8%;
        width: 38px;
        height: 38px;
        cursor: pointer;
    }

    .burger.open div {
        background: none;
        box-shadow: none !important;
    }

    .burger.open div:before, .burger.open div:after {
        top: 0;
    }

    .burger.open div:before {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .burger.open div:after {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .burger.open:hover div:before {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .burger.open:hover div:after {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .burger:hover:not(.open) div:before {
        top: -15px;
    }

    .burger:hover:not(.open) div:after {
        top: 15px;
    }

    .burger div,
    .burger div:before,
    .burger div:after {
        width: 100%;
        height: 5px;
        background: #3e474a;
        border-radius: 2px;
        -webkit-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .burger div {
        position: relative;
        margin: 20px auto 0;
    }

    .burger div:before, div:after {
        content: "";
        position: absolute;
    }

    .burger div:before {
        top: -15px;
    }

    .burger div:after {
        top: 15px;
    }
</style>