<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Periodico;

use function Pest\Laravel\json;

class PeriodicoController extends Controller
{
    /**
     * Busca un periódico por su ID.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */






    public function buscarPorId(Request $request)
    {

        $peridicos_id = $request->input('periodico_id');

        $token = $request->input('_token');


        if ($peridicos_id === 'mostrar') {
            $periodicos = Periodico::all();
            $urls = $periodicos->pluck('url');
            $datas = response()->json($urls);
        }else {
            $periodico = Periodico::where('id', $peridicos_id)->get();
            $url = $periodico->pluck('url');
            $datas = response()->json($url);
        }
        
        ApiController::scrape($datas);
       
    }


}
