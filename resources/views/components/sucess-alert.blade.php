@if (session('success'))
    <div id="success-alert" class="alert alert-success">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(() => document.getElementById('success-alert')?.remove(), 5000);
    </script>
@endif
