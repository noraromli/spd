@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <button type="button" class="close" data-dissmiss="alert">
            <span>&times;</span>
        </button>
    </div>
  @endif

  @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
        <button type="button" class="close" data-dissmiss="alert">
            <span>&times;</span>
        </button>
    </div>
  @endif

