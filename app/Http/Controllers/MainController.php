<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inviter;
use App\Models\Invitee;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function indexInvitation($inviter_name, $inviter_id) {
        $inviter = Inviter::find($inviter_id);
        if ($inviter)
            return view("invitation")->with(compact("inviter"));

        abort(404, 'Not Found');
    }

    public function getInviters() {
        $inviters = Inviter::with("invitees")->get();
        return view("getInviters")->with(compact("inviters"));
    }

    public function vote(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'inviter_id' => 'required',
            'status' => 'required',
        ], [
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => [$validator->errors()->first()]
            ], 200);
        }

        $vote = Invitee::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "inviter_id" => $request->inviter_id,
            "status" => $request->status,
        ]);

        if ($vote)
            return response()->json([
                "status" => true,
                "msg" => "Thanks for your time hope we did not upset you"
        ], 200);
    }
}
