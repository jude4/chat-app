<template>
    <div>
        <div
            class="chat-card bg-white p-4"
            v-for="chat in chats"
            :key="chat.id"
        >
            <div class="flex justify-between shadow-2xl p-4">
                <div class="flex">
                    <div class="avatar mr-4">
                        <img
                            src="/assets/me.jpg"
                            class="w-10 h-10 rounded-circle"
                            alt="avatar"
                        />
                    </div>
                    <div class="chat-info">
                        <p>{{ user.name }}</p>
                        <p>{{ chat.message }}</p>
                    </div>
                </div>

                <div class="flex">
                    <div class="">
                        <p>07:58</p>
                        <p
                            class="bg-red-300 w-sm p-2 text-center rounded-circle small"
                        >
                            10
                        </p>
                    </div>

                    <div class="ml-6 my-auto">
                        <a :href="'/personal-chats?id=' + chat.reciever_id">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512"
                                class="w-5 h-5"
                            >
                                <path
                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        user: Object,
        chats: Array,
    },
};
</script>

<style></style>
