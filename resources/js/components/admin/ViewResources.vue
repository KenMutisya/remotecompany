<template>
    <div class="-mx-4 mt-10 ring-1 ring-gray-300 sm:-mx-6 md:mx-0 md:rounded-lg">
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
