<template>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <main class="col-12">
                <section id="section1" >
                    <div class="row justify-content-center ">
                        <div class="d-flex flex-lg-nowrap flex-wrap justify-content-between px-4 pb-4">
                            <div class="text-start">
                                <h1 class="fw-bold">Resume Builder </h1>
                                <p class="fw-light mb-0">Build your resume, showcase your potential fast, simple, and professional.</p>
                            </div>
                            <div class="text-start mt-md-4 mt-2">
                                <button @click="btnshowPreview" style="background-color: #333446;" class="btn text-white rounded-5"><img width="25" height="25" src="./assets/pdf file.png" alt=""> <span class="pe-2" style="font-size: 13px;">Generate PDF</span></button>
                                <div v-if="PdfPreview" class="iframe-css z-1 d-flex flex-column">
                                    <iframe id="pdf-preview" class="w-75 h-75 py-3 px-3 bg-white"></iframe>
                                    <div class="text-start w-75">
                                        <button @click="btnClosePreview" class="btn btn-secondary w-50 rounded-0"><i class="bi bi-x-lg"></i> Close Preview</button>
                                        <button @click="btnDownloadPDF" class="btn btn-dark w-50 rounded-0"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="text-start border py-4 px-3 rounded shadow-sm" style="min-height: 840px;">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link active text-secondary" data-bs-toggle="tab" href="#PersonalInfo"><i class="bi bi-person-fill"></i> Personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary" data-bs-toggle="tab" href="#Education"><i class="bi bi-mortarboard-fill"></i> Education</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary" data-bs-toggle="tab" href="#Skills"><i class="bi bi-layers-fill"></i> Skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary"  data-bs-toggle="tab" href="#Experience"><i class="bi bi-briefcase-fill"></i> Experience</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary"  data-bs-toggle="tab" href="#Links"><i class="bi bi-link-45deg"></i> Links</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary"  data-bs-toggle="tab" href="#Language"><i class="bi bi-bookmark-dash-fill"></i> Language</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="PersonalInfo" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Personal Information</h5>
                                            <form v-for="(InputInfo, index) in PersonalArray" :key="index" class="py-3">
                                                <label for="Fullname" class="form-label">Full Name</label>
                                                <input v-model="InputInfo.Fullname" id="Fullname" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Email" class="form-label">Email Address</label>
                                                <input v-model="InputInfo.Email" id="Email" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Career" class="form-label">Career Objective</label>
                                                <input v-model="InputInfo.Career" id="Career" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Phone" class="form-label">Phone Number</label>
                                                <input v-model="InputInfo.Phone" id="Phone" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Location" class="form-label">Location</label>
                                                <input v-model="InputInfo.Location" id="Location" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Summary" class="form-label">Professional Summary</label>
                                                <textarea v-model="InputInfo.Summary" id="Summary" class="form-control shadow-none" rows="7"></textarea>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Education" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Education</h5>
                                            <form v-for="(InputEdu , index) in EducationArray" :key="index" class="py-3">
                                                <i @click="DeleteEducation(index)"  v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="University" class="form-label">School/University</label>
                                                <input v-model="InputEdu.University" id="University" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Prgram" class="form-label">Degree Prgram</label>
                                                <input v-model="InputEdu.Program" id="Prgram" type="text" class="form-control shadow-none">
                                                <br>
                                                <div class="d-flex gap-3">
                                                    <div class="text-start w-50">
                                                        <label for="StartDate" class="form-label">Start Date</label>
                                                        <input v-model="InputEdu.StartDate" id="StartDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                    <div class="text-start w-50">
                                                        <label for="EndDate" class="form-label">End Date</label>
                                                        <input v-model="InputEdu.EndDate" id="EndDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                            </form>
                                            <br>
                                            <button @click="AddEducation" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Education</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Skills" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Skills</h5>
                                            <form v-for="(InputSkill , index) in SkillArray" :key="index" class="py-3">
                                                <i @click="DeleteSkill(index)" v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="skill" class="form-label">Technical Skills </label>
                                                <input v-model="InputSkill.Skill" id="skill" type="text" class="form-control shadow-none">
                                                <div class="text-start mt-2">
                                                    <span class="fw-normal pe-2"> <input @click="AddSkillProgress(index, '25')" id="beginner" type="radio" name="progress"> Beginner</span>
                                                    <span class="fw-normal px-2"> <input @click="AddSkillProgress(index, '50')" id="Advanced" type="radio" name="progress" value="50"> Advanced</span>
                                                    <span class="fw-normal px-2"> <input @click="AddSkillProgress(index, '100')" id="professional" type="radio" name="progress" value="100"> Professional</span>
                                                </div>
                                            </form>
                                            <button @click="AddSkill" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Skill</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Experience" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Experience</h5>
                                            <form v-for="(InputExp , index) in ExperienceArray" :key="index" class="py-3">
                                                <i @click="DeleteExperience(index)" v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="Company" class="form-label">Company</label>
                                                <input v-model="InputExp.Company" id="Company" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Position" class="form-label">Position</label>
                                                <input v-model="InputExp.Position" id="Position" type="text" class="form-control shadow-none">
                                                <br>
                                                <div class="d-flex gap-3">
                                                    <div class="text-start w-50">
                                                        <label for="StartDate" class="form-label">Start Date</label>
                                                        <input v-model="InputExp.StartDate" id="StartDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                    <div class="text-start w-50">
                                                        <label for="EndDate" class="form-label">End Date</label>
                                                        <input v-model="InputExp.EndDate" id="EndDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <br>
                                                <label for="Description" class="form-label">Job Description</label>
                                                <textarea v-model="InputExp.Description" id="Description" class="form-control shadow-none" rows="5"></textarea>
                                            </form>
                                            <br>
                                            <button @click="AddExperience" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Experience</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Links" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Links</h5>
                                            <form v-for="(InputLink , index) in LinkArray" :key="index" class="py-3">
                                                <i @click="DeleteLink(index)" v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="skill" class="form-label">Website Link</label>
                                                <input v-model="InputLink.Link" id="skill" type="text" class="form-control shadow-none">
                                            </form>
                                            <button @click="AddLink" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Link</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Language" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Language</h5>
                                            <form v-for="(InputLanguage , index) in LanguageArray" :key="index" class="py-3">
                                                <i @click="DeleteLanguage(index)" v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="skill" class="form-label">Language Skills </label>
                                                <input v-model="InputLanguage.language" id="skill" type="text" class="form-control shadow-none">
                                                <div class="text-start mt-2">
                                                    <span class="fw-normal pe-2"> <input @click="AddLanguageProgress(index, '25')" id="beginner" type="radio" name="progress"> Beginner</span>
                                                    <span class="fw-normal px-2"> <input @click="AddLanguageProgress(index, '50')" id="Advanced" type="radio" name="progress" value="50"> Advanced</span>
                                                    <span class="fw-normal px-2"> <input @click="AddLanguageProgress(index, '100')" id="professional" type="radio" name="progress" value="100"> Professional</span>
                                                </div>
                                            </form>
                                            <button @click="AddLanguage" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Language</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt-lg-0 mt-4" >
                            <div id="TemplatePdf" class="border py-4 px-3 bg-white shadow-sm rounded position-sticky top-0" style="min-height: 840px;" >
                                <div class="text-start border-bottom pb-3">
                                    <template v-for="(getinfo, index) in PersonalArray" :key="index">
                                        <h2 class="fw-semibold text-dark mb-1 mt-3">{{ getinfo.Fullname }}</h2>
                                        <p class="fw-normal text-secondary mb-1" style="font-size: 12px;">{{ getinfo.Career }}</p>
                                    </template>
                                </div>
                                <div class="d-flex justify-content-between gap-2">
                                    <div class="text-start py-3" style="width: 30%;">
                                        <h5 class="fw-semibold text-dark mt-3">CONTACT</h5>
                                        <template v-for="(getinfo, index) in PersonalArray" :key="index">
                                            <p class="fw-semibold text-dark mb-1" style="font-size: 12px;">Address</p>
                                            <p class="fw-normal text-dark" style="font-size: 12px;">{{ getinfo.Location }}</p>
                                            <p class="fw-semibold text-dark mb-1" style="font-size: 12px;">Phone</p>
                                            <p class="fw-normal text-dark" style="font-size: 12px;">{{ getinfo.Phone }}</p>
                                            <p class="fw-semibold text-dark mb-1" style="font-size: 12px;">Email</p>
                                            <p class="fw-normal text-dark" style="font-size: 12px;">{{ getinfo.Email }}</p>
                                        </template>
                                        <h5 class="fw-semibold text-dark mt-4">LINKS</h5>
                                        <template v-for="(getlink, index) in LinkArray" :key="index">
                                            <p class="fw-normal text-dark" style="font-size: 12px;">{{ getlink.Link }}</p>
                                        </template>
                                        <h5 class="fw-semibold text-dark mt-4">SKILLS</h5>
                                        <template v-for="(getskills, index) in SkillArray" :key="index">
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="fw-normal text-dark mb-1" style="font-size: 12px; ">{{ getskills.Skill }}</p>
                                                <p class="fw-normal text-secondary mb-1" style="font-size: 12px; ">{{ getskills.progress }}%</p>
                                            </div>
                                            <div class="progress" style="height: 7px;">
                                                <div class="progress-bar " role="progressbar" aria-label="Basic example" :style="{ width: getskills.progress + '%'} "></div>
                                            </div>
                                        </template>
                                        <h5 class="fw-semibold text-dark mt-4">LANGUAGE</h5>
                                        <template v-for="(getlanguage, index) in LanguageArray" :key="index">
                                            <div class="d-flex justify-content-between mt-3">
                                                <p class="fw-normal text-dark mb-1" style="font-size: 12px; ">{{ getlanguage.language }}</p>
                                            </div>
                                            <div class="progress" style="height: 7px;">
                                                <div class="progress-bar " role="progressbar" aria-label="Basic example" :style="{ width: getlanguage.progress + '%'} "></div>
                                            </div>
                                        </template>
                                    </div>
                                    <div class="text-start py-3" style="width: 65%;">
                                        <h5 class="fw-semibold text-dark mt-3">SUMMARY</h5>
                                        <template v-for="(getinfo, index) in PersonalArray" :key="index">
                                            <p class="fw-normal text-dark" style="font-size: 12px;">{{ getinfo.Summary }}</p>
                                        </template>
                                        <h5 class="fw-semibold text-dark mt-4">EXPERIENCE</h5>
                                        <template v-for="(getexp, index) in ExperienceArray" :key="index">
                                            <p class="fw-semibold text-dark mb-1" style="font-size: 12px;">{{ getexp.Company }}</p>
                                            <p class="fw-normal text-dark mb-1" style="font-size: 12px;">{{ getexp.Position }}</p>
                                            <p class="fw-normal text-dark mb-1" style="font-size: 12px;">{{ getexp.StartDate }} - {{ getexp.EndDate }}</p>
                                            <p class="fw-normal text-dark" style="font-size: 12px;">{{ getexp.Description }}</p>
                                        </template>
                                        <h5 class="fw-semibold text-dark mt-4">EDUCATION</h5>
                                        <template v-for="(getedu, index) in EducationArray" :key="index">
                                            <p class="fw-semibold text-dark mb-1" style="font-size: 12px;">{{ getedu.University }}</p>
                                            <p class="fw-normal text-dark mb-1" style="font-size: 12px;">{{ getedu.Program }}, {{ getedu.StartDate }} - {{ getedu.EndDate }}</p>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <ChatBotVue :MessageProps="MessageProps"/>
            </main>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import ChatBotVue from '../../Index/ChatBot.vue';
