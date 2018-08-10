<?php
/**
 * @link https://github.com/2amigos/yii2-google-maps-library
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\google\maps\controls;


/**
 * MapTypeControlStyle
 *
 * Identifiers for common MapTypesControls.
 *
 * For further information please visit its
 * [documentation](https://developers.google.com/maps/documentation/javascript/reference#MapTypeControlStyle) at Google.
 *
 * ```
 * use dosamigos\google\maps\controls\MapTypeControlOptions;
 * use dosamigos\google\maps\controls\MapTypeControlStyle;
 * use dosamigos\google\maps\Map;
 *
 * $options = new MapTypeControlOptions(['style' => MapTypeControlStyle::DROPDOWN_MENU]);
 *
 * $map = new Map(['mayTypeControlOptions' => $options]);
 * ```
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\google\maps\controls
 */
class MapTypeControlStyle
{
    const DEFAULT_STYLE = 'google.maps.MapTypeControlStyle.DEFAULT';
    const DROPDOWN_MENU = 'google.maps.MapTypeControlStyle.DROPDOWN_MENU';
    const HORIZONTAL_BAR = 'google.maps.MapTypeControlStyle.HORIZONTAL_BAR';

    /**
     * Checks whether the value is a correct [MapTypeControlStyle] constant.
     *
     * @param $value
     *
     * @return bool
     */
    public static function getIsValid($value){
        return in_array(
            $value,
            [
                static::DEFAULT_STYLE,
                static::DROPDOWN_MENU,
                static::HORIZONTAL_BAR
            ]
        );
    }
}