<div class="footer">
            <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="<?php echo base_url() ?>gambar/UCC4N.png" alt="" style="width:100%; margin:10px;">
                        </div>
                        <div class="col-lg-10"></div>
                    </div>
                    <a href=""><img src="<?php echo base_url() ?>gambar/icon/ig.png" alt=""></a>
                    <a href=""><img src="<?php echo base_url() ?>gambar/icon/tww.png" alt=""></a>
                    <a href=""><img src="<?php echo base_url() ?>gambar/icon/fb.png" alt=""></a>
                    <a href=""><img src="<?php echo base_url() ?>gambar/icon/gm.png" alt=""></a>
                    <br><br><br>

                    <p>@UIKACarrierCenter - 2021</p>
                </div>
                <div class="col-lg-4">
                    <ul class="fcenter">
                        <li><a class="text-white" href="#!">Tentang UCC</a></li>
                        <li><a class="text-white" href="#!">Lowongan Kerja</a></li>
                        <li><a class="text-white" href="#!">Perusahaan</a></li>
                        <li><a class="text-white" href="#!">Karir</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="fkontakkami">
                        <h5>Kontak Kami</h5>
                        <p>Nomor Telepon</p>
                        <p><i class="fa fa-mobile-android-alt"></i> 088768339838</p>
                        <p><i class="fa fa-phone-alt"></i> 021-56789021</p>
                        <p>Email</p>
                        <p><i class="far fa-envelope"></i> UCCUIKA@gmail.com</p>
                        <p>Alamat</p>
                        <p style="line-height:20px;"><i class="fa fa-map-marker-alt"></i> Jl. Sholeh Iskandar, RT.01/RW.10, Kedungbadak, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16162</p>
                    </div>
                </div>
            </div>
        </div>
        

        <script src="<?php echo base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap-show-password.min.js"></script>
        <script src="<?php echo base_url() ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <script>
            // Tambahkan kode berikut jika Anda ingin nama file muncul di pilih
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
    </body>
</html>