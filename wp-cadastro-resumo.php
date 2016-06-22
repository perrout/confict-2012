<?php
/*
Plugin Name: Cadastro de Resumos para Iniciação Científica - Confict 2012
Version: 1.0
Plugin URI:
Author: Marcus Ribeiro Perrout
Author URI: http://www.perrout.com.br
Description: Formulário para cadastro de resumos para Iniciação Científica 2012
*/
session_start();
/* Formulário para Resumo */
function template_formulario($idForm,$data=''){
	  global $current_user;
 	  $content="
		    <div class=\"form-cadastro\">
		    <div id=\"container-form\">
		    <form id=\"resumo\" name=\"resumo\" method=\"post\" action=\"\">
			
				<input type=\"hidden\" name=\"resumo-inscricao-id\" value=\"$current_user->inscricao_id\">
				<input type=\"hidden\" name=\"resumo-user\" value=\"$current_user->display_name\">
				<input type=\"hidden\" name=\"resumo-user-email\" value=\"$current_user->user_email\">
				<input type=\"hidden\" name=\"resumo-instituicao-ensino\" value=\"$current_user->instituicao_ensino\">
				<input type=\"hidden\" name=\"resumo-instituicao-divisao\" value=\"$current_user->instituicao_divisao\">			
			
				<p><strong>Inscrição nº:</strong> $current_user->inscricao_id</p>
				<p><strong>Nome completo:</strong> $current_user->display_name</p>
				<p><strong>E-mail:</strong> $current_user->user_email</p>
				<p><strong>Instituição de ensino:</strong> $current_user->instituicao_ensino ";
				if($current_user->instituicao_divisao != null) { $content.=' - '.$current_user->instituicao_divisao.' ';}
				$content.="
				</p>
				<p><strong>Área:</strong><br>
				<select name=\"resumo-area\" id=\"resumo-area\" width=\"421\" style=\"width: 421px;\">
				
				";
				$content.='<option value="" ';
				if($_POST['resumo-area']=='Selecione') $content.="selected";
				$content.=' >Selecione</option>';
				$content.='<option value="Arquitetura e Planejamento" ';
				if($_POST['resumo-area']=='Arquitetura e Planejamento') $content.="selected";
				$content.=' >Arquitetura e Planejamento</option>';
				$content.='<option value="Biologia" ';
				if($_POST['resumo-area']=='Biologia') $content.="selected";
				$content.=' >Biologia</option>';
				$content.='<option value="Bioquímica" ';
				if($_POST['resumo-area']=='Bioquímica') $content.="selected";
				$content.=' >Bioquímica</option>';
				$content.='<option value="Botânica" ';
				if($_POST['resumo-area']=='Botânica') $content.="selected";
				$content.=' >Botânica</option>';
				$content.='<option value="Ciência da Computação" ';
				if($_POST['resumo-area']=='Ciência da Computação') $content.="selected";
				$content.=' >Ciência da Computação</option>';
				$content.='<option value="Ecologia" ';
				if($_POST['resumo-area']=='Ecologia') $content.="selected";
				$content.=' >Ecologia</option>';
				$content.='<option value="Economia" ';
				if($_POST['resumo-area']=='Economia') $content.="selected";
				$content.=' >Economia</option>';
				$content.='<option value="Educação" ';
				if($_POST['resumo-area']=='Educação') $content.="selected";
				$content.=' >Educação</option>';
				$content.='<option value="Engenharia" ';
				if($_POST['resumo-area']=='Engenharia') $content.="selected";
				$content.=' >Engenharia</option>';
				$content.='<option value="Engenharia Agrícola" ';
				if($_POST['resumo-area']=='Engenharia Agrícola') $content.="selected";
				$content.=' >Engenharia Agrícola</option>';
				$content.='<option value="Engenharia Civil" ';
				if($_POST['resumo-area']=='Engenharia Civil') $content.="selected";
				$content.=' >Engenharia Civil</option>';
				$content.='<option value="Engenharia de Materiais" ';
				if($_POST['resumo-area']=='Engenharia de Materiais') $content.="selected";
				$content.=' >Engenharia de Materiais</option>';
				
				$content.='<option value="Ciências Sociais" ';
				if($_POST['resumo-area']=='Ciências Sociais') $content.="selected";
				$content.=' >Ciências Sociais</option>';
				
				$content.='<option value="Combustível" ';
				if($_POST['resumo-area']=='Combustível') $content.="selected";
				$content.=' >Combustível</option>';
				$content.='<option value="Física" ';
				if($_POST['resumo-area']=='Física') $content.="selected";
				$content.=' >Física</option>';
				$content.='<option value="Fisiologia" ';
				if($_POST['resumo-area']=='Fisiologia') $content.="selected";
				$content.=' >Fisiologia</option>';
				$content.='<option value="Fitotecnia" ';
				if($_POST['resumo-area']=='Fitotecnia') $content.="selected";
				$content.=' >Fitotecnia</option>';
				
				$content.='<option value="Genética" ';
				if($_POST['resumo-area']=='Genética') $content.="selected";
				$content.=' >Genética</option>';
				$content.='<option value="Geografia" ';
				if($_POST['resumo-area']=='Geografia') $content.="selected";
				$content.=' >Geografia</option>';	
									
				$content.='<option value="Geografia e Antropologia" ';
				if($_POST['resumo-area']=='Geografia e Antropologia') $content.="selected";
				$content.=' >Geografia e Antropologia</option>';	
				$content.='<option value="História" ';
				if($_POST['resumo-area']=='História') $content.="selected";
				$content.=' >História</option>';
				$content.='<option value="Imunologia" ';
				if($_POST['resumo-area']=='Imunologia') $content.="selected";
				$content.=' >Imunologia</option>';
				$content.='<option value="Matemática" ';
				if($_POST['resumo-area']=='Matemática') $content.="selected";
				$content.=' >Matemática</option>';
				$content.='<option value="Medicina Veterinária" ';
				if($_POST['resumo-area']=='Medicina Veterinária') $content.="selected";
				$content.=' >Medicina Veterinária</option>';
				$content.='<option value="Microbiologia" ';
				if($_POST['resumo-area']=='Microbiologia') $content.="selected";
				$content.=' >Microbiologia</option>';
				$content.='<option value="Morfologia" ';
				if($_POST['resumo-area']=='Morfologia') $content.="selected";
				$content.=' >Morfologia</option>';
				$content.='<option value="Neurociências e Comportamento" ';
				if($_POST['resumo-area']=='Neurociências e Comportamento') $content.="selected";
				$content.=' >Neurociências e Comportamento</option>';
				$content.='<option value="Parasitologia" ';
				if($_POST['resumo-area']=='Parasitologia') $content.="selected";
				$content.=' >Parasitologia</option>';
				
				$content.='<option value="Psicologia" ';
				if($_POST['resumo-area']=='Psicologia') $content.="selected";
				$content.=' >Psicologia</option>';
				
				$content.='<option value="Química" ';
				if($_POST['resumo-area']=='Química') $content.="selected";
				$content.=' >Química</option>';
				$content.='<option value="Serviço Social" ';
				if($_POST['resumo-area']=='Serviço Social') $content.="selected";
				$content.=' >Serviço Social</option>';				
				$content.='<option value="Sociologia" ';
				if($_POST['resumo-area']=='Sociologia') $content.="selected";
				$content.=' >Sociologia</option>';
				$content.='<option value="Solos" ';
				if($_POST['resumo-area']=='Solos') $content.="selected";
				$content.=' >Solos</option>';
				$content.='<option value="Tecnologia de Alimentos" ';
				if($_POST['resumo-area']=='Tecnologia de Alimentos') $content.="selected";
				$content.=' >Tecnologia de Alimentos</option>';
				$content.='<option value="Zoologia" ';
				if($_POST['resumo-area']=='Zoologia') $content.="selected";
					$content.=' >Zoologia</option>';
				$content.='<option value="Zootecnia" ';
				if($_POST['resumo-area']=='Zootecnia') $content.="selected";
				$content.=' >Zootecnia</option>';
				$content.="
				</select></p>
				";
				$content.="
				<p><strong>Título:</strong><br>			
					<input name=\"resumo-titulo\" type=\"text\" id=\"resumo-titulo\" width=\"421\" style=\"width: 421px;\" maxlength=\"200\" 
					
				";
			
					if(@$_POST['resumo-titulo'] != null and @$_POST['resumo-titulo'] != "Digite o título do resumo") { $content.='value="'.@$_POST['resumo-titulo'].'" '; } 
					else { $content.=" value=\"Digite o título do resumo\" onclick=\"this.value=''\" "; }
				
				$content.="onkeypress=\"contar('resumo-titulo','char_titulo',200)\" onkeypress=\"contar('resumo-titulo','char_titulo',200)\"><br>
					<div id=\"char_titulo\" class=\"qtd_caracteres\">Máximo de 200 caracteres</div>
				</p>
				";
	
				$content.="
				<p><strong>Autores:</strong><br>
					<input name=\"resumo-autores\" type=\"text\" id=\"resumo-autores\" width=\"421\" style=\"width: 421px;\"
				";
					if(@$_POST['resumo-autores'] != null and @$_POST['resumo-autores'] != "Digite os autores") { $content.='value="'.@$_POST['resumo-autores'].'" '; } 
					else { $content.=" value=\"Digite os autores\" onclick=\"this.value=''\"  "; }				
				
				
				$content.="onBlur=\"contarArray('resumo-autores','char_autores',5,'autore(s) inserido(s)')\" /><br>
					<div id=\"char_autores\" class=\"qtd_caracteres\">Máximo de 5 autores separados por vírgula</div>
				</p>
				";
	
				$content.="
				<p><strong>Resumo:</strong><br>
				";	
				
				if(@$_POST['resumo-texto'] != null) { $content.="<textarea name=\"resumo-texto\" id=\"resumo-texto\" style=\"width:575px;height:280px;\" onkeypress=\"contar('resumo-texto','char_resumo',2500)\" onkeyup=\"contar('resumo-texto','char_resumo',2500)\">".@$_POST['resumo-texto']."</textarea>"; } 
				else { $content.="<textarea name=\"resumo-texto\" id=\"resumo-texto\" style=\"width:580px;height:275px;\" onkeypress=\"contar('resumo-texto','char_resumo',2500)\" onkeyup=\"contar('resumo-texto','char_resumo',2500)\"></textarea>"; }
				$content.="	
				<br>
					<div id=\"char_resumo\" class=\"qtd_caracteres\">Máximo de 2500 caracteres</div>
				</p>
				";
	
				$content.="			
				<p><strong>Palavras chave:</strong><br>
					<input name=\"resumo-palavras-chaves\" type=\"text\" id=\"resumo-palavras-chaves\" width=\"421\" style=\"width: 421px;\"
					
				";
					if(@$_POST['resumo-palavras-chaves'] != null and @$_POST['resumo-palavras-chaves'] != "Digite as palavras chaves") { $content.='value="'.@$_POST['resumo-palavras-chaves'].'" '; } 
					else { $content.=" value=\"Digite as palavras chave\" onclick=\"this.value=''\" "; }				
				
				
				$content.="onBlur=\"contarArray('resumo-palavras-chaves','char_palavras_chaves',3,'paralavra(s) inserida(s)')\"><br>
					<div id=\"char_palavras_chaves\" class=\"qtd_caracteres\">Máximo de 3 palavras separadas por vírgula</div>
				</p>
				";
	
				$content.="	
					<p><strong>Forma de apresentação do resumo:</strong><br>
					<input type=\"radio\" name=\"resumo-forma\" value=\"Oral\"
					
				";
				if(@$_POST['resumo-forma'] != null) { $content.=' checked'; } 
				$content.="> Oral &nbsp; &nbsp; 
					<input type=\"radio\" name=\"resumo-forma\" value=\"Banner\"				
				";
				if(@$_POST['resumo-forma'] != null) { $content.=' checked'; } 
				$content.="> Banner &nbsp; &nbsp;
				</p>
			
				<p></p>
				<p style=\"text-align:right;\"><input type=\"submit\" name=\"enviar\" id=\"enviar\" value=\"Enviar\"></p>
		    </form>";
	return $content;
}
function form_cadastro() {
	global $current_user;
	if(@$current_user->ID){
		if($_POST['resumo-inscricao-id'] != null){
			$resultado = valida_formulario();
			if($resultado['status']==true){
				$data = grava_resumo($resultado);
				if($data['status']==true){
					$content="O resumo foi enviado com sucesso e o nº de inscrição do resumo é: ".$current_user->inscricao_id;
				
				}else{
					$msg = $data['error_email_existe'].'<br />';
					$content=$msg;
					$idForm = $current_user->inscricao_id;
					$content.='</br /><br />'. template_formulario($idForm);
			
				}
				
			}else{
				$msg="";
				if($resultado['error_resumo_area']!="") $msg .= $resultado['error_resumo_area'].'<br />';
				if($resultado['error_resumo_titulo']!="") $msg .= $resultado['error_resumo_titulo'].'<br />';
				if($resultado['error_resumo_autores']!="") $msg .= $resultado['error_resumo_autores'].'<br />';
				if($resultado['error_resumo_texto']!="") $msg.=$resultado['error_resumo_texto'].'<br />';
				if($resultado['error_resumo_palavras_chaves']!="") $msg.=$resultado['error_resumo_palavras_chaves'].'<br />';
				if($resultado['error_resumo_forma']!="") $msg.=$resultado['error_resumo_forma'].'<br />';				
				if($resultado['error_resumo_user_email']!="") $msg.=$resultado['error_resumo_user_email'].'<br />';
				$content=$msg;
				$idForm = $current_user->inscricao_id;
				$content .='</br /><br />'. template_formulario($idForm);
				
			}
			
		}else{
			if(existe_resumo($current_user->user_email)==true){
				$content= $current_user->user_nicename.", seu resumo já foi enviado com sucesso e o nº de inscrição do resumo é: ".$current_user->inscricao_id;
			}else{
				$idForm = $current_user->inscricao_id;
				$content = template_formulario($idForm);
			}
		}
		
    }else{
	
	echo "Você precisa estar logado para poder enviar resumo para o Encontro";
	
    }
return $content;
}
function valida_formulario(){
	global $current_user;
	$data['status']=true;
	// valida área
	if($_POST['resumo-area']=='' or $_POST['resumo-area']=='Selecione'){
		$data['status']=false;
		$data['error_resumo_area']='O campo área é obrigatório';
	}else{
		if($data['status']!=false) $data['status']=true;
	}
	// valida se o título existe e se é menor que 150 char
	if($_POST['resumo-titulo']=='' or $_POST['resumo-titulo']=='Digite o título do resumo'){
		$data['status']=false;
		$data['error_resumo_titulo']='O campo título é obrigatório';
	}else{
			if($data['status']!=false) $data['status']=true;
	}
	// verifica se existe o email na base de dados
	if(existe_resumo($_POST['resumo-user-email'])==true){
		$data['error_resumo_user_email'] = $current_user->display_name. ', você só pode enviar um resumo.';
		$data['status']=false;
	}else{
		if($data['status']!=false) $data['status']=true;
	}
	// verifica se existe autores, se houver se possuí no máximo 5 autor
	if($_POST['resumo-autores']=='' or $_POST['resumo-autores']=='Digite os autores'){
	
		$data['error_resumo_autores']='O campo autor é obrigatório';
		$data['status']=false;
		
	}else{
	
		$autores = split(",",$_POST['resumo-autores']);
	
		if(is_array($autores)){
			if(count($autores)>5){
				$data['error_resumo_autores']='O campo autor deve possuir no máximo 5 autores';
				$data['status']=false;
			}else{
				if($data['status']!=false) $data['status_chave']=true;
			}
		}	
	}	
	
	// verifica se resumo está vazio ou e se é menor que 500 char
	if($_POST['resumo-texto']==''){
		$data['status']=false;
		$data['error_resumo_texto']='O campo resumo é obrigatório';
	}else{
			if($data['status']!=false) $data['status']=true;
	}
	
	// verifica se existe palavras_chaves, se houver se possuí no máximo 3 palavras, sendo que cada uma não pode passar de 40 char
	if($_POST['resumo-palavras-chaves']=='' or $_POST['resumo-palavras-chaves']=='Digite as palavras chaves'){
		$data['status']=false;
		$data['error_resumo_palavras_chaves']='O campo palavras chaves é obrigatório';
	
	}else{
		$palavras = split(",",$_POST['resumo-palavras-chaves']);
		if(is_array($palavras)){
			if(count($palavras)<=3){
				for($i=0;$i<count($palavras);$i++){
					if(strlen($palavras[$i])>40){
						if(!$data['status_chave']){
							$data['status']=false;
							$data['error_resumo_palavras_chaves']='O campo palavras chaves deve possuir no máximo 3 palavras com até 40 caracteres cada um';
							if($data['status']!=false) $data['status_chave']=true;
						}
					}
				}
			}else{
				$data['error_resumo_palavras_chaves']='O campo palavras chaves deve possuir no máximo 3 palavras com até 40 caracteres cada um';
				$data['status']=false;
			}
		}else{
			if(strlen($palavras)>40){
				$data['status']=false;
				$data['error_resumo_palavras_chaves']='O campo palavras chaves deve possuir no máximo 3 palavras com até 40 caracteres cada um';
			}
		}
	}
	
	// valida forma
	if($_POST['resumo-forma']==''){
		$data['status']=false;
		$data['error_resumo_forma']='O campo forma é obrigatório';
	}else{
		if($data['status']!=false) $data['status']=true;
	}	
	
	return $data;
}
function existe_resumo($resumo_user_email){
	global $wpdb;
	$sql="select resumo_user_email from wp_resumos where resumo_user_email='".$resumo_user_email."'";
	$resultados = $wpdb->get_results($sql);
	if(@$resultados[0]->resumo_user_email){
		return true;
	}else{
		return false;
	}		
}
function grava_resumo($data){
	global $wpdb;
		// grava usuário inscrito se não existir na base de dados
		$resumo_dia=date('d-m-Y');
		
		$sql = "insert into wp_resumos set ID='".$_POST['resumo-inscricao-id']."', resumo_user='".$_POST['resumo-user']."', resumo_user_email='".$_POST['resumo-user-email']."', resumo_instituicao_ensino='".$_POST['resumo-instituicao-ensino']."', resumo_instituicao_divisao='".$_POST['resumo-instituicao-divisao']."', resumo_area='".$_POST['resumo-area']."', resumo_titulo='".$_POST['resumo-titulo']."', resumo_autores='".$_POST['resumo-autores']."', resumo_texto='".$_POST['resumo-texto']."', resumo_palavras_chaves='".$_POST['resumo-palavras-chaves']."', resumo_forma='".$_POST['resumo-forma']."', resumo_status='publish', resumo_date='".$resumo_dia."'";
		
		$wpdb->query($sql);
		$data['ID'] = $_POST['resumo-inscricao-id'];
		$data['status']=true;
		// envia email para o inscrito
		@compose_and_send_mail_recibo($data);
		return $data;
}
function compose_and_send_mail_recibo($data) {
	global $current_user;
	$to = $current_user->user_email;
	$from = "PIBIC < PIBIC>";
	$msg = "Seu resumo foi cadastrado ".$current_user->displa_name."\n\n";
	$msg = "Seu código de resumo é: ".$current_user->inscricao_id."\n\n";
	$sub="Envio de resumos CONFICT";
	$hdrs = "From: CONFICT <confict@uenf.br>\r\n\\";
	return @wp_mail($to,$sub, $msg, $hdrs);
}
function file_reader($filename) {
    if (file_exists($filename)) {
		$fd = fopen($filename,'r');
		if (!$fd) {
			$data['error'] = 3; // Cannot read file, probably permissions
			$data['status'] = false;
	    }else{
			$data['dados'] = fread($fd, filesize($filename));
		}
	}else{
		$data['error'] = 2; // File doesn't exist
		$data['status'] = false;
    }
    fclose($fd);
    return $data;
}
// funções
function getResumo($ID){
	global $wpdb;
	$sql="select * from wp_resumos where ID='".$ID."'";
	return $resultados = $wpdb->get_results($sql);
}
function getMinicurso($ID){
	global $wpdb;
	$sql="select * from wp_minicursos where minicurso_id='".$ID."'";
	return $resultados = $wpdb->get_results($sql);
}
function getInscrito($ID){
	global $wpdb;
	$sql="select * from wp_users where ID='".$ID."'";
	return $resultados = $wpdb->get_results($sql);
}
function editar_inscrito(){
	switch($_GET['action']){
		case 'editar_inscrito':
			include_once ( dirname (__FILE__) . '/ic-editar-inscrito.php' );
			$inscrito=getInscrito($_GET['ID']);
			template_inscrito('',$inscrito);
		break;
		
		case 'update_inscrito':
			include_once ( dirname (__FILE__) . '/ic-update-inscrito.php' );
			ic_update_inscrito();
		break;	
		case 'update_inscrito_certificado':
			include_once ( dirname (__FILE__) . '/ic-update-inscrito.php' );
			if (is_array($_GET["ID"])){
				foreach ($_GET["ID"] as $quem) {
					ic_update_inscrito_cert($quem);
				}
			}else{
				ic_update_inscrito_cert($_GET["ID"]);
			}
				
			include_once ( dirname (__FILE__) . '/ic-inscrito.php' );
			ic_inscrito();			
		break;			
		
		case 'deletar_inscrito':
			include_once ( dirname (__FILE__) . '/ic-delete-inscrito.php' );
			
			if (is_array($_GET["ID"])){
				foreach ($_GET["ID"] as $quem) {
					$inscrito=getInscrito($quem);
					ic_deletar_inscrito($inscrito);
				}
			}else{
				$inscrito=getInscrito($_GET["ID"]);
				ic_deletar_inscrito($inscrito);
			}
				
			include_once ( dirname (__FILE__) . '/ic-inscrito.php' );
			ic_inscrito();
			
		break;
		
		case 'deletar_inscrito_certificado':
			include_once ( dirname (__FILE__) . '/ic-delete-inscrito.php' );
			if (is_array($_GET["ID"])){
				foreach ($_GET["ID"] as $quem) {
					ic_deletar_inscrito_cert($quem);
				}
			}else{
				ic_deletar_inscrito_cert($_GET["ID"]);
			}
				
			include_once ( dirname (__FILE__) . '/ic-inscrito.php' );
			ic_inscrito();			
		break;	
		
		case 'senha_inscrito':
			include_once ( dirname (__FILE__) . '/ic-senha-inscrito.php' );
			if (is_array($_GET["ID"])){
				foreach ($_GET["ID"] as $quem) {
					$inscrito=getInscrito($quem);
					ic_senha_inscrito($inscrito);
				}
			}else{
				$inscrito=getInscrito($_GET["ID"]);
				ic_senha_inscrito($inscrito);
			}
			include_once ( dirname (__FILE__) . '/ic-inscrito.php' );
			ic_inscrito();
		break;
		
		default:
			include_once ( dirname (__FILE__) . '/ic-inscrito.php' );
			ic_inscrito();
		break;
	}
}
function editar_resumo(){
	switch($_GET['action']){
		case 'editar_resumo':
			include_once ( dirname (__FILE__) . '/ic-editar-resumo.php' );
			$resumos=getResumo($_GET['ID']);
			template_resumos('',$resumos);
		break;
		case 'deletar_resumo':
			include_once ( dirname (__FILE__) . '/ic-delete-resumo.php' );
			ic_deletar_resumo();
		break;
		case 'update_resumo':
			include_once ( dirname (__FILE__) . '/ic-update-resumo.php' );
			ic_update_resumo();
		break;
		
		default:
			include_once ( dirname (__FILE__) . '/ic-resumo.php' );
			ic_resumo();
		break;
		}
	}
	
