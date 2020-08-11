<?php
namespace App\Services\Admin;

use App\Models\Contact;
use App\Traits\WebResponseTrait;
use App\Models\Review;

class ContactService
{
    use WebResponseTrait;
    public function index($request)
    {
        $builder = Contact::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::contact.index',
            ['data' => $data]
        );
    }

    public function show($id)
    {
        $data = Contact::find($id);
        if (empty($data)) {
            return $this->returnSuccessWithRoute('admin.lien-he.index', __('messages.data_not_found'));
        }
        return view(
            'admin::contact.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        $contact = Contact::find($id);

        if (empty($contact)) {
            return $this->returnSuccessWithRoute('admin.lien-he.index', __('messages.data_update_failed'));
        } else {
            $contact->update($request->input());
            return $this->returnSuccessWithRoute('admin.lien-he.index', __('messages.data_update_success'));
        }

    }

}
