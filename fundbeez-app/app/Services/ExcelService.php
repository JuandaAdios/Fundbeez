<?php

namespace App\Services;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use Illuminate\Http\Exceptions\HttpResponseException;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as WriterXlsx;
use DB;
use Closure;

class ExcelService
{
    protected $data, $key, $model, $fillable, $attributes;

    public function __construct($model){
        $this->model = $model;
        $this->fillable = (new $model())->getFillable();
        $this->attributes = \Schema::getColumnListing((new $this->model)->getTable());
    }

    public function readExcel($file){
        $reader = $file->extension() == 'xlsx' ? new Xlsx() : new Xls();
        $sheet = $reader->load($file->getPathName());
		$read = $sheet->getActiveSheet()->toArray(null, true, true, true);
        $key = array_values(array_shift($read));
        $this->data = $read;
        $this->key = $key;
        return $this;
    }

    public function insert(Closure $modifyCallback = null, Closure $afterModifyCallback = null){
        DB::beginTransaction();
        try{
            foreach($this->data as $data){
                $value = array_values($data);
                // Modify data before insert into database
                if($modifyCallback){
                    $value = $modifyCallback($value);
                    if(!$value) continue;
                }
                $result = [];
                for($i=0; $i<count($this->key); $i++){
                    //only fillable field
                    if(in_array($this->key[$i], $this->fillable)){
                        //create associative array
                        $result[$this->key[$i]] = $value[$i];
                    }
                }
                //then insert row by row
                $modelData = $this->model::create($result);
                if($afterModifyCallback){
                    $afterModifyCallback($modelData);
                }
            }
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            return false;
        }

        return true;
    }

    public function update(){
        DB::beginTransaction();
        try{
            // allow id to fill $result
            $this->fillable = array_merge($this->fillable, ['id']);

            foreach($this->data as $data){
                $value = array_values($data);

                $result = [];
                for($i=0; $i<count($this->key); $i++){
                    //only fillable field
                    if(in_array($this->key[$i], $this->fillable)){
                        //create associative array
                        $result[$this->key[$i]] = $value[$i];
                    }
                }
                //then update row by row
                $modelData = $this->model::where('id', $result['id'])->update($result);
            }
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
            return false;
        }

        return true;
    }

    public function get(Closure $condition = null){
        $excel = new SpreadSheet();
        $sheet = $excel->getActiveSheet();
        $datas = $this->model::query();
        $alphabet = 'A';

        if($condition != null){
            $datas = $condition($datas);
        }

        // set header
        foreach($this->attributes as $index => $value){
            $sheet->setCellValue(($alphabet++).'1', $value);
        }

        // body value
        foreach($datas->get() as $index => $row){
            $alphabet = 'A';
            $each = $row->toArray();
            foreach($each as $value){
                $sheet->setCellValue(($alphabet++).($index+2), $value);
            }
        }

        $writer = new WriterXlsx($excel);
        $fileName = 'Export-'. date('Y-m-d-h-i-s');
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($fileName).'.xlsx"');
        $writer->save('php://output');
    }
}
