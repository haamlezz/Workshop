<?php session_start();?>
<?php require_once 'header.php';?>
<?php require_once 'nav.php';?>

<?php
	include 'function.php';
	check_login();
?>

<script type="text/javascript">
function loadEmployee(){
	var ajaxReq;//ປະກາດໂຕປ່ຽນ ajaxReq ເພື່ອໄວ້ສົ່ງຄຳຮ້ອງຂໍ
	var depid = document.getElementById("depid").value;//ຮັບຄ່າຈາກ textbox ເຊິ່ງມີ id=uses

	//ເອີ້ນໃຊ້ object XMLHttpRequest
	try{
		ajaxReq = new XMLHttpRequest();
	}catch(e){
		//ຖ້າວ່າມີ error
		alert("Web browser Wrong");
	}

	//ສ້າງຟັງຊັ້ນທີ່ຈະເອີ້ນເອົາຄຳຮ້ອງຂໍຈາກ server
	//ໃນນີ້ແມ່ນ onreadystatechange
	ajaxReq.onreadystatechange = function(){

		//ເລກ 4 ໝາຍເຖິງການສົ່ງຄຳຮ້ອງຂໍສຳເລັດ
		if(ajaxReq.readyState == 4){

			//ຮັບເອົາຄ່າຈາກ server ແລ້ວໄປສະແດງໃນບ່ອນທີ່ id=load
			//ຄ່າທີ່ສົ່ງມາຖືກຈັດເກັບໄວ້ໃນ responseText
			document.getElementById("show").innerHTML = ajaxReq.responseText;
		}
	}

	//url ທີ່ຈະສົ່ງຄຳຮ້ອງຂໍ
	url = "employees.php?depid=" + depid;

	//ເປີດການສົ່ງຄຳຮ້ອງຂໍ
	ajaxReq.open("GET", url, true);

	//ສົ່ງຄຳຮ້ອງຂໍ
	ajaxReq.send(null);
}

</script>

			<div class="container">
					<p class="text-success">
						ຍິນດີຕ້ອນຮັບ <b><?php echo $_SESSION['username'];?></b>
					</p>

					<div class="container">
						<div class="row">
							<form form-horizontal>
									<label class="col-lg-2 control-label">ເລືອກພະແນກ:</label>
									<div class="col-lg-8">
										<select name="depid" id="depid" class="form-control" onchange="loadEmployee();">
											<option value="*">
												ເລືອກພະແນກທີ່ຕ້ອງການ
											</option>
											<?php
												//ສັ່ງ query ຂໍ້ມູນ
												$result = $mysqli->query("SELECT * FROM departments");

												//ສັ່ງ fetch_array ໃນ while_loop
												while($row = $result->fetch_array(MYSQLI_ASSOC)){

													//ດຶງຂໍ້ມູນມາສະແດງໃນ  <option> ມີທັງ depid ແລະ depname
													echo '<option value="'.$row['depid'].'">'.
																$row['depname'].
																'</option>';

												}//ຈົບຮອບ while_loop
											?>
										</select>
									</div>
							</form>
						</div><!-- ປິດ row -->

						<div class="row">
							<legend>
								<h1>ຂໍ້ມູນພະນັກງານທັງໝົດ</h1>
							</legend>
							<div id="show">
								<!-- ສ່ວນນີ້ຈະຖືກ AJAX ສົ່ງຄຳສັ່ງຮ້ອງຂໍມາສະແດງ ເຊິ່ງດຶງຂໍ້ມູນຈາກໜ້າ employess.php -->
							</div>

						</div><!-- ປິດ row -->
					</div><!-- ປິດ container-->

			</div>




<?php require_once 'footer.php';?>
