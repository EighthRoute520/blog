<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\DataFrom;

class UserController extends Controller
{
    public function getData(Request $request){
        $arr = [];
        for($i=1;$i<1002;$i++){
            $dataFrom = new DataFrom();
            $dataFrom->id = $i;
            $dataFrom->date = '2016-05-0'.$i;
            $dataFrom->name = '王小虎'.$i;
            $dataFrom->province = '上海'.$i;
            $dataFrom->city = '普陀区'.$i;
            $dataFrom->address = '上海市普陀区金沙江路 1518 弄'.$i;
            $dataFrom->zip = '20033'.$i;
            $arr[] = $dataFrom;
        }

         $currentPage = $request->input('currentPage', 1); // 获取页码
         $pagesize = $request->input('pagesize', 10); //每页的条数
         $offset = ($currentPage * $pagesize) - $pagesize;//计算每页分页的初始位置
         $res = new LengthAwarePaginator(array_slice($arr,$offset,$pagesize,true),count($arr),$pagesize,
         $currentPage,['path' => $request->url(), 'query' => $request->query()]);
        return response()->json($res);
    }
}