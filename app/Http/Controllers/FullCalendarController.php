<?php

namespace App\Http\Controllers;

use App\Models\Event;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class FullCalendarController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);

            return response()->json($data);
        }

        return view('historydate');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
        switch ($request->type) {
            case 'add':
                $event = Event::create([
                    "user_id"          => Auth::user()->id,
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($event);
                break;

            case 'update':
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);

                return response()->json($event);
                break;

            case 'delete':
                $event = Event::find($request->id)->delete();

                return response()->json($event);
                break;

            default:
                # code...
                break;
        }
    }

    public function events_approve(Request $request)
    {
        $status=$request->status;
        $document = Event::find($request->id);
        $document->status = $status;
        $document->save();
    
        return redirect()->back()->with('success', 'Data berhasil diapprove!');
    }

    public function historydatee()
    {
        $data = Event::get();

        return view('historydate', ['data' => $data]);
    }

    public function logcalendar(Request $req)
    {
        $sort   = $req->sort;
        $search = $req->q;

        $event = DB::table('events')->select('*');


        if (!empty($search)) {
            $event = $event->orWhere([["events.contract_no", "LIKE", "%" . $search . "%"]])
                ->orWhere([["events.sample_name", "LIKE", "%" . $search . "%"]]);
        }

        if (empty($sort)) {
            $event = $event->orderBy("events.id", "desc")->paginate(50);
        } else {
            $event = $event->orderBy("events.id", "desc")->paginate(50);
        }

        return View::make("logcalendar")->with(compact("event"));
    }

    public function events_save(Request $req)
    {

        $req->validate(
            [
                'title'      => 'required',
                'start'      => 'required',
                'end'    => 'required',
                'status'         => 'required',
            ],
            [
                'title.required'     => 'Tanggal belum belum diisi!',
                'start.required'     => 'No Contract belum diisi!',
                'end.required'   => 'Customer belum diisi!',
                'status.required'    => 'Nama Sample belum diisi!',
            ]
        );

        $data = [
            "user_id"          => Auth::user()->id,
            "title"      => $req->title,
            "start"      => $req->start,
            "end"      => $req->end,
            "status"      => $req->status,
        ];


        if (empty($req->id)) {
            $add = DB::table('events')->insertGetId($data);

            if ($add) {
                $req->session()->flash('success', "Data berhasil ditambahkan.");
            } else {
                $req->session()->flash('error', "Data gagal ditambahkan!");
            }
        } else {
            $update = DB::table('events')->where("id", $req->id)->update($data);

            if ($update) {
                $req->session()->flash('success', "Data berhasil diubah.");
            } else {
                $req->session()->flash('error', "Data gagal diubah!");
            }
        }

        return redirect()->back();
    }

    public function events_delete(Request $req)
    {
        $del = DB::table('events')->where("id", $req->delete_id)->delete();

        if ($del) {
            $req->session()->flash('success', "Data berhasil dihapus.");
        } else {
            $req->session()->flash('error', "Data gagal dihapus!");
        }

        return redirect()->back();
    }

}