<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DiagnosisRequest;
use App\Domain\Services\DiagnosisService;

class DiagnosisController extends Controller
{
    /**
     * コンストラクタ.
     */
    public function __construct(
        private DiagnosisService $diagnosis_service,
        )
    {
        //
    }

    /**
     * 性格診断テキスト入力ページを表示.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('diagnosis.index');
    }

    /**
     * 性格診断実行.
     *
     * @param DiagnosisRequest $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function execute(DiagnosisRequest $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $text = $request->input('text');
        $result = $this->diagnosis_service->get($text);
        return view('diagnosis.detail', compact('result'));
    }
}
