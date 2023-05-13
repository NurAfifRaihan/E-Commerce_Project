<?php 
    $root = "Project";

?>


<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Merk</div>
                            <a class="nav-link" href="/<?= $root?>/back/merk/list_merk.php ">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Merk Motor
                            </a>
                            <div class="sb-sidenav-menu-heading">Daftar Pesanan</div>
                            <a class="nav-link" href="/<?= $root?>/back/pesanan/list_pesanan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pesanan
                            </a>
                            <div class="sb-sidenav-menu-heading">Warehouse</div>
                            <a class="nav-link" href="/<?= $root?>/back/motor/list_motor.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Stock Motor
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Created by :</div>
                        Nur Afif Raihan
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">