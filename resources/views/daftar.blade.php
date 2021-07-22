@extends('layout.main')
@section('content')
    <div class="uk-width-1-1 p-0" id="body">
            <!-- Start WOWSlider.com BODY section -->
            <div class="col-12 m-0 p-0 row justify-content-md-center">
                <div class="col-md-5 pt-5 pb-5 mt-2">
                    <h3 class="text-bold text-center">PENDAFTARAN</h3>
                    <div class="col-12 m-0 p-0">
                        <form id="form_pendaftaran">
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">USERNAME <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3" placeholder="USERNAME MINIMAL 3 S/D 13 KARAKTER" required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">KATA SANDI <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3"
                                        placeholder="MINIMAL 6 KARAKTER HURUF DAN ANGKA" required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">KONFIRMASI KATA SANDI <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3"
                                        placeholder="MINIMAL 6 KARAKTER HURUF DAN ANGKA" required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">PERTANYAAN KEAMANAN <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <select class="form-select form-select-sm" aria-label="Default select example" required>
                                        <option selected="" value="">Pilih pertanyaan keamanan</option>
                                        <option value="1">Nama ibu kandung Anda?</option>
                                        <option value="2">Nama ayah kandung Anda?</option>
                                        <option value="3">Merek dan tipe handphone pertama Anda? </option>
                                        <option value="4"> Klub bola basket favorit Anda? </option>
                                        <option value="5">Klub sepakbola favorit Anda?</option>
                                        <option value="6"> Nama Sekolah SD Anda?</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">JAWABAN KEAMANAN <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3"
                                        placeholder="JAWABAN PERTANYAAN KEAMANAN" required>
                                    <small>* Harap mengingat jawaban dari pertanyaan keamanan anda, pertanyaan keamanan akan diminta pada saat lupa kata sandi.</small>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">TELEPON <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3"
                                        placeholder="USERNAME MINIMAL 3 S/D 13 KARAKTER" required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">EMAIL <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3"
                                        placeholder="EMAIL@EXAMPLE.COM" required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">BANK <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <select tabindex="18" class="form-control form-control-sm " required>
                                        <option selected="" value="">Pilih layanan Bank</option>
                                        <option value="345">BCA</option>
                                        <option value="346">BNI</option>
                                        <option value="347">BRI</option>
                                        <option value="348">DANAMON</option>
                                        <option value="349">MANDIRI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">NAMA PEMILIK REKENING <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3"
                                        placeholder="NAMA PEMILIK REKENING" required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">NOMOR REKENING BANK <span class="text-danger">*</span>:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3"
                                        placeholder="NOMOR REKENING BANK" required>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">REFERRAL</label>
                                <div class="col-8">
                                    <input type="text" class="form-control form-control-sm" id="inputEmail3"
                                        placeholder="REFERRAL">
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="inputEmail3" class="col-4 col-form-label">KODE VALIDASI <span class="text-danger">*</span>:</label>
                                <div class="col-8 m-0 p-0 row">
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" id="inputEmail3"
                                            placeholder="KODE VALIDASI" required>
                                    </div>
                                    <div class="col-sm-3 m-0 p-0">
                                        <img class="col-12 m-0 p-0" src="assets/img/website/default.png">
                                    </div>
                                    <div class="col-sm-1 m-0 p-0">
                                        <a href="#"><span class="iconify" data-icon="bx:bx-refresh" data-inline="false" data-width="30" data-height="30"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 position-relative p-3">
                                <button type="submit" class="position-absolute top-50 start-50 translate-middle btn button-login btn-lg border-rounded">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 m-0 p-0 row justify-content-md-center" style="background-color: #001928">
                <div class="col-xl-9 m-0 p-3">
                    <div class="col-12 mt-4 mb-4 m-0" id="tentang">
                        <h3 class=" text-center">SEGERA DAFTAR DI TEXASPOKER.CC</h3>
                        <div id="text-tentang">
                            <p class="text-center">
                                Daftar segera disitus judi online terbesar dan terpercaya di Indonesia Texaspoker.cc dan nikmati semua jenis permainan yang tersedia
                                hanya menggunakan 1 Userid saja. Texaspoker.cc Merupakan agen judi online terbaik yang menyediakan permainan judi
                                menggunakan uang asli. Dengan minimal deposit sebesar 10 Ribu anda sudah bisa bermain semua permainan yang disediakan
                                sepuasnya.
                            </p>
                            <p>
                                Situs Judi Online texaspokercc tentu saja sangat memperhatikan keamanan dan kenyamanan member selama bermain. Sehingga
                                anda tidak perlu takut akan kehilangan chips atau data pribadi anda yang bocor, karena Agen Judi Online texaspokercc
                                menggunakan sistem keamanan dengan teknologi terbaru.
                            </p>
                        </div>
                        <div class="col-12 text-center pt-4">
                            <button class="btn button-readmore rounded-pill" id="readmore">read more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 m-0 p-0 row justify-content-md-center" style="background-color: #002439">
                <div class="col-xl-9 m-0 p-3">
                    <div class="col-12 mt-4 m-0 row justify-content-center" id="bank-status">
                        <div class="col-10 m-0 p-3 rounded-pill">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="col-12 m-0 p-0 row">
                                        <div class="col-5 m-0 p-0 text-center">
                                            MANDIRI
                                        </div>
                                        <div class="col-5 m-0 p-0">
                                            <img style="height: 20px; width: auto;" src="assets/img/tool/online.gif">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-12 m-0 p-0 row">
                                        <div class="col-5 m-0 p-0 text-center">
                                            MANDIRI
                                        </div>
                                        <div class="col-5 m-0 p-0">
                                            <img style="height: 20px; width: auto;" src="assets/img/tool/online.gif">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-12 m-0 p-0 row">
                                        <div class="col-5 m-0 p-0 text-center">
                                            MANDIRI
                                        </div>
                                        <div class="col-5 m-0 p-0">
                                            <img style="height: 20px; width: auto;" src="assets/img/tool/online.gif">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-12 m-0 p-0 row">
                                        <div class="col-5 m-0 p-0 text-center">
                                            MANDIRI
                                        </div>
                                        <div class="col-5 m-0 p-0">
                                            <img style="height: 20px; width: auto;" src="assets/img/tool/offline.gif">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-12 m-0 p-0 row">
                                        <div class="col-5 m-0 p-0 text-center">
                                            MANDIRI
                                        </div>
                                        <div class="col-5 m-0 p-0">
                                            <img style="height: 20px; width: auto;" src="assets/img/tool/online.gif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 m-0 p-3">
                    <div class="col-12 mb-0 m-0 row justify-content-center" id="sosmed">
                        <div class="col-10 m-0 row row-cols-md-5 p-3 rounded-pill">
                            <div>
                                <a class="align-middle col-12 p-2 text-center rounded-pill d-block" href="#"><span class="iconify"
                                        style="font-size: 20px;" data-icon="brandico:facebook"></span> Facebook</a>
                            </div>
                            <div>
                                <a class="align-middle col-12 p-2 text-center rounded-pill d-block" href="#"><span class="iconify"
                                        style="font-size: 20px;" data-icon="akar-icons:instagram-fill"></span> Instagram</a>
                            </div>
                            <div>
                                <a class="align-middle col-12 p-2 text-center rounded-pill d-block" href="#"><span class="iconify"
                                        style="font-size: 20px;" data-icon="akar-icons:twitter-fill"></span> Twitter</a>
                            </div>
                            <div>
                                <a class="align-middle col-12 p-2 text-center rounded-pill d-block" href="#"><span class="iconify"
                                        style="font-size: 20px;" data-icon="vaadin:youtube"></span> Facebook</a>
                            </div>
                            <div>
                                <a class="align-middle col-12 p-2 text-center rounded-pill d-block" href="#"><span class="iconify"
                                        style="font-size: 20px;" data-icon="dashicons:wordpress"></span> Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 m-0 p-0 row justify-content-md-center" style="background-color: #002439">
                <div class="col-xl-9 mb-3 p-3">
                    <img class="col-12 m-0 p-0" src="assets/img/website/DMQ1.gif">
                </div>
                <div class="col-12 m-0 pt-0 pb-2" id="nav-bottom">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mobile</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Card Games</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Dingdong</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Togel</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Sportsbook</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Casino</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">E-Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Promosi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Referral</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bantuan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endsection