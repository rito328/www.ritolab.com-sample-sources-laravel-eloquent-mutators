<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class SampleController extends Controller
{
    public function index()
    {
        /* sample 01 */
        $members = Member::select(['id','first_name','last_name'])->get();

        // => Array
        //(
        //    [0] => Array
        //        (
        //            [id] => 1
        //            [first_name] => Drew
        //            [last_name] => Luettgen
        //        )
        //
        //    [1] => Array
        //        (
        //            [id] => 2
        //            [first_name] => Sienna
        //            [last_name] => Deckow
        //        )
        //
        //    [2] => Array
        //        (
        //            [id] => 3
        //            [first_name] => Maci
        //            [last_name] => Rohan
        //        )
        //
        //)



        /* sample 02 */
        $members = Member::all();

        $names = [];
        foreach ($members as $member) {
            $names[] = $member->full_name;
        }

        // => Array
        //(
        //    [0] => Drew Luettgen
        //    [1] => Sienna Deckow
        //    [2] => Maci Rohan
        //)



        /* sample 03 */
        $member = new Member();
        $member->first_name = 'Taylor';
        $member->last_name = 'Swift';
        $member->save();



        /* sample 04 */
        $member = new Member();
        $member->first_name = 'William';
        $member->last_name = 'Pitt';
        $member->added_on = now();
        $member->save();



        /* sample 05 */
        $member = Member::find(1);

        // print_r($member->added_on);

        // 指定しない場合
        // 2019-08-27 00:09:04

        // 指定した場合
        // Illuminate\Support\Carbon Object
        //(
        //    [date] => 2019-08-27 00:09:04.000000
        //    [timezone_type] => 3
        //    [timezone] => UTC
        //)



        /* sample 06 */
        $added_on = [
            $member->added_on,
            $member->added_on->getTimestamp(), // => UnixTimestamp
            $member->added_on->subYear(10),    // 10年前
            $member->added_on->addYear(10),    // 10年後
            $member->added_on->subMonth(10),   // 10ヵ月前
            $member->added_on->addMonth(10),   // 10ヵ月後
            $member->added_on->subWeek(10),    // 10週間前
            $member->added_on->addWeek(10),    // 10週間後
            $member->added_on->subDays(10),    // 10日前
            $member->added_on->addDays(10),    // 10日後
            $member->added_on->subHours(10),   // 10時間前
            $member->added_on->addHours(10)    // 10時間後
        ];



        /* sample 07 */
        $member = new Member();
        $member->first_name = 'Winston';
        $member->last_name = 'Churchill';
        $member->added_on = now();
        $member->save();



        /* sample 07 */
        $member = Member::find(1);

        // print_r($member->added_on);
        // => Illuminate\Support\Carbon Object
        //(
        //    [date] => 2019-08-27 00:00:00.000000
        //    [timezone_type] => 3
        //    [timezone] => UTC
        //)
    }
}
