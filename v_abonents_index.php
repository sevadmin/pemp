<br/>
        <h3>Абоненты</h3>
<br />
<table width="100%" border="0" class="tbl"  cellspacing="0">
    <thead>
        <tr height="30">
            <th>Договор №</th><th>Ф И О</th><th>IP</th><th>MAC</th><th>Логин</th><th>Баланс</th>
        </tr>
    </thead>
<? foreach ($abonents as $abonent):?>
<tr>
    <td width="100" align="center"><?=$abonent->dogovor?></td>
    <td width="100" align="center"><?=$abonent->fio?></td>
    <td width="100" align="center"><?=$abonent->ip?></td>
    <td width="100" align="center"><?=$abonent->mac?></td>
    <td width="100" align="center"><?=$abonent->login?></td>
    <td width="100" align="center"><?=$abonent->balans?> Грн.</td>
</tr>
<? endforeach?>

</table>

<br/>
<p align="right">
<?=HTML::image('media/img/add.png', array('valign' => 'top'))?>

<?=HTML::anchor('admin/products/add', 'Добавить')?>
</p>