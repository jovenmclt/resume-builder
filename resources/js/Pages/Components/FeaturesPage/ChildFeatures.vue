<template>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <Navigationvue />
            <main class="col-12">
                <section id="section1">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-start rounded-4 py-4 px-4" style="background-color: #F2F2F2;">
                                <h2 class="fw-semibold text-dark mt-2">Resume Builder Features</h2>
                                <p class="fw-light text-dark mt-3">Craft a compelling resume with ease! Our Resume Builder offers a user-friendly experience, ensuring you can create a professional resume in just a few clicks. Here’s what you get: </p>
                                <ul class="mb-1">
                                    <li class="text-dark"> <span class="fw-semibold">Customizable Templates</span> – Choose from professionally designed templates that you can personalize to match your style. </li>
                                    <li class="text-dark mt-3"> <span class="fw-semibold">Real-Time Preview </span> – Instantly see how your resume looks while editing no need to switch between views.</li>
                                    <li class="text-dark mt-3"> <span class="fw-semibold">Instant Download</span> – Export your resume in PDF format, ready for job applications.</li>
                                    <li class="text-dark mt-3"> <span class="fw-semibold">Mobile-Friendly Interface</span> – Build your resume anytime, anywhere from any device.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="text-start rounded-4 py-4 px-4 border border-secondary">
                                <h4 class="fw-semibold ">📌 Project Purpose</h4>
                                <p class="fw-light mt-3">The Resume Builder Website is created to assist fresh graduates and entry level job seekers in crafting professional resumes with ease. Many individuals face difficulties in designing and formatting their resumes, which can be time-consuming and overwhelming. This platform solves that problem by offering clean, customizable templates and a simple step by step form to input information.</p>

                                <p class="fw-light mt-2">Users can preview their resume in real time and download it instantly as a high-quality PDF. The tool is mobile-friendly, making it accessible from any device without needing an account. Overall, the project aims to empower users by providing a free, fast, and user-friendly solution to build job-ready resumes confidently.</p>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="py-4 rounded-4 border border-secondary">
                                <div class="text-center py-4">
                                    <h4 class="fw-semibold mb-0">How to Use?</h4>
                                    <p class="fw-light">Build your resume in minutes — no stress, just steps.</p>
                                </div>
                                <div class="d-flex justify-content-center flex-wrap gap-4">
                                    <div class="text-start" style="width: 340px;">
                                        <h5 class="fw-normal">🔘 Choose a Template</h5>
                                        <p class="fw-light">Start by selecting from a range of clean and professional resume templates.</p>
                                    </div>
                                    <div class="text-start" style="width: 340px;">
                                        <h5 class="fw-normal">🖊️ Enter Personal Information</h5>
                                        <p class="fw-light">Fill in your basic details such as name, contact info, and profile summary.</p>
                                    </div>
                                    <div class="text-start" style="width: 340px;">
                                        <h5 class="fw-normal">🎓 Add Education & Experience</h5>
                                        <p class="fw-light">Include your academic background, internships, work experience, and achievements.</p>
                                    </div>
                                    <div class="text-start" style="width: 340px;">
                                        <h5 class="fw-normal">🧠 Highlight Skills</h5>
                                        <p class="fw-light">List down your technical and soft skills to make your resume stand out..</p>
                                    </div>
                                    <div class="text-start" style="width: 340px;">
                                        <h5 class="fw-normal">👀 Preview Your Resume</h5>
                                        <p class="fw-light">See a real-time preview of your resume to make sure everything looks perfect.</p>
                                    </div>
                                    <div class="text-start" style="width: 340px;">
                                        <h5 class="fw-normal">📄 Download as PDF</h5>
                                        <p class="fw-light">Click download to get your resume as a print-ready PDF file ready for applications.</p>
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
