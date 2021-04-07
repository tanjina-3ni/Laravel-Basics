<?php

    namespace App\PaymentGateway;

    class PaymentFacades{
        protected static function getFacadeAccessor()
        {
            return 'payment';
        }
    }

