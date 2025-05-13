<!DOCTYPE html>
<html>
<head>
    <title>Fare Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Fare Search</h2>

    <form method="GET" action="{{ route('search') }}" class="row g-3 mb-4">
        <div class="col-md-4">
            <input type="text" name="vcMNEMONIC" value="{{ request('vcMNEMONIC') }}" class="form-control" placeholder="Search by MNEMONIC">
        </div>
        <div class="col-md-4">
            <input type="number" name="inZONE_ID" value="{{ request('inZONE_ID') }}" class="form-control" placeholder="Search by ZONE ID">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    @if ($directions->count())
        <ul class="nav nav-tabs" id="directionTab" role="tablist">
            @foreach ($directions as $direction)
                <li class="nav-item" role="presentation">
                    <button class="nav-link @if($loop->first) active @endif"
                            id="tab-{{ $direction->inTAG }}"
                            data-bs-toggle="tab"
                            data-bs-target="#content-{{ $direction->inTAG }}"
                            type="button"
                            role="tab">
                        {{ $direction->vcDIRECTION_NAME }}
                    </button>
                </li>
            @endforeach
        </ul>

        <div class="tab-content mt-3">
            @foreach ($directions as $direction)
                <div class="tab-pane fade @if($loop->first) show active @endif"
                     id="content-{{ $direction->inTAG }}"
                     role="tabpanel">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>MNEMONIC</th>
                            <th>ZONE ID</th>
                            <th>SERVICE TYPE</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($fares[$direction->inTAG] ?? [] as $fare)
                            <tr>
                                <td>{{ $fare->vcMNEMONIC }}</td>
                                <td>{{ $fare->inZONE_ID }}</td>
                                <td>{{ $fare->inSERVICE_TYPE }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No records found.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
