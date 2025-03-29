<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') - Admin | Naturio</title>

  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  
  <style>
  
    .sidebar {
      transition: transform 0.3s ease;
      width: 250px;
      background-color: #1e2a47; 
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
    }

    .sidebar.collapsed {
      transform: translateX(-100%);
    }

    .sidebar a {
      transition: background-color 0.2s ease;
    }

    .sidebar a:hover {
      background-color: #1c2b49;
    }

    .sidebar .logo {
      font-size: 1.25rem;
      font-weight: 700;
      color: white;
    }

    .sidebar i {
      transition: color 0.2s ease;
    }

    .sidebar a:hover i {
      color: #fff;
    }

    .sidebar .menu-item {
      padding: 12px;
      border-radius: 8px;
    }

    .sidebar .menu-header {
      padding: 16px;
      text-transform: uppercase;
      font-weight: bold;
      color: rgba(255, 255, 255, 0.7);
      letter-spacing: 0.5px;
    }

  
    body {
      background-color: #f8f9fa;
    }

    
    main {
      background-color: #ffffff;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    /* Responsive styling for sidebar collapse */
    @media (max-width: 768px) {
      .sidebar {
        width: 0;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        transition: width 0.3s ease;
      }

      .sidebar.collapsed {
        width: 0;
      }

      .sidebar .menu-item {
        padding: 10px 16px;
        text-align: left;
      }

      .sidebar .menu-header {
        padding: 12px;
        font-size: 1rem;
      }
    }
  </style>
</head>

<body class="font-sans bg-gray-100">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="sidebar bg-green-700 text-white flex flex-col overflow-y-auto">
      <div class="p-6 flex justify-between items-center">
        <div class="logo">
          Naturio Admin
        </div>
        <button id="toggleSidebar" class="text-white md:hidden focus:outline-none">
          <i class="fas fa-bars"></i>
        </button>
      </div>
      
      <nav class="flex flex-col gap-2 px-6">
        <div class="menu-header">Main</div>
        <a href="{{ route('admin.dashboard') }}" class="menu-item hover:bg-green-800 flex items-center gap-2">
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{ route('admin.products.index') }}" class="menu-item hover:bg-green-800 flex items-center gap-2">
          <i class="fas fa-box"></i> Products
        </a>
        <a href="{{ route('admin.services.index') }}" class="menu-item hover:bg-green-800 flex items-center gap-2">
          <i class="fas fa-spa"></i> Services
        </a>

        <div class="menu-header">Admin</div>
        <a href="{{ route('admin.products.create') }}" class="menu-item hover:bg-green-800 flex items-center gap-2">
          <i class="fas fa-plus-circle"></i> Add Product
        </a>
        <a href="{{ route('admin.support') }}" class="menu-item hover:bg-green-800 flex items-center gap-2">
          <i class="fas fa-headset"></i> Support Center
        </a>

        <div class="menu-header">Other</div>
        <a href="{{ route('home') }}" class="menu-item hover:bg-green-800 flex items-center gap-2">
          <i class="fas fa-store"></i> View Website
        </a>
      </nav>
    </aside>

    
    <main class="flex-1 p-6 overflow-y-auto">
      @yield('content')
    </main>
  </div>

  <script>
   
    document.getElementById('toggleSidebar').addEventListener('click', function () {
      document.querySelector('aside').classList.toggle('collapsed');
    });
  </script>
</body>

</html>
