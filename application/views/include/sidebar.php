<!-- Sidebar -->
<div class="sidebar">

    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url('ptgumacc') ?>/azzara/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?= $user['user']; ?>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Ubah Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">MENU</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="<?= base_url('company'); ?>">
                                    <span class="sub-item">Perusahaan</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('dept'); ?>">
                                    <span class="sub-item">Departemen</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('div') ?>">
                                    <span class="sub-item">Divisi</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('merk') ?>">
                                    <span class="sub-item">Merk</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('category') ?>">
                                    <span class="sub-item">Kategori</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('Type') ?>">
                                    <span class="sub-item">Tipe</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('vendor') ?>">
                                    <span class="sub-item">Supplier</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Transaksi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Aset</span>
                                </a>
                            </li>
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Pengguna Aset</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Pengaturan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Akun</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->