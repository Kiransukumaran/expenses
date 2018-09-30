<html>
<head>
    <title>Html to Multi Page PDF using jsPDF</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/1.css">
    
 </head>
<body>
  <button onclick="javascript:window.print()">Generate PDF</button>

<form>
      <table>
    <tr>
      <th>PT INDOTRUCK UTAMA <br>
        <!-- No:<input type="text" value="<?php echo mt_rand(100000,999999); ?>" style="font-size: 11pt"  size="5" maxlength="5" id="rank"><br> -->
        <center>        
No:<input type="text" value="<?php echo mt_rand(100000,999999); ?>" style="font-size: 11pt"  size="5" maxlength="5" id="rank"><br>PERMOHONAN CUTI</center>

      </th>

    </tr>

</table>

  <table>



       <tr>
        <td> Name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" value="<?php echo $name; ?>" style="font-size: 12pt"  size="30" maxlength="50" >
<br>
<br>
Employe ID: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" value="<?php echo $empid; ?>" style="font-size: 12pt"  size="30" maxlength="50" >
<br>
<br>
DEPT: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" value="<?php echo $dep; ?>" style="font-size: 12pt"  size="30" maxlength="50" >


<br>
<br>
Jenis Cuti: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" value="<?php echo $group; ?>" style="font-size: 12pt"  size="30" maxlength="50" >
<br>
<br>
Tanggal: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" value="<?php echo $date; ?>" style="font-size: 12pt"  size="21" maxlength="50">
      Sampai:
<input type="text" value="<?php echo $dateto; ?>" style="font-size: 12pt"  size="21" maxlength="50" >
<br>
<br>
Untuk Keperluan : &nbsp; &nbsp; &nbsp;
<textarea rows="4" cols="44" style="font-size: 15pt"  maxlength="250"> <?php echo $pur; ?></textarea>


      <br><br>
      Alamat selama Cuti :&nbsp;&nbsp;
<textarea rows="4" cols="44" style="font-size: 15pt"  maxlength="100"><?php echo $add; ?></textarea>


      <br><br>
      Untuk Keperluan : &nbsp; &nbsp; &nbsp;
<textarea rows="5" cols="44" style="font-size: 15pt"  maxlength="250"><?php echo $rec; ?></textarea>
<br>
       Selama: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type="text" value="<?php echo $days; ?>" style="font-size: 12pt"  size="30" maxlength="50" >

       </td>

    </tr>

</table>
<table>



       <tr>
        <td> Hak Cuti:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" style="font-size: 12pt"  size="59" maxlength="55" id="rank">
        <br>
Sisa/Hutang: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
       <input type="text" style="font-size: 12pt"  size="8" maxlength="55" id="rank">
        Diambil:
       <input type="text" style="font-size: 12pt"  size="8" maxlength="55" id="rank">
         Sisa/Hutang:
       <input type="text" style="font-size: 12pt"  size="8" maxlength="55" id="rank">


       </td>


    </tr>

</table>



   <table>
    <tr>
        <th>Hormat saya, <br><br><br><br>
        <input type="text" value="<?php echo $sign1; ?>" style="font-size: 12pt"  size="19" maxlength="55"><br>
        <input type="text" value="<?php echo $title1; ?>" style="font-size: 8pt"  size="25" maxlength="55">


      </th>
      <th>Disetujui   <br>
      <br><br><br>
        <input type="text" value="<?php echo $sign2; ?>" style="font-size: 12pt"  size="19" maxlength="55"><br>
        <input type="text" value="<?php echo $title2; ?>" style="font-size: 8pt"  size="25" maxlength="55">
      </th>
      <th>Diketahui <br>
      <br><br><br>
        <input type="text" value="<?php echo $sign3; ?>" style="font-size: 12pt"  size="19" maxlength="55" ><br>
        <input type="text" value="<?php echo $title3; ?>" style="font-size: 8pt"  size="25" maxlength="55" >
      </th>

    </tr>
</table>
</form>
<button ><a href="<?php echo base_url(); ?>index.php/email">
            Next
        </a></button>
 
</body>
</html>