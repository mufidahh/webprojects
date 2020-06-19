<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pembelian Tiket Kereta Online</title>
<style>
#luar {
	margin:auto;
	width:1024px;
	}

#judul {
	width:90%;
  margin: -20px -20px 21px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
}
#judul2 {
  margin: -20px -20px 21px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #000;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
}
input[type=button],input[type=reset] {
  padding: 0 18px;
  height: 29px;
  font-size: 12px;
  font-weight: bold;
  color: #527881;
  text-shadow: 0 1px #e3f1f1;
  background: #cde5ef;
  border: 1px solid;
  border-color: #b4ccce #b3c0c8 #9eb9c2;
  border-radius: 16px;
  outline: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  background-image: -webkit-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -moz-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: -o-linear-gradient(top, #edf5f8, #cde5ef);
  background-image: linear-gradient(to bottom, #edf5f8, #cde5ef);
  -webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
}	
input {
  font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
  font-size: 14px;
}
input[type=text],select {
  margin: 5px;
  padding: 0 10px;
  color: #00F;
  background: white;
  border: 1px solid;
  border-color: #c4c4c4 #d1d1d1 #d4d4d4;
  border-radius: 2px;
  outline: 5px solid #eff4f7;
  -moz-outline-radius: 3px;
  -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12);
}
input[type=text]:focus, input[type=password]:focus {
  border-color: #7dc9e2;
  outline-color: #dceefc;
  outline-offset: 0;
  color: #00F;}
textarea.alamat {
font-size: 14px;
font-family: Arial, Tahoma, Helvetica;
border: 0px solid transparent;
outline: none;
border: 5px solid;
border-color: #c4c4c4 #d1d1d1 #d4d4d4;
border-radius: 12px;
-moz-border-radius: 12px;
-webkit-border-radius: 12px;
background:#FFF;
box-shadow: -1px -1px 1px #c4c4c4, 1px 1px 1px #d1d1d1, 1px 1px 10px #d4d4d4;
-moz-box-shadow: -1px -1px 1px #c4c4c4, 1px 1px 1px #c4c4c4, 1px 1px 10px #c4c4c4;
-webkit-box-shadow: -1px -1px 1px #c4c4c4, 2px 1px 1px #c4c4c4, 1px 1px 10px #c4c4c4;
text-shadow: 0px -1px 0px #999;
padding: 5px 5px 2px;
color: #00F;
margin: 15px 5px;
-o-transition: all 1s ease-out;
-moz-transition: all 1s ease-out;
-webkit-transition: all 1s ease-out;
}
textarea.alamat:hover {
border-color: #c4c4c4 #d1d1d1 #d4d4d4;
border-radius: 8px;
-moz-border-radius: 8px;
-webkit-border-radius: 8px;
background: #d4d4d4;
color:#FFF;
text-shadow: 0px 0px 0px;
box-shadow: -1px -1px 1px #00ff00, 1px 1px 1px #00ff00, 1px 1px 20px #00ff00;
-moz-box-shadow: -1px -1px 1px #ff0000, 1px 1px 1px #ff0000, 1px 1px 20px #ff0000;
-webkit-box-shadow: -1px -1px 1px #000000, 1px 1px 1px #000000, 1px 1px 20px #000000;
}
</style>
</head>

<body>
<div id="luar">

<div id="atas">
<center>
<img src="images.jpg" width="225" height="117" />
<h3>RESERVASI TIKET KERETA API ONLINE</h3>
</center>
</div> <!-- tutup div bagian atas (banner) //-->

<div align="center">
  <form id="formku" name="formku">
    <table width="100%" border="0">
      <tr>
        <td colspan="3"><div id="judul">Data Diri Pemesan Tiket</div></td>
        <td width="53">&nbsp;</td>
        <td colspan="5"><div id="judul2">Data Pemesanan</div></td>
        </tr>
      <tr>
        <td width="118">No KTP</td>
        <td width="6"><label for="ktp"></label><strong>:</strong></td>
        <td><input name="ktp" type="text" id="ktp" size="30" /></td>
        <td>&nbsp;</td>
        <td width="108">Stasiun Asal</td>
        <td width="6"><strong>:</strong></td>
        <td colspan="3"><label for="asal"></label>
          <select name="asal" id="asal">
            <option value="Bandung">Bandung</option>
            <option value="Garut">Garut</option>
            <option value="Surabaya">Surabaya</option>
            <option value="Yogya">Yogya</option>
          </select></td>
        </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><strong>:</strong></td>
        <td><input name="nama" type="text" id="nama" size="30" /></td>
        <td>&nbsp;</td>
        <td>Stasiun Tujuan</td>
        <td><strong>:</strong></td>
        <td colspan="3"><select name="tujuan" id="tujuan">
          <option value="Bandung">Bandung</option>
          <option value="Garut">Garut</option>
          <option value="Surabaya">Surabaya</option>
          <option value="Yogya">Yogya</option>
        </select></td>
        </tr>
      <tr>
        <td rowspan="3">Alamat</td>
        <td rowspan="3"><strong>:</strong></td>
        <td rowspan="3"><label for="alamat"></label>
          <textarea class="alamat" name="alamat" id="alamat" cols="35" rows="5"></textarea></td>
        <td rowspan="3">&nbsp;</td>
        <td>Jumlah Beli</td>
        <td><strong>:</strong></td>
        <td width="128">Dewasa        
          <select name="dewasa" id="dewasa">
            <option value="0">0</option>
            <option value="1" selected="selected">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="5">4</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="27">26</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
          </select></td>
        <td width="108">Anak
          <select name="anak" id="anak">
            <option value="0" selected="selected">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="5">4</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="27">26</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
          </select></td>
        <td width="108">Bayi
          <select name="bayi" id="bayi">
            <option value="0" selected="selected">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="5">4</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="27">26</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
          </select></td>
        </tr>
      <tr>
        <td>Nama Kereta</td>
        <td><strong>:</strong></td>
        <td colspan="3"><select name="namakereta" id="namakereta">
          <option value="Argo Sindoro" selected="selected">Argo Sindoro</option>
          <option value="Argo Muria">Argo Muria</option>
          <option value="Bima">Bima</option>
          <option value="Bangunkarta">Bangunkarta</option>
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="2">TTL</td>
        <td rowspan="2"><strong>:</strong></td>
        <td><input name="kota" type="text" id="kota" size="30" /></td>
        <td rowspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td rowspan="2">&nbsp;</td>
        <td colspan="3"><input type="button"  onclick="tekan()" value="Kirim" />
          <strong>|
            <input type="reset" name="Reset" id="button" value="Riset" />
          </strong></td>
        </tr>
      <tr>
        <td><select name="tanggal" id="tanggal">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="5">4</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23" selected="selected">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="27">26</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
          </select>          <select name="bulan" id="bulan">
            <option value="januari">januari</option>
            <option value="februari">februari</option>
            <option value="maret">maret</option>
            <option value="april">april</option>
            <option value="mei" selected="selected">mei</option>
            <option value="juni">juni</option>
            <option value="juli">juli</option>
            <option value="agustus">agustus</option>
            <option value="september">september</option>
            <option value="oktober">oktober</option>
            <option value="november">november</option>
            <option value="desember">desember</option>
            </select>          <select name="tahun" id="tahun">
            <option value="1970">1970</option>
            <option value="1971">1971</option>
            <option value="1972">1972</option>
            <option value="1973">1973</option>
            <option value="1974">1974</option>
            <option value="1975">1975</option>
            <option value="1976">1976</option>
            <option value="1977">1977</option>
            <option value="1978">1978</option>
            <option value="1979">1979</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995" selected="selected">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
          </select></td>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td rowspan="2">Jenis Kelamin</td>
        <td rowspan="2"><strong>:</strong></td>
        <td><input type="radio" name="kelamin" id="radio" value="pria" />
          <label for="radio"></label>
          Pria </td>
        <td rowspan="2">&nbsp;</td>
        <td rowspan="2">&nbsp;</td>
        <td rowspan="2">&nbsp;</td>
        <td colspan="3" rowspan="2">&nbsp;</td>
        </tr>
      <tr>
        <td><input type="radio" name="kelamin" id="radio2" value="wanita" />
Wanita</td>
      </tr>
      <tr>
        <td>No. Telepon</td>
        <td>&nbsp;</td>
        <td><input name="telp" type="text" id="telp" size="30" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        </tr>
    </table>
    <table width="63%" border="0">
      <tr>
        <td colspan="3">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="3"><img src="garis.jpg" width="1000" height="13" /></td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div id="judul2">Informasi Data Diri Dan Pemesanan Tiket Kereta Api</div></td>
      </tr>
      <tr>
        <td width="24%">No KTP</td>
        <td width="1%"><strong>:</strong></td>
        <td><input name="tampil_ktp" type="text" id="tampil_ktp" size="30" /></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td><strong>:</strong></td>
        <td><input name="tampil_nama" type="text" id="tampil_nama" size="30" /></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><strong>:</strong></td>
        <td><textarea class="alamat" name="tampil_alamat" id="tampil_alamat" cols="35" rows="5"></textarea></td>
      </tr>
      <tr>
        <td>Tempat Tanggal Lahir</td>
        <td><strong>:</strong></td>
        <td><input name="tampil_kota" type="text" id="tampil_kota" size="20" />
          -
          <input name="tampil_tanggal" type="text" id="tampil_tanggal" size="2" />
          -
          <input name="tampil_bulan" type="text" id="tampil_bulan" size="6" />
          -
          <input name="tampil_tahun" type="text" id="tampil_tahun" size="6" /></td>
        </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td><strong>:</strong></td>
        <td><input name="jeniskelamin" type="text" id="jeniskelamin" size="30" /></td>
      </tr>
      <tr>
        <td>Nomor Telepon</td>
        <td><strong>:</strong></td>
        <td><input name="tampil_telp" type="text" id="tampil_telp" size="30" /></td>
      </tr>
      <tr>
        <td>perjalanan</td>
        <td><strong>:</strong></td>
        <td>Dari Stasiun
          <input name="tampil_asal" type="text" id="tampil_asal" size="10" />
          Ke stasiun
          <input name="tampil_tujuan" type="text" id="tampil_tujuan" size="10" /></td>
        </tr>
      <tr>
        <td>Jumlah Beli</td>
        <td><strong>:</strong></td>
        <td>Dewasa
          <input name="tampil_dewasa" type="text" id="tampil_dewasa" size="2" />
          Anak
          <input name="tampil_anak" type="text" id="tampil_anak" size="2" />
          Bayi
          <input name="tampil_bayi" type="text" id="tampil_bayi" size="2" /></td>
        </tr>
      <tr>
        <td>Nama Kreta Api</td>
        <td><strong>:</strong></td>
        <td><input name="tampil_namakereta" type="text" id="tampil_namakereta" size="20" /></td>
      </tr>
    </table>
    <script language="javascript">
function tekan ()
{
	var ktpstr = (document.formku.ktp.value);
	var namastr = (document.formku.nama.value);
	var alamatstr = (document.formku.alamat.value);
	var kotastr = (document.formku.kota.value);
	var telpstr = (document.formku.telp.value);
	var tanggalstr = (document.formku.tanggal.value);
	var bulanstr = (document.formku.bulan.value);
	var tahunstr = (document.formku.tahun.value);
	var dewasastr = (document.formku.dewasa.value);
	var anakstr = (document.formku.anak.value);
	var bayistr = (document.formku.bayi.value);
	var namakeretastr = (document.formku.namakereta.value);
	var kelamin =  "Jenis Kelamin belum di pilih";
	
	
	document.formku.tampil_ktp.value = ktpstr;
	document.formku.tampil_nama.value = namastr;
	document.formku.tampil_alamat.value = alamatstr;
	document.formku.tampil_kota.value = kotastr;
	document.formku.tampil_telp.value = telpstr;
	document.formku.tampil_tanggal.value = tanggalstr;
	document.formku.tampil_bulan.value = bulanstr;
	document.formku.tampil_tahun.value = tahunstr;
	
	document.formku.tampil_dewasa.value = dewasastr;
	document.formku.tampil_anak.value = anakstr;
	document.formku.tampil_bayi.value = bayistr;
	document.formku.tampil_namakereta.value = namakeretastr;
	if(formku.radio.checked == true)
	{
		kelamin ="Pria";
	}
	else
	if(formku.radio2.checked == true)
	{
	kelamin="wanita";
	}
	document.formku.jeniskelamin.value = kelamin;
	
	
	var asalstr = (document.formku.asal.value);
	var tujuanstr = (document.formku.tujuan.value);
	if(asalstr !== tujuanstr)
	{
		document.formku.tampil_asal.value = asalstr;
		document.formku.tampil_tujuan.value = tujuanstr;
	}
	else
	{
		alert("Kota Tujuan dan Kota Asal sama, harap cek kembali");
	}
	
	
	


}
</script>
  </form>
</div> <!-- tutup div bagian tengah) //-->


<div id="bawah"></div><!-- tutup div bagian bawah //-->


</div> <!-- tutup div paling luar //-->
</body>
</html>
