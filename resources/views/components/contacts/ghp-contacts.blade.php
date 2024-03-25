<div class="contacts_card_wrapper">
    @foreach ($ghp_contacts as $item)
        <x-contacts.text-card :item="$item"></x-contacts.text-card>
    @endforeach
</div>
