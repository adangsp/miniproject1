<?php
  function hasil(){
    $tanggal= $_POST['tanggal'];
    $namcus = $_POST['namcus'];
    $noId = $_POST['noId'];
    $durasi = $_POST['durasi'];
    $tipe = $_POST['tipe'];
    $deluxe = 850000;
    $superior = 500000;
    $diskon;
    $total;
    error_reporting(0);
   
        //Output program dan Pemanggilan Array
        foreach($namcus as $key => $val){
        ?>
          <table border="0" width="500" cellpadding="1" cellspacing="1" >
      
            <tr>
              <td><?php echo '&nbsp Tanggal Booking';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$tanggal;?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp Nama Customer';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$namcus[$key];?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp No Identitas';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$noId[$key];?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Tipe Kamar';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$tipe;?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp Durasi Penginapan';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$durasi.' Malam';?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Diskon';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td>
                <?php
                //Menentukan Diskon 
                if($tipe){
                  if($durasi == ""){
                      echo "Durasi belum diisi";
                  }elseif($tipe == "Deluxe"){
                    $hasil = $deluxe * $durasi ;
                    $hasil;
                  }elseif($tipe == "Superior"){
                    $hasil = $superior * $durasi;
                    $hasil;
                  }

                  if($hasil > 2000000){
                    $diskon = (20/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbspPotongan diskon 20%";
                  }elseif($hasil > 1500000){
                    $diskon = (10/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbspPotongan diskon 10%";
                  }else{
                    echo "&nbspAnda tidak berhak mendapatkan diskon";
                    }
                }?>
              </td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Total Bayar';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td>
                <?php 
                //Menentukan Total Biaya
                if($tipe){
                  if($durasi == ""){
                      echo "Durasi belum diisi";
                  }elseif($tipe == "1"){
                    $hasil = $deluxe * $durasi ;
                    $hasil;
                  }elseif($tipe == "2"){
                    $hasil = $superior * $durasi;
                    $hasil;
                  }

                  if($hasil > 2000000){
                    $diskon = (20/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbsp".$total;
                  }elseif($hasil > 1500000){
                    $diskon = (10/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbsp".$total;
                  }else{
                    echo "&nbsp".$hasil;
                  }
                }?>
              </td>            
            </tr>
          </table>
            <?php 
          }
        }?>