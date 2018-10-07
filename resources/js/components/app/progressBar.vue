<template>
    <div class="progressBar">
        <div id="progress"></div>
    </div>
</template>

<script>
    export default {
        name: "progressBar",
        props: {
            data_retrieved: {
                Type: Boolean,
            }
        },
        mounted() {
            let firstCheckpoint = (window.innerWidth * 40) / 100;
            let secondCheckpoint = (window.innerWidth * 60) / 100;

            //initial incrementing value
            let initialIncrement = window.innerWidth / 100;
            //to 60% width incrementing value
            let secondIncrement = window.innerWidth / 300;

            //faster loading after data retrieved
            let afterLoadIncrement = window.innerWidth / 10;
            const progressBar = document.getElementById('progress');

            let progress = setInterval(() => {

                let progressWidth = progressBar.offsetWidth + initialIncrement;
                let progressSecondWidth = progressBar.offsetWidth + secondIncrement;
                //initial load
                if(progressWidth < firstCheckpoint) {
                    progressBar.style.width = `${progressWidth}px`;
                }
                else if(progressWidth > firstCheckpoint && progressWidth < secondCheckpoint) {
                    progressBar.style.width = `${progressSecondWidth}px`
                }
                //after data is retrieved faster loading
                if(this.data_retrieved === true) {
                    progressWidth += afterLoadIncrement;
                    progressBar.style.width = `${progressWidth}px`;
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