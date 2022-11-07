<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    static function newProducts(){
        $sNow = date('Y-m-d H:i:s');
        $sNextWeek = date('Y-m-d H:i:s', strtotime($sNow . ' + 1 week'));
        return Product::where(DB::raw(
            'date_format(updated_at, "%Y-%m-%d")'), '>=', date('Y-m-d', strtotime($sNow)))
            ->
            where('updated_at', '<=', date('Y-m-d', strtotime($sNextWeek)))->get();
        }
    
    static function offerings(){
        $sNow = date('Y-m-d H:i:s');
        return Product::where(
            DB::raw('date_format(discountStartAt, "%Y-%m-%d")'),'<=', strtotime($sNow))
            ->
            orWhere(DB::raw('date_format(discountEndAt, "%Y-%m-%d")'), '>=', strtotime($sNow))
            ->
            where(DB::raw('date_format(discountEndAt, "%Y-%m-%d")'), '=', NULL)
            ->get();
    }

    function Company(){
        $company = $this->belongsTo(Company::class);
        return $company;
    }

    function hasDiscount(){
        $sNow = date('Y-m-d H:i:s');
        return $this->discountPercent > 0 && strtotime($this->discountStartAt) >= strtotime($sNow) && strtotime($this->discountEndAt) <= strtotime($sNow);
    }
}
