<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
class NotificationController extends Controller
{
    /**
     * use App\Notification
     */
    public function setNotification(Request $request){
        $validatedData = $request->validate([
            'notification' => 'required',
        ]);

        $note = new Notification();
        $note->notification = request('notification');
        $note->save();

        return redirect()->back();
    }
    
    /**
     * @return array
     */
    public function getAllNotificatiion(){
        $note = Notification::all();
        return view('user.notificationsforusers',['notes' => $note]);

    }

    public function getAllNotificationsForAdmin(){
        $note = Notification::all();
        return view('admin.adminallnotifications',['notifications' => $note]);
    }

    public function destroyNotification($id){
        $note = Notification::find($id);
        $note->delete();
        return redirect()->back();
    }

}
