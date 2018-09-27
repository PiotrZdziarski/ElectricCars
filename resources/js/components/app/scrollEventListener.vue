<template>
    <scroll-top :show_scroll_top="show_scroll_top"></scroll-top>
</template>

<script>
    export default {
        name: "scrollEvent",
        data(){
            return {
                show_scroll_top: false
            }
        },
        mounted() {
            //right scope
            const self = this;

            window.addEventListener('scroll', function () {
                let scrollTop = $(window).scrollTop();
                if(scrollTop !== 0) {
                    document.getElementById('mainnav').classList.add('backgroundWhite');
                    document.getElementById('menu').classList.add('hrefColor');
                }
                if(scrollTop === 0) {
                    document.getElementById('mainnav').classList.remove('backgroundWhite');
                    document.getElementById('menu').classList.remove('hrefColor');
                }

                if(scrollTop > 600) {
                    self.show_scroll_top = true;
                } else {
                    self.show_scroll_top = false;
                }
            });
        }
    }
</script>

<style scoped>

</style>