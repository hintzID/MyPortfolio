<template>
    <div>
        <div class="container text-center" id="about"></div>
        <p>I am a passionate web developer with experience in Vue.js and Laravel.</p>
    </div>
</template>

<script>
import Typed from 'typed.js';

export default {
    name: 'About',
    mounted() {
        const typed = new Typed('#about', {
            strings: ['Ingin Mengenal Lebih Jauh?', 'Silahkan Baca Halaman Ini'],
            typeSpeed: 50,
            loop: true,
            showCursor: false,
        });
    },
};
</script>

<style scoped>
div {
    color: #14c60e;
}
</style>
