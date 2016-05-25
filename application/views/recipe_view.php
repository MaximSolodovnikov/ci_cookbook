<div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-10">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Добавление рецепта</legend><br>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-lg-2 control-label">Название</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Название рецепта">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="textArea" class="col-lg-2 control-label">Описание</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="3" id="textArea" placeholder="Описание рецепта"></textarea>
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
                                

                                <script language="javascript">
                                    function add_input()
                                    {
                                        // Создаем новый div-элемент
                                        var new_input=document.createElement('div');
                                        // Тут мы уже можем воспользоваться innerHTML потому, что изменения не коснуться всего остального докуметна
                                        new_input.innerHTML='<br><input name="ingredients"> <input name="quantity">';
                                        // Добавляем только что созданный div на страницу
                                        document.getElementById('inputi').appendChild(new_input);
                                    }
                                </script>
                                
                                
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <input type="submit" class="btn btn-primary" value="Сохранить рецепт">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>