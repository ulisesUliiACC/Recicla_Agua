@if ($exception instanceof Spatie\Permission\Exceptions\UnauthorizedException)

    <p>No tienes los permisos necesarios para acceder a este recurso.</p>

    @if (!empty($requiredRoles))
        <p>Roles necesarios: {{ implode(', ', $requiredRoles) }}</p>
    @endif

    @if (!empty($requiredPermissions))
        <p>Permisos necesarios: {{ implode(', ', $requiredPermissions) }}</p>
    @endif

@endif
<script>
  setTimeout(function() {
      window.location.href = "{{ route('dashboard') }}";
  }, 5000);
</script>
