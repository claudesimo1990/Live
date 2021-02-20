<template>
    <div>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <navigation/>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid p-2">
                        <h1 v-html="title"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" v-html="title"></li>
                        </ol>
                        <slot></slot>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</template>
<script>

import navigation from '../../Shared/Nav';

export default {
    props: ['title'],
    components: {
        navigation
    },
    data: function() {
        return {

        }
    },
    methods: {
        toggle(e) {
           console.log(this.$refs.body);
        },
        logout() {
            this.$inertia.post('/admin/logout').then((response) => {
                console.log(response);
            });
        }
    },
};
</script>
<style lang="scss" scoped>
    .admin--navbar--panel {
        margin-top: 70px !important;
    }
    .sidebar .nav-item .nav-link {
        padding: 0 0;
    }
    .sidebar .nav-item:last-child {
        margin-bottom: 0;
    }
    #wrapper #content-wrapper {
        background-color: lightgray;
        width: 100%;
        overflow-x: hidden;
    }
    .sb-sidenav-toggled{

    }
</style>
