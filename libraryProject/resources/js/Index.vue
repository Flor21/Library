<template>
    <div id="main">
        <header id="header">
            <navegation-menu></navegation-menu>
        </header>
        <div id="content">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import NavegationMenu from './components/NavegationMenu.vue'
    export default {
        data() {
            return {
                //
            }
        },
        components: {
            NavegationMenu
        }
    }
</script>