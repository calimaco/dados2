<!-- card.blade.php -->

<div class="col-xl-3 col-sm-6" style="margin: 0 0 0.7rem 0;">
    <div class="card">
      <div class="card-body p-3">
        <div class="card-row">
          <div class="col-8">
            <div class="numbers">
              <p id="card-title" class="text-sm mb-0 font-weight-bold">{{ $title }}</p>
              <h5 class="font-weight-bolder mb-0">{{ $value }}</h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
              <i class="ni {{ $iconClass }} text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>