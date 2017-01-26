<?php
		$aksi =isset($_GET['aksi'])?$_GET['aksi']:"";
		
		if($aksi){
			$id =isset($_GET['id'])?$_GET['id']:0;
			
			switch($aksi){
				case 'add':
			if(! empty($_SESSION['tas'][$id])){
				$_SESSION['tas'][$id] +=1;
			}
			else{
				$_SESSION['tas'][$id]=1;
			}
			break;
			case 'up':
			if(! empty($_SESSION['tas'])){
				$jum = isset($_POST['jum'])?$_post['jum']:"";
				$hst = isset($_POST['hst'])?$_POST['hst']:'';
				
				foreach($jum as $key =>$val){
					if($jum[$key] > $hst[$key]){
						alert("<fieldset class='alert'>jumlah buku yang anda minta melebihi batas kami !</fieldset>");
					}
					else{
						$_SESSION['tas'][$key] = $val;
	
					}
				}
			}
			else{
				alert("<fieldset class='alert'>buku tidak ada dikeranjang !</fieldset>");
				}
				break;
			case 'id':
			if(! empty($_SESSION['tas'][$id]));
				unset($_SESSION['tas'][$id]);
		}
			else{
				alert("<fieldset class='alert'>buku tidak ada dikeranjang !</
				fieldset class>");
			}
			break;
		}
		if(! empty($_SESSION['tas'])){
			$tas = $_SESSION['basket'];
		}
	}
?>