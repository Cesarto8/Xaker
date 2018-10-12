<div class="post_container">
    <div class="container">
        <div class="card-panel">
            <div class="row">
                <div class="col s12 name_post input-field">
                    <input id="name_post" type="text" class="validate post_input" name="post_name">
                    <label for="name_post">Nombre del Post</label>
                </div>
                <div class="col s12 input-field">
                    <select multiple class="post_input" name="categorias">
                        <option value="" disabled>Selecciona una opcion</option>
                        <?php
                            $categories = $database->select("categories","*");
                            foreach($categories as $data){
                                echo '<option value="' . $data['id'] . '">'.$data['name'].'</option>';
                                // echo "user_name:" . $data["user_name"] . " - email:" . $data["email"] . "<br/>";
                            }
                        ?>

                        <!-- <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option> -->
                    </select>
                    <label>Categorias</label>
                </div>
                <div class="col s12">
                    <label>Agrega los tag</label>
                    <div class="chips chips-autocomplete"></div>
                </div>
                <div class="col s12">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" class="post_input">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="File to update">
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <label for="editor">Contenido del Post</label>
                    <textarea name="post_content" id="editor" class="materialize-textarea post_input editor"></textarea>
                </div>

            </div>
            <div class="col s12 row">
                <div class="col s2">
                    <div class="btn-small waves-effect waves-light enviar_post">Enviar
                        <i class="material-icons right">send</i>
                    </div>
                </div>
                <div class="col s2">
                    <div class="btn-small waves-effect waves-light red cancelar">Cancelar</div>
                </div>
            </div>
        </div>
    </div>
</div>