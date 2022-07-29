<template>
    <form class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">

                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Title </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" v-model="title"
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <p v-if="errors.title" class="text-red-500 text-xs italic mt-3">{{ errors.title.toString() }}.</p>
                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Link </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" v-model="url" autocomplete="url"
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                            <p v-if="errors.url" class="text-red-500 text-xs italic mt-3">{{ errors.url.toString() }}.</p>

                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Open in new Tab </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <div class="relative flex items-start">
                                <div class="flex items-center h-5">
                                    <input v-model="openinnewtab" type="checkbox"
                                           class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="comments" class="font-medium text-gray-700">Open in a new Tab</label>
                                    <p class="text-gray-300">Opens the link in a new tab</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button
                        @click.prevent="saveLink"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <template v-if="!saving">
                        Save
                    </template>
                    <template v-else>
                        <i class="fa fa-spin fa-spinner"></i>
                    </template>
                </button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    name: "LinkResource",
    data() {
        return {
            errors: '',
            title: '',
            url: '',
            openinnewtab: '',
            saving: false
        }
    },
    methods: {
        saveLink() {
            this.saving = true;
            axios.post('/linkresource',{
                title: this.title,
                url: this.url,
                openinnewtab: this.openinnewtab
            }).then(response => {
                this.saving = false;
                this.title = '';
                this.errors = '';
                this.link = '';
                this.openinnewtab = '';
            }).catch(error => {
                this.errors = error.response.data.errors;
                this.saving = false;
            }).finally(()=>this.saving = false);
        }
    },
}
</script>

<style scoped>

</style>
