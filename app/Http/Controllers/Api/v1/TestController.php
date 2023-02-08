<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Resources\Ver1\Tests as TestsResource;
use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function single(Test $test){
        return new TestsResource($test);
    }
}
