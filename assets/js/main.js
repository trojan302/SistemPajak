$("#submit").click(function(event){
  event.preventDefault();
    $(".display").append(' <tr style="text-align: left;"><th>Nama Pegawai</th><th>Nomor SPPD</th><th>Tanggal</th></tr><tr><td><input type="text" id="namaPegawai" name="namaPegawai[]" class="td-input" placeholder="Masukkan Nama Pegawai"required></td><td><input type="text" id="noSPPD" name="noSPPD[]" class="td-input" placeholder="Masukkan Nomor SPPD"required></td><td><input type="text" id="tanggalLakasana" name="tanggalLakasana[]" class="td-input" placeholder="Masukkan Tanggal"required></td></tr> ');
});

$("#submit2").click(function(event){
  event.preventDefault();
    $(".display2").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" name="pajakHotel[]" placeholder="Nama Hotel" required></td><td><input type="text" name="masaPajak[]" placeholder="Masa Pajak"></td><td><input type="text" name="nominalPajak[]" placeholder="Nominal Pajak" required></td>');
});

$("#submit3").click(function(event){
  event.preventDefault();
    $(".display3").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakParkir" name="pajakParkir[]" class="td-input" placeholder="Masukkan Nama Parkir"required></td><td><input type="text" id="pajakParkir" name="pajakParkir[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="pajakParkir" name="pajakParkir[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
});

$("#submit4").click(function(event){
  event.preventDefault();
    $(".display4").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="warungMakan" name="warungMakan[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="warungMakan" name="warungMakan[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="warungMakan" name="warungMakan[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
});

$("#submit5").click(function(event){
  event.preventDefault();
    $(".display5").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakRestoran" name="pajakRestoran[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="pajakRestoran" name="pajakRestoran[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="pajakRestoran" name="pajakRestoran[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
});

$("#submit6").click(function(event){
  event.preventDefault();
    $(".display6").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakReklame" name="pajakReklame[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="pajakReklame" name="pajakReklame[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="pajakReklame" name="pajakReklame[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
});

$("#submit7").click(function(event){
  event.preventDefault();
    $(".display7").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakHiburan" name="pajakHiburan[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="pajakHiburan" name="pajakHiburan[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="pajakHiburan" name="pajakHiburan[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
});

$("#submit8").click(function(event){
  event.preventDefault();
    $(".display8").append(' <tr style="text-align: left;"><th>Nama Pajak</th><th>Masa Pajak</th><th>Nominal Pajak</th></tr><tr><td><input type="text" id="pajakTanah" name="pajakTanah[]" class="td-input" placeholder="Masukkan Nama Warug Makan"required></td><td><input type="text" id="pajakTanah" name="pajakTanah[]" class="td-input" placeholder="Masukkan Masa Pajak"required></td><td><input type="text" id="pajakTanah" name="pajakTanah[]" class="td-input" placeholder="Masukkan Nominal Pajak"required></td></tr> ');
});