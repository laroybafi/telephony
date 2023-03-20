@extends('layouts/landing')
@section('content')
<div class="container" style="margin-top:-30px">
    <img src="./static/landing-assets/header_acc.png" alt="Tabler">
</div>
<div class="container mt-5 text-center">
    <h1><b>Apa kelebihan Fasilitas Dana ACC?</b></h1>
    <div class="row mt-4">
        <div class="col-md-2">
            <img src="./static/landing-assets/benefit-1.png" width="154" height="186" alt="Tabler">
            <h4 class="mt-3">Jaminan <b style="color:#0089cf">BPKB Mobil</b></h4>
        </div>
        <div class="col-md-2">
            <img src="./static/landing-assets/benefit-2.png" width="154" height="186" alt="Tabler">
            <h4 class="mt-3">Bunga mulai <b style="color:#0089cf">0.65% Flat</b> /bulan</h4>
        </div>
        <div class="col-md-2">
            <img src="./static/landing-assets/benefit-3.png" width="154" height="186" alt="Tabler">
            <h4 class="mt-3">Pencairan Hingga <b style="color:#0089cf">85% Harga Mobil</b></h4>
        </div>
        <div class="col-md-2">
            <img src="./static/landing-assets/benefit-4.png" width="154" height="186" alt="Tabler">
            <h4 class="mt-3"><b style="color:#0089cf">Pencairan</b> Cepat <b style="color:#0089cf">dalam 1
                    hari</b></h4>
        </div>
        <div class="col-md-2">
            <img src="./static/landing-assets/benefit-5.png" width="154" height="186" alt="Tabler">
            <h4 class="mt-3">Cukup Isi Form <b style="color:#0089cf">30 Detik</b></h4>
        </div>
        <div class="col-md-2">
            <img src="./static/landing-assets/benefit-6.png" width="154" height="186" alt="Tabler">
            <h4 class="mt-3"><b style="color:#0089cf">Usia Mobil</b> Hingga <b style="color:#0089cf">20
                    Tahun</b></h4>
        </div>
    </div>
</div>
<div class="container">
    <form action="{{ route('customers_store')}}" class="" method="post">
        @csrf
        <div class="container mt-5 text-center">
            <h1>Form Pengajuan Fasilitas Dana</h1>
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body" style="margin:40px">
                            <p><i style="color:#2C598D">Informasi pinjaman yang diinginkan</i></p>
                            <div class="mb-3">
                                <label class="form-label required">Nilai Pinjaman</label>
                                <input type="text" class="form-control" name="loan_amount"
                                    placeholder="Nilai pinjaman">
                            </div>
                            <div class="mb-3">
                                <div class="form-label required">Tujuan Pinjaman</div>
                                <select class="form-select" name="loan_purpose">
                                <option value="" disabled selected>Tujuan Pinjaman</option>
                                    <option value="Travel">Travel</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                    <option value="Renovasi Rumah">Renovasi Rumah</option>
                                    <option value="Ibadah">Ibadah</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-label required">Tenor</div>
                                <select class="form-select" name="tenor">
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                    <option value="36">36</option>
                                </select>
                            </div><br>
                            <p><i style="color:#2C598D ">Informasi mobil yang dimiliki</i></p>
                            <div class="mb-3">
                                <div class="form-label required">Brand</div>
                                <select class="form-select" name="brand" id="brand-dropdown">
                                    <option value="" disabled selected>Brand</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Isuzu">Isuzu</option>
                                    <option value="Daihatsu">Daihatsu</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Peugeot">Peugeot</option>
                                    <option value="Mitsubishi">Mitsubishi</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Honda">Honda</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-label required">Tipe</div>
                                <select class="form-select" name="type" id="type-dropdown">
                                <option value="" disabled selected>Tipe</option>                                  
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-label required">Tahun</div>
                                <select class="form-select" name="year">
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div> <br>
                            <p><i style="color:#2C598D">Lokasi Pengajuan</i></p>
                            <div class="mb-3">
                                <div class="form-label required">Provinsi</div>
                                <select class="form-select" name="province" id="province-dropdown">
                                <option value="" disabled selected>Provinsi</option>
                                    <option value="DKI Jakarta & Banten">DKI Jakarta & Banten</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Tengah & DIY">Jawa Tengah & DIY</option>
                                    <option value="Jawa Timur, Bali & Sekitarnya">Jawa Timur, Bali & Sekitarnya</option>
                                    <option value="Sumatra dan sekitarnya">Sumatra dan sekitarnya</option>
                                    <option value="Kalimantan, Sulawesi, Papua & Sekitarnya">Kalimantan, Sulawesi, Papua & Sekitarnya</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-label required">Cabang ACC</div>
                                <select class="form-select" name="acc_branch" id="branch-dropdown">
                                <option value="" disabled selected>Cabang ACC</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Refferal Code</label>
                                <input type="text" class="form-control" name="refferal_code"
                                    placeholder="Refferal Code">
                            </div> <br>
                            <p><i style="color:#2C598D">Isi Data Diri</i></p>
                            <div class="mb-3">
                                <label class="form-label required">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama">
                            </div>
                            <label class="form-label required" >Nomor HP</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    +62
                                </span>
                                <input type="tel" name="phone_number" class="form-control" placeholder="Nomor HP" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div>
                                <p>Disclaimer: <br>
                                    Pastikan seluruh data sudah sesuai dan kamu bersedia untuk dihubungi oleh pihak
                                    Astra Credit
                                    Companies</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">Saya bersedia dihubungi oleh Telemarketing</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">Dengan menyetujui pernyataan ini, saya bersedia
                                            data
                                            pribadi saya digunakan oleh Astra Credit Companies sesuai dengan Kebijakan
                                            Privasi
                                            dan Ketentuan yang Astra Credit Companies terapkan.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <input type="submit" value="Ajukan Sekarang" class="btn btn-outline-primary">
                                </input>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </form>
