<h5>Editar veículo</h5>

<?php
include_once '../dao/config.php'; 
    $sql = "SELECT * FROM horarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>

<form action = "?page=salvar" method="POST">
    <input type = "hidden" name = "acao" value = "editar">
    <input type = "hidden" name = "id" value = "<?php
    print $row->id; ?>">
    <div class = "mb-3">
        <label>Placa</label>
        <input type = "text" name = "placa" value="<?php print $row->placa; ?>" class = "form-control">
    </div>
    <div class = "mb-3">
        <label>Cor</label>
        <input type = "text" name = "cor" value="<?php print $row->cor; ?>" class = "form-control">
    </div>
    <div class = "mb-3">
        <label>Modelo</label>
        <input type = "text" name = "modelo" value="<?php print $row->modelo; ?>" class = "form-control">
    </div>
    <div class = "mb-3">
        <label>Marca</label>
        <input type = "text" name = "marca" value="<?php print $row->marca; ?>" class = "form-control">
    <div class = "mb-3">
        <button type = "submit" class = "btn btn-primary">Enviar</button>
    </div>
</form>
