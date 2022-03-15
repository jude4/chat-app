const { default: Echo } = require("laravel-echo");

require("./bootstrap");

window.Vue = require("vue").default;

Vue.component(
    "chat-messages",
    require("./components/ChatMessages.vue").default
);
Vue.component("chat-form", require("./components/ChatForm.vue").default);

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
    },
});
