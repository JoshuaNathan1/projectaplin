@extends('template')
@section('isi')

<div class="bg-prop-search-content bg-prop-search-image progressive replace">
    <div style="width: 100%;max-width: 700px;">
        <div class="visible-lg">
            <h3 style="color:#fff;font-family:Poppins;text-align:center;font-weight:100">Cari Properti Impian Anda</h3>
        </div>
        <div style="background-color:rgba(255,255,255,0.3);padding:10px;border-radius:5px;font-family:Poppins;font-weight:100 !important">
            <div style="background-color:#fff;padding:2px;border-radius:5px;">
                <form action="https://eraindonesia.com/property" method="get" class="panel-search-property">
                    <div class="search-control">
                        <input type="text" value="" class="input-sm input-search" id="search" placeholder="Cari Properti..." name="keyword" style="text-align:center">
                        <button type="submit" class="btn btn-search btn-filter-search" style="font-size:18px;color:#606060;font-weight:100">
                            <i class="fas fa-search" aria-hidden="true" style="font-weight:600"></i>
                        </button>
                        <div style="width:2px;background:#606060;height:20px;margin-top:10px"></div>
                        <button type="button" class="btn btn-filter-search" style="font-size:18px;color:#606060;vertical-align:middle;font-weight:100">
                            <i class="fas fa-sliders-h" aria-hidden="true" style="font-weight:600"></i>&nbsp;&nbsp;&nbsp;Filter
                        </button>
                    </div>
                    <div class="search-advanced" style="border-top: 1px solid #D5D5D5;background-color: white;height: auto;display: none;">
                        <input type="hidden" name="order" value="">
                        <div style="display:flex;width:100%;justify-content: center;margin-bottom: 10px;padding-top: 10px;">
                            <label class="radio-container">
                                <input type="radio" name="saletype" value="all" checked="">
                                <div class="checkmark">Semua</div>
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="saletype" value="buy">
                                <div class="checkmark">Jual</div>
                            </label>
                            <label class="radio-container">
                                <input type="radio" name="saletype" value="rent">
                                <div class="checkmark">Sewa</div>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="search-control-group">
                                    <label class="search-label">Tipe</label>
                                    <select class="search-input" name="proptype">
                                        <option value="">Pilih Tipe</option>
                                        <option value="APT">APARTEMEN</option>
                                        <option value="CND">CONDOTEL</option>
                                        <option value="CNM">CONDOMINIUM</option>
                                        <option value="GED">GEDUNG</option>
                                        <option value="GUD">GUDANG</option>
                                        <option value="HTL">HOTEL</option>
                                        <option value="KOS">KOST</option>
                                        <option value="LLN">LAIN-LAIN</option>
                                        <option value="MAL">MAL</option>
                                        <option value="OFC">OFFICE</option>
                                        <option value="PB">PABRIK</option>
                                        <option value="RK">RUKO</option>
                                        <option value="RKN">RUKAN</option>
                                        <option value="RMH">RUMAH</option>
                                        <option value="STD">STUDIO</option>
                                        <option value="TH">TOWN HOUSE</option>
                                        <option value="TK">TOKO</option>
                                        <option value="TNH">TANAH</option>
                                        <option value="VL">VILLA</option>
                                        <option value="WSM">WISMA</option>
                                    </select>
                                </div>
                                <div class="search-control-group">
                                    <label class="search-label">Provinsi</label>
                                    <select class="search-input search-province" name="province">
                                        <option value="">Pilih Provinsi</option>
                                        <option value="ACEH">ACEH</option>
                                        <option value="AUSTRALIA">AUSTRALIA</option>
                                        <option value="BALI">BALI</option>
                                        <option value="BANGKA BELITUNG">BANGKA BELITUNG</option>
                                        <option value="BANTEN">BANTEN</option>
                                        <option value="BENGKULU">BENGKULU</option>
                                        <option value="CANADA">CANADA</option>
                                        <option value="DAERAH ISTIMEWA YOGYAKARTA">DAERAH ISTIMEWA YOGYAKARTA</option>
                                        <option value="DKI JAKARTA">DKI JAKARTA</option>
                                        <option value="GORONTALO">GORONTALO</option>
                                        <option value="JAMBI">JAMBI</option>
                                        <option value="JAWA BARAT">JAWA BARAT</option>
                                        <option value="JAWA TENGAH">JAWA TENGAH</option>
                                        <option value="JAWA TIMUR">JAWA TIMUR</option>
                                        <option value="KALIMANTAN">KALIMANTAN</option>
                                        <option value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
                                        <option value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
                                        <option value="KALIMANTAN TENGAH">KALIMANTAN TENGAH</option>
                                        <option value="KALIMANTAN TIMUR">KALIMANTAN TIMUR</option>
                                        <option value="KALIMANTAN UTARA">KALIMANTAN UTARA</option>
                                        <option value="KEPULAUAN BANGKA BELITUNG">KEPULAUAN BANGKA BELITUNG</option>
                                        <option value="KEPULAUAN RIAU">KEPULAUAN RIAU</option>
                                        <option value="LAMPUNG">LAMPUNG</option>
                                        <option value="LOMBOK">LOMBOK</option>
                                        <option value="MALAYSIA">MALAYSIA</option>
                                        <option value="MALUKU">MALUKU</option>
                                        <option value="MALUKU UTARA">MALUKU UTARA</option>
                                        <option value="NUSA TENGGARA BARAT">NUSA TENGGARA BARAT</option>
                                        <option value="NUSA TENGGARA TIMUR">NUSA TENGGARA TIMUR</option>
                                        <option value="PAPUA">PAPUA</option>
                                        <option value="PAPUA BARAT">PAPUA BARAT</option>
                                        <option value="RIAU">RIAU</option>
                                        <option value="SINGAPORE">SINGAPORE</option>
                                        <option value="SULAWESI BARAT">SULAWESI BARAT</option>
                                        <option value="SULAWESI SELATAN">SULAWESI SELATAN</option>
                                        <option value="SULAWESI TENGAH">SULAWESI TENGAH</option>
                                        <option value="SULAWESI TENGGARA">SULAWESI TENGGARA</option>
                                        <option value="SULAWESI UTARA">SULAWESI UTARA</option>
                                        <option value="SUMATERA BARAT">SUMATERA BARAT</option>
                                        <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
                                        <option value="SUMATERA UTARA">SUMATERA UTARA</option>
                                        <option value="SUMATRA BARAT">SUMATRA BARAT</option>
                                        <option value="SUMATRA SELATAN">SUMATRA SELATAN</option>
                                        <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                                    </select>
                                </div>
                                <div class="search-control-group">
                                    <label class="search-label">Kota</label>
                                    <select class="search-input search-city" name="city">
                                        <option value="">Pilih Kota</option>
                                        <option province="ACEH" value="ALA">LANGSA</option>
                                        <option province="ACEH" value="APJ">PIDIE JAYA</option>
                                        <option province="ACEH" value="ASI">SIMEULEU</option>
                                        <option province="ACEH" value="ASA">SABANG</option>
                                        <option province="ACEH" value="ANR">NAGAN RAYA</option>
                                        <option province="ACEH" value="ALH">LHOKSEUMAWE</option>
                                        <option province="ACEH" value="API">PIDIE</option>
                                        <option province="ACEH" value="ABM">BENER MERIAH</option>
                                        <option province="ACEH" value="AGL">GAYO LUWES</option>
                                        <option province="ACEH" value="ABI">BIREUN</option>
                                        <option province="ACEH" value="ASU">SUBULUSSALAM</option>
                                        <option province="ACEH" value="AAM">ACEH TIMUR</option>
                                        <option province="ACEH" value="ABA">BANDA ACEH</option>
                                        <option province="ACEH" value="AAD">ACEH BARAT DAYA</option>
                                        <option province="ACEH" value="AAB">ACEH BESAR</option>
                                        <option province="ACEH" value="AAJ">ACEH JAYA</option>
                                        <option province="ACEH" value="AAS">ACEH SELATAN</option>
                                        <option province="ACEH" value="AAI">ACEH SINGKIL</option>
                                        <option province="ACEH" value="AAT">ACEH TAMIANG</option>
                                        <option province="ACEH" value="AAE">ACEH TENGAH</option>
                                        <option province="ACEH" value="ACH">ACEH BARAT</option>
                                        <option province="ACEH" value="AAN">ACEH TENGGARA</option>
                                        <option province="ACEH" value="AAU">ACEH UTARA</option>
                                        <option province="AUSTRALIA" value="AUS">AUSTRALIA</option>
                                        <option province="BALI" value="BNL">NUSA LEMBONGAN</option>
                                        <option province="BALI" value="DPS">DENPASAR</option>
                                        <option province="BALI" value="JBN">BADUNG</option>
                                        <option province="BALI" value="BBA">BANGLI</option>
                                        <option province="BALI" value="BKU">KLUNGKUNG</option>
                                        <option province="BALI" value="BBU">BULELENG</option>
                                        <option province="BALI" value="BGI">GIANYAR</option>
                                        <option province="BALI" value="BJE">JEMBRANA</option>
                                        <option province="BALI" value="BKA">KARANGASEM</option>
                                        <option province="BALI" value="BTA">TABANAN</option>
                                        <option province="BALI" value="BSE">SEMARAPURA</option>
                                        <option province="BANGKA BELITUNG" value="BGK">BANGKA BELITUNG</option>
                                        <option province="BANTEN" value="SRG">SERANG</option>
                                        <option province="BANTEN" value="BTN">TANGERANG</option>
                                        <option province="BANTEN" value="BLE">LEBAK</option>
                                        <option province="BANTEN" value="BAN">ANYER</option>
                                        <option province="BANTEN" value="BCI">CILEGON</option>
                                        <option province="BANTEN" value="TGR">TANGERANG</option>
                                        <option province="BANTEN" value="PDG">PANDEGLANG</option>
                                        <option province="BANTEN" value="BTS">TANGERANG SELATAN</option>
                                        <option province="BENGKULU" value="BBS">BENGKULU SELATAN</option>
                                        <option province="BENGKULU" value="BSL">SELUMA</option>
                                        <option province="BENGKULU" value="BKR">KAUR</option>
                                        <option province="BENGKULU" value="BMM">MUKO MUKO</option>
                                        <option province="BENGKULU" value="BBT">BENGKULU UTARA</option>
                                        <option province="BENGKULU" value="BRL">REJANG LEBONG</option>
                                        <option province="BENGKULU" value="BKE">KEPAHIANG</option>
                                        <option province="BENGKULU" value="BLB">LEBONG</option>
                                        <option province="BENGKULU" value="BBE">BENGKULU TENGAH</option>
                                        <option province="BENGKULU" value="BKL">BENGKULU</option>
                                        <option province="CANADA" value="CND">CANADA</option>
                                        <option province="DAERAH ISTIMEWA YOGYAKARTA" value="DBA">BANTUL</option>
                                        <option province="DAERAH ISTIMEWA YOGYAKARTA" value="DKP">KULON PROGO</option>
                                        <option province="DAERAH ISTIMEWA YOGYAKARTA" value="DYO">YOGYAKARTA</option>
                                        <option province="DAERAH ISTIMEWA YOGYAKARTA" value="DSL">SLEMAN</option>
                                        <option province="DAERAH ISTIMEWA YOGYAKARTA" value="DGK">GUNUNG KIDUL</option>
                                        <option province="DKI JAKARTA" value="JKT">JAKARTA SELATAN</option>
                                        <option province="DKI JAKARTA" value="DJB">JAKARTA BARAT</option>
                                        <option province="DKI JAKARTA" value="DJT">JAKARTA TIMUR</option>
                                        <option province="DKI JAKARTA" value="DJU">JAKARTA UTARA</option>
                                        <option province="DKI JAKARTA" value="DJP">JAKARTA PUSAT</option>
                                        <option province="DKI JAKARTA" value="DKS">KEPULAUAN SERIBU</option>
                                        <option province="GORONTALO" value="GPA">PAHUWATO</option>
                                        <option province="GORONTALO" value="GBB">BONE BOLANGO</option>
                                        <option province="GORONTALO" value="GGO">GORONTALO</option>
                                        <option province="JAMBI" value="JTE">TEBO</option>
                                        <option province="JAMBI" value="JBT">BATANGHARI</option>
                                        <option province="JAMBI" value="JBU">BUNGO</option>
                                        <option province="JAMBI" value="JMJ">MUARO JAMBI</option>
                                        <option province="JAMBI" value="JSA">SAROLANGUN</option>
                                        <option province="JAMBI" value="JBI">JAMBI</option>
                                        <option province="JAMBI" value="JME">MERANGIN</option>
                                        <option province="JAMBI" value="JTB">TANJUNG JABUNG BARAT</option>
                                        <option province="JAMBI" value="JTT">TANJUNG JABUNG TIMUR</option>
                                        <option province="JAMBI" value="JKE">KERINCI</option>
                                        <option province="JAWA BARAT" value="SBG">SUBANG</option>
                                        <option province="JAWA BARAT" value="KNG">KUNINGAN</option>
                                        <option province="JAWA BARAT" value="MJL">MAJALENGKA</option>
                                        <option province="JAWA BARAT" value="BDG">BANDUNG</option>
                                        <option province="JAWA BARAT" value="KRW">KARAWANG</option>
                                        <option province="JAWA BARAT" value="CMH">CIMAHI</option>
                                        <option province="JAWA BARAT" value="BKS">BEKASI</option>
                                        <option province="JAWA BARAT" value="DPK">DEPOK</option>
                                        <option province="JAWA BARAT" value="TSM">TASIKMALAYA</option>
                                        <option province="JAWA BARAT" value="SKB">SUKABUMI</option>
                                        <option province="JAWA BARAT" value="SMD">SUMEDANG</option>
                                        <option province="JAWA BARAT" value="CJR">CIANJUR</option>
                                        <option province="JAWA BARAT" value="JBB">BANDUNG BARAT</option>
                                        <option province="JAWA BARAT" value="JIN">INDRAMAYU</option>
                                        <option province="JAWA BARAT" value="JCA">CIAMIS</option>
                                        <option province="JAWA BARAT" value="JBA">BANJAR</option>
                                        <option province="JAWA BARAT" value="JCI">CIKARANG</option>
                                        <option province="JAWA BARAT" value="BGR">BOGOR</option>
                                        <option province="JAWA BARAT" value="CKP">CIKAMPEK</option>
                                        <option province="JAWA BARAT" value="CRB">CIREBON</option>
                                        <option province="JAWA BARAT" value="JKB">KABUPATEN BANDUNG</option>
                                        <option province="JAWA BARAT" value="PKT">PURWAKARTA</option>
                                        <option province="JAWA BARAT" value="GRT">GARUT</option>
                                        <option province="JAWA BARAT" value="PGN">PANGANDARAN</option>
                                        <option province="JAWA TENGAH" value="SRK">SURAKARTA</option>
                                        <option province="JAWA TENGAH" value="BLR">BLORA</option>
                                        <option province="JAWA TENGAH" value="KDS">BANJARNEGARA</option>
                                        <option province="JAWA TENGAH" value="PWK">PURWOKERTO</option>
                                        <option province="JAWA TENGAH" value="PML">PEMALANG</option>
                                        <option province="JAWA TENGAH" value="WNB">WONOSOBO</option>
                                        <option province="JAWA TENGAH" value="PAT">PATI</option>
                                        <option province="JAWA TENGAH" value="BTG">BATANG</option>
                                        <option province="JAWA TENGAH" value="MGL">MAGELANG</option>
                                        <option province="JAWA TENGAH" value="PWD">PURWODADI</option>
                                        <option province="JAWA TENGAH" value="DMK">DEMAK</option>
                                        <option province="JAWA TENGAH" value="KLT">KLATEN</option>
                                        <option province="JAWA TENGAH" value="KRA">KARANGANYAR</option>
                                        <option province="JAWA TENGAH" value="SKH">SUKOHARJO</option>
                                        <option province="JAWA TENGAH" value="BYL">BOYOLALI</option>
                                        <option province="JAWA TENGAH" value="TGL">TEGAL</option>
                                        <option province="JAWA TENGAH" value="PKL">PEKALONGAN</option>
                                        <option province="JAWA TENGAH" value="SMG">SEMARANG</option>
                                        <option province="JAWA TENGAH" value="SLO">SOLO</option>
                                        <option province="JAWA TENGAH" value="WNG">WONOGIRI</option>
                                        <option province="JAWA TENGAH" value="JBE">BREBES</option>
                                        <option province="JAWA TENGAH" value="JGR">GROBOGAN</option>
                                        <option province="JAWA TENGAH" value="KBN">KEBUMEN</option>
                                        <option province="JAWA TENGAH" value="JPU">PURBALINGGA</option>
                                        <option province="JAWA TENGAH" value="SLT">SALATIGA</option>
                                        <option province="JAWA TENGAH" value="SRA">SRAGEN</option>
                                        <option province="JAWA TENGAH" value="JKK">KABUPATEN KUDUS</option>
                                        <option province="JAWA TENGAH" value="CLP">CILACAP</option>
                                        <option province="JAWA TENGAH" value="PRW">PURWOREJO</option>
                                        <option province="JAWA TENGAH" value="JPR">JEPARA</option>
                                        <option province="JAWA TENGAH" value="RMB">REMBANG</option>
                                        <option province="JAWA TENGAH" value="JBY">BANYUMAS</option>
                                        <option province="JAWA TENGAH" value="KDL">KENDAL</option>
                                        <option province="JAWA TENGAH" value="JAM">AMBARAWA</option>
                                        <option province="JAWA TENGAH" value="TMG">TEMANGGUNG</option>
                                        <option province="JAWA TIMUR" value="BDW">BONDOWOSO</option>
                                        <option province="JAWA TIMUR" value="PSR">PASURUAN</option>
                                        <option province="JAWA TIMUR" value="JSU">SUMENEP</option>
                                        <option province="JAWA TIMUR" value="BJN">BOJONEGORO</option>
                                        <option province="JAWA TIMUR" value="MJK">MOJOKERTO</option>
                                        <option province="JAWA TIMUR" value="JMA">MAGETAN</option>
                                        <option province="JAWA TIMUR" value="SBY">SURABAYA</option>
                                        <option province="JAWA TIMUR" value="MLG">MALANG</option>
                                        <option province="JAWA TIMUR" value="JBK">BANGKALAN</option>
                                        <option province="JAWA TIMUR" value="GRS">GRESIK</option>
                                        <option province="JAWA TIMUR" value="JNG">NGAWI</option>
                                        <option province="JAWA TIMUR" value="JPA">PACITAN</option>
                                        <option province="JAWA TIMUR" value="JPM">PAMEKASAN</option>
                                        <option province="JAWA TIMUR" value="JSM">SAMPANG</option>
                                        <option province="JAWA TIMUR" value="SDA">SIDOARJO</option>
                                        <option province="JAWA TIMUR" value="JTR">TRENGGALEK</option>
                                        <option province="JAWA TIMUR" value="PRL">PROBOLINGGO</option>
                                        <option province="JAWA TIMUR" value="BTU">BATU</option>
                                        <option province="JAWA TIMUR" value="BLT">BLITAR</option>
                                        <option province="JAWA TIMUR" value="MAD">MADIUN</option>
                                        <option province="JAWA TIMUR" value="NGJ">NGANJUK</option>
                                        <option province="JAWA TIMUR" value="KDR">KEDIRI</option>
                                        <option province="JAWA TIMUR" value="JBR">JEMBER</option>
                                        <option province="JAWA TIMUR" value="JMB">JOMBANG</option>
                                        <option province="JAWA TIMUR" value="LMG">LAMONGAN</option>
                                        <option province="JAWA TIMUR" value="LMJ">LUMAJANG</option>
                                        <option province="JAWA TIMUR" value="TLG">TULUNGAGUNG</option>
                                        <option province="JAWA TIMUR" value="MDR">MADURA</option>
                                        <option province="JAWA TIMUR" value="PNR">PONOROGO</option>
                                        <option province="JAWA TIMUR" value="STB">SITUBONDO</option>
                                        <option province="JAWA TIMUR" value="BYW">BANYUWANGI</option>
                                        <option province="JAWA TIMUR" value="TBN">TUBAN</option>
                                        <option province="JAWA TIMUR" value="JBG">JOMBANG</option>
                                        <option province="KALIMANTAN" value="KLM">KALIMANTAN</option>
                                        <option province="KALIMANTAN BARAT" value="KTP">KETAPANG</option>
                                        <option province="KALIMANTAN BARAT" value="PTA">PONTIANAK</option>
                                        <option province="KALIMANTAN BARAT" value="KSI">SINTANG</option>
                                        <option province="KALIMANTAN BARAT" value="KSA">SAMBAS</option>
                                        <option province="KALIMANTAN BARAT" value="KKH">KAPUAS HULU</option>
                                        <option province="KALIMANTAN BARAT" value="KBG">BENGKAYANG</option>
                                        <option province="KALIMANTAN BARAT" value="KBR">KUBU RAYA</option>
                                        <option province="KALIMANTAN BARAT" value="SGG">SANGGAU</option>
                                        <option province="KALIMANTAN BARAT" value="KMM">MEMPAWAH</option>
                                        <option province="KALIMANTAN BARAT" value="KLA">LANDAK</option>
                                        <option province="KALIMANTAN BARAT" value="KSE">SEKADAU</option>
                                        <option province="KALIMANTAN BARAT" value="KME">MELAWI</option>
                                        <option province="KALIMANTAN BARAT" value="SKW">SINGKAWANG</option>
                                        <option province="KALIMANTAN SELATAN" value="KBB">BANJAR BARU</option>
                                        <option province="KALIMANTAN SELATAN" value="KTN">TAPIN</option>
                                        <option province="KALIMANTAN SELATAN" value="KTL">TANAH LAUT</option>
                                        <option province="KALIMANTAN SELATAN" value="KTB">TANAH BUMBU</option>
                                        <option province="KALIMANTAN SELATAN" value="KTA">TABALONG</option>
                                        <option province="KALIMANTAN SELATAN" value="KBJ">BANJAR</option>
                                        <option province="KALIMANTAN SELATAN" value="KHU">HULU SUNGAI UTARA</option>
                                        <option province="KALIMANTAN SELATAN" value="KBL">BALANGAN</option>
                                        <option province="KALIMANTAN SELATAN" value="KHS">HULU SUNGAI SELATAN</option>
                                        <option province="KALIMANTAN SELATAN" value="KHT">HULU SUNGAI TENGAH</option>
                                        <option province="KALIMANTAN SELATAN" value="BJM">BANJARMASIN</option>
                                        <option province="KALIMANTAN SELATAN" value="KKB">KOTA BARU</option>
                                        <option province="KALIMANTAN TENGAH" value="PKR">PALANGKARAYA</option>
                                        <option province="KALIMANTAN TENGAH" value="KSR">SERUYAN</option>
                                        <option province="KALIMANTAN TENGAH" value="KSU">SUKAMARA</option>
                                        <option province="KALIMANTAN TENGAH" value="KWR">BARITO SELATAN</option>
                                        <option province="KALIMANTAN TENGAH" value="KPI">PULAU PISAU</option>
                                        <option province="KALIMANTAN TENGAH" value="KBU">BARITO UTARA</option>
                                        <option province="KALIMANTAN TENGAH" value="KGM">GUNUNG MAS</option>
                                        <option province="KALIMANTAN TENGAH" value="KKA">KAPUAS</option>
                                        <option province="KALIMANTAN TENGAH" value="KMR">MURUNG RAYA</option>
                                        <option province="KALIMANTAN TENGAH" value="KKT">KATINGAN</option>
                                        <option province="KALIMANTAN TENGAH" value="KKI">KOTA WARINGIN TIMUR</option>
                                        <option province="KALIMANTAN TENGAH" value="KLN">LAMANDAU</option>
                                        <option province="KALIMANTAN TENGAH" value="KKR">KOTA WARINGIN BARAT</option>
                                        <option province="KALIMANTAN TENGAH" value="SPT">BARITO TIMUR</option>
                                        <option province="KALIMANTAN TIMUR" value="BOT">BONTANG</option>
                                        <option province="KALIMANTAN TIMUR" value="KPU">PENAJAM PASER UTARA</option>
                                        <option province="KALIMANTAN TIMUR" value="KPA">PASIR</option>
                                        <option province="KALIMANTAN TIMUR" value="KKM">KUTAI TIMUR</option>
                                        <option province="KALIMANTAN TIMUR" value="KKK">KUTAI KARTANEGARA</option>
                                        <option province="KALIMANTAN TIMUR" value="KTI">BERAU</option>
                                        <option province="KALIMANTAN TIMUR" value="BPP">BALIKPAPAN</option>
                                        <option province="KALIMANTAN TIMUR" value="BRU">BERAU</option>
                                        <option province="KALIMANTAN TIMUR" value="KAL">KUTAI BARAT</option>
                                        <option province="KALIMANTAN TIMUR" value="SMA">SAMARINDA</option>
                                        <option province="KALIMANTAN UTARA" value="KAI">BULUNGAN</option>
                                        <option province="KALIMANTAN UTARA" value="KNU">NUNUKAN</option>
                                        <option province="KALIMANTAN UTARA" value="KMA">MALINAU</option>
                                        <option province="KALIMANTAN UTARA" value="KBO">BOALEMA</option>
                                        <option province="KALIMANTAN UTARA" value="KTR">TARAKAN</option>
                                        <option province="KALIMANTAN UTARA" value="KTT">TANA TIDUNG</option>
                                        <option province="KEPULAUAN BANGKA BELITUNG" value="KBT">BANGKA TENGAH</option>
                                        <option province="KEPULAUAN BANGKA BELITUNG" value="KBE">BELITUNG</option>
                                        <option province="KEPULAUAN BANGKA BELITUNG" value="KBA">BANGKA</option>
                                        <option province="KEPULAUAN BANGKA BELITUNG" value="KBS">BANGKA SELATAN</option>
                                        <option province="KEPULAUAN BANGKA BELITUNG" value="KPP">PANGKAL PINANG</option>
                                        <option province="KEPULAUAN RIAU" value="KTG">TANJUNG PINANG</option>
                                        <option province="KEPULAUAN RIAU" value="KAN">ANAMBAS</option>
                                        <option province="KEPULAUAN RIAU" value="KBI">BINTAN</option>
                                        <option province="KEPULAUAN RIAU" value="KNA">NATUNA</option>
                                        <option province="KEPULAUAN RIAU" value="KLI">LINGGA</option>
                                        <option province="KEPULAUAN RIAU" value="KKU">KARIMUN</option>
                                        <option province="KEPULAUAN RIAU" value="KBM">BATAM</option>
                                        <option province="LAMPUNG" value="LTB">TULANG BAWANG</option>
                                        <option province="LAMPUNG" value="LWK">WAY KANAN</option>
                                        <option province="LAMPUNG" value="LPE">PESAWARAN</option>
                                        <option province="LAMPUNG" value="LMS">MESUJI</option>
                                        <option province="LAMPUNG" value="LPR">PRINGSEWU</option>
                                        <option province="LAMPUNG" value="LPB">PESISIR BARAT</option>
                                        <option province="LAMPUNG" value="LTA">TANGGAMUS</option>
                                        <option province="LAMPUNG" value="LME">METRO</option>
                                        <option province="LAMPUNG" value="LLU">LAMPUNG UTARA</option>
                                        <option province="LAMPUNG" value="LLI">LAMPUNG TIMUR</option>
                                        <option province="LAMPUNG" value="LLT">LAMPUNG TENGAH</option>
                                        <option province="LAMPUNG" value="LLS">LAMPUNG SELATAN</option>
                                        <option province="LAMPUNG" value="LLB">LAMPUNG BARAT</option>
                                        <option province="LAMPUNG" value="LBL">BANDAR LAMPUNG</option>
                                        <option province="LOMBOK" value="LMB">LOMBOK</option>
                                        <option province="MALAYSIA" value="MLY">MALAYSIA</option>
                                        <option province="MALUKU" value="MMT">MALUKU TENGAH</option>
                                        <option province="MALUKU" value="MMD">MALUKU BARAT DAYA</option>
                                        <option province="MALUKU" value="AMB">AMBON</option>
                                        <option province="MALUKU" value="MBS">BURU SELATAN</option>
                                        <option province="MALUKU" value="MST">SERAM BAGIAN TIMUR</option>
                                        <option province="MALUKU" value="MBU">BURU</option>
                                        <option province="MALUKU" value="MSB">SERAM BAGIAN BARAT</option>
                                        <option province="MALUKU" value="MME">MALUKU TENGGARA</option>
                                        <option province="MALUKU" value="MMB">MALUKU TENGGARA BARAT</option>
                                        <option province="MALUKU" value="MKA">KEPULAUAN ARU</option>
                                        <option province="MALUKU UTARA" value="MPM">PULAU MOROTAI</option>
                                        <option province="MALUKU UTARA" value="MTE">TERNATE</option>
                                        <option province="MALUKU UTARA" value="MHU">HALMAHERA UTARA</option>
                                        <option province="MALUKU UTARA" value="MHS">HALMAHERA SELATAN</option>
                                        <option province="NUSA TENGGARA BARAT" value="NSU">SUMBAWA</option>
                                        <option province="NUSA TENGGARA BARAT" value="NLT">LOMBOK TIMUR</option>
                                        <option province="NUSA TENGGARA BARAT" value="NLB">LOMBOK BARAT</option>
                                        <option province="NUSA TENGGARA BARAT" value="NSB">SUMBAWA BARAT</option>
                                        <option province="NUSA TENGGARA BARAT" value="NLU">LOMBOK UTARA</option>
                                        <option province="NUSA TENGGARA BARAT" value="NTB">BIMA</option>
                                        <option province="NUSA TENGGARA BARAT" value="NLE">LOMBOK TENGAH</option>
                                        <option province="NUSA TENGGARA BARAT" value="MTR">MATARAM</option>
                                        <option province="NUSA TENGGARA BARAT" value="NDO">DOMPU</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NSI">SIKKA</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NSD">SUMBA BARAT DAYA</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NSE">SUMBA TENGAH</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NML">MALAKA</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NMT">MANGGARAI TIMUR</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NNA">NAGEKEO</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NTT">ALOR</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NBE">BELU</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NEN">ENDE</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NRN">ROTE NDAO</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NST">SUMBA TIMUR</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NTS">TIMOR TENGAH SELATAN</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NNG">NGADA</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NMB">MANGGARAI BARAT</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NMA">MANGGARAI</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NTU">TIMOR TENGAH UTARA</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NFT">FLORES TIMUR</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NLM">LEMBATA</option>
                                        <option province="NUSA TENGGARA TIMUR" value="KPG">KUPANG</option>
                                        <option province="NUSA TENGGARA TIMUR" value="NSA">SUMBA BARAT</option>
                                        <option province="PAPUA" value="PTO">TOLIKARA</option>
                                        <option province="PAPUA" value="PSA">SARMI</option>
                                        <option province="PAPUA" value="PPJ">PUNCAK JAYA</option>
                                        <option province="PAPUA" value="PPB">PEGUNUNGAN BINTANG</option>
                                        <option province="PAPUA" value="PBN">BIAK NUMFOR</option>
                                        <option province="PAPUA" value="PBD">BOVEN DIGOEL</option>
                                        <option province="PAPUA" value="PJW">JAYA WIJAYA</option>
                                        <option province="PAPUA" value="PKE">KEEROM</option>
                                        <option province="PAPUA" value="PMI">MIMIKA</option>
                                        <option province="PAPUA" value="PWA">WAROPEN</option>
                                        <option province="PAPUA" value="PDE">DEIYAI</option>
                                        <option province="PAPUA" value="PIJ">INTAN JAYA</option>
                                        <option province="PAPUA" value="PYL">YALIMO</option>
                                        <option province="PAPUA" value="PPU">PUNCAK</option>
                                        <option province="PAPUA" value="PND">NDUGA</option>
                                        <option province="PAPUA" value="PMR">MAMBERAMO RAYA</option>
                                        <option province="PAPUA" value="PPN">PANIAI</option>
                                        <option province="PAPUA" value="PYA">YAHUKIMO</option>
                                        <option province="PAPUA" value="JYP">JAYAPURA</option>
                                        <option province="PAPUA" value="PLJ">LANNY JAYA</option>
                                        <option province="PAPUA" value="PNA">NABIRE</option>
                                        <option province="PAPUA BARAT" value="PPA">PEGUNUNGAN ARFAK</option>
                                        <option province="PAPUA BARAT" value="PSS">SORONG SELATAN</option>
                                        <option province="PAPUA BARAT" value="PMA">MAYBRAT</option>
                                        <option province="PAPUA BARAT" value="MNW">MANOKWARI</option>
                                        <option province="PAPUA BARAT" value="PFF">FAK - FAK</option>
                                        <option province="PAPUA BARAT" value="PKA">KAIMANA</option>
                                        <option province="PAPUA BARAT" value="PRA">RAJA AMPAT</option>
                                        <option province="PAPUA BARAT" value="PSO">SORONG</option>
                                        <option province="PAPUA BARAT" value="PTM">TAMBRAUW</option>
                                        <option province="PAPUA BARAT" value="PTB">TELUK BINTUNI</option>
                                        <option province="PAPUA BARAT" value="PMS">MANOKWARI SELATAN</option>
                                        <option province="RIAU" value="RKM">KEPULAUAN MERANTI</option>
                                        <option province="RIAU" value="RPE">PELALAWAN</option>
                                        <option province="RIAU" value="RRH">ROKAN HILIR</option>
                                        <option province="RIAU" value="RRU">ROKAN HULU</option>
                                        <option province="RIAU" value="RSI">SIAK</option>
                                        <option province="RIAU" value="RKS">KUANTAN SINGINGI</option>
                                        <option province="RIAU" value="RKA">KAMPAR</option>
                                        <option province="RIAU" value="RIH">INDRAGIRI HULU</option>
                                        <option province="RIAU" value="RIU">INDRAGIRI HILIR</option>
                                        <option province="RIAU" value="TJP">DUMAI</option>
                                        <option province="RIAU" value="BTM">BENGKALIS</option>
                                        <option province="RIAU" value="PKB">PEKANBARU</option>
                                        <option province="SINGAPORE" value="SIN">SINGAPORE</option>
                                        <option province="SULAWESI BARAT" value="SUB">POLEWALI MANDAR</option>
                                        <option province="SULAWESI BARAT" value="SMJ">MAJENE</option>
                                        <option province="SULAWESI BARAT" value="SUI">MAMUJU UTARA</option>
                                        <option province="SULAWESI BARAT" value="SMM">MAMUJU</option>
                                        <option province="SULAWESI BARAT" value="SLW">MAMASA</option>
                                        <option province="SULAWESI BARAT" value="SMH">MAMUJU TENGAH</option>
                                        <option province="SULAWESI SELATAN" value="STA">TAKALAR</option>
                                        <option province="SULAWESI SELATAN" value="STT">TANA TORAJA</option>
                                        <option province="SULAWESI SELATAN" value="SWA">WAJO</option>
                                        <option province="SULAWESI SELATAN" value="SSR">SIDENRENG RAPPANG</option>
                                        <option province="SULAWESI SELATAN" value="STU">TORAJA UTARA</option>
                                        <option province="SULAWESI SELATAN" value="SSO">SOPPENG</option>
                                        <option province="SULAWESI SELATAN" value="MKS">MAKASSAR</option>
                                        <option province="SULAWESI SELATAN" value="SSI">SINJAI</option>
                                        <option province="SULAWESI SELATAN" value="SSE">SELAYAR</option>
                                        <option province="SULAWESI SELATAN" value="SPI">PINRANG</option>
                                        <option province="SULAWESI SELATAN" value="SJA">JANEPONTO</option>
                                        <option province="SULAWESI SELATAN" value="SPA">PANGKAJENE</option>
                                        <option province="SULAWESI SELATAN" value="SGO">GOWA</option>
                                        <option province="SULAWESI SELATAN" value="SEN">ENREKANG</option>
                                        <option province="SULAWESI SELATAN" value="SBU">BULUKUMBA</option>
                                        <option province="SULAWESI SELATAN" value="SBR">BARRU</option>
                                        <option province="SULAWESI SELATAN" value="SBA">BANTAENG</option>
                                        <option province="SULAWESI SELATAN" value="SLU">LUWU</option>
                                        <option province="SULAWESI SELATAN" value="SLI">LUWU TIMUR</option>
                                        <option province="SULAWESI SELATAN" value="SLA">LUWU UTARA</option>
                                        <option province="SULAWESI SELATAN" value="SMR">MAROS</option>
                                        <option province="SULAWESI SELATAN" value="SPL">PALOPO</option>
                                        <option province="SULAWESI SELATAN" value="SPR">PARE-PARE</option>
                                        <option province="SULAWESI SELATAN" value="SBO">BONE</option>
                                        <option province="SULAWESI TENGAH" value="SMU">MOROWALI UTARA</option>
                                        <option province="SULAWESI TENGAH" value="SBT">BANGGAI LAUT</option>
                                        <option province="SULAWESI TENGAH" value="STN">TOJO UNA-UNA</option>
                                        <option province="SULAWESI TENGAH" value="PLU">PALU</option>
                                        <option province="SULAWESI TENGAH" value="SBN">BANGGAI</option>
                                        <option province="SULAWESI TENGAH" value="SBK">BANGGAI KEPULAUAN</option>
                                        <option province="SULAWESI TENGAH" value="SBL">BUOL</option>
                                        <option province="SULAWESI TENGAH" value="SDO">DONGGALA</option>
                                        <option province="SULAWESI TENGAH" value="SMO">MOROWALI</option>
                                        <option province="SULAWESI TENGAH" value="SPM">PARIGI MOUTONG</option>
                                        <option province="SULAWESI TENGAH" value="SPO">POSO</option>
                                        <option province="SULAWESI TENGAH" value="STO">TOLI-TOLI</option>
                                        <option province="SULAWESI TENGAH" value="SSG">SIGI</option>
                                        <option province="SULAWESI TENGGARA" value="KND">KENDARI</option>
                                        <option province="SULAWESI TENGGARA" value="SMB">MUNA BARAT</option>
                                        <option province="SULAWESI TENGGARA" value="SKA">KONAWE UTARA</option>
                                        <option province="SULAWESI TENGGARA" value="SKT">KOLAKA TIMUR</option>
                                        <option province="SULAWESI TENGGARA" value="SBS">BUTON SELATAN</option>
                                        <option province="SULAWESI TENGGARA" value="SKN">KONAWE</option>
                                        <option province="SULAWESI TENGGARA" value="SKU">KOLAKA UTARA</option>
                                        <option province="SULAWESI TENGGARA" value="SBM">BOMBANA</option>
                                        <option province="SULAWESI TENGGARA" value="SMN">MUNA</option>
                                        <option province="SULAWESI TENGGARA" value="SKS">KONAWE SELATAN</option>
                                        <option province="SULAWESI TENGGARA" value="SKO">KOLAKA</option>
                                        <option province="SULAWESI TENGGARA" value="SUL">BUTON</option>
                                        <option province="SULAWESI TENGGARA" value="SB-">BAU-BAU</option>
                                        <option province="SULAWESI TENGGARA" value="SUA">BUTON UTARA</option>
                                        <option province="SULAWESI TENGGARA" value="SWK">WAKATOBI</option>
                                        <option province="SULAWESI UTARA" value="MND">MANADO</option>
                                        <option province="SULAWESI UTARA" value="SUS">KEP. SIAU TAGULANDANG B</option>
                                        <option province="SULAWESI UTARA" value="BIT">BITUNG</option>
                                        <option province="SULAWESI UTARA" value="GRO">BITUNG</option>
                                        <option province="SULAWESI UTARA" value="SBD">BOLAANG MONGONDOW</option>
                                        <option province="SULAWESI UTARA" value="SKL">KEPULAUAN TALAUD</option>
                                        <option province="SULAWESI UTARA" value="SMI">MINAHASA</option>
                                        <option province="SULAWESI UTARA" value="SMS">MINAHASA SELATAN</option>
                                        <option province="SULAWESI UTARA" value="SGU">GORONTALO UTARA</option>
                                        <option province="SULAWESI UTARA" value="SKG">KEPULAUAN SANGIHE</option>
                                        <option province="SULAWESI UTARA" value="SMT">MINAHASA TENGGARA</option>
                                        <option province="SULAWESI UTARA" value="SUW">MINAHASA UTARA</option>
                                        <option province="SULAWESI UTARA" value="STM">TOMOHON</option>
                                        <option province="SULAWESI UTARA" value="SBE">BOLAANG MONGONDOW SELATAN</option>
                                        <option province="SULAWESI UTARA" value="SUE">BOLAANG MONGONDOW UTARA</option>
                                        <option province="SUMATERA BARAT" value="SBI">BUKITTINGGI</option>
                                        <option province="SUMATERA BARAT" value="SAG">AGAM</option>
                                        <option province="SUMATERA BARAT" value="SSJ">SIJUNJUNG</option>
                                        <option province="SUMATERA BARAT" value="SPB">PASAMAN BARAT</option>
                                        <option province="SUMATERA BARAT" value="SDH">DHARMASRAYA</option>
                                        <option province="SUMATERA BARAT" value="STD">TANAH DATAR</option>
                                        <option province="SUMATERA BARAT" value="SPD">PADANG</option>
                                        <option province="SUMATERA BARAT" value="SSL">SOLOK</option>
                                        <option province="SUMATERA BARAT" value="SPE">PSS SELATAN</option>
                                        <option province="SUMATERA BARAT" value="SPY">PAYAKUMBUH</option>
                                        <option province="SUMATERA BARAT" value="SPS">PASAMAN</option>
                                        <option province="SUMATERA BARAT" value="SPP">PADANG PARIAMAN</option>
                                        <option province="SUMATERA BARAT" value="SLk">LIMAPULUH KOTA</option>
                                        <option province="SUMATERA SELATAN" value="SME">MUARA ENIM</option>
                                        <option province="SUMATERA SELATAN" value="SUT">PAGAR ALAM</option>
                                        <option province="SUMATERA SELATAN" value="SUR">PENUKAL ABAB LEMATANG I</option>
                                        <option province="SUMATERA SELATAN" value="SOT">OGAN KOMERING ULU TIMUR</option>
                                        <option province="SUMATERA SELATAN" value="SOS">OGAN KOMERING ULU SELATAN</option>
                                        <option province="SUMATERA SELATAN" value="SOL">OGAN ILIR</option>
                                        <option province="SUMATERA SELATAN" value="SPU">PRABUMULIH</option>
                                        <option province="SUMATERA SELATAN" value="SPN">PALEMBANG</option>
                                        <option province="SUMATERA SELATAN" value="SOU">OGAN KOMERING ULU</option>
                                        <option province="SUMATERA SELATAN" value="SOI">OGAN KOMERING ILIR</option>
                                        <option province="SUMATERA SELATAN" value="SMW">MUSI RAWAS</option>
                                        <option province="SUMATERA SELATAN" value="SLL">LUBUK LINGGAU</option>
                                        <option province="SUMATERA SELATAN" value="SMY">MUSI BANYUASIN</option>
                                        <option province="SUMATERA SELATAN" value="SUM">BANYUASIN</option>
                                        <option province="SUMATERA SELATAN" value="SLH">LAHAT</option>
                                        <option province="SUMATERA UTARA" value="SGS">GUNUNG SITOLI</option>
                                        <option province="SUMATERA UTARA" value="SBB">BATU-BARA</option>
                                        <option province="SUMATERA UTARA" value="SHH">HAMBANG HASUNDUTAN</option>
                                        <option province="SUMATERA UTARA" value="STE">TAPANULI TENGAH</option>
                                        <option province="SUMATERA UTARA" value="SNB">NIAS BARAT</option>
                                        <option province="SUMATERA UTARA" value="SLR">LABUHAN BATU UTARA</option>
                                        <option province="SUMATERA UTARA" value="SNU">NIAS UTARA</option>
                                        <option province="SUMATERA UTARA" value="STR">TAPANULI UTARA</option>
                                        <option province="SUMATERA UTARA" value="STS">TAPANULI SELATAN</option>
                                        <option province="SUMATERA UTARA" value="SLN">LANGKAT</option>
                                        <option province="SUMATERA UTARA" value="SPH">PAKPAK BHARAT</option>
                                        <option province="SUMATERA UTARA" value="SUD">PADANG LAWAS UTARA</option>
                                        <option province="SUMATERA UTARA" value="SSS">SAMOSIR</option>
                                        <option province="SUMATERA UTARA" value="SNI">NIAS</option>
                                        <option province="SUMATERA UTARA" value="SUU">MEDAN</option>
                                        <option province="SUMATERA UTARA" value="SML">MANDAILING NATAL</option>
                                        <option province="SUMATERA UTARA" value="SLB">LABUHAN BATU</option>
                                        <option province="SUMATERA UTARA" value="SKR">KARO</option>
                                        <option province="SUMATERA UTARA" value="SDS">DELI SERDANG</option>
                                        <option province="SUMATERA UTARA" value="SDI">DAIRI</option>
                                        <option province="SUMATERA UTARA" value="SBJ">BINJAI</option>
                                        <option province="SUMATERA UTARA" value="SNS">NIAS SELATAN</option>
                                        <option province="SUMATERA UTARA" value="SUP">PADANG SIDEMPUAN</option>
                                        <option province="SUMATERA UTARA" value="SPW">PADANG LAWAS</option>
                                        <option province="SUMATERA UTARA" value="SUO">TOBA SAMOSIR</option>
                                        <option province="SUMATERA UTARA" value="STI">TEBING TINGGI</option>
                                        <option province="SUMATERA UTARA" value="STL">TANJUNG BALAI</option>
                                        <option province="SUMATERA UTARA" value="SSM">SIMALUNGUN</option>
                                        <option province="SUMATERA UTARA" value="SSA">SIBOLGA</option>
                                        <option province="SUMATERA UTARA" value="SSB">SERDANG BEDAGAI</option>
                                        <option province="SUMATERA UTARA" value="SUN">PEMATANG SIANTAR</option>
                                        <option province="SUMATERA UTARA" value="SAS">ASAHAN</option>
                                        <option province="SUMATRA BARAT" value="PAD">PADANG</option>
                                        <option province="SUMATRA SELATAN" value="PLB">PALEMBANG</option>
                                        <option province="SUMATRA SELATAN" value="LMP">LAMPUNG</option>
                                        <option province="UNITED KINGDOM" value="GSY">GUERNSEY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="search-control-group">
                                    <label class="search-label">Kamar Tidur</label>
                                    <div style="display:flex;width:200px;justify-content: center;">
                                        <label class="radio-container-2">
                                            <input type="radio" name="bedroom_count" value="1">
                                            <div class="checkmark">1+</div>
                                        </label>
                                        <label class="radio-container-2">
                                            <input type="radio" name="bedroom_count" value="2">
                                            <div class="checkmark">2+</div>
                                        </label>
                                        <label class="radio-container-2">
                                            <input type="radio" name="bedroom_count" value="3">
                                            <div class="checkmark">3+</div>
                                        </label>
                                        <label class="radio-container-2">
                                            <input type="radio" name="bedroom_count" value="4">
                                            <div class="checkmark">4+</div>
                                        </label>
                                        <label class="radio-container-2">
                                            <input type="radio" name="bedroom_count" value="5">
                                            <div class="checkmark">5+</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="search-control-group">
                                    <label class="search-label">Kamar Mandi</label>
                                    <div style="display:flex;width:200px;justify-content: center;">
                                        <label class="radio-container-2">
                                            <input type="radio" name="bathroom_count" value="1">
                                            <div class="checkmark">1+</div>
                                        </label>
                                        <label class="radio-container-2">
                                            <input type="radio" name="bathroom_count" value="2">
                                            <div class="checkmark">2+</div>
                                        </label>
                                        <label class="radio-container-2">
                                            <input type="radio" name="bathroom_count" value="3">
                                            <div class="checkmark">3+</div>
                                        </label>
                                        <label class="radio-container-2">
                                            <input type="radio" name="bathroom_count" value="4">
                                            <div class="checkmark">4+</div>
                                        </label>
                                        <label class="radio-container-2">
                                            <input type="radio" name="bathroom_count" value="5">
                                            <div class="checkmark">5+</div>
                                        </label>
                                    </div>
                                </div>
                                <div class="search-control-group">
                                    <label class="search-label">Harga</label>
                                    <select style="width: 70px;" class="search-input" name="pricefrom">
                                        <option value="0" selected="selected">~</option>
                                        <option value="10000000">10 JT</option>
                                        <option value="50000000">50 JT</option>
                                        <option value="100000000">100 JT</option>
                                        <option value="250000000">250 JT</option>
                                        <option value="500000000">500 JT</option>
                                        <option value="1000000000">1 M</option>
                                        <option value="10000000000">10 M</option>
                                        <option value="50000000000">50 M</option>
                                        <option value="100000000000">100 M</option>
                                        <option value="250000000000">250 M</option>
                                        <option value="500000000000">500 M</option>
                                        <option value="1000000000000">1 T</option>
                                    </select>
                                    <span style="margin-left: 10px;margin-right: 10px">to</span>
                                    <select style="width: 70px;" class="search-input" name="priceto">
                                        <option value="0" selected="selected">~</option>
                                        <option value="10000000">10 JT</option>
                                        <option value="50000000">50 JT</option>
                                        <option value="100000000">100 JT</option>
                                        <option value="250000000">250 JT</option>
                                        <option value="500000000">500 JT</option>
                                        <option value="1000000000">1 M</option>
                                        <option value="10000000000">10 M</option>
                                        <option value="50000000000">50 M</option>
                                        <option value="100000000000">100 M</option>
                                        <option value="250000000000">250 M</option>
                                        <option value="500000000000">500 M</option>
                                        <option value="1000000000000">1 T</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        $(".search-province").on("change", function() {
            var selected = $(this).val();
            $(".search-city option").css("display", "none");
            $(".search-city option[province='" + selected + "']").css('display', '');
            $(".search-city").val("");
        });
    });
</script>
@endsection