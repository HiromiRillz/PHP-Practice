<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    use HasFactory;

    public function selectAll(){
        $query = \DB::table('product')->select('id','name','price','stock')->get();
        return $query;
    }
}

?>
