<template>
    <div id="settings" class="settings">
        <div @click="showSidebar" id="settingButton" class="settingButton">
            <i class="icon-search"></i>
        </div>
        <div class="nonScroll">
            <form>
                <div class="setting searchingSetting">
                    <div class="settingContent">
                        <input @input="basicSearching" class="textInput" maxlength="150" type="text" placeholder="Search for...">
                    </div>
                </div>
            </form>
            <div class="advancedSearching">
                Advanced Searching
            </div>
        </div>
        <form @submit="submitMethod" class="settingForm">
            <div class="setting">
                <div class="settingName">Condition</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#condition_setting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="condition_setting">
                    <div class="settingContent">
                        <div class="formRow" v-for="(condition,index) in conditions">
                            <input :id="'condition' + condition" type="checkbox" :value="condition" :name="'condition' + condition" :checked="index === 0">
                            <label :for="'condition' + condition">{{ condition }}</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="setting">
                <div class="settingName">Year</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#year_setting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="year_setting">
                    <div class="settingContent">
                        <input id="yearAny" type="checkbox" name="yearAny" value="any" checked>
                        <label for="yearAny">Any</label>

                        <div class="formRow" v-for="year in years">
                            <input :id="'year_' + year" type="checkbox" :name="'year_' + year" :value="year">
                            <label :for="'year_' + year">{{ year }}</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="setting">
                <div class="settingName">Make</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#make_setting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="make_setting">
                    <div class="settingContent">
                        <input id="make_any" type="checkbox" name="make_any" value="any" checked>
                        <label for="make_any">Any</label>

                        <input id="make_bmw" type="checkbox" name="make_bmw" value="any">
                        <label for="make_bmw">BMW</label>

                        <input id="make_bolloré" type="checkbox" name="make_bolloré" value="any">
                        <label for="make_bolloré">Bolloré</label>

                        <input id="make_byd" type="checkbox" name="make_byd" value="any">
                        <label for="make_byd">BYD</label>

                        <input id="make_chevrolet" type="checkbox" name="make_chevrolet" value="any">
                        <label for="make_chevrolet">Chevrolet</label>

                        <input id="make_citroën" type="checkbox" name="make_citroën" value="any">
                        <label for="make_citroën">Citroën</label>

                        <input id="make_courb" type="checkbox" name="make_courb" value="any">
                        <label for="make_courb">COURB</label>

                        <input id="make_electrameccanica" type="checkbox" name="make_electrameccanica" value="any">
                        <label for="make_electrameccanica">ElectraMeccanica</label>

                        <input id="make_fiat" type="checkbox" name="make_fiat" value="any">
                        <label for="make_fiat">Fiat</label>

                        <input id="make_ford" type="checkbox" name="make_ford" value="any">
                        <label for="make_ford">Ford</label>

                        <input id="make_honda" type="checkbox" name="make_honda" value="any">
                        <label for="make_honda">Honda</label>

                        <input id="make_hyundai" type="checkbox" name="make_hyundai" value="any">
                        <label for="make_hyundai">Hyundai</label>

                        <input id="make_jacmotors" type="checkbox" name="make_jacmotors" value="any">
                        <label for="make_jacmotors">JAC Motors</label>

                        <input id="make_kewet" type="checkbox" name="make_kewet" value="any">
                        <label for="make_kewet">Kewet</label>

                        <input id="make_kia" type="checkbox" name="make_kia" value="any">
                        <label for="make_kia">Kia</label>

                        <input id="make_kyburz" type="checkbox" name="make_kyburz" value="any">
                        <label for="make_kyburz">Kyburz</label>

                        <input id="make_lightning" type="checkbox" name="make_lightning" value="any">
                        <label for="make_lightning">Lightning</label>

                        <input id="make_mahindra" type="checkbox" name="make_mahindra" value="any">
                        <label for="make_mahindra">Mahindra</label>

                        <input id="make_mercedes" type="checkbox" name="make_mercedes" value="any">
                        <label for="make_mercedes">Mercedes</label>

                        <input id="make_micromobilitysystems" type="checkbox" name="make_micromobilitysystems"
                               value="any">
                        <label for="make_micromobilitysystems">Micro Mobility Systems</label>

                        <input id="make_mitsubishi" type="checkbox" name="make_mitsubishi" value="any">
                        <label for="make_mitsubishi">Mitsubishi</label>

                        <input id="make_motoreslimpios" type="checkbox" name="make_motoreslimpios" value="any">
                        <label for="make_motoreslimpios">Motores Limpios</label>

                        <input id="make_mwmotors" type="checkbox" name="make_mwmotors" value="any">
                        <label for="make_mwmotors">MW Motors</label>

                        <input id="make_nissan" type="checkbox" name="make_nissan" value="any">
                        <label for="make_nissan">Nissan</label>

                        <input id="make_ecomove" type="checkbox" name="make_ecomove" value="any">
                        <label for="make_ecomove">ECOmove</label>

                        <input id="make_peugeot" type="checkbox" name="make_peugeot" value="any">
                        <label for="make_peugeot">Peugeot</label>

                        <input id="make_rayttle" type="checkbox" name="make_rayttle" value="any">
                        <label for="make_rayttle">Rayttle</label>

                        <input id="make_renault" type="checkbox" name="make_renault" value="any">
                        <label for="make_renault">Renault</label>

                        <input id="make_smart" type="checkbox" name="make_smart" value="any">
                        <label for="make_smart">Smart</label>

                        <input id="make_sonomotors" type="checkbox" name="make_sonomotors" value="any">
                        <label for="make_sonomotors">Sono Motors</label>

                        <input id="make_stevens" type="checkbox" name="make_stevens" value="any">
                        <label for="make_stevens">Stevens</label>

                        <input id="make_tesla" type="checkbox" name="make_tesla" value="any">
                        <label for="make_tesla">Tesla</label>

                        <input id="make_venturi" type="checkbox" name="make_venturi" value="any">
                        <label for="make_venturi">Venturi</label>

                        <input id="make_volkswagen" type="checkbox" name="make_volkswagen" value="any">
                        <label for="make_volkswagen">Volkswagen</label>
                    </div>
                </div>
            </div>

            <div class="setting">
                <div class="settingName">Body Style</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#body_setting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="body_setting">
                    <div class="settingContent">
                        <input id="body_any" type="checkbox" name="body_any" value="any" checked>
                        <label for="body_any">Any</label>

                        <input id="body_cargovan" type="checkbox" name="body_cargovan" value="any">
                        <label for="body_cargovan">Cargo Van</label>

                        <input id="body_convertible" type="checkbox" name="body_convertible" value="any">
                        <label for="body_convertible">Convertible</label>

                        <input id="body_coupe" type="checkbox" name="body_coupe" value="any">
                        <label for="body_coupe">Coupe</label>

                        <input id="body_crewcabpickup" type="checkbox" name="body_crewcabpickup" value="any">
                        <label for="body_crewcabpickup">Crew Cab Pickup</label>

                        <input id="body_extendedcabpickup" type="checkbox" name="body_extendedcabpickup" value="any">
                        <label for="body_extendedcabpickup">Extended Cab Pickup</label>

                        <input id="body_hatchback" type="checkbox" name="body_hatchback" value="any">
                        <label for="body_hatchback">Hatchback</label>

                        <input id="body_minivan" type="checkbox" name="body_minivan" value="any">
                        <label for="body_minivan">Minivan</label>

                        <input id="body_sedan" type="checkbox" name="body_sedan" value="any">
                        <label for="body_sedan">Sedan</label>

                        <input id="body_crossover" type="checkbox" name="body_crossover" value="any">
                        <label for="body_crossover">Crossover</label>
                    </div>
                </div>
            </div>

            <div class="setting">
                <div class="settingName">Exterior Color</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#exteriorcolor_setting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="exteriorcolor_setting">
                    <div class="settingContent">
                        <input id="color_any" type="checkbox" name="color_any" value="any" checked>
                        <label for="color_any">Any</label>

                        <input id="color_beige" type="checkbox" name="color_beige" value="any">
                        <label for="color_beige">Beige</label>

                        <input id="color_black" type="checkbox" name="color_black" value="any">
                        <label for="color_black">Black</label>

                        <input id="color_blue" type="checkbox" name="color_blue" value="any">
                        <label for="color_blue">Blue</label>

                        <input id="color_brown" type="checkbox" name="color_brown" value="any">
                        <label for="color_brown">Brown</label>

                        <input id="color_gold" type="checkbox" name="color_gold" value="any">
                        <label for="color_gold">Gold</label>

                        <input id="color_gray" type="checkbox" name="color_gray" value="any">
                        <label for="color_gray">Gray</label>

                        <input id="color_green" type="checkbox" name="color_green" value="any">
                        <label for="color_green">Green</label>

                        <input id="color_red" type="checkbox" name="color_red" value="any">
                        <label for="color_red">Red</label>

                        <input id="color_white" type="checkbox" name="color_white" value="any">
                        <label for="color_white">White</label>

                        <input id="color_yellow" type="checkbox" name="color_yellow" value="any">
                        <label for="color_yellow">Yellow</label>
                    </div>
                </div>
            </div>

            <div class="setting">
                <div class="settingName">Minimum Price</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#minimum_setting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="minimum_setting">
                    <div class="settingContent">
                        <input maxlength="15" id="min_price" class="textInput priceInput" type="text"
                               name="minimum_price">
                        <label class="labelPrice" for="min_price">$</label>
                    </div>
                </div>
            </div>

            <div class="setting">
                <div class="settingName">Maximum Price</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#maximum_setting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="maximum_setting">
                    <div class="settingContent">
                        <input maxlength="15" id="max_price" class="textInput priceInput" type="text"
                               name="maximum_price">
                        <label class="labelPrice" for="max_price">$</label>
                    </div>
                </div>
            </div>

            <div class="setting">
                <button class="submitButton" type="submit">Search</button>
            </div>
        </form>
    </div>
