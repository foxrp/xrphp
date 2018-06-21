<?php

namespace XRPHP\Api\TransactionType;

use XRPHP\Api\Field;

/**
 * SetRegularKey Transaction Type Class
 *
 * A SetRegularKey transaction assigns, changes, or removes the regular key pair associated with an account.\n\nYou can
 * protect your account by assigning a regular key pair to it and using it instead of the master key pair to sign
 * transactions whenever possible. If your regular key pair is compromised, but your master key pair is not, you can use
 * a SetRegularKey transaction to regain control of your account.
 *
 * https://developers.ripple.com/setregularkey.html SetRegularKey transaction type documentation.
 */
class SetRegularKey extends AbstractTransactionType
{
    /**
     * Constructor
     *
     * @param array|null $params Array of parameters to validate.
     * @throws \XRPHP\Exception\InvalidParameterException
     * @throws \XRPHP\Exception\TransactionTypeFieldException
     */
    public function __construct(array $params = null)
    {
        // GENERATED CODE FROM bin/generate.php types
        // BEGIN GENERATED
        $this->addField(new Field([
            'name' => 'RegularKey',
            'required' => false,
            'autoFillable' => false
        ]));

        // END GENERATED

        parent::__construct($params);
    }
}