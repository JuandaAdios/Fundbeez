<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExcelService;
use App\Http\Requests\ImportExcelRequest;
use App\Http\Requests\InvestmentStoreRequest;
use App\Models\Investment;
use App\Models\Enums\InvestmentStatus;
use DB;
use File;

class InvestmentController extends Controller
{
    public function importRegisteredCompany(ImportExcelRequest $request)
    {
        $request->validated();
        $excelService = new ExcelService(Investment::class);
        $update = $excelService->readExcel($request->file('file'))->update();

        if (!$update) {
            return back()->withErrors(['errors' => 'Data gagal disimpan!']);
        }
        return back()->with('message', 'Data berhasil disimpan!');
    }

    public function exportRegisteredCompany(Request $request)
    {
        $excelService = new ExcelService(Investment::class);
        $excelService->get(function($query){
            return $query->where('status', InvestmentStatus::PENDING);
        });
        return back()->with('message', 'Data berhasil diexport!');
    }

    public function store(InvestmentStoreRequest $request)
    {
        $data = $request->validated();

        $companyImage = 'company-image-' . date('Y-m-d-h-i-s');
        $ownerImage = 'owner-image-' . date('Y-m-d-h-i-s');
        $request->file('company_image')->move(public_path('img/investments/companies'), $companyImage);
        $request->file('owner_image')->move(public_path('img/investments/owners'), $ownerImage);

        $companyImagePath = 'img/investments/companies/' . $companyImage;
        $ownerImagePath = 'img/investments/owners/' . $ownerImage;

        DB::beginTransaction();
        try {
            $investment = new Investment;
            $investment->fill($data);
            $investment->company_image = $companyImagePath;
            $investment->owner_image = $ownerImagePath;
            $investment->user_id = auth()->user()->id;
            $investment->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            File::delete($ownerImagePath);
            File::delete($companyImagePath);
            return back()->withInput()->withErrors(['errors' => 'Gagal menyimpan investasi!']);
        }
        return redirect('/home')->with('messages', 'Berhasil mengajukan pendanaan. Perdanaan akan diproses');
    }

    public function show(Request $request, Investment $investment)
    {
        if ($investment->status != InvestmentStatus::ACCEPT) {
            return abort(404);
        }
        return view('pages.customer.business.business_detail')->with(['data' => $investment]);
    }

    public function index(Request $request)
    {
        $data = Investment::where('status', InvestmentStatus::ACCEPT)->get();
        return view('pages.customer.business.business_list')->with(['data' => $data]);
    }
}
