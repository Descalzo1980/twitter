<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class UploadcatController extends Controller
{
    public function uploadcat()
    {
        return view('pages.uploadcat');
    }

//    /**
//     * @param Uploadcat $uploadcat
//     * @return array
//     */
//    public function uploadcat()
//    {
//        {
//            return [
//                'name'        => 'required',
//                'sku'         => 'required|unique:products,sku,' . $this->get('id'),
//                'image'       => 'required|mimes:png'
//            ];
//        }
//    }
}
