<template>
    <transition name="slide-fade">
        <div @click="scrollTop" id="scrollTop" v-if="show_scroll_top" class="scrollTop">
            <i class="icon-up-open"></i>
        </div>
    </transition>
</template>

<script>
    export default {
        name: "scrollTop",
        props: {
            show_scroll_top: {
                Type: Boolean,
            }
        },
        methods: {
            scrollTop() {
                $("html, body").animate({ scrollTop: 0 });
            }
        }
    }
</script>

<style lang="scss" scoped>

    .slide-fade-enter-active {
        transition: all .3s ease;
    }
    .slide-fade-leave-active {
        transition: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
        opacity: 0;
    }
    .slide-fade-enter, .slide-fade-leave-to {
        transform: translateX(200px);
        opacity: 0;
    }

    .scrollTop {
        width: 45px;
        height: 45px;
        position: fixed;
        z-index: 1000;
        right: 30px;
        bottom: 30px;
        background: white;
        box-shadow: 0 -5px 25px 0px rgba(0, 0, 0, 0.2);
        font-size: 20px;
        color: #394345;
        border-radius: 50%;
        display:flex;
        justify-content:center;
        align-items: center;
        cursor: pointer;
    }
</style>