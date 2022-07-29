<template>
    <div class="-mx-4 mt-10 ring-1 ring-gray-300 sm:-mx-6 md:mx-0 md:rounded-lg">

        <template v-if="Object.keys(resources).length > 0">
            <table class="min-w-full divide-y divide-gray-300">
                <thead>
                <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Resource</th>
                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Type</th>
                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                        <span class="sr-only">Select</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="resource in resources" :key="resource.id">
                    <td class="relative py-4 pl-4 sm:pl-6 pr-3 text-sm">
                        <div class="font-medium text-gray-900">{{ resource.title }}</div>
                    </td>
                    <td class="px-3 py-3.5 text-sm text-gray-500">
                        <div class="">{{ resource.resource_type }}</div>
                    </td>
                    <td class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right text-sm font-medium">
                        <button type="button"
                                @click.prevent="showPanel(resource)"
                                class="inline-flex items-center rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">
                            View<span class="sr-only">, View</span></button>
                    </td>
                </tr>
                </tbody>
            </table>
            <Panel v-if="slideOut.open" :resource="resource"></Panel>
        </template>
        <template v-else>
            <div class="text-center mb-5 pb-6">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No Resources</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new Resource.</p>
                <div class="mt-6">
                    <a href="/admin/create"
                       class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                  clip-rule="evenodd"/>
                        </svg>
                        New Resource
                    </a>
                </div>
            </div>
        </template>
    </div>
</template>

<script>
import Panel from './Panel'

export default {
    name: "ViewResources",
    components: {Panel},

    props: ['resources'],
    data() {
        return {
            resource: '',
            slideOut: {
                open: false
            }
        }
    },
    methods: {
        showPanel(resource) {
            this.slideOut.open = true;
            this.resource = resource;
        }
    },
}
</script>

<style scoped>

</style>
