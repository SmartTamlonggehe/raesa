@extends ('layoutku.app')

@section('content')
<!-- START: pages/invoice -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Invoice</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="mb-5">
      <div class="row">
        <div class="col-md-6">
          <h4 class="text-black mb-3">
            <strong>Amazon Delivery</strong>
            <br />
            <br />
            <img
              class="mr-2"
              src="/cleanui/components/pages/common/img/amazon.jpg"
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
          <h4 class="text-black mb-3"><strong>Invoice Info</strong></h4>
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
          <thead>
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
      <div class="text-right">
        <button type="submit" class="btn btn-primary">
          <i class="icmn-checkmark mr-1"></i>
          Proceed to payment
        </button>
        <button type="button" class="btn btn-default">
          <i class="icmn-printer mr-1"></i>
          Print
        </button>
      </div>
    </div>
  </div>
</div>
<!-- END: pages/invoice -->

@endsection
