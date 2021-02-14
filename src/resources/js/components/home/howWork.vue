<template>
    <section id="services" class="how-it-work">
        <div class="container">
            <div class="section-header pl-5">
                <h2 class="text-center text-center">Comment ca marche</h2>
            </div>
            <div class="block">
                <el-timeline>
                    <el-timeline-item timestamp="Etape 1" placement="top">
                        <el-card>
                            <h4>Rechercher un voyage</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, amet commodi consectetur id impedit ipsum itaque minima nam numquam odit officiis pariatur qui quia quibusdam repellat vel veritatis voluptas voluptatem.</p>
                        </el-card>
                    </el-timeline-item>
                    <el-timeline-item timestamp="Etape 2" placement="top">
                        <el-card>
                            <h4>S'authentifier</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eaque esse minus, necessitatibus repellendus reprehenderit vero. Accusamus adipisci alias cum dolorum, itaque laboriosam officiis quae voluptate. Consequuntur facilis illo itaque.</p>
                        </el-card>
                    </el-timeline-item>
                    <el-timeline-item timestamp="Etape 3" placement="top">
                        <el-card>
                            <h4>Contacter le voyageur</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquam eaque eligendi ipsum itaque unde? In laboriosam praesentium reprehenderit? Architecto facere iure nihil quisquam repellat! Commodi ipsam non ut vel.</p>
                        </el-card>
                    </el-timeline-item>
                    <el-timeline-item>
                        <el-card>
                            <b-link :href="howItWork" class="btn btn-secondary btn-lg btn-block mt-4">lire la suite</b-link>
                        </el-card>
                    </el-timeline-item>
                </el-timeline>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: ['howItWork']

}
</script>

<style lang="scss">
@import "./../../../sass/_variables.scss";

.how-it-work {
    background-color: $gray-50;
    margin-top: 30px;
    margin-bottom: 30px;

    .container {
        padding-top:20px;
        padding-bottom: 20px;
    }
}

.el-timeline-item__tail {
    border-left: 2px solid $quigo_second;
}
.el-timeline-item__node {
    background-color: $quigo;
}

</style>
