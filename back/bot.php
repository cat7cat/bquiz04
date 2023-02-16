<?php
// 如果送出資料不是空值 就送去資料庫 然後儲存
if (!empty($_POST)) {
    $bot = $Bottom->find(1);
    $bot['bottom'] = $_POST['bottom'];
    $Bottom->save($bot);
}


?>


<h2 class="ct">編輯頁尾版權區</h2>
<form action="?do=bot" method="post">
    <!-- table.all>tr>td.tt.ct+td.pp>input:text     -->
    <table class="all">
        <tr>
            <td class="tt ct">頁尾宣告內容</td>
            <td class="pp">
                <input type="text" name="" id="<?= $Bottom->find(1)['bottom'] ?>">
            </td>
        </tr>
    </table>
    <!-- div.ct>input:submit+input:reset -->
    <div class="ct">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
    </div>

</form>