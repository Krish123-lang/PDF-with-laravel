<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;


use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = User::get();
        $data = [
            'title' => 'Welcome to Hell',
            'date' => date('m/d/Y'),
            'users' => $users,
        ];

        $pdf = PDF::loadView('mypdf', $data);
        return $pdf->stream();
    }
}
