@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <h3>Payment Details</h3>
            <hr>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
              <h3>{{ $student->studentName }}</h3>

              @if($student->payment)  <!-- Check if the student has payment details -->
                  <p><strong>Payment Method:</strong> {{ $student->payment->payment_method }}</p>
                  <p><strong>Payment Status:</strong> {{ $student->payment->status }}</p>
                  <p><strong>Amount Paid:</strong> ${{ number_format($student->payment->amount, 2) }}</p>
                  <p><strong>Paid At:</strong> {{ $student->payment->paid_at->format('d-m-Y H:i:s') }}</p>
              @else
                  <p>No payment information available.</p>
              @endif
        </div>
    </div>
</div>
@endsection
