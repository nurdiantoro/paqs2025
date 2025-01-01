@if ($record->proof_of_payment != null)
    <img src="{{ asset('storage/' . $record->proof_of_payment) }}" alt="">
@else
    <p>No image</p>
@endif
