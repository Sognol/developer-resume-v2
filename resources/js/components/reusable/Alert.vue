<template>
    <div
        class="alert alert-dismissible fade show"
        role="alert"
        :class="`alert-${type}`"
    >
        <div v-if="typeof messages === 'string'" v-html="messages" />

        <div v-else-if="messages.length === 1" v-html="messages[0]" />

        <ul v-else class="mb-0">
            <li v-for="(msg, i) in messages" :key="i" v-html="msg" />
        </ul>

        <button
            type="button"
            class="close"
            data-dismiss="alert"
            aria-label="Close"
            @click="$emit('close')"
        >
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</template>

<script>
export default {
    name: "Alert",

    props: {
        messages: {
            type: [String, Array],
            required: true,
        },

        type: {
            type: String,
            required: false,
            default: () => "warning",
            validator: (value) =>
                [
                    "success",
                    "primary",
                    "danger",
                    "warning",
                    "secondary",
                    "info",
                    "light",
                    "dark",
                ].indexOf(value) >= 0,
        },
    },
};
</script>

<style></style>
