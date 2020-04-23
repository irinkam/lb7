<?php
function tableFormatter()
{
    print('<table border="1">');
    $distArray = include_once('data.php');
    foreach ($distArray as $group => $persons) {
        print('<tr><td colspan="3"> ' . $group . '</td></tr>');
        foreach ($persons as $data) {
            print '<tr>';
            print '<td>' . $data['name'] . '</td>';
            print '<td>' . $data['site'] . '</td>';
            print '<td>' . $data['phone'] . '</td>';
            print '<tr>';
        }
    }
    print('</table>');
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Кодировка веб-страницы -->
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Подключаем Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Лабораторная работа</title>
</head>
<body>
<?php tableFormatter(); ?>
<!-- Подключаем jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Подключаем плагин Popper -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<!-- Подключаем Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" ></script>
</body>

<button type="button" class="btn btn-primary" data-toggle="popover"
        title="Сообщение" data-content="Ура, Bootstrap 4 работает">
    Поднеси ко мне курсор
</button>

<!-- После подключения jQuery, Popper и Bootstrap JS -->
<script>
    $(function () {
        $('[data-toggle="popover"]').popover({trigger:'hover'});
    });
</script>

</html>

