<template>
    <div>
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

                </div>
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Upload PDF File </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48"
                                     aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload"
                                           class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a file</span>
                                        <template v-if="!pdfFile">
                                            <input id="file-upload" name="file-upload" accept="application/pdf" type="file" ref="file"
                                                   class="sr-only"
                                                   @change="uploadPDF">

                                            <p v-if="errors.pdfFile" class="text-red-500 text-xs italic mt-3">{{ errors.pdfFile.toString() }}.</p>

                                        </template>
                                        <template v-else>
                                            {{ pdfFile.name }}
                                        </template>

                                    </label>
                                    <!--                                        <p class="pl-1">or drag and drop</p>-->
                                </div>
                                <p class="text-xs text-gray-500">PDF up to 10MB</p>
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
            <button type="submit"
                    @click.prevent="submitForm"
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
    </div>
</template>

<script>
export default {
    name: "PdfResource",
    data() {
        return {
            errors: '',
            pdfFile: '',
            title: '',
            saving: false
        }
    },
    methods: {
        submitForm() {
            this.saving = true;
            const formData = new FormData();
            formData.append('title', this.title);
            formData.append('pdfFile', this.pdfFile);
            axios.post('/pdfresource', formData).then(response => {
                this.errors = '';
                this.title = '';
                this.saving = false;
            }).catch(error => {
                this.errors = error.response.data.errors;
                this.saving = false;
            });
        },
        uploadPDF() {
            this.pdfFile = this.$refs.file.files[0];
        }
    },
}
</script>

<style scoped>

</style>
