<template>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="imageSale"></div>
                </div>
                <div class="col-md-6 sale">
                    <div>
                        <h3 class="header">Want to sale an electric car?</h3>
                        <h4 class="headerNext">Here you can post you advertisement for free!</h4>
                        <button class="saleButton">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
`
<script>
    export default {
        name: "saleHome"
    }
</script>

<style lang="scss" scoped>
    .container {
        margin-top: 125px;
    }
    .imageSale {
        width: 100%;
        height: 50vh;
        background-image: url("/images/carsForSale.jpg");
        background-size: cover;
    }

    .sale {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .saleComponent {

    }

    .header {
        margin-bottom: 15px;
        margin-top: 50px;
        font-weight: 700;

        @media(min-width: 768px) {
            margin-top: 0;
        }
    }
    .headerNext {
        color: #26363c;
    }

    .saleButton {
        padding: 13px 30px 12px;
        display: block;
        font-size: 14px;
        border-radius: 3px;
        background: #e8eee9;
        color: #26363c;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        font-weight: 500;
        font-family: "Roboto",sans-serif;
        text-align: center;
        text-transform: uppercase;
        line-height: 18px;
        border:0;
        border-bottom: 2px solid #cdcfd0;
        letter-spacing: 1.3px;
        cursor: pointer;
        transition: background-color .3s ease-in-out;
    }

    .saleButton:hover {
        background-color: #eef4ef;
    }

    .saleButton:active, .saleButton:focus {
        outline:none;
        box-shadow: 0 0 4px rgba(77,77,77, 0.2);
    }
</style>