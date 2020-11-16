<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fact;
use App\Models\Regard;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function facts() {
        $title = "TTL - Facts";
        $fact = Fact::first();

        return view('admin.pages.facts.index',[
            'title' => $title,
            'fact' => $fact
        ]);
    }

    public function updateFacts(Request $request, $id) {
        $request->validate([
            'fact_icon1' => 'required',
            'fact_name1' => 'required',
            'fact_count1' => 'required',
            'fact_icon2' => 'required',
            'fact_name2' => 'required',
            'fact_count2' => 'required',
            'fact_icon3' => 'required',
            'fact_name3' => 'required',
            'fact_count3' => 'required',
            'fact_icon4' => 'required',
            'fact_name4' => 'required',
            'fact_count4' => 'required',
        ]);

        Fact::find($id)->update($request->all());

        notify()->info('Facts Updated.', 'Updated!');

        return redirect()->route('facts.index');
    }

    public function regards() {
        $title = "TTL - Regards";
        $regard = Regard::first();

        return view('admin.pages.regards.index', [
            'title' => $title,
            'regard' => $regard
        ]);
    }

    public function updateRegards(Request $request, $id) {
        $request->validate([
            'regards_content' => 'required'
        ]);

        Regard::find($id)->update([
            'regards_content' => $request->regards_content
        ]);

        notify()->info('As Regards Of TTL Updated.', 'Updated!');

        return redirect()->route('regards.index');
    }
}
