<?php

namespace XRPHP\Api\Method;

use XRPHP\Api\Field;

/**
 * ChannelVerify Method Class
 *
 * The channel_verify method checks the validity of a signature that can be used to redeem a specific amount of XRP from
 * a payment channel.
 *
 * https://developers.ripple.com/channel_verify.html ChannelVerify method documentation.
 */
class ChannelVerify extends AbstractMethod
{
    /**
     * Constructor.
     *
     * @param array|null $params
     * @throws \XRPHP\Exception\InvalidParameterException
     * @throws \XRPHP\Exception\TransactionTypeFieldException
     */
    public function __construct(array $params = null)
    {
        // GENERATED CODE FROM bin/generate.php types
        // BEGIN GENERATED
        $this->addField(new Field([
            'name' => 'amount',
            'required' => true
        ]));

        $this->addField(new Field([
            'name' => 'channel_id',
            'required' => true
        ]));

        $this->addField(new Field([
            'name' => 'public_key',
            'required' => true
        ]));

        $this->addField(new Field([
            'name' => 'signature',
            'required' => true
        ]));

        // END GENERATED

        parent::__construct($params);
    }
}