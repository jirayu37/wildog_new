@component('mail::message')
# อัพเดทรายกานลูกค้า

รห้ส : {{ $user->id }}

ชื่อ : {{ $user->firstname }}  {{ $user->lastname }}

เบอร์ติดต่อ : {{ $user->phone }}


@component('mail::button', ['url' => 'http://localhost:8000/admin/dashboard'])
คลิก
@endcomponent


@endcomponent