function editar_minicurso(){
	switch($_GET['action']){
	
		case 'adcionar_minicurso':
			include_once ( dirname (__FILE__) . '/ic-editar-minicurso.php' );
			template_minicursos('','');
		break;	
	
		case 'editar_minicurso':
			include_once ( dirname (__FILE__) . '/ic-editar-minicurso.php' );
			$minicurso=getMinicurso($_GET['minicurso_id']);
			template_minicursos('',$minicurso);
		break;
		case 'editar_certificado':
			include_once ( dirname (__FILE__) . '/ic-editar-certificado.php' );
			$minicurso=getMinicurso($_GET['minicurso_id']);
			ic_certificado($minicurso);
		break;
		
		case 'update_certificado':
			include_once ( dirname (__FILE__) . '/ic-update-certificado.php' );
			
			if (is_array($_GET["inscrito"])){
				foreach ($_GET["inscrito"] as $quem) {
					$minicurso=getMinicurso($_GET['minicurso_id']);
					ic_update_certificado($minicurso, $quem);					
				}
			}else{
				$minicurso=getMinicurso($_GET['minicurso_id']);
				$quem=$_GET["inscrito"];
				ic_update_certificado($minicurso, $quem);
			}
			echo '
				<script language= "JavaScript">
				location.href="?page=ic-minicurso&action=editar_certificado&minicurso_id='.$_GET['minicurso_id'].'"
				</script>
			';		
		break;
		case 'deletar_certificado':
			include_once ( dirname (__FILE__) . '/ic-delete-certificado.php' );
			if (is_array($_GET["inscrito"])){
				foreach ($_GET["inscrito"] as $quem) {
					$minicurso=getMinicurso($_GET['minicurso_id']);
					ic_deletar_certificado($minicurso, $quem);					
				}
			}else{
				$minicurso=getMinicurso($_GET['minicurso_id']);
				$quem=$_GET["inscrito"];
				ic_deletar_certificado($minicurso, $quem);
			}
			echo '
				<script language= "JavaScript">
				location.href="?page=ic-minicurso&action=editar_certificado&minicurso_id='.$_GET['minicurso_id'].'"
				</script>
			';			
		break;		
		
		
		case 'update_minicurso':
			include_once ( dirname (__FILE__) . '/ic-update-minicurso.php' );
			ic_update_minicurso();
		break;		
		case 'deletar_minicurso':
			include_once ( dirname (__FILE__) . '/ic-delete-minicurso.php' );
			ic_deletar_minicurso();
		break;
		
		default:
			include_once ( dirname (__FILE__) . '/ic-minicurso.php' );
			ic_minicurso();
		break;
		}
	}	
function adicionar_menu(){
	add_menu_page('Gerenciamento IC','Ger. IC',10,"ic-inscrito","");
	
	add_submenu_page("ic-inscrito", 'Inscritos', 'Inscritos', 10, "ic-inscrito", 'editar_inscrito');
	add_submenu_page("ic-inscrito", 'Resumos', 'Resumos', 10, "ic-resumo", 'editar_resumo');
	add_submenu_page("ic-inscrito", 'Minicursos', 'Minicursos', 10,"ic-minicurso", 'editar_minicurso');
}
function load_with_api_resumos_ic(){
	$url = get_bloginfo('wpurl').'/wp-content/plugins/'.plugin_basename(dirname(__FILE__));
	wp_register_script( 'ic', $url . '/js/ic_resumos.js', array('jquery'), '1.3.2' );
	wp_enqueue_script( 'ic' );
}
add_shortcode('cadastro', 'form_cadastro');
add_action('admin_menu', 'adicionar_menu');
add_action( 'wp_print_scripts', 'load_with_api_resumos_ic' );
/*********************************************************************************** */
function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
?>