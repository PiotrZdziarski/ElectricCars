<template>
    <main>
        <section class="claim">
            <div>
                <h1 class="mainTitle">Cars</h1>
                <h3 class="subTitle">Find out more about electric cars</h3>
            </div>
        </section>
        <section class="cars">
            <div class="car">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="description">
                    <div>
                        <h3 class="title"><a class="href" href="#">Nissan Leaf</a></h3>
                    </div>
                    <div class="text">
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                    </div>
                </div>
            </div>

            <div class="car">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="description">
                    <div>
                        <h3 class="title"><a class="href" href="#">Nissan Leaf</a></h3>
                    </div>
                    <div class="text">
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                    </div>
                </div>
            </div>

            <div class="car">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="description">
                    <div>
                        <h3 class="title">Nissan Leaf</h3>
                    </div>
                    <div class="text">
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                    </div>
                </div>
            </div>

            <div class="car">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="description">
                    <div>
                        <h3 class="title">Nissan Leaf</h3>
                    </div>
                    <div class="text">
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                    </div>
                </div>
            </div>

            <div class="car">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="description">
                    <div>
                        <h3 class="title">Nissan Leaf</h3>
                    </div>
                    <div class="text">
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                    </div>
                </div>
            </div>

            <div class="car">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="description">
                    <div>
                        <h3 class="title">Nissan Leaf</h3>
                    </div>
                    <div class="text">
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                    </div>
                </div>
            </div>

            <div class="car">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="description">
                    <div>
                        <h3 class="title">Nissan Leaf</h3>
                    </div>
                    <div class="text">
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                    </div>
                </div>
            </div>


            <div class="car">
                <img class="image" src="/images/cars/nissanleaf.jpg">
                <div class="description">
                    <div>
                        <h3 class="title">Nissan Leaf</h3>
                    </div>
                    <div class="text">
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                        Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod
                        in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis,
                        lobortis dignissim, pulvinar ac, lorem.
                        lobortis dignissim, pulvinar ac, lorem.

                    </div>
                </div>
            </div>


        </section>
    </main>
</template>

<script>
    export default {
        name: "cars"
    }
</script>

<style lang="scss" scoped>
    .claim {
        background-image: linear-gradient(rgba(24, 71, 97, 0.4), rgba(40, 91, 133, 0.4)), url("/images/advertisementsHome.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-position: 50%;
        height: 50vh;
        display: flex;
        align-items: center;
        color: white;
        font-weight: 500;
        font-family: "Roboto", sans-serif;
        padding-top: 5%;
        padding-left: 8%;

        .mainTitle {
            font-size: 64px;
            @media(max-width: 476px) {
                font-size: 52px;
            }
        }

        .subTitle {
            color: #dddddd;
        }
    }

    .cars {
        background: white;
        display: flex;
        flex-wrap: wrap;
        position: relative;
        padding: 6%;

        @media(min-width: 476px) {
            padding: 8%;
        }
        font-family: "Roboto", sans-serif;

        .car {

            margin: 5% 0 5% 0;

            box-shadow: 0 1px 2px #b9bbbe;

            @media(min-width: 768px) {
                width: 45%;
                margin: 3% 1.5% 3% 1.5%;
            }

            @media(min-width: 1000px) {
                width: 30%;
            }


            .image {
                width: 100%;
                transition: .3s opacity ease-in-out;
                -webkit-backface-visibility: hidden;
                cursor: pointer;
            }
            .image:hover {
                opacity: 0.7;
            }

            .description {
                padding: 15px;

                .title {
                    padding-top: 5px;
                    font-weight: 500;

                    .href {
                        color: #274053;
                    }
                    .href:hover {
                        color: #395d79;
                    }
                }

                .text {
                    padding-top: 5px;
                }
            }
        }
    }
</style>