<template>
    <fieldset>
        <legend class="text-base font-medium text-gray-900">Select Type of Resource</legend>
        <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-3 sm:gap-x-4">
            <label class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none" v-for="(resource,index) in
            resources" @click="activate(index)">
                <input type="radio" name="project-type" class="sr-only" aria-labelledby="project-type-1-label"
                       aria-describedby="project-type-1-description-0 project-type-1-description-1">
                <div class="flex-1 flex">
                    <div class="flex flex-col">
                        <span id="project-type-1-label" class="block text-sm font-medium text-gray-900"> {{  resource.name }} </span>
                    </div>
                </div>
                <!--
                  Not Checked: "invisible"

                  Heroicon name: solid/check-circle
                -->
                <svg class="h-5 w-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" aria-hidden="true"
                     v-if="resource.selected"
                >
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <!--
                  Active: "border", Not Active: "border-2"
                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                -->
                <div class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"
                     v-if="!resource.selected"
                ></div>
            </label>
        </div>

        <div class="mt-4">
            <ResourceType :type="selectedResource"></ResourceType>
        </div>
    </fieldset>

</template>

<script>
import ResourceType from './ResourceType.vue'

export default {
    name: "createResource",
    components: {ResourceType},
    data() {
        return {
            resources: [
                {
                    name: 'PDF',
                    selected: true,
                },
                {
                    name: 'Link',
                    selected: false,
                },
                {
                    name: 'HTML Snippet',
                    selected: false,
                },
            ],

        }
    },
    computed: {
        selectedResource() {
            return this.resources.find(resource => resource.selected)
        },
    },
    methods: {
        activate(index) {

            Object.keys(this.resources).forEach(key => {
                this.resources[key].selected = false;
            });

            this.resources[index].selected = true;
        }
    },
}
</script>

<style scoped>

</style>
