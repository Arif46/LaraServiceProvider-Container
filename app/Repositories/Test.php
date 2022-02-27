<?php
namespace App\Repositories;
use Illuminate\Support\Facades\Facade;
use App\Repositories\Jogfol;

class Test extends Facade 
{
  protected static function getFacadeAccessor()
  {
    return 'jogfal';
  }
}

?>