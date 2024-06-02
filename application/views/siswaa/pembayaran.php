
<!-- Main Content -->
<div id="content-wrapper">
    <div class="container-fluid">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-weight-bold" aria-current="page">HI NEW STUDENT! <span class="text-info text-uppercase"><?= htmlentities($current_user->nama_siswa)?></span></li>
                    </ol>
                </nav>
            </div>
            <?php echo $this->session->flashdata('messageEmail');?>
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="mb-2">
                            <h2 class="font-weight-bold">MEMBUAT TRANSAKSI</h2>
                            <p class="text-muted">SILAHKAN PENCET TOMBOL DIBAWAH || AUTO DIRECT KE DASHBOARD DAN UPLOAD BUKTI</p>
                            <hr>
                        </div>
                        <a href="<?php echo site_url('students/pembayaran/nota') ?>"><span class="btn btn-outline-info">BUAT TRANSAKSI</span></a>

                </div>
</div>
</div>
</div>
                                        </div>
</div>
</div>
    









