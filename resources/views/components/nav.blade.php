<nav class="fixed flex py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
    <figure class="flex items-center md:mr-4">

    </figure>
    <div class="w-full flex justify-between items-center">
        <ul class="font-montserrat text-xl items-center hidden md:flex">
            <li class="mx-3 ">
                <a class="growing-underline" href="/">
                    How it works
                </a>
            </li>
            <li class="growing-underline mx-3">
                <a href="/">Features</a>
            </li>
            <li class="growing-underline mx-3">
                <a href="/">Pricing</a>
            </li>
        </ul>
        <div class="font-montserrat hidden md:block ml-auto">
            <button class="mr-6">Login</button>
            <button class="py-2 px-4 text-white bg-black rounded-3xl">
                Signup
            </button>
        </div>
    </div>
    <div id="showMenu" class="md:hidden">
        <img src='/assets/logos/Menu.svg' alt="Menu icon" />
    </div>
</nav>

{{--MOBILE--}}
<nav id='mobileNav' class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down">
    <div id="hideMenu" class="flex justify-end">
        <img src='assets/logos/Cross.svg' alt="" class="h-16 w-16" />
    </div>
    <ul class="font-montserrat flex flex-col mx-8 my-24 items-center text-3xl">
        <li class="my-6">
            <a href="howitworks">How it works</a>
        </li>
        <li class="my-6">
            <a href="features">Features</a>
        </li>
        <li class="my-6">
            <a href="pricing">Pricing</a>
        </li>
    </ul>
</nav>
