<?php

namespace App\Services;

use App\Models\WhatsappMessage;
use Illuminate\Support\Facades\Http;

class WhatsAppService
{
    protected string $endpoint;

    public function __construct()
    {
        $this->endpoint = config('services.whatsapp.node_url');
    }

    public function kirim_pesan(string $nomor, string $pesan, ?int $konsultasiId = null): bool
    {
        $response = Http::post($this->endpoint . '/send-wa', [
            'number' => $this->formatNomor($nomor),
            'message' => $pesan
        ]);

        // simpan log
        WhatsappMessage::create([
            'konsultasi_id' => $konsultasiId,
            'sender' => $this->formatNomor($nomor),
            'message' => $pesan,
            'direction' => 'out',
        ]);

        return $response->successful();
    }


    public function formatNomor(string $nomer): string
    {
        if (str_starts_with($nomer, '08')) {
            return '62' . substr($nomer, 1);
        };

        return $nomer;
    }
}
