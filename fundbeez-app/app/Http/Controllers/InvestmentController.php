<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExcelService;
use App\Http\Requests\ImportExcelRequest;
use App\Http\Requests\InvestmentStoreRequest;
use App\Models\Investment;
use DB;
use File;

class InvestmentController extends Controller
{
    public function importRegisteredCompany(ImportExcelRequest $request){
        $request->validated();
        $excelService = new ExcelService(Investment::class);
        $update = $excelService->readExcel($request->file('file'))->update();

        if(!$update){
            // return back()->withErrors(['errors' => 'Data gagal disimpan!']);
            return 'gagal';
        }
        return 'berhasil';
        // return back()->with('message', 'Data berhasil disimpan!');
    }

    public function exportRegisteredCompany(Request $request){
        $excelService = new ExcelService(Investment::class);
        $excelService->get();
        return back()->with('message', 'Data berhasil diexport!');
    }

    public function store(InvestmentStoreRequest $request){
        $data = $request->validated();

        DB::beginTransaction();
        try{
            $companyImage = 'company-image-'. now();
            $ownerImage = 'owner-image'. now();
            $request->file('company_image')->move(public_path('img/investments/companies'), $companyImage);
            $request->file('owner_image')->move(public_path('img/investments/owners'), $companyImage);

            $companyImagePath = 'img/investments/companies/'.$companyImage;
            $ownerImagePath = 'img/investments/owners/'.$ownerImage;
            $investment = new Investment;
            $investment->fill($data);
            $investment->company_image = $companyImagePath;
            $investment->owner_image = $ownerImagePath;
            $investment->user_id = auth()->user()->id;
            $investment->save();
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            File::delete($ownerImagePath);
            File::delete($companyImagePath);
            return back()->withInput()->withErrors(['errors' => 'Gagal menyimpan investasi!']);
        }
        return redirect('/home');
    }
}
