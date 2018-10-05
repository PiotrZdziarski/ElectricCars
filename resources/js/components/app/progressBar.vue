<template>
    <div class="progressBar">
        <div id="progress"></div>
    </div>
</template>

<script>
    export default {
        name: "progressBar",
        props: {
            dataRetrieved: {
                Type: Boolean,
            }
        },
        mounted() {
            let firstCheckpoint = (window.innerWidth * 40) / 100;
            //initial incrementing value
            let initialIncrement = window.innerWidth / 100;
            //faster loading after data retrieved
            let afterLoadIncrement = window.innerWidth / 10;

            let progress = setInterval(() => {

                let progressWidth = document.getElementById('progress').offsetWidth + initialIncrement;
                //initial load
                if(progressWidth < firstCheckpoint) {
                    document.getElementById('progress').style.width = `${progressWidth}px`;
                }
                //after data is retrieved faster loading
                if(this.dataRetrieved === true) {
                    progressWidth += afterLoadIncrement;
                    document.getElementById('progress').style.width = `${progressWidth}px`;
                }
                //stop if finished
                if(progressWidth >= window.innerWidth) {
                    this.$emit('finishedLoading');
                    clearInterval(progress);
                }
            }, 15);
        }
    }
</script>

<style lang="scss" scoped>
    .progressBar {
        position: fixed;
        width: 100%;
        background: #eeeeee;
        height: 3px;
        top:0;
        left:0;
        z-index: 1002;

        #progress {
            width: 0;
            background: #ff4853;
            height: 3px;
            border-radius: 5px;

        }
    }
</style>