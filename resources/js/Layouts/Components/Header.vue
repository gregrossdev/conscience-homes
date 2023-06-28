<script setup>
import { ref } from 'vue'
import { onClickOutside } from '@vueuse/core'
// toggle open and closed
const isMobileMenuOpen = ref(false);

const mobileMenuRef = ref(null)
const mobileNavIconRef = ref(null)
onClickOutside(mobileMenuRef, () => {
    isMobileMenuOpen.value = false
}, {
    ignore: [mobileNavIconRef]
})
</script>


<template>
    <header class="py-4 px-4 md:px-8 bg-secondary">
        <div class="flex items-center">
            <figure>
                <img src='/assets/logo.svg' alt="Logo" class="h-16" />
            </figure>
            <button
                aria-controls="navbar-default"
                aria-expanded="false"
                class="flex items-center lg:hidden"
                data-collapse-toggle="navbar-default"
                type="button"
            >
                <i
                    class="bx mr-8 cursor-pointer text-3xl text-primary dark:text-white"
                ></i>
                <svg
                    ref="mobileNavIconRef"
                    aria-label="menu"
                    class="fill-current text-primary dark:text-white"
                    height="15"
                    width="24"
                    xmlns="http://www.w3.org/2000/svg"
                    @click="isMobileMenuOpen = true"
                >
                    <g fill-rule="evenodd">
                        <rect height="3"
                              rx="1.5"
                              width="24"/>
                        <rect height="3"
                              rx="1.5"
                              width="16"
                              x="8"
                              y="6"/>
                        <rect height="3"
                              rx="1.5"
                              width="20"
                              x="4"
                              y="12"/>
                    </g>
                </svg>
            </button>
        </div>
        <nav class="flex w-full content-center items-center flex-wrap py-2">
            <div class="w-full flex justify-between">
                <ul class="font-montserrat text-xl items-center hidden md:flex">
                    <li class="mx-3 growing-underline">
                        <Link href="/">
                            How it works
                        </Link>
                    </li>
                    <li class="growing-underline mx-3">
                        <Link href="/">Features</Link>
                    </li>
                    <li class="growing-underline mx-3">
                        <Link href="/" >Contributions</Link>
                    </li>
                </ul>
                <div class="font-montserrat text-xl hidden md:flex md:ml-auto">
                    <button class="mr-6" >Login</button>
                    <button class="py-2 px-4 text-white bg-black rounded-3xl" >
                        Signup
                    </button>
                </div>
            </div>
        </nav>

        <!--    MOBILE-->
        <nav :class="isMobileMenuOpen ? 'px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down' : 'hidden' ">
            <div class="flex justify-end">
                <img src='assets/logos/Cross.svg' alt="" class="h-16 w-16" @click="isMobileMenuOpen = false"/>
            </div>
            <div class="font-montserrat flex flex-col mx-8 my-24 items-center text-3xl">
                <ul>
                    <li class="my-6">
                        <Link href="/" @click="isMobileMenuOpen = false">How it works</Link>
                    </li>
                    <li class="my-6">
                        <Link href="/" @click="isMobileMenuOpen = false">Features</Link>
                    </li>
                    <li class="my-6">
                        <Link href="/" @click="isMobileMenuOpen = false">Contributions</Link>
                    </li>
                </ul>
                <button class="my-6">Login</button>
                <button class="py-2 px-4 text-white bg-black rounded-3xl" >
                    Signup
                </button>
            </div>

        </nav>
    </header>
</template>
