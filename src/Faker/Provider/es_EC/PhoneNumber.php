<?php

namespace Faker\Provider\es_EC;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @see https://es.wikipedia.org/wiki/N%C3%BAmeros_de_tel%C3%A9fono_en_Ecuador
     */
    protected static $formats = array(
        // Internacional + Telefonia Celular
        '+593 {{provinceCode}} #######',
        '+593 9 ########',
        // Llamadas locales
        '{{areaCode}} #######',
        '({{areaCode}}) #######',
        // Llamadas a Telefonos Moviles
        '09 ########',
        '09########',
    );

    public static function areaCode()
    {
        $digits[] = 0;
        $digits[] = static::provinceCode();

        return join('', $digits);
    }

    public static function provinceCode()
    {
        return self::numberBetween(2, 7);
    }
}
