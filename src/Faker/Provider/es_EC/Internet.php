<?php

namespace Faker\Provider\es_EC;

class Internet extends \Faker\Provider\Internet
{
    protected static $freeEmailDomain = array('gmail.com', 'hotmail.com', 'hotmail.es', 'yahoo.com', 'yahoo.es', 'live.com', 'outlook.com');
    protected static $tld = array('com', 'com.ec', 'net', 'net.ec', 'org', 'org.ec', 'info.ec', 'gob.ec');
}
