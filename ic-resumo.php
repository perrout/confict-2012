<?php
if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) { 	die('You are not allowed to call this page directly.'); }
/* Edição de resumos */
function ic_resumo(){
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
	$data = file_reader($info['plugin_fpath']."/resumos_tpl.htm");
	$admTpl = $data['dados'];
	//pegar palavras
	$clausula = '';
	if($_GET['filtro']=='0'){
		
		if($_GET['s']){ // se tiver o campo de busca preenchido
 			$clausula = " where resumo_titulo like '%".$_GET['s']."%' ";
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
		$resumos_all_count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM wp_resumos"));
		$templateVars['{all}'] = $resumos_all_count;
		$url = get_bloginfo('wpurl').'/wp-content/plugins/'.plugin_basename(dirname(__FILE__));		
		$templateVars['{link_imprimir}'] ="
		
		<a href=\"".$url."/ic-imprimir.php?page=ic-resumo-exportar&tipo=doc\" onclick=\"NovaJanela(this.href,'Resumos','100','100','yes');return false\"><img src=\"".$url."/images/icon_word.gif\" border=\"0\"></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href=\"".$url."/ic-imprimir.php?page=ic-resumo-exportar&tipo=xls\" onclick=\"NovaJanela(this.href,'Resumos','100','100','yes');return false\"><img src=\"".$url."/images/icon_excel.gif\" border=\"0\"></a>
		";
		$resultados = $wpdb->get_results( "SELECT * FROM wp_resumos ".$clausula." order by resumo_date desc" );
		foreach($resultados as $res){
			$testeee = strtoupper(strtr($res->resumo_titulo ,"áéíóúâêôãõàèìòùç","ÁÉÍÓÚÂÊÔÃÕÀÈÌÒÙÇ"));
			$sql5 = 'update wp_resumos set resumo_titulo="'.$testeee.'" where ID="'.$res->ID.'"';
			$wpdb->query( $sql5 );			
			$linhas .="
				<tr id=\"post-".$res->ID."\" class=\"alternate author-self status-private iedit\" valign=\"top\">
					<th scope=\"row\" class=\"check-column\"><input type=\"checkbox\" name=\"post[]\" value=\"5\" /></th>
						<td class=\"post-title column-title\"><strong><a class=\"row-title\" href=\"?page=ic-resumo&action=editar_resumo&ID=".$res->ID."\" title=\"Editar &#8220;".$res->resumo_titulo."&#8221;\">".$res->resumo_titulo."</a></strong>
							<div class=\"row-actions\"><span class=\"edit\"><a href=\"?page=ic-resumo&action=editar_resumo&ID=".$res->ID."\" title=\"Editar esse resumo\">Editar</a> | </span><span class=\"trash\"><a class=\"submitdelete\" title=\"Mover este post para a lixeira\" href=\"?page=ic-resumo&action=deletar_resumo&ID=".$res->ID."\" onclick=\"return confirm('Dejesa excluir ".$res->resumo_titulo."?')\">Lixeira</a></span></div>
						</td>
						<td class=\"author column-author\">".$res->resumo_autores."</td>
						<td class=\"categories column-categories\">".$res->resumo_palavras_chaves."</td>
						<td class=\"tags column-tags\">".$res->resumo_instituicao_ensino."</td>
						<td class=\"tags column-tags\">".$res->resumo_area."</td>
						<td class=\"date column-date\">".$res->resumo_forma."</td>
						<td class=\"date column-date\">".$res->resumo_date."</td>
			";
			$linhas.="
						<td class=\"date column-date\"><a href=\"".$url."/ic-imprimir.php?page=ic-resumo&ID=".$res->ID."\" onclick=\"NovaJanela(this.href,'Resumos','700','600','yes');return false\"><img src=\"".$url."/images/icon_pdf.gif\" border=\"0\"></a></td>
				</tr>";	
		}
		$templateVars['{LINHAS}'] = $linhas;
		
		//Substituir variáveis no template		
		$admTpl = strtr($admTpl,$templateVars);
		
		echo $admTpl;
	 	
	}
?>
