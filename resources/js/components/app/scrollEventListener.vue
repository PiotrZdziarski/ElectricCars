<template>
    <scroll-top :show_scroll_top="show_scroll_top"></scroll-top>
</template>

<script>
    export default {
        name: "scrollEvent",
        data() {
            return {
                show_scroll_top: false
            }
        },
        mounted() {
            //right scope
            let toBlack = true;
            let toWhite = false;

            window.addEventListener('scroll', () => {
                let scrollTop = $(window).scrollTop();
                console.log(scrollTop);

                if (scrollTop !== 0) {
                    document.getElementById('mainnav').classList.add('backgroundWhite');
                    document.getElementById('menu').classList.add('hrefColor');

                    toWhite = true;
                    if(toBlack === true) {
                        setTimeout(() =>  {
                            document.getElementById('imageNav').src = "/images/nigga.png";
                        }, 150);
                        toBlack = false;
                    }

                }
                if (scrollTop === 0) {
                    document.getElementById('mainnav').classList.remove('backgroundWhite');
                    document.getElementById('menu').classList.remove('hrefColor');

                    toBlack = true;
                    if(toWhite === true) {
                        setTimeout(() =>  {
                            document.getElementById('imageNav').src = "/images/logowhite.png";
                        }, 150);
                        toWhite = false;
                    }
                }

                if (scrollTop > 600) {
                    this.show_scroll_top = true;
                } else {
                    this.show_scroll_top = false;
                }
            });
        }
    }
</script>

<style scoped>

</style>