</div>
<div class="container mt-3">
    <img src="./static/landing-assets/steps.png" alt="Tabler">
</div>
<div class="container mt-5 text-center">
    <h3><b>Setelah saya dihubungi tim ACC, dokumen apa saja yang harus dilengkapi?</b></h3>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-body" style="margin:25px">
                    <p>1. KTP</p>
                    <p>2. KK</p>
                    <p>3. NPWP</p>
                    <p>4. STNK</p>
                    <p>5. BPKB mobil asli</p>
                    <p>6. Bukti pemasukan/rekening koran</p>
                    <p>7. Cover buku tabungan</p>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<div class="container mt-5 text-center">
    <h2><b>Frequently Asked Question</b></h2>
</div>
<div class="container">
    <div class="page-body">
        <div class="container-xl">
            <div class="accordion" id="accordion-example">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-1">
                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-1" aria-expanded="true">
                            Apa itu Fasilitas Dana ACC?
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordion-example">
                        <div class="accordion-body pt-0">
                            Fasilitas Dana ACC merupakan fasilitas yang diberikan ACC bagi Anda yang membutuhkan
                            pinjaman dana cepat tunai untuk berbagai keperluan. Fasilitas ini dapat Anda peroleh dengan
                            jaminan BPKB mobil.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-2" aria-expanded="false">
                            Apakah Fasilitas Dana ACC merupakan Kredit Tanpa Agunan (KTA)?
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                        <div class="accordion-body pt-0">
                            Tidak, Fasilitas Dana ACC bukan KTA (Kredit Tanpa Agunan). Untuk dapat mengajukan pinjaman
                            dana cepat cair hingga ratusan juta rupiah, ACC HANYA menerima jaminan BPKB Mobil.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-3" aria-expanded="false">
                            Saya butuh pinjaman uang cepat, prosesnya berapa lama?
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                        <div class="accordion-body pt-0">
                            Dalam waktu 1x24 jam kerja, tim telemarketing ACC akan segera menghubungi Anda. Sementara
                            proses pengajuan kredit hingga pencairan dana cepat untuk modal usaha Anda membutuhkan waktu
                            3 hari kerja (apabila pengajuan kredit disetujui).
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse-4" aria-expanded="false">
                            Bagaimana cara mengajukan Fasilitas Dana ACC melalui website?
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordion-example">
                        <div class="accordion-body pt-0">
                            Anda cukup isi form pengajuan dana melalui https://www.acc.co.id/fasilitasdanaACC/, kemudian
                            klik ajukan dana. Tim kami akan segera menghubungi Anda dalam waktu 1x24 jam kerja untuk
                            proses selanjutnya pencairan dana cepat tunai
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h2><b>Apa Kata Mereka</b></h2>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card d-flex flex-column">
                <a href="#">
                    <img class="card-img-top" src="#" alt="" />
                </a>
                <div class="card-body d-flex flex-column">
                    <div class="text-muted">Saya awalnya mengetahui ACC dari salah satu SPG di dealer mobil,
                        pengajuannya mudah dan cepat, gak bertele-tele, pelayanannya baik, saya juga mudah memahami
                        website ACC, hanya bunganya masih tergolong tinggi.</div>
                    <div class="d-flex align-items-center pt-4 mt-auto">
                        <span class="avatar" style="background-image: url(/samples/avatars/023m.jpg)"></span>
                        <div class="ms-3">
                            <div href="#" class="text-body">Maryjo Lebarree</div>
                            <div class="text-muted">Minangkabau</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card d-flex flex-column">
                <a href="#">
                    <img class="card-img-top" src="#" alt="" />
                </a>
                <div class="card-body d-flex flex-column">
                    <div class="text-muted">ACC Fasilitas Dana memberikan proses yang cepat, dengan bunga lebih rendah, serta pelayanan yang cepat</div>
                    <div class="d-flex align-items-center pt-4 mt-auto">
                        <span class="avatar" style="background-image: url(/samples/avatars/023m.jpg)"></span>
                        <div class="ms-3">
                            <div href="#" class="text-body">Sunaryo</div>
                            <div class="text-muted">Jakarta</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card d-flex flex-column">
                <a href="#">
                    <img class="card-img-top" src="#" alt="" />
                </a>
                <div class="card-body d-flex flex-column">
                    <div class="text-muted">Melakukan pinjaman di ACC sangat mudah dan tidak ribet. Memiliki pelayanan yang cepat dan ramah. Jumlah pencairan juga maksimal</div>
                    <div class="d-flex align-items-center pt-4 mt-auto">
                        <span class="avatar" style="background-image: url(/samples/avatars/023m.jpg)"></span>
                        <div class="ms-3">
                            <div href="#" class="text-body">Shinta Mila</div>
                            <div class="text-muted">Bekasi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card d-flex flex-column">
                <a href="#">
                    <img class="card-img-top" src="#" alt="" />
                </a>
                <div class="card-body d-flex flex-column">
                    <div class="text-muted">Pelayanan dan proses cepat. Rekan ACC sangat baik dan fast respon!</div>
                    <div class="d-flex align-items-center pt-4 mt-auto">
                        <span class="avatar" style="background-image: url(/samples/avatars/023m.jpg)"></span>
                        <div class="ms-3">
                            <div href="#" class="text-body">Sambudi</div>
                            <div class="text-muted">Surabaya</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
