<template>
    <ValidationObserver v-slot="{ handleSubmit }">
        <form @submit.prevent="handleSubmit(onSubmit)">
                <div class="ml-3 p-0">Avatar</div>
                <validation-provider rules="required" v-slot="{ errors }">
                    <small class="form--error">{{ errors[0] }}</small>
                    <el-upload
                    class="avatar-uploader"
                    action="/register"
                    v-model="form.avatar"
                    :on-preview="handlePreview"
                    :on-change="updateImageList"
                    :show-file-list="false"
                    :auto-upload="false">
                    <img v-if="imageUrl" :src="imageUrl" class="avatar">
                    <i v-else class="el-icon-plus avatar-uploader-icon"></i>
                    </el-upload>
                </validation-provider>

                <validation-provider rules="required" v-slot="{ errors }">
                    <div class="form-group">
                        <input type="text" v-model="form.name" name="name" id="username" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" placeholder="Nom">
                        <small class="form--error">{{ errors[0] }}</small>
                    </div>
                </validation-provider>

                <validation-provider rules="required" v-slot="{ errors }">
                    <div class="form-group">
                        <input type="email" v-model="form.email" name="email" id="email" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" placeholder="Email">
                        <small class="form--error">{{ errors[0] }}</small>
                    </div>
                </validation-provider>

                <validation-provider name="confirm" rules="required" v-slot="{ errors }">
                    <div class="form-group mb-4">
                        <input type="password" v-model="form.password" name="password" id="password" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" placeholder="Mot de passe">
                        <small class="form--error">{{ errors[0] }}</small>
                    </div>
                </validation-provider>

                <validation-provider rules="required|password:@confirm" v-slot="{ errors }">
                    <div class="form-group mb-4">
                        <input type="password" v-model="form.password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control" :class="{ 'is-invalid': errors[0] !== undefined }" placeholder="Confirmation du mot de passe">
                        <small class="form--error">{{ errors[0] }}</small>
                    </div>
                </validation-provider>

                <div class="form-group">
                    <button class="btn btn-block login-btn mb-4" type="submit">S'inscrire</button>
                </div>
            </div>
        </form>
    </ValidationObserver>
</template>

<script>
import { extend } from 'vee-validate';

extend('password', {
  params: ['target'],
  validate(value, { target }) {
    return value === target;
  },
  message: 'Password confirmation does not match'
});

export default {
    props: ['target'],
    data: function() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
                avatar: ''
            },
            imagesList: [],
            imageUrl: '',
            dialogVisible: false
        }
    },
    methods: {
      onSubmit(evt) {
          let config = {
                headers: {
                    'Content-Type': 'application/json;charset=UTF-8',
                    "Access-Control-Allow-Origin": "*",
                    "enctype": "multipart/form-data"
                    }
                };

            const el = this;

             let formData = new FormData();

              formData.append('name',  this.form.name);
              formData.append('email',  this.form.email);
              formData.append('password',  this.form.password);
              formData.append('password_confirmation',  this.form.password_confirmation);
              formData.append('avatar',  this.form.avatar);

            axios.post('/register', formData , config)
            .then(function (response) {
               // window.location = response.data;
               console.log(response.data);
            })
            .catch(function (error) {
                if(error.response.data){
                    el.errors = error.response.data.errors;
                }
            });
        },
        updateImageList(file) {
            this.form.avatar = file.raw;
            this.imageUrl = URL.createObjectURL(file.raw);
        },
        handlePreview(file) {
            this.imageUrl = URL.createObjectURL(file.raw);
            this.dialogVisible = true;
        }
    },
}
</script>

<style>
  .avatar-uploader .el-upload {
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }
  .avatar-uploader .el-upload:hover {
    border-color: #409EFF;
  }
  .avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
    padding: 0 0;
  }
  .avatar {
    width: 100px;
    height: 100px;
    display: block;
    padding: 0 0 !important;
  }
  .form--error {
      color: red;
  }
</style>
