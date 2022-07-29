<template>
    <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl">
        <div class="px-4 sm:px-6">
            <div class="flex items-start justify-between">
                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">{{ resource.title }}</h2>
                <div class="ml-3 flex h-7 items-center">
                    <button type="button"
                            @click="closePanel"
                            class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">Close panel</span>
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="relative mt-6 flex-1 px-4 sm:px-6">
            <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                <dt class="text-sm font-medium text-gray-500">
                    Link
                </dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <template v-if="resource.resource.openinnewtab">
                        <a :href="resource.resource.link" target="_blank" class="text-blue-700">
                            {{ resource.resource.link }}
                        </a>
                    </template>
                    <template v-else>
                        <a :href="resource.resource.link" class="text-blue-700">
                            {{ resource.resource.link }}
                        </a>
                    </template>
                </dd>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PDFResource",
    props: ['resource'],
    created() {
    },
    methods: {
        copySnippet() {
            navigator.clipboard.writeText("mutisya");

        },
        closePanel() {
            this.$parent.$parent.$parent.slideOut.open = false;
        }
    },
}
</script>

<style scoped>

</style>
