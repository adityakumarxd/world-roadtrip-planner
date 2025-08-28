<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Road Trip Planner</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: #1a1a2e;
      color: #eaeaea;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background: #16213e;
    }
    .navbar-brand {
      font-weight: 700;
      font-size: 1.6rem;
      color: #00adb5 !important;
    }
    a.btn-primary {
      background: #00adb5;
      border: none;
      transition: background-color 0.3s;
    }
    a.btn-primary:hover {
      background-color: #00959e;
    }
    .card {
      background: #0f3460;
      border-radius: 12px;
      border-left: 8px solid #00adb5;
      transition: transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 7px 14px rgba(0, 173, 181, 0.2);
    }
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 15px 25px rgba(0, 173, 181, 0.4);
    }
    .card-title {
      color: #00f5d4;
      font-weight: 800;
    }
    .badge-cool {
      background: #00f5d4;
      color: #16213e;
      font-weight: 600;
      padding: 0.35em 0.7em;
      border-radius: 20px;
      box-shadow: 0 2px 5px #00adb5;
    }
    p.text-muted {
      color: #7f8c8d;
      font-style: italic;
    }
    /* Custom scrollbar for fun */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-thumb {
      background: #00adb5;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-track {
      background: #1a1a2e;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/trips') }}">Road Trip Planner</a>
    </div>
  </nav>

  <div class="container my-4">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
