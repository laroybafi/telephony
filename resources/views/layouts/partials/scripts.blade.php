<!-- Libs JS -->
<script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js?1674944402') }}" defer></script>
<script src="{{ asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1674944402') }}" defer></script>
<script src="{{ asset('dist/libs/jsvectormap/dist/maps/world.js?1674944402') }}" defer></script>
<script src="{{ asset('dist/libs/jsvectormap/dist/maps/world-merc.js?1674944402') }}" defer></script>
<!-- Tabler Core -->
<script src="{{ asset('dist/js/tabler.min.js?1674944402') }}" defer></script>
<script src="{{ asset('dist/js/demo.min.js?1674944402') }}" defer></script>
<script>
    const brandDropdown = document.getElementById('brand-dropdown');
    const typeDropdown = document.getElementById('type-dropdown');
    brandDropdown.addEventListener('change', () => {
        const selectedValue = brandDropdown.value;
        typeDropdown.innerHTML = '';
        if (selectedValue === 'Toyota') {
            typeDropdown.innerHTML = `
            <option value="Agya">Agya</option>
            <option value="All New Avanza">All New Avanza</option>
            <option value="All New Inova">All New Inova</option>
            <option value="All New Rush">All New Rush</option>
            <option value="Fortuner">Fortuner</option>
    `;
        } else if (selectedValue === 'Isuzu') {
            typeDropdown.innerHTML = `
            <option value="MUX">MUX</option>
            <option value="Panther">Panther</option>
            <option value="Traga">Traga</option>
            <option value="Bison">Bison</option>
            <option value="Elf">Elf</option>
    `;
        } else if (selectedValue === 'Daihatsu') {
            typeDropdown.innerHTML = `
            <option value="All New Sirion">All New Sirion</option>
            <option value="All New Rush">All New Rush</option>
            <option value="All New Xenia">All New Xenia</option>
            <option value="Ayla">Ayla</option>
            <option value="Grandmax">Grandmax</option>
    `;
        } else if (selectedValue === 'BMW') {
            typeDropdown.innerHTML = `
            <option value="1 Series">1 Series</option>
            <option value="2 Series">2 Series</option>
            <option value="3 Series">3 Series</option>
            <option value="M Series">M Series</option>
    `;
        } else if (selectedValue === 'Peugeot') {
            typeDropdown.innerHTML = `
            <option value="CBU">CBU</option>
            <option value="Expert">Expert</option>
            <option value="Partner">Partner</option>
            <option value="RCZ">RCZ</option>
            <option value="3008 Crossover">3008 Crossover</option>
    `;
        } else if (selectedValue === 'Mitsubishi') {
            typeDropdown.innerHTML = `
            <option value="Colt">Colt</option>
            <option value="Delica">Delica</option>
            <option value="Eclipse">Eclipse</option>
            <option value="Pajero">Pajero</option>
    `;
        } else if (selectedValue === 'Suzuki') {
            typeDropdown.innerHTML = `
            <option value="Aeiro">Aeiro</option>
            <option value="APV">APV</option>
            <option value="Baleno">Baleno</option>
            <option value="Carry">Carry</option>
    `;
        } else if (selectedValue === 'Honda') {
            typeDropdown.innerHTML = `
            <option value="All New Civic">All New Civic</option>
            <option value="Brio">Brio</option>
            <option value="City">City</option>
            <option value="CRV">CRV</option>
            <option value="BRV">BRV</option>
            <option value="HRV">HRV</option>
    `;
        }
    });

