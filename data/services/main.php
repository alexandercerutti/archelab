<?php
	/* Crea voci menu laterale */
	function createMenu($domain){
		$pageindex = [
			/* nome voce			 	=> collegamento */
			'News'						=> 'news'
			, 'Introduzione al corso'	=> 'intro'
			, 'Docenti e orari'			=> 'docenti'
			, 'Modalità d\'esame'		=> 'modesami'
			, 'Materiale Didattico'		=> 'materiale'
			, 'Lezioni'					=> 'lezioni'
			, 'Esami'					=> 'esami'
			, 'Tutorato'				=> 'tutorato'
		];
		$pagekeys = array_keys($pageindex);
		$pg = str_replace($_SERVER['SCRIPT_NAME'], "", explode("/", $_SERVER['REQUEST_URI'])[2]);
			
		echo "<li".(isset($pg) && $pg == $pageindex[$pagekeys[0]] || empty($pg) ? ' class="active"' : "")."><a href=$domain/".$pageindex[$pagekeys[0]].">".$pagekeys[0]."</a></li>";
		for($i=1;$i<sizeof($pagekeys);$i++){
			$p = $pageindex[$pagekeys[$i]];
			echo "<li".(isset($pg) && $pg == $p ? ' class="active"' : "")."><a href=$domain/".$p.">".$pagekeys[$i]."</a></li>";
		}
	}
	
	/* Crea l'indice delle lezioni, sia per lezioni.php che per tutorato.php */
	function indexLesson($module, $file){
		$lezioni = json_decode(file_get_contents("data/lezioni/".$file), true);
		$load_module = $lezioni[$module];
		$lk = array_keys($load_module);
		
		for($i=0; $i<sizeof($lk);$i++){
			$t = $lk[$i];
			$filedate = (isset($load_module[$t]['when']) && !empty($load_module[$t]['when']) ? $load_module[$t]['when'] : "");
			$filedate = new DateTime($filedate);
			$today = new DateTime();
			$comparison = ($today >= $filedate ? true : false);
			
			if(!empty($filedate)){
				$dateControlEnabled = true;
			} else {
				$dateControlEnabled = false;
			}
									
			// solo se oggi è più grande della data del file o se il controllo non è abilitato			
			if($dateControlEnabled && $comparison || !$dateControlEnabled){
				echo '<li><a href="data/lezioni/'.$module.'/'.$load_module[$t]['file'].'">'.$t.'</a>';
				if(isset($load_module[$t]['printfile']) && !empty($load_module[$t]['printfile'])){
					echo "\n".'<a href="data/lezioni/'.$module.'/'.$load_module[$t]['printfile'].'"><i class="print"></i></a>';
				}
				echo '</li>'."\n";
			}
		}
	}
?>