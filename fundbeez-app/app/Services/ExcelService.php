<?php

namespace App\Services;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use Illuminate\Http\Exceptions\HttpResponseException;
use DB;
use Closure;

class ExcelService
{
    protected $data, $key, $model, $fillable;

    public function __construct($model){
        $this->model = $model;
        $this->fillable = (new $model())->getFillable();
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
}
