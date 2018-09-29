<template>
    <div class="settings">
        <form @submit="submitMethod">
            <div class="setting">
                <div class="settingName">Condition</div>
                <button @click="showSetting" class="showOption" type="button" data-toggle="collapse"
                        data-target="#conditionSetting" aria-expanded="false" aria-controls="collapseExample">-
                </button>
                <div class="collapse show" id="conditionSetting">
                    <div class="settingContent">
                        <input id="conditionAny" type="checkbox" name="condition" value="any">
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
        </form>
    </div>
</template>

<script>
    export default {
        name: "settings",
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
            }
        }
    }
</script>

<style lang="scss" scoped>
    .settings {
        padding-top: 60px;
        background: white;
        @media(min-width: 1000px) {
            width: 30%;
        }

        .setting {
            margin: 15px;
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
                padding: 15px 5px 5px 5px;
                font-size: 16px;
                position:relative;
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
        border: 2px solid #426274;
        position: absolute;
        left: 0;
        top: 2px;
        -webkit-transition: all .12s, border-color .08s;
        transition: all .12s, border-color .08s;
    }

    input[type="checkbox"]:checked + label:before {
        width: 10px;
        top: -2px;
        left: 5px;
        border-radius: 0;
        opacity: 1;
        border-top-color: transparent;
        border-left-color: transparent;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>