<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('GH APP') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />

</head>
<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <img src="{{ asset('material/img/logo.png') }}" style="width: 100%;">
            </div>
        </div>
        <div class="row mt-3">
                <div class="col">

                    <div class="card">
                        <img class="card-img-top" src="{{ asset('material/img/pendirian.png') }}" alt="Card image cap">
                        <div class="card-body">
                        <p class="card-text">PT Garis Harmoni (GRIMONZ) didirikan di Surabaya berdasarkan akta notaris Jati Ayu Kusumanagrini, SH., LM, dan Keputusan Menteri Hukum dan Hak Asasi Manusia Republik Indonesia Nomor: AHU-848.AH.02.01 Tahun 2010 tertanggal 22 April 2010. Menurut Pasal 3 anggaran dasar perusahaan, kegiatan usaha perusahaan adalah perdagangan / jasa barang dagangan: wadah, mobil, Pabrikan khusus, kompresor, generator, pompa, listrik, pipa, aspal, alat berat dan suku cadangnya, peralatan pengiriman, dan layanan penyewaan alat berat.

                            Saat ini PT Garis Harmoni juga bertindak sebagai distributor alat berat dan suku cadang Jinwoo SMC, Ustun-el, dan Omnium Plastik. Perusahaan berdomisili di Surabaya, berlokasi di Wilayah Jemursari Selatan Selatan No.20, Jemur Wonosari, Wonocolo, Kota Surabaya, Jawa Timur 60237
                            
                            Pada usia 6 tahun PT Garis Harmoni melakukan berbagai langkah terobosan penting dalam meningkatkan kualitas produk, satu langkah adalah menguji setiap komponen dan produk menggunakan uji beban untuk mengoptimalkan bahan dan model terbaik dari produknya. Ini dipercayakan pada pengujian teknis SolidWorks yang sudah memiliki standar internasional. Dengan terobosan baru ini diharapkan tidak ada lagi kesalahan dalam proses desain dan pada saat pembuatan sehingga dapat meminimalkan tingkat kesalahan produk..
                            
                            Kami melalui satu kantor pusat yang berlokasi di Surabaya dan jaringan bisnis di Jakarta yang siap melayani kebutuhan pelanggan secara keseluruhan (One Stop Services) termasuk layanan 24 jam.
                            
                            Kami memiliki sumber daya manusia dan pakar yang berkualitas dan berkualitas di bidangnya. Lebih dari 100 sumber daya manusia yang kami miliki tersebar ke wilayah Jakarta, Surabaya, yang terbagi menjadi wilayah Kutisari, Domas dan Pakal. Untuk proses pembuatan komponen – komponen unit, dan kebutuhan asesoris yang dipasang pada unit dalam proses di area Domas – Menganti Gresik. Sedangkan untuk perakitan, instalasi dan pengecatan serta showroom produk yang terletak di daerah Pakal Surabaya.
                            
                            PT Garis Harmoni terus melakukan pengembangan dan inovasi produk sehingga diharapkan dapat memenuhi kebutuhan masyarakat luas sesuai dengan perkembangan zaman. Untuk memastikan lini bisnis PT Harmoni line siap dengan dukungan ketersediaan suku cadang dan layanan purna jual untuk seluruh Indonesia</p>
                        
                        </div>
                    </div>
                </div>
                
        </div>


        <div class="row mt-3">
            <div class="col">

                <div class="card">
                    <img class="card-img-top" src="{{ asset('material/img/visi.png') }}" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Pengembangan operasional PT. Garis Harmoni selalu dibimbing oleh visi dan misi yang membantu Perusahaan tetap fokus pada pencapaian idealisme dengan meningkatkan manajemen, dan memposisikan karyawan sebagian dari perusahaan untuk mencapai tujuan yang sama, yang akan menjadi kontribusi bagi keberhasilan jangka panjang perusahaan.
                        Visi dan Misi adalah formulasi strategis perusahaan yang akan mengumpulkan semua potensi di perusahaan untuk bekerja dengan serius dan fokus dan terus bergerak maju menuju cita-cita bersama.
                        Penglihatan
                        Profesionalisme dalam kemampuan dan komitmen
                        Misi
                        Mengembangkan solusi tenaga kerja yang berkelanjutan
                        Mitra tepercaya dan dapat diandalkan
                        Memberikan manfaat dan nilai bagi dan semua pemangku kepentingan
                        Membangun jaringan kerja sama untuk menumbuhkan kerja bisnis semua bidang di Indonesia
                    </div>
                </div>
            </div>
            
    </div>
    </div>
    <div style="text-align: center;position: fixed;bottom: 0;width: 100%;padding: 10px;background: white;">
        <div class="row">
            <div class="col"><a href="{{url('mobile')}}"> Browse</a></div>
            <div class="col"><a href="{{url('about')}}">About</a></div>
            <div class="col"><a href="{{url('contact')}}">Contact</a></div>
            <div class="col"><a href="{{url('login')}}">Login</a></div>
        </div>
    </div>

    <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
    <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
</body>
</html>
