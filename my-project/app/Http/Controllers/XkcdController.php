<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class XkcdController extends BaseController
{
    /**
     * Get API
     */
    private function get_api(String $id)
    {
        $id_path = "";
        if($id != "") {
            $id_path = $id + "/";
        }
        $url = "https://xkcd.com/" . $id_path . "info.0.json";
        $response = Http::get($url);
        return $response->json();
    }
    public function index()
    {
        return array(
            "message" => $this->get_api(""),
            "id" => ""
        );
    }
}
