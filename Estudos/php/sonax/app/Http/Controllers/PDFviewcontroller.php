<?php 

namespace App\Http\Controllers;

use App\Cliente;
//use App\Stackoverflow;
use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Facade;

class PdfviewController extends Controller
{

    private $model;
    public function __construct(Cliente $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $data['model'] = $this->model->all();
        return FacadePdf::loadView('view', $data)
            ->stream();
    }
}