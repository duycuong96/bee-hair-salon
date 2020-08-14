<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Province;
use App\Models\District;
use App\Models\Ward;

class AddressService
{
    use WebResponseTrait;

    public function getProvince($code)
    {
        $provinceQuery = Province::query();
        if (!empty($code)) {
            $provinceQuery->where('code', $code);
        }
        return $provinceQuery->get();
    }

    public function getDistrict($code, $provinceCode)
    {
        $districtQuery = District::query();
        if (!empty($code)) {
            $districtQuery->where('code', $code);
        }

        if (!empty($provinceCode)) {
            $districtQuery->where('province_code', $provinceCode);
        }
        return $districtQuery->get();
    }

    public function getWard($code, $districtCode)
    {
        $wardQuery = Ward::query();
        if (!empty($code)) {
            $wardQuery->where('code', $code);
        }

        if (!empty($districtCode)) {
            $wardQuery->where('district_code', $districtCode);
        }
        return $wardQuery->get();
    }

    public function getWardByCode($code)
    {
        return Ward::find($code);
    }

}
