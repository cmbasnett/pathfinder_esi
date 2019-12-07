<?php


namespace Exodus4D\ESI\Mapper\EveScout;

use data\mapper;

class Connection extends mapper\AbstractIterator {

    /**
     * @var array
     */
    protected static $map = [
        'id'                        => 'id',
        'type'                      => 'type',
        'status'                    => 'status',
        'signatureId'               => ['signature' => 'name'],
        'wormhole'          => [],
        'wormholeMass'              => ['wormhole' => 'mass'],
        'wormholeEol'               => ['wormhole' => 'eol']
    ];
}