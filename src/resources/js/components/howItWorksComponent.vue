<template>
<section class="our-blog p-0 m-0 bg-silver">
    <div class="container work-process  pb-5 pt-5">
        <div class="section-header">
            <h2 class="text-center">comment ça marche ?</h2>
    </div>
        <!-- ============ step 1 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">N°</p>
                                <h2 class="m-0 p-0">01</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Poster un trajet</h5>
                            <p><small>{{ 'Inserez dans Formulaire les elements relatifs à votre voyge. C\'est à la date, lieu depart et d\'arrivve, le nombre de kilo a transporter et le prix par kilo. Ainsi que le prix du courrier. Ensuite telecharger votre billet d\'avion et donnez plus d\'information sur votre voyage sur le lieu de rencontre ou bien sur le type de colis à transporter'.substring(30) }}</small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 2 =========== -->
        <div class="row">
            
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">N°</p>
                                <h2 class="m-0 p-0">02</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Confirmation de votre voyage</h5>
                            <p><small>Votre voyage est ensuite confirmer, afin de valider la fiablite de votre voyage. </small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>

        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">N°</p>
                                <h2 class="m-0 p-0">03</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Reservation</h5>
                            <p><small>Lorsqu'un expediteur reserve vos colis. Nous vous transmettons par mail son numero de telefone. </small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 4 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">N°</p>
                                <h2 class="m-0 p-0">04</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Reception du colis</h5>
                            <p><small>{{ 'Lors de la rencontre, verifiez la nature des colis et faite une liste de tous les colis à transporter. Demande à l\'expediteur de vous faire un procuration, qui atteste que vous transportez les produits listes en son nom.'.substring(20) }} </small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>
            
            
        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">N°</p>
                                <h2 class="m-0 p-0">05</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Paiment</h5>
                            <p><small>Après le trajet et la remise du colis, votre argent sera trafere sur votre compte PayPal. </small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right process-last"></div>
            </div>
        </div>
        <!-- ============ -->
    </div>
</section>
</template>

<script>
export default {
 props: ["background"],
    data: function() {
        return {
            lastNews: [],
        };
    }
}
</script>

<style>
.process-box{
    background: #fff;
    padding: 10px;
    border-radius: 15px;
    position: relative;
    box-shadow: 2px 2px 7px 0 #00000057;
}
.process-left:after{
    content: "";
    border-top: 15px solid #ffffff;
    border-bottom: 15px solid #ffffff;
    border-left: 15px solid #ffffff;
    border-right: 15px solid #ffffff;
    display: inline-grid;
    position: absolute;
    right: -15px;
    top: 42%;
    transform: rotate(45deg);
    box-shadow: 3px -2px 3px 0px #00000036;
    z-index: 1;
}
.process-right:after{
    content: "";
    border-top: 15px solid #ffffff00;
    border-bottom: 15px solid #ffffff;
    border-left: 15px solid #ffffff;
    border-right: 15px solid #ffffff00;
    display: inline-grid;
    position: absolute;
    left: -15px;
    top: 42%;
    transform: rotate(45deg);
    box-shadow: -1px 1px 3px 0px #0000001a;
    z-index: 1;
}
.process-step{
    background: #8bc73d;
    text-align: center;
    width: 80%;
    margin: 0 auto;
    color: #fff;
    height: 100%;
    padding-top: 8px;
    position: relative;
    top: -26px;
    border-radius: 0px 0px 10px 10px;
    box-shadow: -6px 8px 0px 0px #00000014;
}
.process-point-right{
    background: #ffffff;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    border: 8px solid #8bc73d;
    box-shadow: 0 0 0px 4px #5c5c5c;
    margin: auto 0;
    position: absolute;
    bottom: 40px;
    left: -63px;
}
.process-point-right:before{
    content: "";
    height: 144px;
    width: 11px;
    background: #5c5c5c;
    display: inline-grid;
    transform: rotate(36deg);
    position: relative;
    left: -50px;
    top: -0px;
}
.process-point-left{
    background: #ffffff;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    border: 8px solid #8bc73d;
    box-shadow: 0 0 0px 4px #5c5c5c;
    margin: auto 0;
    position: absolute;
    bottom: 40px;
    right: -63px;
}
.process-point-left:before {
    content: "";
    height: 144px;
    width: 11px;
    background: #5c5c5c;
    display: inline-grid;
    transform: rotate(-38deg);
    position: relative;
    left: 50px;
    top: 0px;

}

.process-last:before{
    display: none;
}
.process-box p{
    z-index: 9;
}
.process-step p{
    font-size: 20px;
}
.process-step h2{
    font-size: 39px;
}
.process-step:after{
    content: "";
    border-top: 8px solid #04889800;
    border-bottom: 8px solid #8bc73d;
    border-left: 8px solid #04889800;
    border-right: 8px solid #8bc73d;
    display: inline-grid;
    position: absolute;
    left: -16px;
    top: 0;
}
.process-step:before{
    content: "";
    border-top: 8px solid #ff000000;
    border-bottom: 8px solid #8bc73d;
    border-left: 8px solid #8bc73d;
    border-right: 8px solid #ff000000;
    display: inline-grid;
    position: absolute;
    right: -16px;
    top: 0;
}
.process-line-l{
    background: white;
    height: 4px;
    position: absolute;
    width: 136px;
    right: -153px;
    top: 64px;
    z-index: 9;
}
.process-line-r{
    background: white;
    height: 4px;
    position: absolute;
    width: 136px;
    left: -153px;
    top: 63px;
    z-index: 9;
}
</style>
