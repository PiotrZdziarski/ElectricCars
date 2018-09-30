<template>
    <div id="settings" class="settings">
        <div @click="showSidebar" id="settingButton" class="settingButton">
            <i class="icon-search"></i>
        </div>
        <form @submit="submitMethod" class="settingForm">
            <div class="setting">
                <div class="settingName">Condition</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#conditionSetting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="conditionSetting">
                    <div class="settingContent">
                        <input id="conditionAny" type="checkbox" name="condition" value="any" checked>
                        <label for="conditionAny">Any</label>

                        <input id="conditionNew" type="checkbox" name="condition" value="any">
                        <label for="conditionNew">New</label>

                        <input id="conditionUsed" type="checkbox" name="condition" value="any">
                        <label for="conditionUsed">Used</label>

                        <input id="conditionCertified" type="checkbox" name="condition" value="any">
                        <label for="conditionCertified">Certified Pre-Owned</label>
                    </div>
                </div>
            </div>

            <div class="setting">
                <div class="settingName">Year</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#yearSetting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="yearSetting">
                    <div class="settingContent">
                        <input id="yearAny" type="checkbox" name="condition" value="any" checked>
                        <label for="yearAny">Any</label>

                        <div class="formRow" v-for="year in years">
                            <input :id="'year' + year" type="checkbox" :name="'year' + year" :value="'year' + year">
                            <label :for="'year' + year">{{ year }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "settings",
        data() {
            return {
                showSettings: false,
                years: [2018,2017,2016, 2015, 2014, 2013, 2012, 2011]
            }
        },
        mounted() {

            //check if browser is ie to fix setting button not showing
            function isIE() {
                let uaSD = navigator.userAgent;
                var is_ie = uaSD.indexOf("MSIE ") > -1 || uaSD.indexOf("Trident/") > -1;

                return is_ie;
            }
            if (isIE()){
                document.getElementById('settingButton').style.right = '100%';
                document.getElementById('settingButton').style.left = '0';
                document.getElementById('settingButton').style.width = '55px';
            }
        },
        methods: {
            submitMethod() {
                alert('xd');
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
                if(this.showSettings === false) {
                    document.getElementById('settings').style.right = '0';
                     this.showSettings = true;
                } else  {
                    document.getElementById('settings').style.right = '-250px';
                    this.showSettings = false;
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .settings {
        background: white;
        width:250px;
        right: -250px;

        @media(max-width: 999.99px) {
            transition: right .3s ease-in-out;
            position: fixed;
            height: 100vh;
            z-index: 999;
            top: 50%;
            transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            border-radius: 4px;
            box-shadow: 0 -5px 25px 0px rgba(0, 0, 0, 0.2);
        }


        @media(min-width: 1000px) {
            width:25%;
            padding-top: 62px;
        }

        .settingButton {
            padding: 12px;
            position: fixed;
            z-index: 1001;
            transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            box-shadow: 0 1px 2px #b9bbbe;
            border-radius: 4px;
            top: 50%;
            right: 100%;
            background:white;
            cursor: pointer;

            @media(min-width: 1000px) {
                display: none;
            }

            .icon-search {
                font-size:20px;
                color: #444444;
            }
        }

        .settingButton:hover {
            background: #f9f9f9;
        }

        .settingForm {

            @media(max-width: 999.99px) {
                overflow-y: scroll;
                max-height: 100vh;
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
                position:relative;
                max-height: 200px;
                overflow-y: auto;

                .formRow {
                    margin-bottom: 20px;
                }
            }




            .settingName {
                text-transform: uppercase;
                font-weight: 500;
                font-size: 16px;
                color: #444444;
            }

        }
    }


    /*Checkboxes styles*/
    input[type="checkbox"] { display: none; }

    input[type="checkbox"] + label {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 20px;
        cursor: pointer;
        font-family: "Roboto",sans-serif;
        color: #444444;
        font-size: 14px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    input[type="checkbox"] + label:last-child { margin-bottom: 0; }

    input[type="checkbox"] + label:before {
        content: '';
        display: block;
        width: 20px;
        height: 20px;
        border: 1px solid #a8a6a2;
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