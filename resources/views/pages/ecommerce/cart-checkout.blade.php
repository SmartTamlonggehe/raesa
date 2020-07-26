@extends ('layouts.app')

@section('content')
<!-- START: ecommerce/cart-checkout -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Cart / Checkout</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="cui-ecommerce-cart">
      <div id="cart-checkout" class="wizard mb-5">
        <h3>
          <i class="icmn-cart wizard-steps-icon"></i>
          <span class="wizard-steps-title">Cart</span>
        </h3>
        <section>
          <h3 class="d-none">Cart / Checkout</h3>
          <div>
            <table class="table table-hover text-right">
              <thead class="thead-default">
                <tr>
                  <th class="text-center">#</th>
                  <th>Description</th>
                  <th class="text-right">Quantity</th>
                  <th class="text-right">Unit Cost</th>
                  <th class="text-right">Total</th>
                  <th><!-- --></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td class="text-left">
                    <a href="javascript: void(0);" class="cui-utils-link-underlined"
                      >Server hardware purchase</a
                    >
                  </td>
                  <td class="text-right">
                    <input type="text" class="form-control width-50" value="2" />
                  </td>
                  <td class="text-right">$75.00</td>
                  <td>$2,152.00</td>
                  <td>
                    <a href="javascript: void(0);" class="cui-utils-link-underlined"
                      ><i class="icmn-cross2"><!-- --></i> Remove</a
                    >
                  </td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td class="text-left">
                    <a href="javascript: void(0);" class="cui-utils-link-underlined"
                      >Office furniture purchase</a
                    >
                  </td>
                  <td class="text-right">
                    <input type="text" class="form-control width-50" value="3" />
                  </td>
                  <td class="text-right">$169.00</td>
                  <td>$4,169.00</td>
                  <td>
                    <a href="javascript: void(0);" class="cui-utils-link-underlined"
                      ><i class="icmn-cross2"><!-- --></i> Remove</a
                    >
                  </td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td class="text-left">
                    <a href="javascript: void(0);" class="cui-utils-link-underlined"
                      >Company Anual Dinner Catering</a
                    >
                  </td>
                  <td class="text-right">
                    <input type="text" class="form-control width-50" value="14" />
                  </td>
                  <td class="text-right">$49.00</td>
                  <td>$1,260.00</td>
                  <td>
                    <a href="javascript: void(0);" class="cui-utils-link-underlined"
                      ><i class="icmn-cross2"><!-- --></i> Remove</a
                    >
                  </td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td class="text-left">
                    <a href="javascript: void(0);" class="cui-utils-link-underlined"
                      >Payment for Jan 2016</a
                    >
                  </td>
                  <td class="text-right">
                    <input type="text" class="form-control width-50" value="10" />
                  </td>
                  <td class="text-right">$12.00</td>
                  <td>$866.00</td>
                  <td>
                    <a href="javascript: void(0);" class="cui-utils-link-underlined"
                      ><i class="icmn-cross2"><!-- --></i> Remove</a
                    >
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="text-right clearfix">
            <div class="pull-right">
              <p>
                Sub - Total amount: <strong><span>$5,700.00</span></strong>
              </p>
              <p>
                VAT: <strong><span>$57.00</span></strong>
              </p>
              <p class="page-invoice-amount">
                <strong>Grand Total: <span>$5,757.00</span></strong>
              </p>
              <br />
            </div>
          </div>
        </section>

        <h3>
          <i class="icmn-price-tag wizard-steps-icon"></i>
          <span class="wizard-steps-title">Shipment / Billing Info</span>
        </h3>
        <section>
          <div class="row">
            <div class="col-md-8">
              <form>
                <h4 class="text-black mb-3">
                  <strong>Shipment Details</strong>
                </h4>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="l31">Email</label>
                      <input
                        type="text"
                        class="form-control"
                        id="l31"
                        placeholder="Email"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="l32">Phone Number</label>
                      <input
                        type="text"
                        class="form-control"
                        id="l32"
                        placeholder="Phone Number"
                        required=""
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="l33">Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="l33"
                        placeholder="Name"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="l34">Surname</label>
                      <input
                        type="text"
                        class="form-control"
                        id="l34"
                        placeholder="Surname"
                        required=""
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="l35">City</label>
                  <input type="text" class="form-control" id="l35" placeholder="City" required="" />
                </div>
                <div class="form-group">
                  <label for="l36">Address</label>
                  <input
                    type="text"
                    class="form-control mb-3"
                    id="l36"
                    placeholder="Address"
                    required=""
                  />
                  <input type="text" class="form-control" placeholder="Address" required="" />
                </div>

                <br />
                <br />

                <h4 class="text-black mb-3">
                  <strong>Billing Details</strong>
                </h4>
                <div class="form-group">
                  <label for="l41">Card Number</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="icmn-credit-card"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Card Number" id="l41" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="l44">Expiration Date</label>
                      <input
                        type="text"
                        class="form-control"
                        id="l44"
                        placeholder="MM / YY"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-md-5 pull-right">
                    <div class="form-group">
                      <label for="l43">CVC Code</label>
                      <input
                        type="text"
                        class="form-control"
                        id="l43"
                        placeholder="CVC"
                        required=""
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="l42">Card Name</label>
                  <input type="text" class="form-control" id="l42" placeholder="Name and Surname" />
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <h4 class="text-black mb-3">
                <strong>General Info</strong>
              </h4>
              <div class="font-size-24">
                <i class="fa fa-cc-visa text-primary"></i>
                <i class="fa fa-cc-mastercard text-default"></i>
                <i class="fa fa-cc-amex text-default"></i>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
              </p>
              <p>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </p>
            </div>
          </div>
        </section>

        <h3>
          <i class="icmn-checkmark wizard-steps-icon"></i>
          <span class="wizard-steps-title">Confirmation</span>
        </h3>
        <section>
          <div class="invoice-block">
            <div class="row">
              <div class="col-md-6">
                <h4>
                  <img
                    src="/cleanui/components/ecommerce/common/img/amazon.jpg"
                    height="50"
                    alt="Amazon"
                  />
                </h4>
                <address>
                  795 Folsom Ave, Suite 600
                  <br />
                  San Francisco, CA, 94107
                  <br />
                  <abbr title="Mail">E-mail:</abbr>&nbsp;&nbsp;example@amazon.com
                  <br />
                  <abbr title="Phone">Phone:</abbr>&nbsp;&nbsp;(123) 456-7890
                  <br />
                  <abbr title="Fax">Fax:</abbr>&nbsp;&nbsp;800-692-7753
                  <br />
                  <br />
                </address>
              </div>
              <div class="col-md-6 text-right">
                <p>
                  <a class="font-size-20" href="javascript:void(0)">W32567-2352-4756</a>
                  <br />
                  <span class="font-size-20">Artour Arteezy</span>
                </p>
                <address>
                  795 Folsom Ave, Suite 600
                  <br />
                  San Francisco, CA, 94107
                  <br />
                  <abbr title="Phone">P:</abbr>&nbsp;&nbsp;(123) 456-7890
                  <br />
                </address>
                <span>Invoice Date: January 20, 2016</span>
                <br />
                <span>Due Date: January 22, 2016</span>
                <br />
                <br />
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover text-right">
                <thead class="thead-default">
                  <tr>
                    <th class="text-center">#</th>
                    <th>Description</th>
                    <th class="text-right">Quantity</th>
                    <th class="text-right">Unit Cost</th>
                    <th class="text-right">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td class="text-left">Server hardware purchase</td>
                    <td>35</td>
                    <td>$75.00</td>
                    <td>$2,152.00</td>
                  </tr>
                  <tr>
                    <td class="text-center">2</td>
                    <td class="text-left">Office furniture purchase</td>
                    <td>21</td>
                    <td>$169.00</td>
                    <td>$4,169.00</td>
                  </tr>
                  <tr>
                    <td class="text-center">3</td>
                    <td class="text-left">Company Anual Dinner Catering</td>
                    <td>58</td>
                    <td>$49.00</td>
                    <td>$1,260.00</td>
                  </tr>
                  <tr>
                    <td class="text-center">4</td>
                    <td class="text-left">Payment for Jan 2016</td>
                    <td>231</td>
                    <td>$12.00</td>
                    <td>$866.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-right clearfix">
              <div class="pull-left">
                <button type="button" class="btn btn-default-outline mt-4">
                  <i class="icmn-printer"></i>
                  Print
                </button>
              </div>
              <div class="pull-right">
                <p>
                  Sub - Total amount: <strong><span>$5,700.00</span></strong>
                </p>
                <p>
                  VAT: <strong><span>$57.00</span></strong>
                </p>
                <p class="page-invoice-amount">
                  <strong>Grand Total: <span>$5,757.00</span></strong>
                </p>
                <br />
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<!-- END: ecommerce/cart-checkout -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('#cart-checkout').steps({
        headerTag: 'h3',
        bodyTag: 'section',
        transitionEffect: 0,
        autoFocus: true,
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection