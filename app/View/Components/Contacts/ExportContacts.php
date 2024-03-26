<?php

namespace App\View\Components\Contacts;

use Closure;
use App\Models\Contact;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;


class ExportContacts extends Component
{

    public $export_contacts = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->export_contacts = Contact::where('selector', 'Поддержка экспортеров')->get();

        // dd($export_contacts);
        // foreach ($ex_contacts as $item)
        //     $export_contacts[$item->organ] = $item;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contacts.export-contacts');
    }
}
