<?php
namespace App\Services\Admin;

use App\Mail\MailReplyContact;
use App\Models\Contact;
use App\Traits\WebResponseTrait;
use App\Models\Review;
use Illuminate\Support\Facades\Gate;
use Mail;

class ContactService
{
    use WebResponseTrait;
    public function index($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }
        $data = $request->all();
        $data['status'] = 1;
        $contact = Contact::find($id);

        if (empty($contact)) {
            return $this->returnSuccessWithRoute('admin.lien-he.index', __('messages.data_update_failed'));
        } else {
            Mail::to($data['email'])->send(new MailReplyContact($data));
            $contact->update($data);
            return $this->returnSuccessWithRoute('admin.lien-he.index', __('messages.data_update_success'));
        }

    }

}
