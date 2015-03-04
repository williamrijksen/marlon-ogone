<?php
/*
 * This file is part of the Marlon Ogone package.
 *
 * (c) Marlon BVBA <info@marlon.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ogone\Ecommerce;

use Ogone\AbstractPaymentRequest;
use Ogone\ShaComposer\ShaComposer;

class EcommercePaymentRequest extends AbstractPaymentRequest {

    const TEST = "https://internetkassa.abnamro.nl/ncol/test/orderstandard.asp";
    const PRODUCTION = "https://internetkassa.abnamro.nl/ncol/prod/orderstandard.asp";

    public function __construct(ShaComposer $shaComposer)
    {
        $this->shaComposer = $shaComposer;
        $this->ogoneUri = self::TEST;
    }

    public function getRequiredFields()
    {
        return array(
            'pspid', 'currency', 'amount', 'orderid'
        );
    }

    public function getValidOgoneUris()
    {
        return array(self::TEST, self::PRODUCTION);
    }
}
