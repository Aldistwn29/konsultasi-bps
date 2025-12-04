<?php

namespace App\Services;

class WhatsapSender
{
    protected $wa;

    public function __construct(WhatsAppService $wa)
    {
        $this->wa = $wa;
    }

    public function sen($to, $message)
    {
        return $this->wa->kirimPesan($to, $message)
    }
}
