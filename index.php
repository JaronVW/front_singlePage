<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery.js"></script>
    <title>Front: single page</title>
</head>
<body>

<header>
    <nav>
        <ul>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>    
        </ul>
    </nav>
</header>
<main>
<script>

$(document).ready(function () {
    $.ajax({url: "ajax.php"})
    .done(function (data) {
        $("#hierinfo").html(data);})
    .fail(function () {
        $("#hierinfo").text("AJAX request mislukt!");})
    .always(function () {
        alert("AJAX request klaar.");})
    ;});
    // het werkt niet en dat is de bedoeling

</script>

<section id="hierinfo">

</section>


</main>

<footer>
</footer>
    
</body>
</html>