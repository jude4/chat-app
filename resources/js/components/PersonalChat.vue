<template>
    <div class="">
        <div v-for="chat in chats" :key="chat.id">
            <div
                v-show="chat.sender_id != user.id"
                class="md:w-1/2 mr-12 bg-white shadow-2xl p-4 rounded mb-4"
            >
                <span class="small font-semibold text-gray-500 flex justify-end"
                    >07:30</span
                >
                <p class="font-semibold">{{ chat.sender.name }}</p>
                <p>
                    {{ chat.message }}
                </p>
            </div>

            <div
                v-show="chat.sender_id == user.id"
                class="md:w-1/2 md:ml-auto ml-12 text-white shadow-2xl mb-4 p-4 rounded ml-auto bg-green-600"
            >
                <span class="small font-semibold text-white flex justify-end"
                    >07:30</span
                >
                <p class="font-semibold">{{ user.name }}</p>
                <p>
                    {{ chat.message }}
                </p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["chats", "user"],
};
</script>
