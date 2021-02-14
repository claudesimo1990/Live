<template>
    <a href="#" @click.prevent="displayProfile()">
        <div class="border my-3 px-2 rounded">
            <div class="profile-block">
                <img class="rounded-circle z-depth-2 mt-1 ml-1 user__bild_post" width="96" alt="100x100" :src="user.avatar_original ? user.avatar_original : asset +'/UsersAvatars/'+ user.avatar"
                     data-holder-rendered="true">
                <h5 class="text-start mt-2"><b-badge variant="Light">{{ user.name }}</b-badge></h5>
                <div class="notice justify-center text-center notice-success stars">
                    <div class="d-flex justify-content-between">
                        <div class="strong">Votes :</div>
                        <div>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-between">
                    <span class="text-success">Membre verifié</span>
                    <span v-if="user.email_verified_at"><i class="fa fa-user-check mr-2 text-success"></i></span>
                    <span v-else><i class="fa fa-user-check mr-2 text-danger"></i></span>
                </div>
                <span class="vorHumanns">{{ postDate }}</span>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    props: ['user','postDate', 'asset'],

    data: function () {
        return {
            displayProfile() {
                Store.dispatch('modalShow', true);
                Store.dispatch('profileUser', this.user);
            }
        }
    }

}
</script>

<style>

</style>
