<?php /* Hace que el contenido de este template sea la sección 'content' de `layout` */ ?>
<?php $this->layout('layout', ['title' => $title]) ?>
<div>
    <?php require_once 'vista-header/header.php' ?>
    <?php
    if (isset($respuesta)) {
        var_dump($respuesta['contenido']);
    }
    $resultado = $this->e($contenido);
    switch ($resultado):
        case "index":
            $this->insert('landing/vista-contenido-principal/vista-user/principal');
            $this->insert('landing/vista-contenido-principal/vista-user/principal2');
            break;
        case "perfil":
            $this->insert('landing/vista-contenido-principal/vista-user/perfil');
            $this->insert('landing/vista-contenido-principal/vista-user/perfil2');
            break;

    endswitch;
    ?>
    <?php require_once 'vista-footer/footer.php' ?>
</div>