<template>
    <section>
        <div class="claim">
            <div class="mainTitle">
                <h1 class="mainTitle">Certified 2016 Porsche Cayenne 2017 ctz 8g</h1>
                <h4 class="subTitle">
                    <a class="advertsHref" href="/adverts">
                        <i class="icon-undo"></i>
                        Back to adverts
                    </a>
                </h4>
            </div>
        </div>
        <div class="borderLine"></div>
        <div class="main">
            <div class="mainContent">
                <div class="left">

                </div>
                <div class="right">

                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "announcement"
    }
</script>

<style lang="scss" scoped>
    .claim {
        background-image: linear-gradient(rgba(48, 84, 198, 0.5), rgba(48, 84, 198, 0.5)), url("/images/advertisementsHome.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-position: 50%;
        height: 40vh;
        display: flex;
        align-items: center;
        color: white;
        font-family: "Roboto", sans-serif;
        padding-top: 5%;
        padding-left: 8%;

        .mainTitle {
            font-size: 42px;
            font-weight: 500;
            @media(max-width: 476px) {
                padding-top: 20px;
                font-size: 32px;
            }
        }

        .advertsHref {
            font-weight: 400;
            color: #e9e9e9;
            transition: .2s color ease-in-out;
        }

        .advertsHref:hover {
            color: #297ba7;
        }
    }

    .borderLine {
        margin-top: 10vh;
        width: 100%;
        height: 1px;
        background: #ddd;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 5vh;

        @media (min-width: 1000px) {
            width: 970px;
        }

        @media(min-width: 1200px) {
            width: 1100px;
        }
    }
    .main {
        padding: 5px;


        .mainContent {
            width: 100%;
            @media(min-width: 1000px) {
                display: flex;
            }

            .left {
                @media(min-width: 1000px) {
                    width: 70%;
                }
                height: 100vh;
                box-shadow: 0 1px 2px #b9bbbe;
            }

            .right {
                @media(min-width: 1000px) {
                    width: 30%;
                }
                height: 100vh;
                box-shadow: 0 1px 2px #b9bbbe;
            }

        }
    }
</style>