<h1>Задание №1 </h1>

<form method="post" action="index.php" class="form-inline" id="test">
    <div class="form-group mb-2">
        <label for="rows-count" class="label-form col-form-label">Число строк </label>
        <input name="rows" type="number" min="1" max="50" class="form-control" id="rows-count" placeholder="от 1 до 50">
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="cols-count" class="label-form col-form-label">Число столбцов </label>
        <input name="cols" type="number" min="1" max="50" class="form-control" id="cols-count" placeholder="от 1 до 50">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Выполнить</button>
</form>

<hr>
<h2>Результат:</h2>

<?php
    if (isset($_POST["rows"]) && isset($_POST["cols"])){
        $rows = $_POST["rows"];
        $cols = $_POST["cols"];        
    } 
?>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                    <?php if($cols!=0):?>
                        <th scope="col">#</th>
                    <?php else:?>
                        <p>Пока тут ничего нет ...</p>
                    <?php endif;?>

                    <?php for($i=1;$i<=$cols;$i++):?>
                        <th scope="col"><?=$i?></th>
                    <?php endfor;?>
            </tr>
        </thead>
        <tbody>
            <?php for($i=1;$i<=$rows;$i++):?>
                <tr>
                    <?= "<th scope='row'>$i</th>" ?>
                    <?php for($j=1;$j<=$cols;$j++):?>
                        <td><?=mt_rand(1,100)?></td>
                    <?php endfor;?>
                </tr>
            <?php endfor;?>
        </tbody>
    </table>
</div>