</script>
<script>
    const provinceDropdown = document.getElementById('province-dropdown');
    const branchDropdown = document.getElementById('branch-dropdown');
    provinceDropdown.addEventListener('change', () => {
        const selectedValue = provinceDropdown.value;
        branchDropdown.innerHTML = '';
        if (selectedValue === 'DKI Jakarta & Banten') {
            branchDropdown.innerHTML = `
            <option value="KELAPA GADING JAKARTA UTARA">KELAPA GADING JAKARTA UTARA</option>
            <option value="PLUIT JAKARTA UTARA">PLUIT JAKARTA UTARA</option>
            <option value="WTC MANGGA DUA JAKARTA">WTC MANGGA DUA JAKARTA</option>
            <option value="CIDENG JAKARTA PUSAT">CIDENG JAKARTA PUSAT</option>
            <option value="KWITANG JAKARTA PUSAT">KWITANG JAKARTA PUSAT</option>
            <option value="KEBON JERUK JAKARTA BARAT">KEBON JERUK JAKARTA BARAT</option>
            <option value="KALIMALANG JAKARTA TIMUR">KALIMALANG JAKARTA TIMUR</option>
            <option value="FATMAWATI JAKARTA SELATAN">FATMAWATI JAKARTA SELATAN</option>
    `;
        } else if (selectedValue === 'Jawa Barat') {
            branchDropdown.innerHTML = `
            <option value="BOGOR JAWA BARAT">BOGOR JAWA BARAT</option>
            <option value="CIBINONG BOGOR JAWA BARAT">CIBINONG BOGOR JAWA BARAT</option>
            <option value="BANDUNG 3 CIBIRU JAWA BARAT">BANDUNG 3 CIBIRU JAWA BARAT</option>
            <option value="BANDUNG ASTRACENTER JAWA BARAT">BANDUNG ASTRACENTER JAWA BARAT</option>
            <option value="BANDUNG NARIPAN JAWA BARAT">BANDUNG NARIPAN JAWA BARAT</option>
            <option value="CIREBON JAWA BARAT">CIREBON JAWA BARAT</option>
            <option value="KARAWANG JAWA BARAT">KARAWANG JAWA BARAT</option>
            <option value="SUKABUMI JAWA BARAT">SUKABUMI JAWA BARAT</option>
            <option value="TASIKMALAYA JAWA BARAT">TASIKMALAYA JAWA BARAT</option>
    `;
        } else if (selectedValue === 'Jawa Tengah & DIY') {
            branchDropdown.innerHTML = `
            <option value="KUDUS JAWA TENGAH">KUDUS JAWA TENGAH</option>
            <option value="MAGELANG JAWA TENGAH">MAGELANG JAWA TENGAH</option>
            <option value="PURWOKERTO JAWA TENGAH">PURWOKERTO JAWA TENGAH</option>
            <option value="SEMARANG JAWA TENGAH">SEMARANG JAWA TENGAH</option>
            <option value="SOLO JAWA TENGAH">SOLO JAWA TENGAH</option>
            <option value="TEGAL JAWA TENGAH">TEGAL JAWA TENGAH</option>
            <option value="YOGYAKARTA">YOGYAKARTA</option>
    `;
        } else if (selectedValue === 'Jawa Timur, Bali & Sekitarnya') {
            branchDropdown.innerHTML = `
            <option value="GRESIK JAWA TIMUR">GRESIK JAWA TIMUR</option>
            <option value="JEMBER JAWA TIMUR">JEMBER JAWA TIMUR</option>
            <option value="KEDIRI JAWA TIMUR">KEDIRI JAWA TIMUR</option>
            <option value="MALANG JAWA TIMUR">MALANG JAWA TIMUR</option>
            <option value="SURABAYA MERR JAWA TIMUR">SURABAYA MERR JAWA TIMUR</option>
            <option value="SURABAYA SUDIRMAN JAWA TIMUR">SURABAYA SUDIRMAN JAWA TIMUR</option>
            <option value="SURABAYA WARU JAWA TIMUR">SURABAYA WARU JAWA TIMUR</option>
            <option value="DENPASAR BALI">DENPASAR BALI</option>
            <option value="RENON BALI">RENON BALI</option>
            <option value="MATARAM NTB">MATARAM NTB</option>
    `;
        } else if (selectedValue === 'Sumatra dan sekitarnya') {
            branchDropdown.innerHTML = `
            <option value="BANDA ACEH">BANDA ACEH</option>
            <option value="BANDARJAYA TIMUR LAMPUNG">BANDARJAYA TIMUR LAMPUNG</option>
            <option value="BATAM KEPULAUAN RIAU">BATAM KEPULAUAN RIAU</option>
            <option value="DURI RIAU">DURI RIAU</option>
            <option value="PAKANBARU RIAU">PAKANBARU RIAU</option>
            <option value="BENGKULU">BENGKULU</option>
            <option value="BUKIT TINGGI SUMATRA BARAT">BUKIT TINGGI SUMATRA BARAT</option>
            <option value="PADANG SUMATRA BARAT">PADANG SUMATRA BARAT</option>
    `;
        } else if (selectedValue === 'Kalimantan, Sulawesi, Papua & Sekitarnya') {
            branchDropdown.innerHTML = `
            <option value="PONTIANAK KALIMANTAN BARAT">PONTIANAK KALIMANTAN BARAT</option>
            <option value="PALANGKARAYA KALIMANTAN TENGAH">PALANGKARAYA KALIMANTAN TENGAH</option>
            <option value="BALIKPAPAN KALIMANTAN TIMUR">BALIKPAPAN KALIMANTAN TIMUR</option>
            <option value="SAMARINDA KALIMANTAN TIMUR">SAMARINDA KALIMANTAN TIMUR</option>
            <option value="BANJARMASIN KALIMANTAN SELATAN">BANJARMASIN KALIMANTAN SELATAN</option>
            <option value="MANADO SULAWESI UTARA">MANADO SULAWESI UTARA</option>
            <option value="GORONTALO SULAWESI UTARA">GORONTALO SULAWESI UTARA</option>
            <option value="PALU SULAWESI TENGAH">PALU SULAWESI TENGAH</option>
            <option value="MAKASSAR SULAWESI SELATAN">MAKASSAR SULAWESI SELATAN</option>
            <option value="PARE-PARE SULAWESI SELATAN">PARE-PARE SULAWESI SELATAN</option>
    `;
        }
    });

