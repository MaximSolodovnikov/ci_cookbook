<div class="col-lg-9" style="text-align: center; margin-top: 70px; margin-right: auto; margin-left: auto; border: 2px solid #F5F5F5; border-radius: 4px; padding: 25px;">
                    <div class="row">
                        <div class="col-lg-4">Мои рецепты</div>
                        <div class="col-lg-4">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputName2">Search</label>
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Поиск">
                                </div>
                                <input type="submit" class="btn btn-default" value="Поиск">
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <?php if ($user): ?>
                                <a class="btn btn-default" href="<?= base_url(); ?>index.php/main/add_recipe" role="button">Добавить рецепт</a>
                            <?php endif; ?>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive my_table_style">
                                <table class="table table-striped table-hover">  
                                    <thead>
                                        <tr class="info">
                                          <td>Рецепт</td>
                                          <td>Описание</td>
                                          <td>Действие</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Шарлотка</td>
                                            <td>Описание рецепта</td>
                                            <td>х</td>
                                        </tr>
                                        <tr>
                                            <td>Борщ</td>
                                            <td>Описание рецепта</td>
                                            <td>х</td>
                                        </tr>
                                        <tr>
                                            <td>Холодец</td>
                                            <td>Описание рецепта</td>
                                            <td>х</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>