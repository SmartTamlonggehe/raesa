@extends ('layouts.app')

@section('content')
<!-- START: forms/input-mask -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Input Mask</strong>
      <a
        href="http://igorescobar.github.io/jQuery-Mask-Plugin/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <h5 class="text-black"><strong>Mask on Form Fields</strong></h5>
    <p class="text-muted">
      Element: read
      <a href="http://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank"
        >official documentation<small
          ><i class="icmn-link ml-1"><!-- --></i></small
        ></a
      >
    </p>
    <div class="row">
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="date-mask-input">Date</label>
          <input type="text" class="form-control" id="date-mask-input" />
          <small class="text-muted">Date mask input: 00/00/0000</small>
        </fieldset>
      </div>
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="time-mask-input">Time</label>
          <input type="text" class="form-control" id="time-mask-input" />
          <small class="text-muted">Time mask input: 00:00:00</small>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="date-and-time-mask-input">Date and Time</label>
          <input type="text" class="form-control" id="date-and-time-mask-input" />
          <small class="text-muted">Date and Time mask input: 00/00/0000 00:00:00</small>
        </fieldset>
      </div>
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="zip-code-mask-input">Zip Code</label>
          <input type="text" class="form-control" id="zip-code-mask-input" />
          <small class="text-muted">Zip Code mask input: 00000-000</small>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="money-mask-input">Money</label>
          <input type="text" class="form-control" id="money-mask-input" />
          <small class="text-muted">Money mask input: 000.000.000.000.000,00</small>
        </fieldset>
      </div>
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="phone-mask-input">Phone</label>
          <input type="text" class="form-control" id="phone-mask-input" />
          <small class="text-muted">Phone mask input: 0000-0000</small>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="phone-with-code-area-mask-input"
            >Phone with Code Area</label
          >
          <input type="text" class="form-control" id="phone-with-code-area-mask-input" />
          <small class="text-muted">Phone with code area mask input: (00) 0000-0000</small>
        </fieldset>
      </div>
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="us-phone-mask-input">US Phone</label>
          <input type="text" class="form-control" id="us-phone-mask-input" />
          <small class="text-muted">US phone mask input: (000) 000-0000</small>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="ip-address-mask-input">IP Address</label>
          <input type="text" class="form-control" id="ip-address-mask-input" />
          <small class="text-muted">IP Address mask input: 099.099.099.099</small>
        </fieldset>
      </div>
      <div class="col-lg-6">
        <fieldset class="form-group">
          <label class="form-label" for="mixed-mask-input">Mixed</label>
          <input type="text" class="form-control" id="mixed-mask-input" />
          <small class="text-muted">Mixed mask input: AAA 000-S0S</small>
        </fieldset>
      </div>
    </div>
  </div>
</section>
<!-- END: forms/input-mask -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('#date-mask-input').mask('00/00/0000', { placeholder: '__/__/____' })
      $('#time-mask-input').mask('00:00:00', { placeholder: '__:__:__' })
      $('#date-and-time-mask-input').mask('00/00/0000 00:00:00', {
        placeholder: '__/__/____ __:__:__',
      })
      $('#zip-code-mask-input').mask('00000-000', { placeholder: '_____-___' })
      $('#money-mask-input').mask('000.000.000.000.000,00', { reverse: true })
      $('#phone-mask-input').mask('0000-0000', { placeholder: '____-____' })
      $('#phone-with-code-area-mask-input').mask('(00) 0000-0000', {
        placeholder: '(__) ____-____',
      })
      $('#us-phone-mask-input').mask('(000) 000-0000', { placeholder: '(___) ___-____' })
      $('#ip-address-mask-input').mask('099.099.099.099')
      $('#mixed-mask-input').mask('AAA 000-S0S')
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection