<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;
use Auth;

class CommonModel extends Model {

    public function insert($table, $data) {
        $dataa = array_filter($data);
        //print_r($data); exit;
        return DB::table($table)->insertGetId($dataa);
    }

    public function select($table, $select, $where) {
        return DB::table($table)->select($select)->orderBy('id', 'asc')->where($where)->get();
    }
    public function select1($table, $select) {
        return DB::table($table)->select($select)->orderBy('id', 'desc')->get();
    }
    public function selectwithlimit($table, $select,$limit) {
        return DB::table($table)->select($select)->orderBy('id', 'desc')->limit($limit)->where($where)->get();
    }
    public function selectlimit($table, $select, $limit) {
        return DB::table($table)->select($select)->limit($limit)->get();
    }
    
    public function selecthomepageposts($table,$table1, $wherefield,$wherein) {
        return DB::table($table)
                        ->leftjoin($table1, $table . '.category_id', '=', $table1 . '.id')
                        ->select($table . '.*',$table1.'.name')->whereIn($table.'.'.$wherefield, $wherein)->get();
    }
    
    
    public function postwithcat($table,$table1, $where) {
        return DB::table($table)
                        ->leftjoin($table1, $table . '.category_id', '=', $table1 . '.id')
                        ->select($table . '.*',$table1.'.name',$table1.'.description',$table1.'.background')->where($where)->get();
    }


    public function selectfirst($table, $select, $where) {
        return DB::table($table)->where($where)->first($select);
    }

    public function selectnot($table, $select) {
        return DB::table($table)->select($select)->orderBy('id', 'desc')->get();
    }

    public function selectall($table) {
        return DB::table($table)->select('*')->orderBy('id', 'desc')->paginate(50);
    }

    public function selectall1($table) {
        $data = DB::table($table)->select('*')->orderBy('id', 'desc')->get();
        return $data;
    }

    
    
    public function updaterecord($table, $data, $where) {
        DB::table($table)->where($where)->update($data);
    }

    public function pluck($table, $select, $where) {
        return DB::table($table)->where($where)->pluck($select)->first();
    }

    public function pluckarray($table, $select, $where) {
        return DB::table($table)->where($where)->pluck($select)->toArray();
    }

    public function deleterecord($table, $where) {
        DB::table($table)->where($where)->delete();
    }

    public function get_distinct($table, $column, $where) {
        return DB::table($table)->distinct($column)->where($where)->count();
    }

    public function get_count($table, $where) {
        return DB::table($table)->where($where)->count();
    }

    public function get_count1($table, $select) {
        return DB::table($table)->count();
    }

    public function get_total() {
        return DB::table('orderdetail')->sum('total');
    }

    public function get_balance_sum($table, $field, $where) {
        return DB::table($table)->where($where)->sum($field);
    }

}
