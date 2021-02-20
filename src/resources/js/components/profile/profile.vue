<template>
    <el-container class="my-5" style="height: 50%; min-height: 600px; border: 1px solid #eee">
        <el-aside style="background-color: rgb(233,236,239)" width="200px">
            <el-menu :default-openeds="[]">
                <el-menu-item>Home</el-menu-item>
                <el-submenu index="1">
                    <template slot="title"><i class="el-icon-message"></i>Mes Expeditions</template>
                    <el-menu-item-group>
                        <template slot="title">Mes expéditions</template>
                        <el-menu-item index="1-1">en cours</el-menu-item>
                        <el-menu-item index="1-2">effectuées</el-menu-item>
                    </el-menu-item-group>
                </el-submenu>
                <el-menu-item index="2-1">Mes annonces</el-menu-item>
                <el-menu-item index="2-2">Mes dépenses</el-menu-item>

                <el-submenu index="2">
                    <template slot="title"><i class="el-icon-message"></i>Mes Trajets</template>
                    <el-menu-item-group>
                        <template slot="title">Trajets</template>
                        <el-menu-item index="1-1">en cours</el-menu-item>
                        <el-menu-item index="1-2">effectuées</el-menu-item>
                    </el-menu-item-group>
                </el-submenu>
                <el-menu-item index="2-1">gains</el-menu-item>
                <el-menu-item index="2-1">Profile</el-menu-item>
                <el-menu-item index="2-1">Bewertung</el-menu-item>
            </el-menu>
        </el-aside>

        <el-container>
            <el-header style="text-align: right; font-size: 16px">
                <el-badge :value="12" class="item">
                    <el-button size="small">messages</el-button>
                </el-badge>
                <el-badge :value="3" class="item">
                    <el-button size="small">confirmations</el-button>
                </el-badge>
                <el-badge :value="1" class="item" type="primary">
                    <el-button size="small">refus</el-button>
                </el-badge>
            </el-header>

            <el-main>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid asperiores, cum cumque et fugiat fugit ipsa labore laborum magni natus neque non numquam quibusdam quo, ratione repellendus vel!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aliquid asperiores, cum cumque et fugiat fugit ipsa labore laborum magni natus neque non numquam quibusdam quo, ratione repellendus vel!</p>
            </el-main>
        </el-container>
    </el-container>
</template>
<script>
export default {
    data() {
        const item = {
            date: '2016-05-02',
            name: 'Tom',
            address: 'No. 189, Grove St, Los Angeles'
        };
        return {
            tableData: Array(10).fill(item)
        }
    }
};
</script>

<style>
.el-header {
    background-color: rgb(233,236,239);
    color: #333;
    line-height: 60px;
}

.el-aside {
    color: #333;
}
.el-submenu {
    border-bottom: 1px solid #e9ecef;
}
.el-menu-item {
    border-bottom: 1px solid #e9ecef;
    border-top: 1px solid #e9ecef;
}
 .el-submenu__title {
 }
</style>
