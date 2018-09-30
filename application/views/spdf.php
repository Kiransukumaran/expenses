<html><head>
    <title>SPPD PDF</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/2.css">
</head><body>
    <button onclick="javascript:window.print()">Export to PDF</button>
    <form>
        <table>
            <tr>
                <th>PT INDOTRUCK UTAMA
                    <br>

                    <center>SURAT PERINTAH PERJALANAN DINAS ( SPPD )</center>
                    <center> No:
                        <input type="text" value="<?php echo mt_rand(100000,999999); ?>" style="font-size: 11pt" size="5" maxlength="6"> ITU-
                        <input type="text" value="<?php echo $locbr; ?>" style="font-size: 11pt" size="15" maxlength="20">
                        <input type="text" value="<?php echo $form; ?>" style="font-size: 11pt" size="3" maxlength="5">
                        <input type="text" value="<?php echo $month; ?>" style="font-size: 11pt" size="1" maxlength="2">
                        <input type="text" value="<?php echo $year; ?>" style="font-size: 11pt" size="2" maxlength="4">

                    </center>

                </th>

            </tr>

        </table>

        <table>
            <tr>
                <th>

                    Demi Kepentingan Perusahaan ditugaskan kepada:
                    <br> Name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" value="<?php echo $name; ?>" style="font-size: 12pt" size="30" maxlength="50"> Jabatan:
                    <input type="text" value="<?php echo $title; ?>" style="font-size: 12pt" size="15" maxlength="50">
                    <br>
                    <br> Employe ID: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" value="<?php echo $emp; ?>" style="font-size: 12pt" size="5" maxlength="50"> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Rank: &nbsp;
                    <input type="text" value="<?php echo $rank; ?>" style="font-size: 12pt" size="20" maxlength="50">
                    <br>
                    <br> Lokasi: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" value="<?php echo $loc; ?>" style="font-size: 12pt" size="15" maxlength="50"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Bagian:
                    <input type="text" value="<?php echo $dep; ?>" style="font-size: 12pt" size="19" maxlength="50">
                    <br>
                    <br> Tujuan: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" value="<?php echo $desi; ?>" style="font-size: 12pt" size="15" maxlength="50"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Keperluan: &nbsp;
                    <input type="text" value="<?php echo $purp; ?>" style="font-size: 12pt" size="19" maxlength="50">
                    <br>
                    <br> Pengikut: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="text" value="<?php echo $follow; ?>" style="font-size: 12pt" size="15" maxlength="50">
                    <br>
                    <br> Tanggal Berangkat:&nbsp;
                    <input type="text" value="<?php echo $datedep; ?>" style="font-size: 12pt" size="15" maxlength="50"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tangaal Kembali:&nbsp;
                    <input type="text" value="<?php echo $dateret; ?>" style="font-size: 12pt" size="15" maxlength="50">
                    <br>
                    <br> Jenis Angkutan:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value="<?php echo $typetra; ?>" style="font-size: 12pt" size="15" maxlength="50"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Barang yang dibawa:&nbsp;
                    <input type="text" value="<?php echo $lagg; ?>" style="font-size: 12pt" size="15" maxlength="50">

                    <br> Beban Biaya,
                    <br> Baranch/Site:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="text" value="<?php echo $brasit; ?>" style="font-size: 12pt" size="15" maxlength="50"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Warehouse:&nbsp;

                    <input type="text" value="<?php echo $ware; ?>" style="font-size: 12pt" size="15" maxlength="50">

                    <br> Bussines Unit:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="text" value="<?php echo $busi; ?>" style="font-size: 12pt" size="15" maxlength="50"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cost Center:&nbsp;

                    <input type="text" value="<?php echo $pendcas; ?>" style="font-size: 12pt" size="15" maxlength="50">

                    <br> Uang Muka :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <input type="text" value="<?php echo $group1; ?>" style="font-size: 12pt" size="30" maxlength="100" checked>

                    <br>

                    </center>

                </th>

            </tr>

        </table>

        <table>
            <tr>
                <th>Uraian Biaya
                    <br>
                </th>
                <th>Jumlah
                    <br>
                </th>
                <th>Keterangan
                    <br>
                </th>

            </tr>

            <tr>
                <th>BPP
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $bppmoney; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note1; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>
            <tr>
                <th>Lokal
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $local; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note2; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>
            <tr>
                <th>Antar Kota
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $out; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note3; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>
            <tr>
                <th>Pesawat
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $flight; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note4; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>
            <tr>
                <th>Biaya Makan
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $meals; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note5; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>
            <tr>
                <th>Baiya lain-lain
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $cost1; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note6; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>
            <tr>
                <th>Lain-Lain
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $others; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note7; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>
            </tr>
            <tr>
                <th>Jumlah
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $alltotal; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>

            </tr>

            <tr>
                <th><font size="2">Beban Perusahaan</font>
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $comcost; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note8; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>

            <tr>
                <th><font size="2">Beban Customer</font>
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $custcost; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note9; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>
            <tr>
                <th><font size="2">Tiket Pesawat</font>
                    <br>
                </th>
                <th>Rp
                    <input type="text" value="<?php echo $flight1; ?>" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" value="<?php echo $note10; ?>" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>
            <tr>
                <th><font size="2">Jumlah</font>
                    <br>
                </th>
                <th>Rp
                    <input type="text" style="font-size: 12pt" size="10" maxlength="100">
                    <br>
                </th>
                <th>
                    <input type="text" style="font-size: 12pt" size="45" maxlength="100">

                    <br>
                </th>

            </tr>

        </table>

        <table>
            <tr>
                <th>Hormat saya,
                    <br>
                    <br>
                    <br>
                    <br>
                    <input type="text" value="<?php echo $sign; ?>" style="font-size: 12pt" size="19" maxlength="55">
                    <br>
                    <input type="text" value="<?php echo $title1; ?>" style="font-size: 8pt" size="25" maxlength="55">

                </th>
                <th>Disetujui
                    <br>
                    <br>
                    <br>
                    <br>
                    <input type="text" value="<?php echo $sign1; ?>" style="font-size: 12pt" size="19" maxlength="55">
                    <br>
                    <input type="text" value="<?php echo $title2; ?>" style="font-size: 8pt" size="25" maxlength="55">
                </th>
                <th>Diketahui
                    <br>
                    <br>
                    <br>
                    <br>
                    <input type="text" value="<?php echo $sign3; ?>" style="font-size: 12pt" size="19" maxlength="55">
                    <br>
                    <input type="text" value="<?php echo $sign4; ?>" style="font-size: 8pt" size="25" maxlength="55">
                </th>

            </tr>
        </table>
        <form>
        
        <button ><a href="#">
           Email Comming soon
        </a></button>
        <button ><a href="<?php echo base_url(); ?>index.php/email">
            Next
        </a></button>

</body></html>