<template>
    <section class="cars">
        <div class="description">
            <div>
                <h3>Don't know too much about the possibilities of electric cars?</h3>
                <h5 class="subtitle">Don't worry! We have described a large number of new electric cars!</h5>
                <button class="carsBtn">Check out!</button>
            </div>
        </div>
        <div class="imageContainer">
            <img class="image" src="/images/cars/jaguarIPace.jpg" alt="Jaguar I Pace">
        </div>
    </section>
</template>

<script>
    export default {
        name: "carsHome"
    }
</script>

<style lang="scss" scoped>
    .cars {
        @media (min-width: 768px) {
            display: flex;
        }
        position: relative;
        padding: 5%;
        background: white;

        .description {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            @media(min-width: 476px) {
                padding: 40px;
            }

            .subtitle {
                padding-top: 10px;
            }

            .carsBtn {
                border: 0;
                background: #385d7a;
                color: white;
                border-radius: 2px;
                padding: 10px 15px 10px 15px;
                display: block;
                margin-top: 20px;
                cursor:pointer;
                transition: background-color .3s ease-in-out;
            }
            .carsBtn:hover {
                background: #447295;
            }

            .carsBtn:active, .carsBtn:focus {
                outline: none;
                box-shadow: 0 2px 4px #b9bbbe;
            }
        }

        .imageContainer {
            width: 100%;
            position: relative;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            @media(min-width: 476px) {
                padding: 40px;
            }

            .image {
                width: 100%;
            }
        }
    }
</style>