<template>
    <div class="text-end position-fixed" style="bottom: 10px; right: 1%;">
        <div v-if="ShowChatbox"  id="chatbox" class="rounded-3 d-flex flex-column justify-content-between bg-white shadow-lg" style="width: 350px; height: 400px;">
            <div class="d-flex py-2 px-2 justify-content-between shadow-md border-bottom border-secondary">
                <div class="text-start mt-1">
                    <img width="30" height="30" src="./assets/gpt robot chatbot.png" class=""/>
                    <span style="font-size: 13px;" class="text-dark"> AI Assistant</span>
                </div>
                <div class="text-start">
                    <i @click="btnShow" style="cursor: pointer;" class="bi bi-x fs-4 text-dark"></i>
                </div>
            </div>
            <div ref="messageContainer" v-if="MessageProps.length > 0" class="mt-2" style="max-height: 280px; overflow-y: auto; scrollbar-width: none;" >
                <div v-for="(getmessage, index) in MessageProps" :key="index">
                    <div v-if="getmessage.role == 'user' " class="d-flex justify-content-end">
                        <p class="fw-light py-2 px-2 me-2 rounded-4 text-start text-dark" style="font-size: 12px; max-width: 75%; background-color: #F2F2F2;">{{ getmessage.content }}</p>
                    </div>
                    <div v-if="getmessage.role == 'chatbot' " class="d-flex justify-content-start">
                        <div class="d-flex align-items-end mb-4 ms-2">
                            <img width="25" height="25" src="./assets/gpt robot chatbot.png" class=""/>
                        </div>
                        <p class="fw-light py-2 px-2 d-inline-block rounded-4 text-start text-white bg-primary" style="font-size: 12px; max-width: 65%;" v-html="getmessage.content.replace(/[#>*_`]/g, '').replace(/-{3,}/g, '').replace(/(\r\n|\n|\r)/g, '<br>')"></p>
                    </div>
                </div>
            </div>
            <div v-else class="text-center px-5">
                <img width="60" height="60" src="./assets/gpt robot chatbot.png" class=""/>
                <p class="fw-light text-dark" style="font-size: 12px;"> Hello i'm your AI assistant, How can I help you today?</p>
            </div>
            <div class="d-flex gap-2 py-3 px-3">
                <input v-model="UserMessage"  type="text" class="form-control border-secondary bg-white text-dark shadow-none rounded-5" placeholder="Send Message....">
                <button @click="btnSendMessage" class="btn btn-primary rounded-2" style="font-size: 12px;"><i class="bi bi-send-fill fs-6"></i></button>
            </div>
        </div>
        <button v-else  @click="btnShow" class="btn btn-primary rounded-5"> <img width="30" height="30" src="./assets/gpt robot chatbot.png" class=""/><span class="pe-2" style="font-size: 13px;">AI Assistant</span></button>
    </div>
</template>

<script>
import {router} from '@inertiajs/vue3'
export default {
    name: 'ChildChatbot',
    props: {MessageProps:Array},
    data(){
        return{
            ShowChatbox: false,
            UserMessage: ''
        }
    },
    methods:{
        btnShow(){
            this.ShowChatbox = !this.ShowChatbox
        },
        btnSendMessage(){

            const data = {
               usermessage: this.UserMessage
            };

            if(this.UserMessage){

                this.MessageProps.push({
                    role: 'user', content: data.usermessage
                });

                this.MessageProps.push({
                    role: 'chatbot', content: 'typing . . .'
                });

                router.post('/usermessage', data);
            }

            this.UserMessage = '';
        }
    },
    watch: {
        MessageProps: {
            handler() {
                this.$nextTick(() => {
                    const container = this.$refs.messageContainer;
                    if (container) {
                        container.scrollTop = container.scrollHeight;
                    }
                });
            },
            deep: true
        },
        ShowChatbox(newVal) {
            if (newVal) {
                this.$nextTick(() => {
                    const container = this.$refs.messageContainer;
                    if (container) {
                        container.scrollTop = container.scrollHeight;
                    }
                });
            }
        }
    }
}
</script>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

section {
    font-family: "Poppins", sans-serif;
    overflow-wrap: break-word;
}

</style>
