<script setup>
import Header from "./Components/Header.vue"
import Footer from "./Components/Footer.vue"
</script>

<template>
    <div class="layout-wrapper">
        <Header/>
        <main class="md:container">
            <slot/>
        </main>
        <Footer/>
    </div>
</template>
