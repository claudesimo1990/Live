<template>
    <div>
        <div class="d-flex justify-content-center align-items-center w-50 my-4">
            <b-form-file v-model="file" ref="file-input" accept="image/jpeg, image/png, image/gif" class="mb-2"></b-form-file>
            <div class="btn btn-success my-4 mx-4" @click="send">Envoyer</div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                file: null
            }
        },
        methods: {
            clearFiles() {
                this.$refs['file-input'].reset()
            },
            send() {
                axios.post('/admin/images/store',{
                    file: this.file
                }).then(() => {

                })
            }
        }
    }
</script>
