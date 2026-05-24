<?php

namespace App\Traits\PxTraits\Policies;

use App\Traits\PxTraits\Policies\Items\CustomerPolicyTrait;
use App\Traits\PxTraits\Policies\Items\HrmUserPolicyTrait;

trait BasePolicyTrait {

    use HrmUserPolicyTrait, CustomerPolicyTrait;
    public function hrmPolicies(){
        return [
            [
                'name' => 'Admin Panel',
                'policies' => [
                    [
                        ...$this->customerPolicies()
                    ],
                    [
                        ...$this->hrmUserPolicies()
                    ]
                ]
            ]
        ];
    }
}
