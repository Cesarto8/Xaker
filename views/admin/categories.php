<div class="post_container">
	<div class="container">
		<div class="card-panel">
			<div class="preload hide">
				<div class="preloader-wrapper big active">
					<div class="spinner-layer spinner-blue">
						<div class="circle-clipper left">
							<div class="circle"></div>
						</div>
						<div class="gap-patch">
							<div class="circle"></div>
						</div>
						<div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>

					<div class="spinner-layer spinner-red">
						<div class="circle-clipper left">
							<div class="circle"></div>
						</div>
						<div class="gap-patch">
							<div class="circle"></div>
						</div>
						<div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>

					<div class="spinner-layer spinner-yellow">
						<div class="circle-clipper left">
							<div class="circle"></div>
						</div>
						<div class="gap-patch">
							<div class="circle"></div>
						</div>
						<div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>

					<div class="spinner-layer spinner-green">
						<div class="circle-clipper left">
							<div class="circle"></div>
						</div>
						<div class="gap-patch">
							<div class="circle"></div>
						</div>
						<div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 tittle input-field">
					<h2>Categorias</h2>
					<div class="divider"></div>
				</div>
				<div class="col s12 name_categorie input-field">
					<input id="name_categorie" type="text" class="validate post_input categories_name" name="categorie_name">
					<label for="name_categorie">Nombre de la Nueva Categorias</label>
				</div>
			</div>
			<div class="col s12 row">
				<div class="col s2">
					<div class="btn-small waves-effect waves-light enviar_categories">Enviar
						<i class="material-icons right">send</i>
					</div>
				</div>
				<div class="col s2">
					<div class="btn-small waves-effect waves-light red cancelar">Cancelar</div>
				</div>
			</div>
		</div>
		<div class="card-panel">
			<div class="title">
				<h2>Categorias Existentes</h2>
				<div class="divider"></div>
			</div>
			<table class="highlight responsive-tabl">
				<thead>
					<tr>
						<th>Name</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php
					for($aux = 0; $aux <= 10; $aux++){
						echo '<tr>
						<td>Alvin</td>
						<td class="conteiner">
							<div class="btn-floating btn-small waves-effect waves-light red right tooltipped" data-position="bottom" data-tooltip="Eliminar categoria">
								<i class="material-icons ">delete</i>
							</div>
							<div class="btn-floating btn-small waves-effect waves-light blue right tooltipped" data-position="bottom" data-tooltip="Editar Categoria">
								<i class="material-icons">open_in_new</i>
							</div>
						</td>
					</tr>';
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>