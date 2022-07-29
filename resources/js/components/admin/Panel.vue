<template>
    <div class="fixed inset-0 overflow-hidden" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" @click="closePanel">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0" aria-hidden="true"></div>
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                <div class="pointer-events-auto w-screen max-w-md">
                  <ShowResource :resource="resource"></ShowResource>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import ShowResource from "./View/ShowResource";
export default {
    name: "Panel",
    components: {ShowResource},

    props: ['resource'],
    methods: {
        closePanel() {
            this.$parent.slideOut.open = false;
        }
    },
}
</script>

<style scoped>

</style>
