<template>
    <footer>
        <div class="footer">
            <div class="footerLinks">
                <div class="link">
                    <a class="href" href="#">Announcements</a>
                </div>
                <div class="link">
                    <a class="href" href="#">Sell</a>
                </div>
                <div class="link">
                    <a class="href" href="#">Comparision</a>
                </div>
                <div class="link">
                    <a class="href" href="#">Cars</a>
                </div>
                <div class="link">
                    <a class="href" href="#">Login</a>
                </div>
            </div>
            <div class="socials">
                <div class="icons">
                    <a class="href" href="https://github.com/PiotrZdziarski" target="_blank">
                        <i class="icon-github-circled"></i>
                    </a>
                    <a class="href" href="https://plus.google.com/u/1/114869168099549108892" target="_blank">
                        <i class="icon-gplus"></i>
                    </a>
                </div>
                <div class="text">
                    Piotr Zdziarski &copy 2018
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
        name: "footerMain"
    }
</script>

<style lang="scss" scoped>
    .footer {
        padding: 7%;
        background: #1c1e21;
        color: white;
        position: relative;
        @media(min-width: 1000px) {
            display: flex;
        }

        .footerLinks {
            position:relative;

            @media(min-width: 768px) {
                align-items: center;
                display: flex;
            }

            @media(min-width: 1000px) {
                width: 60%;
            }

            .link {
                text-align: center;
                margin-top: 20px;

                @media(min-width: 768px) {
                    width: 20%;
                    margin-top: 0;
                }
                font-size: 18px;

            }

        }

        .socials {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
            text-align: right;

            @media(min-width: 1000px) {
                padding-left: 10%;
                width: 40%;
                margin-top: 0;
            }

            .icons {
                font-size: 26px;
            }
            .text {
                margin-left: 30px;
                color: #c6c8ca;
            }
        }
    }

    .href {
        color: #dfdfdf;
        transition: color .3s ease-in-out;
    }
    .href:hover {
        color: #385d7a;
    }
</style>