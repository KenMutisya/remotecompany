<template>
    <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl">
        <div class="px-4 sm:px-6">
            <div class="flex items-start justify-between">
                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">{{ resource.title}}</h2>
                <div class="ml-3 flex h-7 items-center">
                    <button
                            @click.prevent="closePanel"
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
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">PDF Information</h3>
                </div>
                <div class="mt-5 border-t border-gray-200">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                            <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                        <div class="w-0 flex-1 flex items-center">
                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="ml-2 flex-1 w-0 truncate"> {{ resource.title }}.pdf </span>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a :href="`${resource.resource.file_path}`" download
                                               class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                                        </div>
                                    </li>
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>
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
        closePanel() {
            this.$parent.$parent.$parent.slideOut.open = false;
        }
    },
}
</script>

<style scoped>

</style>
