<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if($nome === 'teste'): ?>
        <h1> Testes</h1>
    <?php else: ?>
        <h1> Home</h1>
    <?php endif; ?>

    <?php $__env->startComponent('components.botao'); ?>
        <?php $__env->slot('cor'); ?>
            green
        <?php $__env->endSlot(); ?>
        Editar
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('components.botao'); ?>
        <?php $__env->slot('cor'); ?>
            red
        <?php $__env->endSlot(); ?>
        Deletar
    <?php echo $__env->renderComponent(); ?>
   

    <?php echo $html; ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Laravel\resources\views/home.blade.php ENDPATH**/ ?>