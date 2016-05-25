<div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-10">
                        <form class="form-horizontal" method="post" action="<?= base_url(); ?>index.php/main/add_recipe">
                            <fieldset>
                                <legend>Добавление рецепта</legend><br>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Название</label>
                                    <div class="col-lg-10">
                                        <div class="text-danger""><?= form_error('name'); ?></div>
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Название рецепта" name="name" value="<?= set_value('name')?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="textArea" class="col-lg-2 control-label">Описание</label>
                                    <div class="col-lg-10">
                                        <div class="text-danger""><?= form_error('description'); ?></div>
                                        <textarea class="form-control" rows="3" id="textArea" placeholder="Описание рецепта" name="description"><?= set_value('description')?></textarea>
                                    </div>
                                </div>
   
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <input type="button" onclick="add_input()" value="Добавить ингредиент">
                                    </div>
                                </div>
                                                                
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label sr-only">Название</label>
                                    <div class="col-lg-10">
                                        <div id="inputi"></div>
                                    </div>
                                </div>
 
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <input type="submit" class="btn btn-primary" value="Сохранить рецепт" name="add">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        
    <script language="javascript">
        function add_input()
        {
            // Создаем новый div-элемент
            var new_input=document.createElement('div');
            // Тут мы уже можем воспользоваться innerHTML потому, что изменения не коснуться всего остального докуметна
            new_input.innerHTML='<br><label>Ингредиент</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Количество</label><br><input name="ingredients[]">&nbsp;<input name="quantity[]">';
            // Добавляем только что созданный div на страницу
            document.getElementById('inputi').appendChild(new_input);
        }
    </script>