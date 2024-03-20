<div class="columns-box columns-box--two-col">
    @isset($korp_razv_contacts)
        <x-contacts.investo-contacts-element :item="$korp_razv_contacts"></x-contacts.investo-contacts-element>
    @endisset

    @isset($min_ec_contacts)
        <x-contacts.investo-contacts-element :item="$min_ec_contacts"></x-contacts.investo-contacts-element>
    @endisset
</div>

