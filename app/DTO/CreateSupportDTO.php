<?php

namespace App\DTO;

class CreateSupportDTO{
    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    ){}

    public function makeFromRequest(){
        
    }
}