</script>
<script>
    const callResult1Dropdown = document.getElementById('callResult1-dropdown');
    const callResult2Dropdown = document.getElementById('callResult2-dropdown');
    const callResult3Dropdown = document.getElementById('callResult3-dropdown');
    const callResult4Dropdown = document.getElementById('callResult4-dropdown');
    callResult1Dropdown.addEventListener('change', () => {
        const selectedValue = callResult1Dropdown.value;
        callResult2Dropdown.innerHTML = '';
        if (selectedValue === 'Connected') {
            document.getElementById("call_result_selection2").style.display = 'block';
            callResult2Dropdown.innerHTML = `
            <option value="Contacted">Contacted</option>
            <option value="Uncontacted">Uncontacted</option>
    `;
        } else if (selectedValue === 'Unconnected') {
            document.getElementById("call_result_selection2").style.display = 'block';
            callResult2Dropdown.innerHTML = `
            <option value="Voicemail">Voicemail</option>
            <option value="Tidak terdaftar">Tidak terdaftar</option>
            <option value="Di luar jangkauan">Di luar jangkauan</option>
            <option value="Tidak Aktif (Mailbox)">Tidak Aktif (Mailbox)</option>
    `;
        }
    });
    callResult2Dropdown.addEventListener('change', () => {
        const selectedValue = callResult2Dropdown.value;
        callResult3Dropdown.innerHTML = '';
        if (selectedValue === 'Contacted') {
            document.getElementById("call_result_selection3").style.display = 'block';
            callResult3Dropdown.innerHTML = `
            <option value="Tidak Minat">Tidak Minat</option>
            <option value="Warm Leads">Warm Leads</option>
            <option value="">Hot Leads</option>
    `;
        } else if (selectedValue === 'Uncontacted') {
            document.getElementById("call_result_selection3").style.display = 'block';
            callResult3Dropdown.innerHTML = `
            <option value="Tidak diangkat">Tidak diangkat</option>
            <option value="Sibuk">Sibuk</option>
            <option value="Salah sambung">Salah sambung</option>
            <option value="Oper kontrak">Oper kontrak</option>
            <option value="Langsung dimatikan">Langsung dimatikan</option>
    `;
        }
    });
    callResult3Dropdown.addEventListener('change', () => {
        const selectedValue = callResult3Dropdown.value;
        callResult4Dropdown.innerHTML = '';
        if (selectedValue === 'Tidak Minat') {
            document.getElementById("call_result_selection4").style.display = 'block';
            callResult4Dropdown.innerHTML = `
            <option value="Angsuran Tinggi">Angsuran Tinggi</option>
            <option value="Bunga Tinggi">Bunga Tinggi</option>
            <option value="Masih ada kontrak berjalan">Masih ada kontrak berjalan</option>
            <option value="Belum ada kebutuhan">Belum ada kebutuhan</option>
            <option value="Tidak mau dihubungi lagi">Tidak mau dihubungi lagi</option>
            <option value="Keluarga Tidak Setuju">Keluarga Tidak Setuju</option>
            <option value="Tidak bisa dibiayai">Tidak bisa dibiayai</option>
            <option value="Hanya tanya hitungan saja">Hanya tanya hitungan saja</option>
            <option value="Kecewa dengan ACC">Kecewa dengan ACC</option>
            <option value="Keluarga Tidak Setuju">Keluarga Tidak Setuju</option>
            <option value="Proses lama">Proses lama</option>
            <option value="Double follow up">Double follow up</option>
            <option value="Sudah diproses oleh Cabang/TMO lain">Sudah diproses oleh Cabang/TMO lain</option>
    `;
        } else if (selectedValue === 'Warm Leads') {
            document.getElementById("call_result_selection4").style.display = 'block';
            callResult4Dropdown.innerHTML = `
            <option value="M1 - Customer minat dikirim hitungan by WA">M1 - Customer minat dikirim hitungan by WA</option>
            <option value="M2 - Customer minat, sudah bertanya-tanya, ingin diskusi dengan keluarga">M2 - Customer minat, sudah bertanya-tanya, ingin diskusi dengan keluarga</option>
            <option value="M3 - Customer minat, sudah negosiasi & yakin mencoba pengajuan">M3 - Customer minat, sudah negosiasi & yakin mencoba pengajuan</option>
    `;
        }
    });
</script>