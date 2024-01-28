@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="row">
  <div class="col-md mb-md-0 mb-2">
    <div class="form-check custom-option custom-option-icon">
      <label class="form-check-label custom-option-content" for="customRadioSvg1">
        <span class="custom-option-body">
          <svg></svg>
          <span class="custom-option-title"> Design </span>
          <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
        </span>
        <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg1" checked />
      </label>
    </div>
  </div>
  <div class="col-md mb-md-0 mb-2">
    <div class="form-check custom-option custom-option-icon">
      <label class="form-check-label custom-option-content" for="customRadioSvg2">
        <span class="custom-option-body">
          <svg></svg>
          <span class="custom-option-title"> Development </span>
          <small> Cake sugar plum fruitcake I love sweet roll jelly-o. </small>
        </span>
        <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg2" />
      </label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-check custom-option custom-option-icon">
      <label class="form-check-label custom-option-content" for="customRadioSvg3">
        <span class="custom-option-body">
          <svg></svg>
          <span class="custom-option-title"> Native App </span>
          <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
        </span>
        <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3" />
      </label>
    </div>
  </div>
</div>


@endsection
