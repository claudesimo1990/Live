<template>
    <div class="panel panel-headline">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <h5>Mes Expéditions en cours</h5>
                </div>

                <div class="col-md-4" align="center">
                    <h5>Nombre Expéditions</h5>
                    <p class="center-number-infos">56</p>
                </div>

                <div class="col-md-4" align="center">
                    <h5>Nombre de Kilos</h5>
                    <p class="center-number-infos">404 Kg</p>
                </div>
                <b-button>Expédier un colis</b-button>
            </div>
            <hr>
            <div class="row">
                <h5>Liste</h5>
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Compagnie</th>
                                <th>Depart</th>
                                <th>Arrivée</th>
                                <th>Date depart</th>
                                <th>Date arrivée</th>
                                <th>Utilisateur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Air France</td>
                                <td>Paris</td>
                                <td>Douala</td>
                                <td>18.08.2020 | 15:00</td>
                                <td>18.08.2020 | 22:00</td>
                                <td>Yvan2054</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Brussels Airlines</td>
                                <td>Paris</td>
                                <td>Yaoundé</td>
                                <td>17.08.2020 | 18:00</td>
                                <td>18.08.2020 | 22:00</td>
                                <td>Sedr4404</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Brussels Airlines</td>
                                <td>Yaoundé</td>
                                <td>Paris</td>
                                <td>22.08.2020 | 23:00</td>
                                <td>18.08.2020 | 21:00</td>
                                <td>Sedr4404</td>
                            </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
