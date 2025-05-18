<template>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <Navigationvue />
            <main class="col-12">
                <section id="section1">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-start rounded-4 py-4 px-4" style="background-color: #F2F2F2;">
                                <h1 class="fw-semibold text-dark">Resume Builder Features</h1>
                                <p class="fw-light text-dark mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum architecto, ex quo saepe eum praesentium vel provident? Laudantium possimus dolore animi dolores, ipsam et vitae quas, quae architecto quis exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus deserunt distinctio repudiandae totam est quasi corporis maiores reprehenderit ratione praesentium, cumque earum doloribus tempora recusandae debitis, tenetur delectus animi dolorem.repudiandae totam est quasi corporis maiores reprehenderit ratione praesentium, cumque earum doloribus tempora recusandae debitis, tenetur delectus animi dolorem.</p>
                                <button class="btn btn-primary mt-4">Build Resume</button>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-2">
                            <div class="text-center rounded-4 py-4 px-4 d-lg-block d-none border border-secondary">
                                <img src="./Assets/featuresimg.png" class="w-100 ms-4" alt="">
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="py-4 px-lg-5 px-4 rounded-4 border border-secondary">
                                <div class="text-start">
                                    <h4 class="fw-semibold mb-0">How to Use?</h4>
                                    <p class="fw-light">Lorem ipsum dolor sit amet consectetur </p>
                                </div>
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="text-start" style="width: 330px;">
                                        <i class="bi bi-laptop-fill fs-5"> Choose Templates</i>
                                        <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi suscipit libero</p>
                                    </div>
                                    <div class="text-start" style="width: 330px;">
                                        <i class="bi bi-laptop-fill fs-5"> Choose Templates</i>
                                        <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi suscipit libero</p>
                                    </div>
                                    <div class="text-start" style="width: 330px;">
                                        <i class="bi bi-laptop-fill fs-5"> Choose Templates</i>
                                        <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi suscipit libero</p>
                                    </div>
                                    <div class="text-start" style="width: 330px;">
                                        <i class="bi bi-laptop-fill fs-5"> Choose Templates</i>
                                        <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi suscipit libero</p>
                                    </div>
                                    <div class="text-start" style="width: 330px;">
                                        <i class="bi bi-laptop-fill fs-5"> Choose Templates</i>
                                        <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi suscipit libero</p>
                                    </div>
                                    <div class="text-start" style="width: 330px;">
                                        <i class="bi bi-laptop-fill fs-5"> Choose Templates</i>
                                        <p class="fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi suscipit libero</p>
                                    </div>
                                </div>
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
    name: 'ChildFeatures',
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
