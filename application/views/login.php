<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>


<div id="loginbox">
	<div id="title">LOGIN SIMBAKDA</div>
    <div id="isi">
    	<?php echo form_open('welcome/login'); ?>
    	<table width="auto" cellpadding="0" cellspacing="0" >
			<tr>
            	<td rowspan="11" width="300px">
                	<img src="<?php echo base_url();?>public/images/partner2.png" width="200px" height="200px" />
                </td>
                <td width="330px">
             	<?php
                	if(isset($login_info))
					{
			   			echo "<span style='color:red;padding:3px;text-align:center;font-size:10px;'>";
			   			echo $login_info;
			   			echo '</span>';
					}else{
					?> &nbsp; <?php
					}
				?>
                </td>
            </tr>
            <tr>
            	<td><?php echo form_label('USERNAME'); ?>
                </td>
            </tr>
            <tr>
            	<td><?php echo form_input('username',set_value('username')); ?>
                </td>
            </tr>
            <tr>
            	<td><span style="font-size:9px; color:#FF0000;"><?php echo form_error('username'); ?></span>
                </td>
            </tr>
            <tr>
            	<td><?php echo form_label('PASSWORD'); ?>
                </td>
            </tr>
            <tr>
            	<td><?php echo form_password('password',set_value('password')); ?>
                </td>
            </tr>
            <tr>
            	<td><span style="font-size:9px; color:#FF0000;"><?php echo form_error('password'); ?></span>
                </td>
            </tr>
			<tr>
            	<td><?php echo form_label('TAHUN'); ?>
                </td>
            </tr>
            <tr>
            	<td><?php 
					$options = array(
                  		'2005'  => '2005',
                  		'2006'  => '2006',
                  		'2007'  => '2007',
                  		'2008'  => '2008',
                  		'2009'  => '2009',
                  		'2010'  => '2010',
                  		'2011'  => '2011',
                  		'2012'  => '2012',
                  		'2013'  => '2013',
                  		'2014'  => '2014',
                  		'2015'  => '2015',
                  		'2016'  => '2016'
                	);
					echo form_dropdown('ta',$options,'2016','class="select"'); ?>
                </td>
            </tr>
            <tr>
            	<td><span style="font-size:9px; color:#FF0000;"><?php echo form_error('ta'); ?></span>
                </td>
            </tr>
			<tr>
            	<td><?php echo form_submit('submit','Login','class="button red"'); ?>
                </td>
            </tr>
        </table>
      <?php echo form_close(); ?>
    </div>
</div>

<div id="marqlog">
    <marquee scrolldelay="80" ><p style="color:#008000" align="center"><h2>.:Selamat Datang di Portal Sistem Informasi Menejemen Barang dan Kekayaan Daerah Pemerintah Kabupaten Bantaeng:.</h2></p></marquee>
</div>
<div id="teaser2" style="width:250px; height:0; text-align:left; display:scroll;position:fixed; top:30px;left:10px;">
<div id="title">INFO SIMBAKDA/BHP</div>
	<div id="isi">
		<table>			
		<tr>
		<td><font color="red"><i>New.!</i></font> **SIMBAKDA(14/11/2016): Untuk Penginputan Rehab tahun 2016, tolong diinput dikapitalisasi. Terima Kasih. [adm]</td-->
		</tr>	
		<tr>
		<td><hr color="red"></td>
		</tr>	
		<tr>
		<td><font color="red"><i>New.!</i></font> **SIMBAKDA(22/11/2016):Jika Ada Kendala Silahkan Hubungi Admin Melalui WA (085342060477) BB (7D7100C0). Terimaksih. [adm]</td>
		</tr>
		</table-->
	</div>
<!--div id="teaser2" style="width:800px; height:0; text-align:left; display:scroll;position:fixed; top:350px;left:300px;">
<div id="title">INFO SIMBAKDA/SIMPL</div>
	<div id="isi" >
	<div id="isi" >
		<table bgcolor="">
		<tr>
            	<td rowspan="11" width="160px">
                	<img src="<?php echo base_url();?>public/images/icon_inprogress.gif" width="150px" height="150px" />
                </td>
		<td><FONT COLOR="RED"><B>Yth. UNTUK SEMUA PENGGUNA SIMBAKDA WEB/SIMPL WEB DENGAN HORMAT KAMI MEMBERITAHUKAN BAHWA MULAI PUKUL 16.00 WITA SERVER UNTUK SEMENTARA AKAN KAMI MATIKAN.</B></FONT></td>
		<TR><TD><FONT COLOR="RED"><B>MENGINGAT SERVER AKAN ADA PERBAIKAN/PENAMBAHAN KAPASITAS, UNTUK SEMENTARA TRANSAKSI BISA DILANJUT SETELAH PERBAIKAN SERVER SELESAI. ATAS PERHATIANNYA KAMI UCAPKAN TERIMAKASIH. [adm]</B></FONT></TD></TR>
		</tr>
		
		</table><hr>
	</div-->

</div>
