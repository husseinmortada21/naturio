@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="p-8">
  <h1 class="text-3xl font-bold text-green-700 mb-4">Welcome to the Admin Dashboard</h1>
  <p class="text-gray-600 mb-8">Manage your store's products, services, and analytics from here.</p>

  <!-- Stats Boxes -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-between">
      <div class="text-lg font-semibold text-gray-800">Products</div>
      <div class="text-3xl font-bold text-green-700">{{ $productsCount }}</div>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-between">
      <div class="text-lg font-semibold text-gray-800">Services</div>
      <div class="text-3xl font-bold text-green-700">{{ $servicesCount }}</div>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-between">
      <div class="text-lg font-semibold text-gray-800">Appointments</div>
      <div class="text-3xl font-bold text-green-700">{{ $appointmentsCount }}</div>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-between">
      <div class="text-lg font-semibold text-gray-800">Orders</div>
      <div class="text-3xl font-bold text-green-700">{{ $ordersCount }}</div>
    </div>
  </div>

  <!-- Analytics Section -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

    <!-- Doughnut Chart for Analytics Overview -->
    <div class="bg-white shadow-lg rounded-lg p-6">
      <h3 class="text-xl font-semibold text-gray-800 mb-4">Analytics Overview</h3>
      <canvas id="doughnutChart" style="height: 300px;"></canvas> <!-- Placeholder for the chart -->
    </div>

    <!-- Other Analytics Section -->
    <div class="bg-white shadow-lg rounded-lg p-6">
      <h3 class="text-xl font-semibold text-gray-800 mb-4">Other Analytics</h3>
      <!-- You can add another chart here -->
    </div>

  </div>
</div>

@endsection

@push('scripts')
<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  // Doughnut Chart for Analytics Overview
  var ctx = document.getElementById('doughnutChart').getContext('2d');
  var doughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Products', 'Services', 'Appointments', 'Feedbacks'],
      datasets: [{
        label: 'Analytics Overview',
        data: [{{ $productsCount }}, {{ $servicesCount }}, {{ $appointmentsCount }}, {{ $feedbacksCount }}],
        backgroundColor: ['#4CAF50', '#FFC107', '#00B0FF', '#FF4081'],
        borderWidth: 1,
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      cutoutPercentage: 70,  // makes the doughnut's hole bigger
      plugins: {
        legend: {
          position: 'top',
        },
        tooltip: {
          callbacks: {
            label: function(tooltipItem) {
              return tooltipItem.label + ': ' + tooltipItem.raw;
            }
          }
        }
      }
    }
  });
</script>
@endpush
