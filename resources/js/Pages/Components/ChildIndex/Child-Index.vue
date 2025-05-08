<template>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <NavigationVue />
            <main class="col-12">
                <section id="header">
                    <div class="row justify-content-center">
                        <div class="col-md-6 ">
                            <div class="text-start  mt-lg-4 ps-lg-4">
                                <h1 class="fw-semibold display-5 display-md-6 ">Stand out with a professionally designed resume</h1>
                                <p class="fw-light mt-4">By employing the best practices and innovative tech, Resume Builder boosts your chances of landing a better job – completely for free.</p>
                                <div class="mt-4">
                                    <button class="btn btn-primary py-lg-2">Build Resume</button>
                                    <span class="fw-light text-secondary ms-2" style="font-size: 12px;">No registration required</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="text-end">
                                <img class="d-md-block d-none w-100" src="./assets/header-img.png" style="position: relative; bottom: 40px;" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</template>

<script>
import NavigationVue from '../Navigation/Navigation.vue'

export default {
    name: 'Child-Index',
    components: {NavigationVue}
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

section{
    padding: calc(40px + 1rem) 0;
    font-family: "Poppins", sans-serif;
}
</style>
