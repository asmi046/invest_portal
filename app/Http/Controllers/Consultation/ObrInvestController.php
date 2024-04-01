<?php

namespace App\Http\Controllers\Consultation;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\Consultation\InvestObrMail;
use App\Actions\TelegramSendAction;

use App\Http\Requests\Consultation\ObrInvestFormRequest;

class ObrInvestController extends Controller
{
    public function obr_invest_send(ObrInvestFormRequest $request, TelegramSendAction $tgsender) {
        $data = $request->validated();

        // $attachment_file = "";
        // if ($request->hasFile('attachment')) {
        //     $attachment_file = $request->attachment->path();
        // }
        // dd($request->file('attachment'));

        $tmp = $tgsender->handle("<b>Обращение в инвестиционный коммитет</b>\n\r".
                                  "Имя: ".$data['name'].
                                  "\n\rТелефон: ".$data['phone'].
                                  "\n\rEmail: ".$data['email'].
                                  "\n\rСообщение: ".$data['message']);


        Mail::to(explode(",",config('consultation.mailadresat')))->send(new InvestObrMail($data, $request->file('attachment')));

        return redirect()->route('thencs_obr_invest');
    }

    public function show_thencs() {
        return view('obr-invest-thencs');
    }
}
