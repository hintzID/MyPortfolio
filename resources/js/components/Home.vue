<template>
    <div>
        <div class="container text-center" id="home"></div>
    </div>
</template>

<script>
import Typed from 'typed.js';

export default {
    name: 'Home',
    mounted() {
        const typed = new Typed('#home', {
            strings: ['Selamat Datang', 'Nama Saya <br> Usamah Bin Zaid', 'Saya Adalah <br> Web Developer BackEnd'],
            typeSpeed: 50,
            loop: true,
            showCursor: false,
        });
    },
};
</script>

<style scoped>
#home {
    color: #17ae23;
}
</style>
