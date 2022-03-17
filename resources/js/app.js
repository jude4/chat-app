const { default: Echo } = require("laravel-echo");

require("./bootstrap");

window.Vue = require("vue").default;

Vue.component(
    "chat-messages",
    require("./components/ChatMessages.vue").default
);
Vue.component("chat-form", require("./components/ChatForm.vue").default);
Vue.component("chat-card", require("./components/ChatCard.vue").default);

Vue.component(
    "personal-chat",
    require("./components/PersonalChat.vue").default
);

Vue.component(
    "personal-chat-form",
    require("./components/PersonalChatForm.vue").default
);

const app = new Vue({
    el: "#app",
    data: {
        messages: [],
    },
    created() {
        this.fetchMessages();
        window.Echo.private("chat").listen("MessageSent", (e) => {
            this.messages.push({
                message: e.message.message,
                user: e.user,
            });
        });

        window.Echo.private("personal-chat").listen(
            "PersonalMessageSent",
            (e) => {
                this.messages.push({
                    sender: e.sender,
                    reciever: e.reciever,
                    message: e.message.message,
                });
            }
        );
    },
    updated() {
        this.fetchMessages();
    },
    methods: {
        async fetchMessages() {
            await axios.get("/messages").then((response) => {
                this.messages = response.data;
            });
        },
        addMessage(message) {
            this.messages.push(message);
            axios.post("/messages", message).then((response) => {
                console.log(response.data);
            });
        },

        addPersonalMessage(message) {
            console.log(message.reciever);
            this.messages.push(message);
            axios.post("/personal-chats", message).then((response) => {
                console.log(response.data);
            });
        },
    },
});
