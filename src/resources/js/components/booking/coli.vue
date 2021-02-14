<template>
<div>
    <section id="about" class="mb-0">
        <h1 class="text-justify text-center headline-text">Proposer un Colis </h1>
        <div class="container shadow">
            <div class="row">
                <div class="col-lg-3 col-sm-12 justify-content-center">
                    <userProfile :user="owner" :asset="asset"></userProfile>
                </div>
                <div class="col-lg-9  col-sm-12 travel-detail">
                    <h3> Details du Colis</h3>

                    <ul class="timeline offset-md-2">
                        <span class="step-heure" v-html="post.dateFrom"></span>
                        <li>
                            <p v-html="post.from"></p>
                        </li>

                        <span class="step-heure" v-html="post.dateTo"></span>
                        <li>
                            <p v-html="post.to"></p>
                        </li>
                    </ul>

                    <div class="row">
                        <div class="col-md-12 detail-sub">
                            <h5>Poids : <b-badge variant="info" v-html="post.kilo+ ' kg'"></b-badge></h5>
                            <h5>Tarif: <b-badge variant="info" v-html="post.prix + ' Euro'"></b-badge></h5> 
                        </div>
                    </div>

                    <div class="row description-row">
                        <div class="col-md-2 colis-description">
                            <img class="colis-img"
                                    src="https://cdn.shopify.com/s/files/1/0026/3592/3491/products/livraison-colis-png-5_1_600x600.png">
                        </div>

                        <div class="col-md-9 colis-description">
                            <p v-html="post.content"></p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 reservation-form">
                            <button class="btn btn-reserve"  data-toggle="collapse" data-target="#reserver" type="submit">je me propose</button>
                            <button @click="startConversationWith" class="btn btn-primary btn-contact-reserve">contacter l'expéditeur</button>
                            <div id="reserver" class="collapse">
                                <div class="form-group">
                                    <label for="email">Choississez le Post</label>
                                    <b-form-select v-model="selected" :options="options" size="sm"></b-form-select>
                                </div>
                                <div class="form-group">
                                    <label for="email">avez vous des precisions ? :</label>
                                    <textarea type="textarea" class="form-control voyageur-textarea" id="message"
                                      v-model="form.message"  name="message"></textarea>
                                    <button class="btn btn-reserve" @click.prevent="sendBooking" type="submit">envoyer</button>
                                    <b-spinner v-show="bookingSpinerShow" small label="Small Spinner" type="grow"></b-spinner>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <contact-user :user="owner" :current="currentUser" :messages="messages" @new="saveNewMessage(message)" :path="path"></contact-user>
</div>
</template>

<script>

import contactUser from "./contact";
import userProfile from './../utilities/cards/user';

export default {
    
    props: ['post', 'owner', 'currentUser', 'path', 'posts', 'asset'],

    components: {contactUser, userProfile},

    data: function() {
        return {
            setisActiveChat: true,
            bookingSpinerShow: false,
            selected: null,
            messages: [],
            form: {
                selectedPost: null,
                message: null,
            },
            options: []
        }
    },
    computed: {
        getKilos: function() {
            return Store.getters.getKilos;
        },
        getisActiveChat: function() {
            return Store.getters.getisActiveChat;
        }
    },
    watch: {
        selected: function(value) {
           this.form.selectedPost =  this.posts.filter(function (post) {
               return post.id == value;
           })
        }
    },
    methods: {
        startConversationWith() {
            if(this.owner.id == this.currentUser.id){
                Vue.$toast.error('votre ne peut etre effectuer.', {
                        position: 'top-right'
                    });
                return;
            }
            Store.dispatch('setisActiveChat', !this.getisActiveChat);
            axios.get(`/conversation/${this.owner.id}`)
                .then((response) => {
                this.messages = response.data;
            })
        },
        saveNewMessage(message) {
            this.messages.push(message);
        },
        sendBooking() {
            if (this.posts.length > 0 && this.form.selectedPost !== null) {
              this.bookingSpinerShow = true;
              axios.post(`/bookingPack/${this.post.id}/${this.owner.id}`,
              {
                  post: this.form.selectedPost,
                  owner: this.owner,
              })
                .then((response) => {

                    Vue.$toast.success('votre reservation a ete soumise avec success.', {
                        position: 'top-right'
                    });

                    this.form.selectedPost = null;
                    this.form.message = null;
                    this.selected = null;
                    this.bookingSpinerShow = false;
                })  
            }
        }
    },
    mounted() {
       Store.dispatch('setisActiveChat', true);
       this.posts.forEach(element => {
           this.options.push({ value: element.id, text: element.from + ' => ' + element.to + ' du ' +  element.dateFrom })
       });
    }
}
</script>

<style>

</style>
