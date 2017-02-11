<?php
/* @var $previewImage \humhub\modules\file\converter\PreviewImage */

use humhub\libs\Html;
?>

<div class="pull-left">
    <?php if ($previewImage->applyFile($file)): ?>
        <?= $previewImage->renderGalleryLink(['style' => 'padding-right:12px']); ?>
    <?php else: ?>
        <i class="fa <?= $cFile->getIconClass(); ?> fa-fw" style="font-size:40px"></i>
    <?php endif; ?>
</div>

<strong><?= Html::encode($fileName); ?></strong><br />
<small><?= Yii::t('FileModule.base', 'Size: {size}', ['size' => Yii::$app->formatter->asShortSize($fileSize, 1)]); ?></small><br />

<?php if (!empty($cFile->description)): ?>
    <br />
    <?= Html::encode($cFile->description); ?>
    <br />
<?php endif; ?>

<br />
<?= Html::a(Yii::t('FileModule.base', 'Open file folder'), $folderUrl, ['class' => 'btn btn-sm btn-default']); ?>

<div class="clearfix"></div>
<br />