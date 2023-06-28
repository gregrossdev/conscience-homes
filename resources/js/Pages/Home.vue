<script setup>
import Contributions from "@/Components/Sections/Contributions.vue";
import Features from "@/Components/Sections/Features.vue";
import Hero from "@/Components/Sections/Hero.vue";
import HowItWorks from "@/Components/Sections/HowItWorks.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
</script>

<template>
    <Head title="Welcome" />
    <MainLayout>
        <Hero />
        <HowItWorks  />
        <Features />
        <Contributions />
    </MainLayout>
</template>

<style>

</style>
