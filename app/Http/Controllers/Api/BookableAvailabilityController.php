<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bookable;
use Illuminate\Http\Request;

class BookableAvailabilityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id, Request $request)
    {
        // 驗證錯誤 有錯誤 422
        $data = $request->validate([
            'from' => 'required|date_format:Y-m-d|after_or_equal:now',
            'to' => 'required|date_format:Y-m-d|after_or_equal:from',
        ]);
        // var_dump($validated);
        // 從資料庫 取得資料

        
        $bookable = Bookable::findOrFail($id);
        // Booking 的 scopeBetweenDates 
        // dd($bookable->bookings()->betweenDates($data['from'], $data['to'])->count());
        // dd($bookable->availableFor($data['from'], $data['to']));
        return $bookable->availableFor($data['from'], $data['to'])
            ? response()->json([])
            : response()->json([], 404);
    }
}
