<?php

declare(strict_types=1);

namespace App\Payment\ResponseDataBuilder;

class QPayNative extends ResponseDataBuilder
{
    use QpayTrait;

    protected function process()
    {
        $this->savePreOrderId();

        $this->data = ['code_url' => $this->response->getCodeUrl()];
    }
}
