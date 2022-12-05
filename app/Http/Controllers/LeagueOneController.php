<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panasonic;
use App\Models\Canon;
use App\Models\Kintetsu;
use App\Models\Kobe;
use App\Models\Mitsubishi;
use App\Models\NEC;
use App\Models\Riko;
use App\Models\Shizuoka;
use App\Models\Suntory;
use App\Models\Toshiba;

class LeagueOneController extends Controller
{
    public function top(){
        return view('LeagueOne.top');
    }

    public function japan(){
        $Panasonics = Panasonic::where('team', '埼玉パナソニックワイルドナイツ')->get();
        $Suntoties = Suntory::where('team', '東京サントリーサンゴリアス')->get();
        $Toshibas = Toshiba::where('team', '東芝ブレイブルーパス東京')->get();

        foreach($Panasonics as $Panasonic => $value){
            if($value->position == 'PR'){
                $PRs[] = $value->name;
            }elseif($value->position == 'HO'){
                $HOs[] = $value->name;
            }elseif($value->position == 'LO' && $value->position == 'LO/FL' && $value->position == 'LO/FL/No.8'){
                $LOs[] = $value->name;
            }elseif($value->position =='FL' && $value->position == 'FL/No.8' && $value->position == 'LO/FL' && $value->position == 'LO/FL/No.8'){
                $FLs[] = $value->name;
            }elseif($value->postion == 'No.8' && $value->position == 'FL/No.8' && $value->position == 'LO/FL/No.8'){
                $No8s[] = $value->name;
            }elseif($value->position == 'SH'){
                $SHs[] = $value->name;
            }elseif($value->position == 'SO' && $value->position == 'SO/FB' && $value->position == 'FB/SO/CTB' && $value->positin == 'SO/CTB/FB' && $value->position == 'WTB/SO/FB'){
                $SOs[] = $value->name;
            }elseif($value->position == 'CTB' && $value->position == 'SO/CTB/FB' && $value->position == 'CTB/WTB' && $value->position == 'FB/SO/CTB' && $value->position == 'WTB/CTB'){
                $CTBs[] = $value->name;
            }elseif($value->position == 'WTB' && $value->position == 'WTB/FB' && $value->position =='WTB/SO/FB' && $value->position == 'CTB/WTB'){
                $WTBs[] = $value->name;
            }elseif($value->position == 'FB' && $value->position == 'FB/WTB' && $value->position == 'SO$/FB' && $value->position == 'FB/SO/CTB' &&'SO/CTB/FB' && $value->position == 'WTB/SO/FB' && $value->position == 'FB/SO/CTB' && $value->position == 'WTB/FB' && $value->position =='WTB/SO/FB'){
                $FBs[] = $value->name;
            }
        }

        return view('LeagueOne.japan');
    }
}
