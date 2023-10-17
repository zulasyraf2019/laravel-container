<?php

namespace Mbsp\Sisken\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SiskenController extends Controller
{
    
    public function GetLoriRosakList() {
        $client = new Client();
        $response = $client->request('GET', 'https://apisisken.mbsp.gov.my/iSweepAPI/LoriRosak', [
            'auth' => ['isweep', 'isweep@mbsp123']
        ]);

        return $response->getBody();
    }

    public function SenaraiKenderaanRosak(){
        $client = new Client();
        $jsonData = $client->request('GET', 'https://apisisken.mbsp.gov.my/iSweepAPI/LoriRosak', [
            'auth' => ['isweep', 'isweep@mbsp123']
        ]);
        $data = $jsonData->getBody();
        $responses = json_decode($data);
        return view('sisken::KenderaanRosak', ['responses' => $responses]);
    }

    public function GetLoriServisList() {
        $client = new Client();
        $response = $client->request('GET', 'https://apisisken.mbsp.gov.my/iSweepAPI/LoriServis', [
            'auth' => ['isweep', 'isweep@mbsp123']
        ]);

        return $response->getBody();
    }

    public function SenaraiKenderaanServis(){
        $client = new Client();
        $jsonData = $client->request('GET', 'https://apisisken.mbsp.gov.my/iSweepAPI/LoriServis', [
            'auth' => ['isweep', 'isweep@mbsp123']
        ]);
        $data = $jsonData->getBody();
        $responses = json_decode($data);
        return view('sisken::KenderaanServis', ['responses' => $responses]);
    }
}
