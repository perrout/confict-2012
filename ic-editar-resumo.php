<?php
if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) { 	die('You are not allowed to call this page directly.'); }
/* Formulário para Resumo */
function template_resumos($idForm,$resumos){
	global $current_user;
	$content='
	
		<div class="form-cadastro">
			<div id="container-form">
				<form id="resumo" name="resumo" method="post" action="?page=ic-resumo&action=update_resumo">
					<input type="hidden" name="resumo-inscricao-id" value="'.$resumos[0]->ID.'">
					<input type="hidden" name="action" id="action" value="update">
					<p><strong>Inscrição nº:</strong> '.$resumos[0]->ID.'</p>
					<p><strong>Nome completo:</strong> '.$resumos[0]->resumo_user.'</p>
					<p><strong>E-mail:</strong> '.$resumos[0]->resumo_user_email.'</p>
					<p><strong>Instituição de ensino:</strong><br> 
					
					<input type="radio" name="instituicao-ensino" id="instituicao-ensino" value="UFF" onChange="ver_opcao_instituicao(this.value)" '; 
					if($resumos[0]->resumo_instituicao_ensino=="UFF") $content.= 'checked'; 
					$content.='> UFF 
					<input type="radio" name="instituicao-ensino" id="instituicao-ensino" value="IFF" onChange="ver_opcao_instituicao(this.value)" '; 
					if($resumos[0]->resumo_instituicao_ensino=="IFF") $content.= 'checked'; 
					$content.='> IFF 
					<input type="radio" name="instituicao-ensino" id="instituicao-ensino" value="UENF" onChange="ver_opcao_instituicao(this.value)" ';
					if($resumos[0]->resumo_instituicao_ensino=="UENF") $content.= 'checked'; 
					$content.='> UENF 
					<input type="radio" name="instituicao-ensino" id="instituicao-ensino" value="OUTRAS" onChange="ver_opcao_instituicao(this.value)" '; 
					if($resumos[0]->resumo_instituicao_ensino!="UFF" and $resumos[0]->resumo_instituicao_ensino!="IFF" and $resumos[0]->resumo_instituicao_ensino!="UENF") $content.= 'checked'; 
					$content.='> OUTRAS <br>
					<input name="instituicao-ensino-outros" type="text" id="instituicao-ensino-outros" onclick="this.value=\'\'";" value="'.$resumos[0]->resumo_instituicao_ensino.'" width="421" style="width: 421px;" maxlength="255" disabled>
					
					<div class="ver_iff" id="ver_iff">
						<input type="radio" name="instituicao-divisao" value="Campus Cabo Frio"';
						if($resumos[0]->resumo_instituicao_divisao=="Campus Cabo Frio") $content.=' checked ';
						$content.='> Campus Cabo Frio &nbsp; &nbsp; 
						
						<input type="radio" name="instituicao-divisao" value="Campus Campos"';
						if($resumos[0]->resumo_instituicao_divisao=="Campus Campos") $content.=' checked ';
						$content.='> Campus Campos &nbsp; &nbsp; 
						<input type="radio" name="instituicao-divisao" value="Campus Macaé"';
						if($resumos[0]->resumo_instituicao_divisao=="Campus Macaé") $content.=' checked ';
						$content.='> Campus Macaé &nbsp; &nbsp; 
						<input type="radio" name="instituicao-divisao" value="Campus Itaperuna"';
						if($resumos[0]->resumo_instituicao_divisao=="Campus Itaperuna") $content.=' checked ';
						$content.='> Campus Itaperuna &nbsp; &nbsp; 
				
						<input type="radio" name="instituicao-divisao" value="Campus Guarus"';
						if($resumos[0]->resumo_instituicao_divisao=="Campus Guarus") $content.=' checked ';
						$content.='> Campus Guarus &nbsp; &nbsp; 
				
						<input type="radio" name="instituicao-divisao" value="Campus Bom Jesus"';
						if($resumos[0]->resumo_instituicao_divisao=="Campus Bom Jesus") $content.=' checked ';
						$content.='> Campus Bom Jesus 
					</div>
					<div class="ver_uenf" id="ver_uenf">
						<input type="radio" name="instituicao-divisao" value="Bolsa Pibic-UENF"';
						if($resumos[0]->resumo_instituicao_divisao=="Bolsa Pibic-UENF") $content.=' checked ';
						$content.='> Bolsa Pibic-UENF &nbsp; &nbsp; 
						
						<input type="radio" name="instituicao-divisao" value="Bolsa IC-Outros"';
						if($resumos[0]->resumo_instituicao_divisao=="Bolsa IC-Outros") $content.=' checked ';
						$content.='> Bolsa IC-Outros
					</div>
					</p>	
					<p><strong>Área:</strong><br>
					<select name="resumo-area" id="resumo-area" width="421" style="width: 421px;">';
						$content.='<option value="" ';
						if($resumos[0]->resumo_area=='Selecione') $content.="selected";
						$content.=' >Selecione</option>';
						$content.='<option value="Arquitetura e Planejamento" ';
						if($resumos[0]->resumo_area=='Arquitetura e Planejamento') $content.="selected";
						$content.=' >Arquitetura e Planejamento</option>';
						$content.='<option value="Biologia" ';
						if($resumos[0]->resumo_area=='Biologia') $content.="selected";
						$content.=' >Biologia</option>';
						$content.='<option value="Bioquímica" ';
						if($resumos[0]->resumo_area=='Bioquímica') $content.="selected";
						$content.=' >Bioquímica</option>';
						$content.='<option value="Botânica" ';
						if($resumos[0]->resumo_area=='Botânica') $content.="selected";
						$content.=' >Botânica</option>';
						$content.='<option value="Ciência da Computação" ';
						if($resumos[0]->resumo_area=='Ciência da Computação') $content.="selected";
						$content.=' >Ciência da Computação</option>';
						$content.='<option value="Ecologia" ';
						if($resumos[0]->resumo_area=='Ecologia') $content.="selected";
						$content.=' >Ecologia</option>';
						$content.='<option value="Economia" ';
						if($resumos[0]->resumo_area=='Economia') $content.="selected";
						$content.=' >Economia</option>';
						$content.='<option value="Educação" ';
						if($resumos[0]->resumo_area=='Educação') $content.="selected";
						$content.=' >Educação</option>';
						$content.='<option value="Engenharia" ';
						if($resumos[0]->resumo_area=='Engenharia') $content.="selected";
						$content.=' >Engenharia</option>';
						$content.='<option value="Engenharia Agrícola" ';
						if($resumos[0]->resumo_area=='Engenharia Agrícola') $content.="selected";
						$content.=' >Engenharia Agrícola</option>';
						$content.='<option value="Engenharia Civil" ';
						if($resumos[0]->resumo_area=='Engenharia Civil') $content.="selected";
						$content.=' >Engenharia Civil</option>';
						$content.='<option value="Engenharia de Materiais" ';
						if($resumos[0]->resumo_area=='Engenharia de Materiais') $content.="selected";
						$content.=' >Engenharia de Materiais</option>';
						$content.='<option value="Ciências Sociais" ';
						if($resumos[0]->resumo_area=='Ciências Sociais') $content.="selected";
						$content.=' >Ciências Sociais</option>';
						$content.='<option value="Combustível" ';
						if($resumos[0]->resumo_area=='Combustível') $content.="selected";
						$content.=' >Combustível</option>';
						$content.='<option value="Física" ';
						if($resumos[0]->resumo_area=='Física') $content.="selected";
						$content.=' >Física</option>';
						$content.='<option value="Fisiologia" ';
						if($resumos[0]->resumo_area=='Fisiologia') $content.="selected";
						$content.=' >Fisiologia</option>';
						$content.='<option value="Fitotecnia" ';
						if($resumos[0]->resumo_area=='Fitotecnia') $content.="selected";
						$content.=' >Fitotecnia</option>';
						$content.='<option value="Genética" ';
						if($resumos[0]->resumo_area=='Genética') $content.="selected";
						$content.=' >Genética</option>';
						$content.='<option value="Geografia" ';
						if($resumos[0]->resumo_area=='Geografia') $content.="selected";
						$content.=' >Geografia</option>';	
						$content.='<option value="Geografia e Antropologia" ';
						if($resumos[0]->resumo_area=='Geografia e Antropologia') $content.="selected";
						$content.=' >Geografia e Antropologia</option>';	
						$content.='<option value="História" ';
						if($resumos[0]->resumo_area=='História') $content.="selected";
						$content.=' >História</option>';
						$content.='<option value="Imunologia" ';
						if($resumos[0]->resumo_area=='Imunologia') $content.="selected";
						$content.=' >Imunologia</option>';
						$content.='<option value="Matemática" ';
						if($resumos[0]->resumo_area=='Matemática') $content.="selected";
						$content.=' >Matemática</option>';
						$content.='<option value="Medicina Veterinária" ';
						if($resumos[0]->resumo_area=='Medicina Veterinária') $content.="selected";
						$content.=' >Medicina Veterinária</option>';
						$content.='<option value="Microbiologia" ';
						if($resumos[0]->resumo_area=='Microbiologia') $content.="selected";
						$content.=' >Microbiologia</option>';
						$content.='<option value="Morfologia" ';
						if($resumos[0]->resumo_area=='Morfologia') $content.="selected";
						$content.=' >Morfologia</option>';
						$content.='<option value="Neurociências e Comportamento" ';
						if($resumos[0]->resumo_area=='Neurociências e Comportamento') $content.="selected";
						$content.=' >Neurociências e Comportamento</option>';
						$content.='<option value="Parasitologia" ';
						if($resumos[0]->resumo_area=='Parasitologia') $content.="selected";
						$content.=' >Parasitologia</option>';
						$content.='<option value="Psicologia" ';
						if($resumos[0]->resumo_area=='Psicologia') $content.="selected";
						$content.=' >Psicologia</option>';
						$content.='<option value="Química" ';
						if($resumos[0]->resumo_area=='Química') $content.="selected";
						$content.=' >Química</option>';
						$content.='<option value="Serviço Social" ';
						if($resumos[0]->resumo_area=='Serviço Social') $content.="selected";
						$content.=' >Serviço Social</option>';				
						$content.='<option value="Sociologia" ';
						if($resumos[0]->resumo_area=='Sociologia') $content.="selected";
						$content.=' >Sociologia</option>';
						$content.='<option value="Solos" ';
						if($resumos[0]->resumo_area=='Solos') $content.="selected";
						$content.=' >Solos</option>';
						$content.='<option value="Tecnologia de Alimentos" ';
						if($resumos[0]->resumo_area=='Tecnologia de Alimentos') $content.="selected";
						$content.=' >Tecnologia de Alimentos</option>';
						$content.='<option value="Zoologia" ';
						if($resumos[0]->resumo_area=='Zoologia') $content.="selected";
						$content.=' >Zoologia</option>';
						$content.='<option value="Zootecnia" ';
						if($resumos[0]->resumo_area=='Zootecnia') $content.="selected";
						$content.=' >Zootecnia</option>';
					$content.='</select></p>
					
					<p><strong>Titulo:</strong><br>
					<input name="resumo-titulo" type="text" id="resumo-titulo" width="421" style="width: 421px;"  maxlength="200" value="'.@$resumos[0]->resumo_titulo.'" ';
					$content.=" onkeypress=\"contar('resumo-titulo','char_titulo',200)\" onkeyup=\"contar('resumo-titulo','char_titulo',200)\" /><div id=\"char_titulo\" class=\"qtd_caracteres\">Máximo de 200 caracteres</div>
					</p>";
					$content.='
					<p><strong>Autores:</strong><br>
					<input name="resumo-autores" type="text" id="resumo-autores" width="421" style="width: 421px;" " value="'.@$resumos[0]->resumo_autores.'" ';
					$content.=" onBlur=\"contarArray('resumo-autores','char_autores',5,'autore(s) inserido(s)')\" /><br /><div id=\"char_autores\" class=\"qtd_caracteres\">Máximo de 5 autores separados por vírgula</div>";
					$content.='
					</p>
					<p><strong>Resumo:</strong><br>';
					$content.="
					<textarea name=\"resumo-texto\" id=\"resumo-texto\" style=\"width:580px;height:275px;\" onkeypress=\"contar('resumo-texto','char_resumo',2500)\" onkeyup=\"contar('resumo-texto','char_resumo',2500)\">";
					$content.=@$resumos[0]->resumo_texto.'</textarea><br /><div id="char_resumo" class="qtd_caracteres">Máximo de 2500 caracteres</div>
					</p>
					<p><strong>Palavras chave:</strong><br>
					<input name="resumo-palavras-chaves" type="text" id="resumo-palavras-chaves" width="421" style="width: 421px;" value="'.@$resumos[0]->resumo_palavras_chaves.'" ';
					$content.="onBlur=\"contarArray('resumo-palavras-chaves','char_palavras_chaves',3,'paralavra(s) inserida(s)')\" /><br /><div id=\"char_palavras_chaves\" class=\"qtd_caracteres\">Máximo de 3 palavras separadas por vírgula</div>";
					$content.="
					</p>	
					<p><strong>Forma de apresentação do resumo:</strong><br>
					<input type=\"radio\" name=\"resumo-forma\" value=\"Oral\"
					
						";
				
					if($resumos[0]->resumo_forma == "Oral") { $content.=' checked'; } 
					$content.="> Oral &nbsp; &nbsp; 
					<input type=\"radio\" name=\"resumo-forma\" value=\"Banner\"				
					";
					if($resumos[0]->resumo_forma == "Banner") { $content.=' checked'; } 
					$content.='> Banner &nbsp; &nbsp;
					</p>					
			
					<p></p>
					<p style="text-align:left;"><input type="submit" name="enviar" id="enviar" value="Enviar" /></p>
				</form>';
				if(@$resumos[0]->resumo_instituicao_ensino){
				$content.='
				<script language="javascript">
					jQuery(document).ready(function(){';
					if($resumos[0]->resumo_instituicao_ensino=='IFF') $content.='jQuery("#ver_iff").show("slow"); document.getElementById("instituicao-ensino-outros").value="";';
					if($resumos[0]->resumo_instituicao_ensino=='UENF') $content.='jQuery("#ver_uenf").show("slow"); document.getElementById("instituicao-ensino-outros").value="";';
					if($resumos[0]->resumo_instituicao_ensino!="UFF" and $resumos[0]->resumo_instituicao_ensino!="IFF" and $resumos[0]->resumo_instituicao_ensino!="UENF") $content.='document.getElementById("instituicao-ensino-outros").disabled = false;';
					$content.='
					})
				</script>';
				}
				echo $content;
}
?>
