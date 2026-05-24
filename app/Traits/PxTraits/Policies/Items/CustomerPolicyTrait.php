<?php

namespace App\Traits\PxTraits\Policies\Items;

trait CustomerPolicyTrait {

    public function customerPolicies(){
        return [
            'name' => 'Customer Management',
            'policies' => [
                [
                    'name' => 'Customer Crud',
                    'keys' => ['view','store','bulk_update','delete','pdf','excel','edit']
                ]
            ]
        ];
    }
}
