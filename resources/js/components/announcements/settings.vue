<template>
    <div id="settings" class="settings">
        <div @click="showSidebar" id="settingButton" class="settingButton">
            <i class="icon-search"></i>
        </div>
        <div class="nonScroll">
            <form>
                <div class="setting searchingSetting">
                    <div class="settingContent">
                        <input @input="basicSearching" class="textInput" maxlength="150" type="text"
                               placeholder="Search for...">
                    </div>
                </div>
            </form>
            <div class="advancedSearching">
                Advanced Searching
            </div>
        </div>
        <form @submit="submitMethod" class="settingForm">

            <div class="setting" v-for="(key_name, keyIndex) in key_names">
                <div class="settingName">{{ key_name }}</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        :data-target="'#setting_' + keyIndex" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" :id="'setting_' + keyIndex">
                    <div class="settingContent">
                        <div class="formRow" v-for="(option,index) in settings_data[keyIndex]">
                            <input :id="'setting_child' + keyIndex + option"
                                   type="checkbox"
                                   :value="option"
                                   :checked="index === 0">
                            <label :for="'setting_child' + keyIndex + option">{{ option }}</label>
                        </div>
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
                        <input min="0" max="1000000000" id="min_price" class="textInput priceInput" type="number"
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
                        <input min="0"  max="1000000000" id="max_price" class="textInput priceInput" type="number"
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
            searching_settings_compute: function () {
                return JSON.parse(this.searching_settings);
            }
        },
        data() {
            return {
                showSettings: false,
                settings_data: [],
                key_names: [],
            }
        },
        mounted() {
            //all settings are retrieved from constants.php
            let settings_object = this.searching_settings_compute;
            this.key_names = Object.keys(settings_object);
            this.settings_data = _.values(settings_object);


            //check if browser is ie to fix setting button not showing
            function isIE() {
                let uaSD = navigator.userAgent;
                var is_ie = uaSD.indexOf("MSIE ") > -1 || uaSD.indexOf("Trident/") > -1;

                return is_ie;
            }

            if (isIE()) {
                let settingButton = document.getElementById('settingButton');
                settingButton.style.right = '100%';
                settingButton.style.left = '0';
                settingButton.style.width = '55px';
            }
        },
        methods: {
            submitMethod(event) {
                event.preventDefault();

                //outer options array will be covered with single option arrays
                let userSettings = [];

                this.settings_data.forEach((setting, key) => {

                    //selected options from single setting
                    let options = [];

                    setting.forEach((settingValue) => {
                        if (document.getElementById('setting_child' + key + settingValue).checked) {
                            options.push(settingValue);
                        }
                    });

                    userSettings.push(options);
                });

                this.$emit('advancedSearchBegin');

                axios.post(`/api/advanced_search`, {
                    'per_page': this.per_page,
                    'order_by': this.order_by,
                    'looking_for': this.looking_for,
                    'user_settings': userSettings,
                    'min_price': document.getElementById('min_price').value,
                    'max_price': document.getElementById('max_price').value
                }).then((Response) => {
                    this.$emit('advancedSearching', Response);
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

            basicSearching: debounce(function (event) {
                this.$emit('basicSearching', event.target.value);
            }, 500),
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