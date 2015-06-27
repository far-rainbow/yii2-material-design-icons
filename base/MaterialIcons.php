<?php

namespace yii\materialicons\base;

use yii\base\Object;

/**
 * Class MaterialIcons
 * @package yii\materialicons\base
 */
abstract class MaterialIcons extends Object
{
    /**
     * @param string $name
     * @param array $options
     * @return yii\materialicons\component\Icon
     */
    public static function icon($name, $options = [])
    {
        return new component\Icon($name, $options);
    }

    /**
     * @param array $options
     * @return component\Stack
     */
    public static function stack($options = [])
    {
        return new component\Stack($options);
    }

    /**
     * Size values
     * @see rmrevin\yii\fontawesome\component\Icon::size
     */
    const SIZE_LARGE = 'lg';
    const SIZE_2X = '2x';
    const SIZE_3X = '3x';
    const SIZE_4X = '4x';
    const SIZE_5X = '5x';

    /**
     * Rotate values
     * @see rmrevin\yii\fontawesome\component\Icon::rotate
     */
    const ROTATE_90 = '90';
    const ROTATE_180 = '180';
    const ROTATE_270 = '270';

    /**
     * Flip values
     * @see rmrevin\yii\fontawesome\component\Icon::flip
     */
    const FLIP_HORIZONTAL = 'horizontal';
    const FLIP_VERTICAL = 'vertical';
}