</template>

<script>
    import debounce from 'lodash.debounce';

    export default {
        name: "settings",
        props: {
            searching_settings: {
                Type: Object
            },
            per_page: {
                Type: Number
            },
            order_by: {
                Type: String
            },
            looking_for: {
                Type: String
            }
        },
        computed: {
            searching_settings_compute: function()  {
                return JSON.parse(this.searching_settings);
            }
        },
        data() {
            return {
                showSettings: false,
                years: [2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011],
                conditions: [],
            }
        },
        mounted() {
            const searching_settings = this.searching_settings_compute;
            this.conditions = searching_settings.condition;

            //check if browser is ie to fix setting button not showing
            function isIE() {
                let uaSD = navigator.userAgent;
                var is_ie = uaSD.indexOf("MSIE ") > -1 || uaSD.indexOf("Trident/") > -1;

                return is_ie;
            }

            if (isIE()) {
                document.getElementById('settingButton').style.right = '100%';
                document.getElementById('settingButton').style.left = '0';
                document.getElementById('settingButton').style.width = '55px';
            }
        },
        methods: {
            submitMethod(event) {
                event.preventDefault();

                let conditions = [];
                this.conditions.forEach((condition) => {
                    if(document.getElementById('condition' + condition).checked) {
                        conditions.push(document.getElementById('condition' + condition).value);
                    }
                });

                axios.post(`/api/advanced_search`, {
                    'per_page': this.per_page,
                    'order_by': this.order_by,
                    'looking_for': this.looking_for,
                    'condition': conditions
                }).then((Response) => {
                   console.log(Response.data);
                });
            },
            showSetting(event) {
                let innerHTML = event.target.innerHTML;

                if (innerHTML === '+') {
                    event.target.innerHTML = '-';
                } else {
                    event.target.innerHTML = '+';
                }
            },
            showSidebar() {
                if (this.showSettings === false) {
                    document.getElementById('settings').style.right = '0';
                    this.showSettings = true;
                } else {
                    document.getElementById('settings').style.right = '-250px';
                    this.showSettings = false;
                }
            },
            basicSearching: debounce(function(event){
                this.$emit('basicSearching', event.target.value);
            }, 500)
        }
    }
