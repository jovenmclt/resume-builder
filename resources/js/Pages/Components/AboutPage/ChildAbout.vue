<template>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <Navigationvue />
            <main class="col-12">
                <section id="section1">
                    <div class="row justify-content-center  ">
                        <div class="d-flex flex-md-nowrap flex-wrap gap-2 justify-content-between mt-3 px-lg-5 px-3">
                            <div class="text-start px-xl-4">
                                <h2 class="fw-semibold">About Resume Builder</h2>
                                <p class="fw-light ">Lorem ipsum dolor sit neque quaerat perferendis</p>
                            </div>
                            <div class="text-end px-xl-4">
                                <button class="btn btn-primary rounded-0">Learn more</button>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex flex-md-nowrap flex-wrap gap-3 mt-5">
                                <div class="text-start py-3 px-3 rounded-4" style="background-color: #F2F2F2;">
                                    <h1 class="fw-semibold text-primary">1.</h1>
                                    <h5 class="fw-semibold text-dark">Who we are</h5>
                                    <p class="fw-light text-dark" style="font-size: 14px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque quasi id sapiente odit ipsam laboriosam non eos, harum labore?</p>
                                </div>
                                <div class="text-start py-3 px-3">
                                    <h1 class="fw-semibold text-primary">2.</h1>
                                    <h5 class="fw-semibold">Who we are</h5>
                                    <p class="fw-light" style="font-size: 14px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque quasi id sapiente odit ipsam laboriosam non eos, harum labore?</p>
                                </div>
                            </div>
                            <div class="d-flex flex-md-nowrap flex-wrap gap-3 mt-3">
                                <div class="text-start py-3 px-3">
                                    <h1 class="fw-semibold text-primary">3.</h1>
                                    <h5 class="fw-semibold">Who we are</h5>
                                    <p class="fw-light" style="font-size: 14px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque quasi id sapiente odit ipsam laboriosam non eos, harum labore?</p>
                                </div>
                                <div class="text-start py-3 px-3 rounded-4" style="background-color: #F2F2F2;">
                                    <h1 class="fw-semibold text-primary">4.</h1>
                                    <h5 class="fw-semibold text-dark">Who we are</h5>
                                    <p class="fw-light text-dark" style="font-size: 14px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque quasi id sapiente odit ipsam laboriosam non eos, harum labore?</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center ms-xl-5">
                                <img src="./Assets/Hero-img.png" width="350" class="py-3 px-3 border d-lg-block d-none" alt="">
                            </div>
                        </div>
                    </div>
                </section>
                <FooterVue />
            </main>
        </div>
    </div>
</template>

<script>
import FooterVue from '../Footer/Footer.vue';
import Navigationvue from '../Navigation/Navigation.vue';

export default {
    name: 'ChildAbout',
    components: {Navigationvue, FooterVue}
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
section{
    padding: calc(35px + 1rem) 0;
    font-family: "Poppins", sans-serif;
    overflow-wrap: break-word;
}
</style>