import html2pdf from 'html2pdf.js'
export default {
    name: 'ChildTemplate7',
    components: {ChatBotVue},
    props: {MessageProps:Array},
    data(){
        return{
            PersonalArray: [
                {Fullname: 'Rick Tang', Email: 'ricktang@gmail.com', Career: 'Product Designer', Phone: '0933-412-**** ', Location: 'San Francisco, California', Summary: 'UX/UI specialist focused on designing clean and functional projects across all platforms and devices in response to specific briefs and problems, while always maintaining a unique look and feel.'}
            ],
            EducationArray: [
                {University: 'Rhode Island School of Design', Program: 'BFA Industrial Design', StartDate: '2025-06-10', EndDate: '2025-06-10'},
                {University: 'New York University', Program: 'BS in Information Technology', StartDate: '2025-06-10', EndDate: '2025-06-10'},
            ],
            SkillArray: [
                {Skill: 'Html', progress: '100'}, {Skill: 'Css', progress: '100'},{Skill: 'Javascript', progress: '50'},{Skill: 'Figma', progress: '100'},{Skill: 'Photoshop', progress: '50'},{Skill: 'Premiere Pro', progress: '25'},
            ],
            ExperienceArray: [
                {Company: 'Uber', Position: 'Product Designer', StartDate: '2025-06-10', EndDate: '2025-06-10', Description: 'Designed safety-focused experiences for Riders and Drivers Physical space problem solving and it’s interaction with the digital Navigated organization to achieve operational improvements'},
                {Company: 'IFTTT', Position: 'Product Designer', StartDate: '2025-06-10', EndDate: '2025-06-10', Description: 'Product and system design for a complex product Designed both consumer and developer products for IFTTT Responsible for maintaining design across iOS, Android, and web'},
                {Company: 'Facebook', Position: 'Product Designer', StartDate: '2025-06-10', EndDate: '2025-06-10', Description: 'Designer and prototyped internal tools Worked with Privacy team to build assets and features Redesigned Newsfeed curation experience for mobile'},
                {Company: 'Google Maps', Position: 'UX/UI Design Intern', StartDate: '2025-06-10', EndDate: '2025-06-10', Description: 'Contributed to Maps on iOS wireframe ans user experience Designed and prototyped onboarding experience Asset and feature design for Maps on Android'},
            ],
            LinkArray: [
                {Link: 'https://github.com/jovenmclt?tab=overview&from=2025-07-01&to=2025-07-02'}
            ],
            LanguageArray: [
                {language: 'English', progress: '50'},
                {language: 'Italian', progress: '100'},
                {language: 'Filipino', progress: '25'},
            ],

            PdfPreview: false,
            pdfUrl: null,
        }
    },
    methods:{
        UploadingProfile(event){
            const file = event.target.files[0];
            if(file){
                this.PersonalArray[0].Profile = URL.createObjectURL(file);
            }
        },
        AddEducation(){
            this.EducationArray.push({
                University: '', Program: '', StartDate: '', EndDate: ''
            });
        },
        AddSkill(){
            this.SkillArray.push({
                Skill: '', progress: ''
            });
        },
        AddLanguage(){
            this.LanguageArray.push({
                language: '', progress: ''
            });
        },
        AddLink(){
            this.LinkArray.push({
                Link: ''
            });
        },
        AddSkillProgress(index, value){
            this.SkillArray[index].progress = value
        },
        AddLanguageProgress(index, value){
            this.LanguageArray[index].progress = value
        },
        AddExperience(){
            this.ExperienceArray.push({
                Company: '', Position: '', StartDate: '', EndDate: '', Description: ''
            });
        },
        DeleteExperience(index){
            this.ExperienceArray.splice(index, 1);
        },
        DeleteSkill(index){
            this.SkillArray.splice(index, 1);
        },
        DeleteLanguage(index){
            this.LanguageArray.splice(index, 1);
        },
        DeleteEducation(index){
            this.EducationArray.splice(index, 1);
        },
        DeleteLink(index){
            this.LinkArray.splice(index, 1);
        },

        btnshowPreview(){
           this.PdfPreview = !this.PdfPreview;
        },
        btnClosePreview(){
            this.PdfPreview = false;
            this.pdfUrl = null
            document.getElementById('TemplatePdf').classList.add('border');
        },
        btnDownloadPDF(){
            const a = document.createElement("a");
            a.href = this.pdfUrl;
            a.download = "Resumebuilder.pdf";
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);

            this.btnClosePreview();
        }
    },
    watch:{
        PdfPreview(value){
            if (value) {
                this.$nextTick(() => {
                    const element = document.getElementById('TemplatePdf');
                    document.getElementById('TemplatePdf').classList.remove('border');
                    html2pdf()
                        .set({
                            margin: 10,
                            filename: 'Resumebuilder.pdf',
                            image: { type: 'jpeg', quality: 0.98 },
                            html2canvas: { scale: 7, backgroundColor: '#ffffff' },
                            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
                        })
                        .from(element)
                        .toPdf()
                        .get('pdf')
                        .then(pdf => {
                            const pdfUrl = URL.createObjectURL(pdf.output('blob'));
                            this.pdfUrl = pdfUrl;
                            document.getElementById('pdf-preview').src = pdfUrl;
                        });
                });
            }
        }
    },

}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

main{
    overflow-wrap: break-word;
}
section {
    padding: calc(10px + 1rem) 0;
    font-family: "Poppins", sans-serif;
}

.iframe-css{
    height: 100vh;
    width: 100%;
    background-color: rgba(86, 88, 88, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}


.nav-link.active{
    color: rgb(241, 246, 246) !important;
    background-color: rgb(104, 106, 107) !important;
}
</style>