</script>

<style lang="scss" scoped>
    .settings {
        background: white;
        width: 250px;
        right: -250px;

        @media(max-width: 999.99px) {
            transition: right .3s ease-in-out;
            position: fixed;
            height: 100vh;
            z-index: 1001;
            top: 50%;
            transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            border-radius: 4px;
            box-shadow: 0 -5px 25px 0px rgba(0, 0, 0, 0.2);

            .nonScroll {
                position: relative;
                height: 100px;
            }
        }

        @media(min-width: 1000px) {
            border-right: 1px solid #dfdfdf;
            width: 25%;
            padding-top: 62px;
        }

        .settingButton {
            padding: 10px;
            position: fixed;
            z-index: 1001;
            transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            box-shadow: 0 1px 2px #b9bbbe;
            border-radius: 4px;
            top: 50%;
            right: 100%;
            background: white;
            cursor: pointer;

            @media(min-width: 1000px) {
                display: none;
            }

            .icon-search {
                font-size: 20px;
                color: #444444;
            }
        }

        .settingButton:hover {
            background: #f9f9f9;
        }

        .settingForm {

            @media(max-width: 999.99px) {
                overflow-y: scroll;
                height: 85vh;
            }
        }

        .setting {
            margin: 15px 15px 30px 15px;
            position: relative;

            .showOption {
                width: 25px;
                height: 25px;
                border: 1px solid #aaaaaa;
                font-size: 20px;
                line-height: 60%;
                padding-top: -100px;
                color: #666666;
                background: white;
                font-family: "Nunito", sans-serif;
                position: absolute;
                right: 0;
                top: 0;

                .iconPlus {
                    margin-top: -2px;
                }

                .iconMinus {
                    margin-top: -10px;
                }
            }

            .showOption:focus, .showOption:active {
                outline: none;
                box-shadow: 0 2px 4px #eeeeee;
            }


            .settingContent {
                margin-top: 10px;
                padding: 5px;
                font-size: 16px;
                position: relative;
                max-height: 200px;
                overflow-y: auto;

                .formRow {
                    margin-bottom: 20px;
                }

                .priceSetting {
                    border: 1px solid #b9bbbe;
                    border-radius: 2px;
                    width: 40%;
                    padding-left: 5px;
                }

                .priceSetting:active, .priceSetting:focus {
                    outline: none;
                    box-shadow: 0 1px 4px #dcdee2;
                }

                .labelPrice {
                    font-size: 16px;
                    padding-left: 3px;
                }

                .textInput {
                    width: 97%;
                    border: 0;
                    border-bottom: 1px solid #777;
                    margin-bottom: 5%;
                    color: #3d4852;
                }

                .textInput:focus, .textInput:active {
                    outline: none;
                    box-shadow: 0 8px 16px -8px #999999;
                }

                .priceInput {
                    width: 40%;
                }
            }

            .submitButton {
                border: 0;
                background: #385d7a;
                color: white;
                border-radius: 2px;
                padding: 8px 16px 8px 16px;
                display: block;
                margin-top: 20px;
                cursor: pointer;
                transition: background-color .3s ease-in-out;
            }
            .submitButton:hover {
                background: #447295;
            }

            .submitButton:active, .submitButton:focus {
                outline: none;
                box-shadow: 0 2px 4px #b9bbbe;
            }

            .settingName {
                text-transform: uppercase;
                font-weight: 500;
                font-size: 18px;
                color: #2a3744;
            }

        }

        .searchingSetting {

            @media(max-width: 999.99px) {
                margin-bottom: 10px !important;
            }
        }

        .settingContent::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(163, 163, 163, 0.3);
            background-color: #f5f5f5;
        }

        .settingContent::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        .settingContent::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(168, 168, 168, 0.3);
            background-color: #e1dce5;
        }

        .advancedSearching {
            left: 10%;
            font-size: 20px;
            color: #3d4852;
            margin-bottom: 20px;
            padding-left: 5%;
        }
    }

    /*Checkboxes styles*/
    input[type="checkbox"] {
        display: none;
    }

    input[type="checkbox"] + label {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 20px;
        cursor: pointer;
        font-family: "Roboto", sans-serif;
        color: #444444;
        font-size: 14px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    input[type="checkbox"] + label:last-child {
        margin-bottom: 0;
    }

    input[type="checkbox"] + label:before {
        content: '';
        display: block;
        width: 20px;
        height: 20px;
        border: 1px solid #aaafae;
        border-radius: 2px;
        position: absolute;
        left: 0;
        top: 0;
        -webkit-transition: all .12s, border-color .08s;
        transition: all .12s, border-color .08s;
    }

    input[type="checkbox"]:checked + label:before {
        width: 10px;
        top: -4px;
        left: 5px;
        border-radius: 0;
        opacity: 1;
        border-top-color: transparent;
        border-left-color: transparent;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>