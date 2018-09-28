<template>
    <div class="listView">
        <div class="announcement">
            <div class="imageContainer">
            </div>
            <div class="info">
                <h5 class="title">New Nissan Leaf 2017 LTZ CPZ</h5>
                <span class="subtitle">Type</span> Electric
                <br><span class="subtitle">Mileage</span> 10234 KM
                <span class="description">Monsoon Gray Metallic (ext), Black (int), 7-Speed Automatic with Auto-Shift, AWD</span>
            </div>
            <div class="utilities">
                <i class="icon-phone">123 435 235</i>
                <i class="icon-mail">pzdziarski.2001@gmail.com</i>
                <span class="price">$14000</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "announcementsList"
    }
</script>

<style lang="scss" scoped>
    .listView {
        padding: 2.5%;

        .announcement {
            box-shadow: 0 1px 2px #efefef;
            width: 100%;
            margin-bottom: 40px;
            background: white;
            display:flex;

            .imageContainer {
                width: 42%;
                background-image: url("/images/cars/nissanleaf.jpg");
                background-size: cover;
                background-position: 50%;
                min-height: 150px;

                .image {
                    width: 100%;
                }
            }

            .info {
                width: 40%;
                padding: 20px;
                color: #444444;

                .title {
                    color: #444444;
                }

                .subtitle {
                    color: #777777;
                    text-transform: uppercase;
                    font-size: 12px;
                    padding-right: 5px;
                }

                .description {
                    display:block;
                    font-size: 12px;
                    padding-top: 15px;
                }
            }

            .utilities {
                width: 18%;
                padding: 15px;
                word-wrap: break-word;

                .price {
                    display: block;
                    margin-top: 5px;
                    font-weight: 500;
                    font-size: 18px;
                    color: #a12932;
                }
            }
        }
    }
</style>