<?php

namespace ProcessMaker\Package\WebEntry\Http\Controllers;

use Illuminate\Http\Request;
use ProcessMaker\Http\Controllers\Controller;
use ProcessMaker\Http\Resources\ApiCollection;
use ProcessMaker\Package\WebEntry\Models\WebEntryRoute;
use RBAC;
use URL;

class WebEntryController extends Controller
{
    public function index()
    {
        return view('webentry::index');
    }

    public function fetch(Request $request)
    {
        $query = WebEntryRoute::query();

        $filter = $request->input('filter', '');
        if (!empty($filter)) {
            $filter = '%' . $filter . '%';
            $query->where(function ($query) use ($filter) {
                $query->Where('name', 'like', $filter);
            });
        }

        $order_by = $request->has('order_by') ? $order_by = $request->get('order_by') : 'name';
        $order_direction = $request->has('order_direction') ? $request->get('order_direction') : 'ASC';

        $response =
            $query->orderBy(
                $request->input('order_by', $order_by),
                $request->input('order_direction', $order_direction)
            )->paginate($request->input('per_page', 10));

        return new ApiCollection($response);
    }

    public function store(Request $request)
    {
        $sample = new WebEntryRoute();
        $sample->fill($request->json()->all());
        $sample->saveOrFail();

        return $sample;
    }

    public function update(Request $request, $license_generator)
    {
        WebEntryRoute::where('id', $license_generator)->update([
            'name' => $request->get('name'),
            'status' => $request->get('status'),
        ]);

        return response([], 204);
    }

    public function destroy($license_generator)
    {
        WebEntryRoute::find($license_generator)->delete();

        return response([], 204);
    }

    public function generate($license_generator)
    {
    }
}
