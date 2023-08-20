<?php $aktif = $this->uri->segment(1); ?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU UTAMA</li>
    <li class="<?php echo activate_menu('Beranda') ?>"><a href="<?= base_url() ?>Beranda"><i class="fa fa-dashboard"></i> <span>Beranda</span><span class="pull-right-container"></span></a></li>
    <li class="treeview <?php if ($aktif == 'Guru' || $aktif == 'Siswa' || $aktif == 'Kelas' || $aktif == 'Transaksi' || $aktif == 'Tanggal') echo 'active' ?>">
        <a href="#"><i class="fa fa-database"></i> <span>Data Master</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo activate_menu('Guru') ?>"><a href="<?= base_url() ?>Guru"><i class="fa fa-circle-o"></i>Data Dosen</a></li>
            <li class="<?php echo activate_menu('Kelas') ?>"><a href="<?= base_url() ?>Kelas"><i class="fa fa-circle-o"></i>Data Kelas</a></li>
            <li class="<?php echo activate_menu('Siswa') ?>"><a href="<?= base_url() ?>Siswa"><i class="fa fa-circle-o"></i>Data Mahasiswa</a></li>
            <li class="<?php echo activate_menu('Transaksi') ?>"><a href="<?= base_url() ?>Transaksi"><i class="fa fa-circle-o"></i>Jenis Transaksi</a></li>
            <li class="<?php echo activate_menu('Tanggal') ?>"><a href="<?= base_url() ?>Tanggal"><i class="fa fa-circle-o"></i>Tanggal Merah</a></li>
        </ul>
    </li>


    <!-- pendapatan operasional -->
    <li class="treeview <?php if ($aktif == 'SPP' || $aktif == 'Pendaftaran' || $aktif == 'Ujian' || $aktif == 'Snack' || $aktif == 'Catering' || $aktif == 'Lainnya') echo 'active' ?>">
        <a href="#"><i class="fa fa-level-down"></i> <span>Pendapatan Operasional</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo activate_menu('Pendaftaran') ?>"><a href="<?= base_url() ?>Pendaftaran"><i class="fa fa-circle-o"></i>Pendaftaran</a></li>
            <li class="<?php echo activate_menu('SPP') ?>"><a href="<?= base_url() ?>SPP"><i class="fa fa-circle-o"></i>Sumbangan Sarana <br> Prasarana (SSP)</a></li>
            <li class="<?php echo activate_menu('Ujian') ?>"><a href="<?= base_url() ?>Ujian"><i class="fa fa-circle-o"></i>Biaya Penyelenggaraan <br> Pendidikan (BPP)</a></li>
            <li class="<?php echo activate_menu('Snack') ?>"><a href="<?= base_url() ?>Snack"><i class="fa fa-circle-o"></i>Dana Bimbingan KKI</a></li>
            <li class="<?php echo activate_menu('Catering') ?>"><a href="<?= base_url() ?>Catering"><i class="fa fa-circle-o"></i>Dana Bimbingan <br> Tugas Akhir (TA)</a></li>
            <li class="<?php echo activate_menu('Lainnya') ?>"><a href="<?= base_url() ?>Lainnya"><i class="fa fa-circle-o"></i>Dana Wisuda dan Ijazah</a></li>
            <li class="<?php echo activate_menu('Lainnya') ?>"><a href="<?= base_url() ?>Lainnya"><i class="fa fa-circle-o"></i>Registrasi HER</a></li>
            <li class="<?php echo activate_menu('sks') ?>"><a href="<?= base_url() ?>SKS"><i class="fa fa-circle-o"></i>Dana SKS Transfer</a></li>
            <li class="<?php echo activate_menu('potongan') ?>"><a href="<?= base_url() ?>Potongan"><i class="fa fa-circle-o"></i>Potongan dan Diskon <br> Pembayaran</a></li>
            <li class="<?php echo activate_menu('pengembalian') ?>"><a href="<?= base_url() ?>Pengembalian"><i class="fa fa-circle-o"></i>Pengembalian Dana</a></li>
            <li class="<?php echo activate_menu('perpustakaan') ?>"><a href="<?= base_url() ?>Perpustakaan"><i class="fa fa-circle-o"></i>Dana Perpustakaan</a></li>
            <li class="<?php echo activate_menu('legalisir') ?>"><a href="<?= base_url() ?>Legalisir"><i class="fa fa-circle-o"></i>Legalisir Ijazah</a></li>
            <li class="<?php echo activate_menu('kemahasiswaan') ?>"><a href="<?= base_url() ?>Kemahasiswaan"><i class="fa fa-circle-o"></i>Dana Kemahasiswaan</a></li>
            <li class="<?php echo activate_menu('cuti') ?>"><a href="<?= base_url() ?>Cuti"><i class="fa fa-circle-o"></i>Registrasi Cuti</a></li>
            <li class="<?php echo activate_menu('camp') ?>"><a href="<?= base_url() ?>Camp"><i class="fa fa-circle-o"></i>Pendaftaran ABANG CAMP</a></li>
        </ul>
    </li>

    <!-- pendapatan non operasional -->
    <li class="treeview <?php if ($aktif == 'SPP' || $aktif == 'Pendaftaran' || $aktif == 'Ujian' || $aktif == 'Snack' || $aktif == 'Catering' || $aktif == 'Lainnya') echo 'active' ?>">
        <a href="#"><i class="fa fa-level-down"></i> <span>Pendapatan Non <br> Operasional</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo activate_menu('Pendaftaran') ?>"><a href="<?= base_url() ?>Pendaftaran"><i class="fa fa-circle-o"></i>Bantuan YDQI</a></li>
            <li class="<?php echo activate_menu('SPP') ?>"><a href="<?= base_url() ?>SPP"><i class="fa fa-circle-o"></i>Bantuan PPPA</a></li>
            <li class="<?php echo activate_menu('Ujian') ?>"><a href="<?= base_url() ?>Ujian"><i class="fa fa-circle-o"></i>Bantuan DBN
                </a></li>
            <li class="<?php echo activate_menu('Snack') ?>"><a href="<?= base_url() ?>Snack"><i class="fa fa-circle-o"></i>Bantuan Lainnya
                </a></li>
            <li class="<?php echo activate_menu('Catering') ?>"><a href="<?= base_url() ?>Catering"><i class="fa fa-circle-o"></i>Bagi Hasil / Bonus
                </a></li>
            <li class="<?php echo activate_menu('Lainnya') ?>"><a href="<?= base_url() ?>Lainnya"><i class="fa fa-circle-o"></i>Dana non Halal
                </a></li>
            <li class="<?php echo activate_menu('Lainnya') ?>"><a href="<?= base_url() ?>Lainnya"><i class="fa fa-circle-o"></i>Dana Titipan Wisuda
                </a></li>
            <li class="<?php echo activate_menu('sks') ?>"><a href="<?= base_url() ?>SKS"><i class="fa fa-circle-o"></i>Dana Titipan Indent
                </a></li>
            <li class="<?php echo activate_menu('potongan') ?>"><a href="<?= base_url() ?>Potongan"><i class="fa fa-circle-o"></i>Dana Titipan SPP Mahasiswa
                </a></li>
            <li class="<?php echo activate_menu('pengembalian') ?>"><a href="<?= base_url() ?>Pengembalian"><i class="fa fa-circle-o"></i>Penjualan Aktiva
                </a></li>
            <li class="<?php echo activate_menu('perpustakaan') ?>"><a href="<?= base_url() ?>Perpustakaan"><i class="fa fa-circle-o"></i>Pendapatan Lainnya
                </a></li>
        </ul>
    </li>

    <li class="treeview <?php if ($aktif == 'Gaji' || $aktif == 'Pengeluaran') echo 'active' ?>">
        <a href="#"><i class="fa fa-level-up"></i> <span>Beban Operasional <br> Pendidikan</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pelaksanaan Ujian <br>atau Sidang
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pelaksanaan PKKMB
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Kemahasiswaan
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pelaksanaan Wisuda
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Perpustakaan
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pengembangan <br>Kurikulum
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Alat Penunjang <br>Edukasi (APE)
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Akreditasi
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pelaksanaan ABANG <br> CAMP
                </a></li>
        </ul>
    </li>
    <li class="treeview <?php if ($aktif == 'Gaji' || $aktif == 'Pengeluaran') echo 'active' ?>">
        <a href="#"><i class="fa fa-level-up"></i> <span>Beban Non Operasional <br> Pendidikan</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Bisyaroh SDI
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Honor Dosen
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Tunjangan Hari Raya <br>(THR)
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pesangon
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Kesejahteraan

                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Kesehatan

                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Iuran BPJS

                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Perjalanan Dinas

                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pengembangan SDI

                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Olahraga SDI </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pemeliharaan Gedung
                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Sosial / Sumbangan


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Rapat dan Pertemuan


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pengembangan <br>Kelembagaan


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Legalitas


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Sapras


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pemeliharaan Sapras


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pemeliharaan <br>Kendaraan


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pemeliharaan <br>Peralatan


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Telpon dan Internet


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Listrik dan Air


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Perlengkapan


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban ATK dan Materai


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Cetak dan Fotokopi


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Kerumahtanggaan


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Ekspedisi


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pajak Badan Pasal 26


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pajak Badan Pasal 21


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Pajak Kendaraan


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Marketing


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Penelitian dan <br>Pengabdian Masyarakat


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Pajak Kendaraan


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Pembelian Aset


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Adm Bank


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Koreksi Bank


                </a></li>
            <li class="<?php echo activate_menu('Gaji') ?>"><a href="<?= base_url() ?>Gaji"><i class="fa fa-circle-o"></i>Beban Lainnya


                </a></li>
        </ul>
    </li>
    <li class="<?php echo activate_menu('Laporan') ?>"><a href="<?= base_url() ?>Laporan"><i class="fa fa-line-chart"></i> <span>Laporan</span><span class="pull-right-container"></span></a></li>
</ul>