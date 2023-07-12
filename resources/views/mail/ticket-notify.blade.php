{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMN RadioActive 2023</title>
</head>

<body>
    <h3>Dear {{ $data['receiver'] }},</h3>
    <p>We are delighted to inform you that your ticket booking has been successfully processed. Your tickets for the
        upcoming event have been issued and are ready for use. Please find the details below:</p>

    <p>Event: UMN RadioActive 2023</p>
    <p>Date: [Tanggal Acara]</p>
    <p>Time: [Waktu Acara]</p>
    <p>Venue: Lapangan Parkir UMN</p>

    <h3>Ticket Details:</h3>
    <p>Ticket Type: {{ $data['ticket_type'] }}</p>
    <p> Quantity: {{ $data['quantity'] }}</p>

    <p>Booking Reference/Confirmation Number: {{ $data['ticket_code'] }}
        Please make a note of this number as it will be required for any further inquiries or changes to your booking.
    </p>
    <p>If you have any questions or need assistance, please don't hesitate to contact our customer support team at
        [Nomor Telepon] or [Alamat Email]. We are available to assist you from [Jam Operasional].

        Thank you for choosing our services. We look forward to seeing you at the event!
    </p>
    <p>Best regards,</p>
    <p>PanPan</p>
    <p>Boneka Gemas, UMN Radio</p>
    <p>+62 812 2198 4829</p>
</body>

</html>
