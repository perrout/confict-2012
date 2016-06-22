<?php
if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) { 	die('You are not allowed to call this page directly.'); }
/* Lista de Incrição */
function ic_minicurso(){
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
	$data = file_reader($info['plugin_fpath']."/minicurso_tpl.htm");
	$admTpl = $data['dados'];
	//pegar palavras
	$clausula = '';
	if($_GET['filtro']=='0'){
		
		if($_GET['s']){ // se tiver o campo de busca preenchido
 			$clausula = " where minicurso_tema like '%".$_GET['s']."%' ";
		}else{
			$clausula = "";
		}
		}else{
			if($_GET['tp']!=""){
				$clausula .= " where " . $_GET['filtro']." like '%".$_GET['tp']."%' ";
			}else{
				$clausula .= "";
			}
		}
//var_dump($_GET);
		$resumos_all_count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM wp_minicursos"));
		$templateVars['{all}'] = $resumos_all_count;
		$resultados = $wpdb->get_results( "SELECT * FROM wp_minicursos ".$clausula." order by minicurso_id asc" );
		$url = get_bloginfo('wpurl').'/wp-content/plugins/'.plugin_basename(dirname(__FILE__));
		foreach($resultados as $res){
			
//			$testeee3 = strtolower($res->minicurso_inscritos);
//			$sql5 = 'update wp_minicursos set minicurso_inscritos="'.$testeee3.'" where minicurso_id="'.$res->minicurso_id.'"';
//			$wpdb->query( $sql5 );
			
			
			if($res->minicurso_inscritos != null) {
				$inscritos = split("\|",$res->minicurso_inscritos);
				$inscritos = ($res->minicurso_vagas - count($inscritos));
			}else{
				$inscritos = $res->minicurso_vagas;
			}
			$linhas .="
			<tr id=\"post-".$res->minicurso_id."\" class=\"alternate author-self status-private iedit\" valign=\"top\">
				<th scope=\"row\" class=\"check-column\"><input type=\"checkbox\" name=\"post[]\" value=\"5\" /></th>
				<td class=\"post-title column-title\"><strong><a class=\"row-title\" href=\"?page=ic-minicurso&action=editar_minicurso&minicurso_id=".$res->minicurso_id."\" title=\"Editar &#8220;".$res->minicurso_id."&#8221;\">".$res->minicurso_tema."</a></strong>
					<div class=\"row-actions\"><span class=\"edit\"><a href=\"?page=ic-minicurso&action=editar_minicurso&minicurso_id=".$res->minicurso_id."\" title=\"Editar esse minicurso\">Editar</a> | </span><span class=\"edit\"><a href=\"?page=ic-minicurso&action=editar_certificado&minicurso_id=".$res->minicurso_id."\" title=\"Certificados para esse minicurso\">Certificados</a> | </span><span class=\"trash\"><a class=\"submitdelete\" title=\"Mover este minicurso para a lixeira\" href=\"?page=ic-minicurso&action=deletar_minicurso&minicurso_id=".$res->minicurso_id."\" onclick=\"return confirm('Dejesa excluir ".$res->minicurso_tema."?')\">Lixeira</a></span></div>
				</td>
				<td class=\"author column-author\"><a href=\"?page=ic-minicurso&action=editar_minicurso&minicurso_id=".$res->minicurso_id."\">".$res->minicurso_local."</a></td>
				<td class=\"categories column-categories\"><a href=\"?page=ic-minicurso&action=editar_minicurso&minicurso_id=".$res->minicurso_id."\">".$res->minicurso_professor."</a></td>
				<td class=\"tags column-tags\">".$res->minicurso_data."</td>
				<td class=\"tags column-tags\">".$inscritos." de ".$res->minicurso_vagas."</td>
	
			";
			
			$linhas.="
				<td class=\"date column-date\"><a href=\"".$url."/ic-imprimir.php?page=ic-minicurso&minicurso-id=".$res->minicurso_id."\" onclick=\"NovaJanela(this.href,'Minicursos','700','600','yes');return false\"><img src=\"".$url."/images/icon_imprimir.gif\" border=\"0\"></a></td>
	</tr>";
		}
		$templateVars['{LINHAS}'] = $linhas;
		
		//Substituir variáveis no template		
		$admTpl = strtr($admTpl,$templateVars);
		
		echo $admTpl;
	 	
	}
?>
