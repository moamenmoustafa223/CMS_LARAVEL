<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedule = Schedule::get();
        return view('admin.schedule',compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'day'     => 'required',
            'open'     => 'required|date_format:H:i',
            'close'     => 'required|date_format:H:i',
        ]);

        $post = Schedule::findOrFail($id);
        $post->update([
            'day'     => $request->day,
            'open'     => $request->open,
            'close'     => $request->close,
        ]);

        return redirect()->route('schedule.index')->with('success', 'Berhasil Update Schedule');
    }

}
