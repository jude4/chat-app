<template>
    <!-- <ul class="chat">
        <li class="left clearfix" v-for="message in messages" :key="message.id">
            <div class="clearfix">
                <div class="header">
                    <strong>
                        {{ message.user.name }}
                    </strong>
                </div>
                <p>
                    {{ message.message }}
                </p>
            </div>
        </li>
    </ul> -->

    <div class="">
        <div v-for="(message, index) in messages" :key="message.id">
            <div
                v-show="message.user_id != user.id"
                class="w-1/2 bg-white shadow-2xl p-4 rounded mb-4"
            >
                <p class="font-semibold">{{ message.user.name }}</p>
                <p>
                    {{ message.message }}
                </p>
            </div>

            <div
                v-show="message.user_id == user.id"
                class="w-1/2 text-white shadow-2xl mb-4 p-4 rounded ml-auto bg-green-600"
            >
                <p class="font-semibold">{{ user.name }}</p>
                <p>
                    {{ message.message }}
                </p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["messages", "user"],
};
</script>
