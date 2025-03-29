@extends('layouts.admin')

@section('title', 'Support Center')

@section('content')
<div class="p-6">
  <h1 class="text-2xl font-bold mb-6">Appointment Requests</h1>

  @if($appointments->isEmpty())
    <p class="text-gray-600">No appointments found.</p>
  @else
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white shadow rounded overflow-hidden">
        <thead class="bg-green-700 text-white text-sm text-left">
          <tr>
            <th class="p-4">Name</th>
            <th class="p-4">Phone</th>
            <th class="p-4">Email</th>
            <th class="p-4">Date</th>
            <th class="p-4">Time</th>
            <th class="p-4">Services</th>
            <th class="p-4">Message</th>
          </tr>
        </thead>
        <tbody class="text-sm text-gray-800">
          @foreach ($appointments as $appointment)
            <tr class="border-b hover:bg-gray-100">
              <td class="p-4">{{ $appointment->name }}</td>
              <td class="p-4">{{ $appointment->phone }}</td>
              <td class="p-4">{{ $appointment->email }}</td>
              <td class="p-4">{{ $appointment->appointment_date }}</td>
              <td class="p-4">{{ $appointment->appointment_time }}</td>
              <td class="p-4">
                <ul class="list-disc pl-4">
                  @foreach (json_decode($appointment->services ?? '[]', true) ?? [] as $service)
                    <li>{{ $service }}</li>
                  @endforeach
                </ul>
              </td>
              <td class="p-4">{{ $appointment->message }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
</div>
@endsection
