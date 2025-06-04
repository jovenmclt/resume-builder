<template>
    <nav class="navbar col-lg-11 col-12 navbar-expand-lg py-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-semibold d-lg-block d-none" href="#">Resume Builder</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand fw-semibold d-lg-none d-block" href="#">Resume Builder</a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <inertiaLink class="nav-link fw-normal" href="/"><i class="bi bi-house-fill d-lg-none d-inline"></i> Home</inertiaLink>
                    </li>
                    <li class="nav-item mx-2">
                        <inertiaLink class="nav-link fw-normal" href="/about"><i class="bi bi-info-square-fill d-lg-none d-inline"></i> About</inertiaLink>
                    </li>
                    <li class="nav-item mx-2">
                        <inertiaLink class="nav-link fw-normal" href="/templates"><i class="bi bi-front d-lg-none d-inline"></i> Templates</inertiaLink>
                    </li>
                    <li class="nav-item mx-2">
                        <inertiaLink class="nav-link fw-normal" href="/features"><i class="bi bi-list-stars d-lg-none d-inline"></i> Features</inertiaLink>
                    </li>
                </ul>
                <ul class="navbar-nav d-lg-none d-block">
                    <li class="nav-item mx-2 mt-1">
                        <a @click="btnToggleTheme" class="nav-link fw-normal" href="#">
                            <span v-if="isDarkMode"><i class="bi bi-brightness-high-fill fs-5"></i> Light mode</span>
                            <span v-else><i class="bi bi-moon-stars-fill fs-5"></i> Dark mode</span>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link fw-normal" href="#">
                            <button class="btn btn-outline-secondary">Create Resume</button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="justify-content-end d-lg-block d-none">
                <ul class="navbar-nav">
                    <li class="nav-item mt-1">
                        <a @click="btnToggleTheme" class="nav-link fw-normal" href="#">
                            <i v-if="isDarkMode" class="bi bi-brightness-high-fill fs-4"></i>
                            <i v-else class="bi bi-moon-stars-fill fs-5"></i>
                        </a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link fw-normal" href="#">
                            <button class="btn btn-outline-secondary">Create Resume</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
import {Link as inertiaLink} from '@inertiajs/vue3'
export default {
    name: 'Navigation',
    components:{inertiaLink},
    data() {
        return {
            isDarkMode: localStorage.getItem('theme') === 'dark'
        }
    },
    methods: {
        btnToggleTheme() {
            location.reload();
            this.isDarkMode = !this.isDarkMode;
            const theme = this.isDarkMode ? 'dark' : 'light';
            document.documentElement.setAttribute('data-bs-theme', theme);
            localStorage.setItem('theme', theme);

        }
    },
    mounted() {
        const theme = this.isDarkMode ? 'dark' : 'light';
        document.documentElement.setAttribute('data-bs-theme', theme);
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

nav{
  font-family: "Poppins", sans-serif;
  font-style: normal;
}
</style>
