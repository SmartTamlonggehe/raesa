@extends ('layouts.app')

@section('content')
<!-- START: ecommerce/dashboard -->
<div class="card">
  <div class="card-header">
    <a href="javascript: void(0);" class="pull-right btn btn-sm btn-primary">Reload Data</a>
    <a href="javascript: void(0);" class="pull-right btn btn-sm btn-outline-primary mr-2"
      >Edit Profile</a
    >
    <a href="javascript: void(0);" class="pull-right btn btn-sm btn-outline-primary mr-2">Users</a>
    <span class="cui-utils-title">
      <strong>Dashboard</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-xl-8 col-lg-12">
        <!-- Chart -->
        <div class="nav-tabs-horizontal mb-5">
          <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active font-size-16 text-black"
                href="javascript: void(0);"
                data-toggle="tab"
                data-target="#a1"
                role="tab"
                ><strong>Orders</strong></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link font-size-16 text-black"
                href="javascript: void(0);"
                data-toggle="tab"
                data-target="#a2"
                role="tab"
                ><strong>Amount</strong></a
              >
            </li>
          </ul>
          <div class="tab-content padding-top-20">
            <div class="tab-pane active" id="a1">
              <select aria-controls="example1" class="form-control input-sm mb-3 width-100">
                <option value="10">Last Day</option>
                <option value="25">Last 7 Days</option>
                <option value="50">Last Month</option>
                <option value="100">Last 3 Months</option>
              </select>
              <div class="chart-area-1 height-200 chartist"></div>
              <div class="row">
                <div class="col-lg-3 col-6">
                  <div class="mb-3">
                    <div class="font-size-16 mb-2">
                      Revenue
                    </div>
                    <div class="font-size-20 text-black">
                      <strong>$35,762.00</strong>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="mb-3">
                    <div class="font-size-16 mb-2">
                      Tax
                    </div>
                    <div class="font-size-20 text-black">
                      <strong>$262.00</strong>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="mb-3">
                    <div class="font-size-16 mb-2">
                      Shipping
                    </div>
                    <div class="font-size-20 text-black">
                      <strong>$752.00</strong>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="mb-3">
                    <div class="font-size-16 mb-2">
                      Quantity
                    </div>
                    <div class="font-size-20">
                      <strong>75736</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="a2">
              <select aria-controls="example1" class="form-control input-sm mb-3 width-100">
                <option value="10">Last Day</option>
                <option value="25">Last 7 Days</option>
                <option value="50">Last Month</option>
                <option value="100">Last 3 Months</option>
              </select>
              <div class="chart-area-2 height-200 chartist"></div>
              <div class="row">
                <div class="col-lg-3 col-6">
                  <div class="mb-3">
                    <div class="font-size-16 mb-2">
                      Revenue
                    </div>
                    <div class="font-size-20 text-black">
                      <strong>$23,636.00</strong>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="mb-3">
                    <div class="font-size-16 mb-2">
                      Tax
                    </div>
                    <div class="font-size-20 text-black">
                      <strong>$526.00</strong>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="mb-3">
                    <div class="font-size-16 mb-2">
                      Shipping
                    </div>
                    <div class="font-size-20 text-black">
                      <strong>$600.00</strong>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <div class="mb-3">
                    <div class="font-size-16 mb-2">
                      Quantity
                    </div>
                    <div class="font-size-20">
                      <strong>1251</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Chart -->

        <!-- Left Tables -->
        <div class="nav-tabs-horizontal mb-5">
          <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active font-size-16 text-black"
                href="javascript: void(0);"
                data-toggle="tab"
                data-target="#b1"
                role="tab"
                ><strong>Bestsellers</strong></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link font-size-16 text-black"
                href="javascript: void(0);"
                data-toggle="tab"
                data-target="#b2"
                role="tab"
                ><strong>Most Viewed Products</strong></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link font-size-16 text-black"
                href="javascript: void(0);"
                data-toggle="tab"
                data-target="#b3"
                role="tab"
                ><strong>New Customers</strong></a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link font-size-16 text-black"
                href="javascript: void(0);"
                data-toggle="tab"
                data-target="#b4"
                role="tab"
                ><strong>Top Customers</strong></a
              >
            </li>
          </ul>
          <div class="tab-content padding-top-20">
            <div class="tab-pane active" id="b1">
              <div class="cui-ecommerce-dashboard-info">
                <div class="cui-ecommerce-dashboard-info-block">
                  <table class="table table-hover nowrap" id="example1">
                    <thead class="thead-default">
                      <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Order Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>000012</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Apple iPhone 6S</a>
                        </td>
                        <td>$799.00</td>
                        <td>85</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7</a
                          >
                        </td>
                        <td>$63.40</td>
                        <td>77</td>
                      </tr>
                      <tr>
                        <td>000014</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7 Edge</a
                          >
                        </td>
                        <td>$456.00</td>
                        <td>82</td>
                      </tr>
                      <tr>
                        <td>000015</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Meizu MX6</a>
                        </td>
                        <td>$871.14</td>
                        <td>68</td>
                      </tr>
                      <tr>
                        <td>000012</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Apple iPhone 6S</a>
                        </td>
                        <td>$799.00</td>
                        <td>85</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7</a
                          >
                        </td>
                        <td>$63.40</td>
                        <td>77</td>
                      </tr>
                      <tr>
                        <td>000014</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7 Edge</a
                          >
                        </td>
                        <td>$456.00</td>
                        <td>82</td>
                      </tr>
                      <tr>
                        <td>000015</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Meizu MX6</a>
                        </td>
                        <td>$871.14</td>
                        <td>68</td>
                      </tr>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Apple 5S</a></td>
                        <td>$399.00</td>
                        <td>63</td>
                      </tr>
                      <tr>
                        <td>000014</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7 Edge</a
                          >
                        </td>
                        <td>$456.00</td>
                        <td>82</td>
                      </tr>
                      <tr>
                        <td>000015</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Meizu MX6</a>
                        </td>
                        <td>$871.14</td>
                        <td>68</td>
                      </tr>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Apple 5S</a></td>
                        <td>$399.00</td>
                        <td>63</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Order Quantity</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="b2">
              <div class="cui-ecommerce-dashboard-info">
                <div class="cui-ecommerce-dashboard-info-block">
                  <table class="table table-hover nowrap" id="example2">
                    <thead class="thead-default">
                      <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Views</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>000014</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7 Edge</a
                          >
                        </td>
                        <td>$456.00</td>
                        <td>82</td>
                      </tr>
                      <tr>
                        <td>000015</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Meizu MX6</a>
                        </td>
                        <td>$871.14</td>
                        <td>68</td>
                      </tr>
                      <tr>
                        <td>000012</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Apple iPhone 6S</a>
                        </td>
                        <td>$799.00</td>
                        <td>85</td>
                      </tr>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Apple 5S</a></td>
                        <td>$399.00</td>
                        <td>63</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7</a
                          >
                        </td>
                        <td>$63.40</td>
                        <td>77</td>
                      </tr>
                      <tr>
                        <td>000012</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Apple iPhone 6S</a>
                        </td>
                        <td>$799.00</td>
                        <td>85</td>
                      </tr>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Apple 5S</a></td>
                        <td>$399.00</td>
                        <td>63</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7</a
                          >
                        </td>
                        <td>$63.40</td>
                        <td>77</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7</a
                          >
                        </td>
                        <td>$63.40</td>
                        <td>77</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined"
                            >Samsung Galaxy S7</a
                          >
                        </td>
                        <td>$63.40</td>
                        <td>77</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Views</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="b3">
              <div class="cui-ecommerce-dashboard-info">
                <div class="cui-ecommerce-dashboard-info-block">
                  <table class="table table-hover nowrap" id="example3">
                    <thead class="thead-default">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>000014</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Nick Cave</a>
                        </td>
                        <td>2013/09/27</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>000015</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">David Blake</a>
                        </td>
                        <td>2013/09/27</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>000012</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Arnold Stritz</a>
                        </td>
                        <td>2013/09/27</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Ben Loda</a></td>
                        <td>2013/09/27</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Ben Loda</a></td>
                        <td>2013/09/27</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Ben Loda</a></td>
                        <td>2013/09/27</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Art Lowe</a></td>
                        <td>2013/09/27</td>
                        <td>$10.00</td>
                      </tr>
                      <tr>
                        <td>000012</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Arnold Stritz</a>
                        </td>
                        <td>2013/09/26</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Ben Loda</a></td>
                        <td>2013/09/26</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Art Lowe</a></td>
                        <td>2013/09/26</td>
                        <td>$53.00</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Total</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="b4">
              <div class="cui-ecommerce-dashboard-info">
                <div class="cui-ecommerce-dashboard-info-block">
                  <table class="table table-hover nowrap" id="example4">
                    <thead class="thead-default">
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Ben Loda</a></td>
                        <td>2013/09/27</td>
                        <td>$1240.00</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Art Lowe</a></td>
                        <td>2013/09/27</td>
                        <td>$11250.00</td>
                      </tr>
                      <tr>
                        <td>000012</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Arnold Stritz</a>
                        </td>
                        <td>2013/09/26</td>
                        <td>$25260.00</td>
                      </tr>
                      <tr>
                        <td>000016</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Ben Loda</a></td>
                        <td>2013/09/26</td>
                        <td>$12240.00</td>
                      </tr>
                      <tr>
                        <td>000014</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Nick Cave</a>
                        </td>
                        <td>2013/09/27</td>
                        <td>$5660.00</td>
                      </tr>
                      <tr>
                        <td>000015</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">David Blake</a>
                        </td>
                        <td>2013/09/27</td>
                        <td>$3450.00</td>
                      </tr>
                      <tr>
                        <td>000015</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">David Blake</a>
                        </td>
                        <td>2013/09/27</td>
                        <td>$3450.00</td>
                      </tr>
                      <tr>
                        <td>000012</td>
                        <td>
                          <a href="javascript: void(0);" class="link-underlined">Arnold Stritz</a>
                        </td>
                        <td>2013/09/27</td>
                        <td>$23450.00</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Art Lowe</a></td>
                        <td>2013/09/26</td>
                        <td>$51553.00</td>
                      </tr>
                      <tr>
                        <td>000013</td>
                        <td><a href="javascript: void(0);" class="link-underlined">Art Lowe</a></td>
                        <td>2013/09/26</td>
                        <td>$51553.00</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Total</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-12">
        <div class="row mb-5">
          <div class="col-xl-12 col-lg-6 col-sm-12">
            <!-- Right Widget -->
            <div class="bg-primary p-4 text-white mb-3">
              <h5 class="text-uppercase mb-3">Lifetime Sales</h5>
              <div class="clearfix"></div>
              <div>
                <span class="pull-right font-size-36">
                  <strong>$16,942.00</strong>
                </span>
                <i class="icmn-download font-size-36"></i>
              </div>
            </div>
            <!-- End Right Widget -->
          </div>
          <div class="col-xl-12 col-lg-6 col-sm-12">
            <!-- Right Widget -->
            <div class="bg-default p-4 text-white">
              <h5 class="text-uppercase mb-3">Average Order</h5>
              <div class="clearfix"></div>
              <div>
                <span class="pull-right font-size-36">
                  <strong>$99.46</strong>
                </span>
                <i class="icmn-stack font-size-36"></i>
              </div>
            </div>
            <!-- End Right Widget -->
          </div>
        </div>

        <!-- Right Table -->
        <div class="mb-5">
          <div class="font-size-16 text-black mb-3">
            <strong>Last Orders</strong>
          </div>
          <div class="cui-ecommerce-dashboard-info-block">
            <table class="table table-hover">
              <thead class="thead-default">
                <tr>
                  <th>
                    Customers
                  </th>
                  <th class="width-20p">
                    Items
                  </th>
                  <th class="width-20p">
                    Total
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <a href="javascript: void(0);" class="link-underlined">Veronica Costello</a>
                  </td>
                  <td>
                    1
                  </td>
                  <td>
                    $37.02
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="javascript: void(0);" class="link-underlined">David Blake</a>
                  </td>
                  <td>
                    4
                  </td>
                  <td>
                    $81.57
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="javascript: void(0);" class="link-underlined">Nick Cave</a>
                  </td>
                  <td>
                    3
                  </td>
                  <td>
                    $66.00
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="javascript: void(0);" class="link-underlined">Veronica Costello</a>
                  </td>
                  <td>
                    1
                  </td>
                  <td>
                    $37.02
                  </td>
                </tr>
                <tr>
                  <td>
                    <a href="javascript: void(0);" class="link-underlined">David Blake</a>
                  </td>
                  <td>
                    4
                  </td>
                  <td>
                    $81.57
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Right Table -->

        <!-- Right Table -->
        <div class="mb-5">
          <div class="font-size-16 text-black mb-3">
            <strong>Last Search Terms</strong>
          </div>
          <table class="table table-hover">
            <thead class="thead-default">
              <tr>
                <th>
                  Search Term
                </th>
                <th class="width-20p">
                  Result
                </th>
                <th class="width-20p">
                  Uses
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Nike
                </td>
                <td>
                  16
                </td>
                <td>
                  3
                </td>
              </tr>
              <tr>
                <td>
                  Adidas
                </td>
                <td>
                  4
                </td>
                <td>
                  15
                </td>
              </tr>
              <tr>
                <td>
                  Apple
                </td>
                <td>
                  18
                </td>
                <td>
                  775
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Right Table -->

        <!-- Right Table -->
        <div class="mb-5">
          <div class="font-size-16 text-black mb-3">
            <strong>Top Search Terms</strong>
          </div>
          <table class="table table-hover">
            <thead class="thead-default">
              <tr>
                <th>
                  Search Term
                </th>
                <th class="width-20p">
                  Result
                </th>
                <th class="width-20p">
                  Uses
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Apple
                </td>
                <td>
                  18
                </td>
                <td>
                  775
                </td>
              </tr>
              <tr>
                <td>
                  Samsung
                </td>
                <td>
                  61
                </td>
                <td>
                  534
                </td>
              </tr>
              <tr>
                <td>
                  Meizu
                </td>
                <td>
                  18
                </td>
                <td>
                  345
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Right Table -->
      </div>
    </div>
  </div>
</div>
<!-- END: ecommerce/dashboard -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      // AREA
      var chart1 = new Chartist.Line(
        '.chart-area-1',
        {
          labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
          series: [[2, 4, 7, 25, 5, 28, 31]],
        },
        {
          fullWidth: !0,
          chartPadding: {
            right: 15,
            left: -15,
          },
          low: 0,
          showArea: true,
          plugins: [Chartist.plugins.tooltip()],
        },
      )

      var chart2 = new Chartist.Line(
        '.chart-area-2',
        {
          labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
          series: [[3, 10, 65, 23, 81, 17, 3]],
        },
        {
          fullWidth: !0,
          chartPadding: {
            right: 15,
            left: -15,
          },
          low: 0,
          showArea: true,
          plugins: [Chartist.plugins.tooltip()],
        },
      )

      $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
        chart1.update()
        chart2.update()
      })

      // Datatables
      $('#example1, #example2, #example3, #example4').DataTable({
        responsive: true,
        autoWidth: false,
        columnDefs: [{ width: '25%', targets: 3 }],
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection