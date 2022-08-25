<?php

namespace Faker\Provider\es_EC;

class Address extends \Faker\Provider\es_EC\Address
{
    protected static $cityPrefix = array('San', 'Puerto', 'Gral.', 'Don');
    protected static $citySuffix = array('Alta', 'Baja', 'Norte', 'Este', ' Sur', ' Oeste');
    protected static $buildingNumber = array('####', '###', '##', '#');
    protected static $streetPrefix = array('Ave.', 'Cl.');
    protected static $streetSuffix = array('');
    protected static $postcode = array('EC ######');
    protected static $state = array(
        'Azuay', 
        'Bolivar', 
        'Cañar', 'Carchi', 'Chimborazo', 'Cotopaxi', 
        'El Oro', 'Esmeraldas', 
        'Galápagos', 'Guayas', 
        'Imbabura',
        'Loja', 'Los Rios',
        'Manabi', 'Morona Santiago', 
        'Napo', 
        'Orellana',
        'Pastaza', 'Pichincha',
        'Santa Elena', 'Santo Domingo de los Tsáchilas', 'Sucumbíos',
        'Tungurahua', 
        'Zamora Chinchipe'
    );
    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}} {{lastName}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} # {{buildingNumber}} ',
        '{{streetName}} # {{buildingNumber}} {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}, {{state}}",
    );
    protected static $secondaryAddressFormats = array('Dpto. ###', 'Hab. ###', 'Piso #', 'Piso ##');

    /**
     * @example ''
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'Jr.'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Dpto. 402'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Lima'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
