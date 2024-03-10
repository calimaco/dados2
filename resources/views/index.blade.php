@extends('layouts.app')

@section('content')

@php
    $cards = [
        [
            'title' => 'GRADUANDOS',
            'value' => 8277,
            'icon_class' => 'ni-collection',
        ],
        [
            'title' => 'PÓS-GRADUANDOS',
            'value' => 1239,
            'icon_class' => 'ni-book-bookmark',
        ],
        [
            'title' => 'DOCENTES',
            'value' => 298,
            'icon_class' => 'ni-badge',
        ],
        [
            'title' => 'BOLSAS',
            'value' => 4399,
            'icon_class' => 'ni-app',
        ],
    ];
@endphp

<div class="card-row">
  @foreach ($cards as $card)
      @include('components.card', [
          'iconClass' => $card['icon_class'],
          'title' => $card['title'],
          'value' => $card['value'],
      ])
  @endforeach
</div>

<!--  -->
<!--  -->
<!--  -->

<div class="row mt-4">
  <div class="col-lg-7">
    <div class="card z-index-2">
      <div class="card-header pb-0">
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="chart-line" class="chart-canvas" height="500"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<!--  -->
<!--  -->
<!--  -->

@endsection

@push('dashboard')
<script>
  
</script>
@endpush