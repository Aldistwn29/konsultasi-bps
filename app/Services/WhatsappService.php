<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class WhatsAppService
{
    protected Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.fonnte.com/'
        ]);
    }
    
    public function kirimPesan(string $nomor, string $pesan)
    {
        try {
            $response = $this->client->post("send", [
                 'headers' => [
                    'Authorization' => env('FONNTE_API_KEY'),
                ],
                'form_params' => [
                    'target' => $nomor,
                    'message' => $pesan,
                    'device' => env('FONNTE_INSTANCE_ID'),
                ],
            ]);

            $result = json_decode($response->getBody()->getContents(), true);
            return $result['status'] ?? false;
        } catch (\Throwable $e) {
            Log::error('Gagal kirim pesan whastapp via fonte: '. $e->getMessage());
            return false;
        }
    }
}