<?php
if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) { 	die('You are not allowed to call this page directly.'); }
/* Lista de Incrição */
function ic_inscrito(){
	global $wpdb;
	//Predefinidos
	$templateVars['{UPDATED}'] = "";
	$templateVars['{ERROS}'] = "";
	$templateVars['{UPDATED}'] = '<div id="message" class="updated fade"><p><strong>';
	if ($ins){
		$templateVars['{UPDATED}'] .= "Dados atualizados!";
	}else{
		$templateVars['{UPDATED}'] .= "Erro ao atualizar dados!";
	}
	$templateVars['{UPDATED}'] .= "</strong></p></div>";
	
	//Ler arquivo de template usando funções do WP
	$info['plugin_fpath'] = dirname(__FILE__); 
	$data = file_reader($info['plugin_fpath']."/inscrito_tpl.htm");
	$admTpl = $data['dados'];
	//pegar palavras
	$clausula = '';
	if($_GET['filtro']=='0'){
		
		if($_GET['s']){ // se tiver o campo de busca preenchido
 			$clausula = " AND display_name like '%".$_GET['s']."%' ";
		}else{
			$clausula = "";
		}
		}else{
			if($_GET['tp']!=""){
				$clausula .= " AND " . $_GET['filtro']." like '%".$_GET['tp']."%' ";
			}else{
				$clausula .= "";
			}
		}
//var_dump($_GET);
		$resumos_all_count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM wp_users WHERE inscricao_id != ''"));
		$templateVars['{all}'] = $resumos_all_count;
		$resultados = $wpdb->get_results( "SELECT * FROM wp_users WHERE inscricao_id != '' ".$clausula." order by display_name asc" );
		$url = get_bloginfo('wpurl').'/wp-content/plugins/'.plugin_basename(dirname(__FILE__));		
		$templateVars['{link_imprimir}'] = "<a href=\"".$url."/ic-imprimir.php?page=ic-inscrito&filtro=".$_GET['filtro']."&tp=".$_GET['tp']."&s=".$_GET['s']."\" onclick=\"NovaJanela(this.href,'Inscritos','700','600','yes');return false\"><img src=\"".$url."/images/icon_imprimir.gif\" border=\"0\"></a>";
		foreach($resultados as $res){
/*
			$testeee = strtolower($res->user_email);
			$sql5 = 'update wp_users set user_login="'.$testeee.'", user_email="'.$testeee.'" where ID="'.$res->ID.'"';
			$wpdb->query( $sql5 );	
			
			$recebeMinicursos = split("\|",$res->minicursos);
			foreach($recebeMinicursos as $recebeMini) {
				$sqlMini="select * from wp_minicursos where minicurso_id=\"".$recebeMini."\"";
				$inscricaoMinicursos = $wpdb->get_results($sqlMini);
				
				foreach($inscricaoMinicursos as $inscrever) {
					if($inscrever->minicurso_inscritos == null){ $inscricaoNew = $testeee; }
					else { $inscricaoNew = $inscrever->minicurso_inscritos."|".$testeee;}
				
					$atualizaIncritos = "update wp_minicursos set minicurso_inscritos=\"".$inscricaoNew."\" where minicurso_id =\"".$inscrever->minicurso_id."\" ";
					$wpdb->query($atualizaIncritos);
				}		
			}
*/		
			$linhas .='
			<tr id=\'post-'.$res->ID.'\' class=\'alternate author-self status-private iedit\' valign="top">
				<th scope="row" class="check-column"><input type="checkbox" name="ID[]" value="'.$res->ID.'" /></th>
				<td class="post-title column-title"><strong><a class="row-title" href="?page=ic-inscrito&action=editar_inscrito&ID='.$res->ID.'" title="Editar &#8220;'.$res->display_name.'&#8221;">'.$res->display_name.'</a></strong>
					<div class="row-actions"><span class=\'edit\'><a href="?page=ic-inscrito&action=editar_inscrito&ID='.$res->ID.'" title="Editar esse inscrito">Editar</a></span> | 
			';
			if ($res->certificados == null) { $linhas .='<span class=\'edit\'><a href="?page=ic-inscrito&action=update_inscrito_certificado&ID='.$res->ID.'" title="Permitir Certificado">Permitir Certificado</a></span> | ';}	
			else{ $linhas .='<span class=\'trash\'><a href="?page=ic-inscrito&action=deletar_inscrito_certificado&ID='.$res->ID.'" title="Remover Certificado">Remover Certificado</a></span> | ';}
					
			$linhas .="		
					<span class=\"trash\"><a class=\"submitdelete\" title=\"Mover este inscrito para a lixeira\" href=\"?page=ic-inscrito&action=deletar_inscrito&ID=".$res->ID."\" onclick=\"return confirm('Dejesa excluir ".$res->display_name."?')\">Lixeira</a></span></div>
				</td>
				<td class=\"author column-author\">".$res->user_email."</td>
				<td class=\"categories column-categories\">".$res->instituicao_ensino."</td>
				<td class=\"tags column-tags\">".$res->instituicao_divisao."</td>
				<td class=\"tags column-tags\">".$res->instituicao_vinculo."</td>
				<td class=\"date column-date\">".$res->inscricao_id."</td>
				<td class=\"date column-date\">".$res->certificados."</td>
	</tr>";
		}
		
		$templateVars['{LINHAS}'] = $linhas;
		
		//Substituir variáveis no template		
		$admTpl = strtr($admTpl,$templateVars);
		
		echo $admTpl;
	 	
	}
	
	
?>
