<template>
    <section class="comparision">
        <div class="imageContainer">
            <img alt="comparision" class="image" src="/images/comparision.png">
        </div>
        <div class="description">
            <div>
                <h2 class="title">Compare Cars</h2>
                <span class="compareText">
                    Which cars interest you? We'll highlight the differences to help you choose.
                </span>
                <button class="compareBtn">Compare Cars</button>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "comparisionHome"
    }
</script>

<style lang="scss" scoped>
    .comparision {
        background-image: linear-gradient(rgba(20, 28, 40, 0.4), rgba(15, 25, 33, 0.4)), url("/images/advertisementsHome.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-position: 50%;
        position: relative;
        padding: 5%;
        color: #385d7a;

        @media(min-width: 768px) {
            display: flex;
        }

        .description {
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Roboto", sans-serif;
            padding: 40px;

            @media(min-width: 768px) {
                width: 35%;
            }

            .title {
                font-weight: 700;
                text-transform: uppercase;
            }

            .compareText {
                color: #cccccc;
                font-size: 16px;
            }

            .compareBtn {
                border: 0;
                background: #eb5e57;
                color: white;
                border-radius: 2px;
                padding: 10px 15px 10px 15px;
                display: block;
                margin-top: 20px;
                cursor: pointer;
                transition: background-color .3s ease-in-out;
            }
            .compareBtn:hover {
                background: #ff6e69;
            }

            .compareBtn:active, .compareBtn:focus {
                outline: none;
                box-shadow: 0 2px 4px #444444;
            }
        }

        .imageContainer {
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: center;

            @media(min-width: 768px) {
                width: 65%;
            }

            .image {
                width: 100%;
            }
        }

    }
</style>