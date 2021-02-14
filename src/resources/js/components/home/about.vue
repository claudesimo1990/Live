<template>
  <section id="services" class="fdb-block about-section">
    <div class="container">
        <div class="section-header">
                <h2 class="text-center title__annonce">
                    A Propos de Goaubled
                </h2>
            </div>
        <div class="row align-items-center">
        <div class="col-12 col-md-6 mb-4 mb-md-0">
            <img alt="image" width="728" height="400" class="img-fluid" :src="img">
        </div>
        <div class="col-12 col-md-6 col-lg-5 ml-md-auto text-left">
            <p class="lead text-justify">Plateforme de Transport de colis et de courriers entre particuliers à des tarifs au-dessus de toute concurrence.</p>
            <p class="text-justify">Nos services permettent à tout voyageur de mettre ses kilos en vente à la communauté dans le but de rentabiliser son trajet. Qui Go au Bled a pour but de réunir toute personne étant confrontée au besoin de faire parvenir un colis à un proche ou ami dans une autre région. Grâce à ses utilisateurs expérimentés et fiables elle vous garantit une expédition rapide, moins coûteuse et en toute sécurité. Vous voulez envoyer un paquet en Afrique et dans d'autres continents à des prix défiant toute concurrence, alors vous êtes à la bonne adresse. Sur notre site Web et nos différents réseaux sociaux, tout utilisateur peut effectuer une recherche de voyage et faire une publication de voyage comme une demande d’expédition.</p>
        </div>
        </div>
    </div>
</section>
</template>
<script>
    export default {
        props: ['img'],
        data: function () {
            return {

            }
        }
    }

</script>
<style lang="scss" scoped>
    @import "./../../../sass/_variables.scss";

    * {
    font-size: 1rem;
    }
    .about-section {
        padding: 30px;
    }
</style>

