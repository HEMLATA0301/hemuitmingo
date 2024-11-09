<?php
namespace App\Trait;

trait SaveFile{
    protected function saveImage($file){
        $image=date('YmdHis').rand(111111,666666).'.'.$file->extension();
        $file->move(public_path('image/'),$image);
        return $image;
    }

    protected function savePdf($file){
        $pdf=date('YmdHis').rand(111111,666666).'.'.$file->extension();
        $file->move(public_path('pdf/'),$pdf);
        return $pdf;
    }
}