<?require_once("../session.php");?>
<div class="updates">
	<div class="topo">VERSÕES DE UPDATES DE CLIENTES</div>
	<div class="conteudo">
		<ul>
			<li>
				<img src="images/btn_open.gif" />
				Singec - singec.com.br
				<div class="atualizacoes">
					<table>
						<tr>
							<td>08/02/2018</td>
							<td>v1.1</td>
							<td>/atualizacoes/singec/v1.01.zip</td>
						</tr>
					</table>
				</div>
			</li>
			<li>
				<img src="images/btn_open.gif" />
				BasePed
				<div class="atualizacoes">
					<table>
						<tr>
							<td>08/02/2018</td>
							<td>v1.1</td>
							<td>/atualizacoes/baseped/v1.01.zip</td>
						</tr>
					</table>
				</div>
			</li>
			<li>
				<img src="images/btn_open.gif" />
				Basico Tecidos - basicotecidos.com.br/app
				<div class="atualizacoes">
					<table>
						<tr>
							<td>08/02/2018</td>
							<td>v1.1</td>
							<td>/atualizacoes/basico/v1.01.zip</td>
						</tr>
					</table>
				</div>
			</li>
		</ul>
	</div>
	<div class="topo">IMPORTAR ATUALIZAÇÃO</div>
	<div class="conteudo" id="uploadatualizacoes">
		<form>
			<label for="cliente">Cliente:</label>
			<select name="cliente">
				<option value="">-</option>
				<option value="singec">Singec</option>
				<option value="baseped">BasePed</option>
				<option value="basico">Basico Tecidos</option>
			</select><br>
			<label for="dtfechamento">Data do deploy:</label>
			<input type="date" name="dtfechamento" /><br>
			<label for="versao">Versão(sem o "v"):</label>
			<input type="text" name="versao" /><br>
			<button>Upload</button>
		</form>
	</div>
</div>