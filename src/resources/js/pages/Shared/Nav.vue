<template>
    <div>
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <inertia-link class="nav-link" :href="$route('admin.home')">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </inertia-link>

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsUsers" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Users
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayoutsUsers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <inertia-link class="nav-link" :href="$route('users.create')">Add new</inertia-link>
                    <inertia-link class="nav-link" :href="$route('users.index')">Users</inertia-link>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Images
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <inertia-link class="nav-link" :href="$route('images.create')">Importer</inertia-link>
                    <inertia-link class="nav-link" :href="$route('images.index')">Galerie</inertia-link>
                </nav>
            </div>

            <div class="sb-sidenav-menu-heading">Pages Settings</div>

            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" :href="$route('home.edit')">Home</a>
            </nav>
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" :href="$route('frontend.about.create')">About</a>
            </nav>
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" :href="$route('frontend.principes.create')">principes</a>
            </nav>
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" :href="$route('frontend.privacy.create')">privacy</a>
            </nav>
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" :href="$route('frontend.termsOfservice.create')">termsOfservice</a>
            </nav>
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" :href="$route('frontend.impressum.create')">impressum</a>
            </nav>
            <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" :href="$route('frontend.agb.create')">agb</a>
            </nav>

        </div>
    </div>
</template>
