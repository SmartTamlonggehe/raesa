@extends ('layouts.app')

@section('content')
<!-- START: forms/basic-forms-elements -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Basic Form Elements</strong>
      <a
        href="https://.getbootstrap.com/docs/4.2/components/forms/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <h5 class="text-black"><strong>Horizontal Form</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="https://.getbootstrap.com/docs/4.2/components/forms/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <!-- Horizontal Form -->
          <form>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l0">Default Input</label>
              <div class="col-md-9">
                <input type="password" class="form-control" placeholder="Default Input" id="l0" />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l10">Disabled</label>
              <div class="col-md-9">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Disabled"
                  disabled=""
                  id="l10"
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l11">Readonly</label>
              <div class="col-md-9">
                <input
                  type="password"
                  class="form-control"
                  placeholder="Readonly"
                  readonly=""
                  id="l11"
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l4">With Actions on Left</label>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button
                      type="button"
                      class="btn btn-primary btn-sm dropdown-toggle"
                      data-toggle="dropdown"
                    >
                      Action
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript: void(0);">Action</a>
                      <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                      <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
                    </div>
                  </div>
                  <input type="text" class="form-control" id="l4" />
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l5">With Actions on Right</label>
              <div class="col-md-9">
                <div class="input-group">
                  <input type="text" class="form-control" id="l5" />
                  <div class="input-group-append">
                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="javascript: void(0);">Action</a>
                      <a class="dropdown-item" href="javascript: void(0);">Another action</a>
                      <a class="dropdown-item" href="javascript: void(0);">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript: void(0);">Separated link</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l8">Search</label>
              <div class="col-md-9">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search..." id="l8" />
                  <div class="input-group-append">
                    <a href="javascript: void(0);" class="btn btn-success btn-sm">
                      Search files
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l1">Block Help</label>
              <div class="col-md-9">
                <input type="text" class="form-control" placeholder="Enter text" id="l1" />
                <small class="text-muted">Technical information for user</small>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l2">Email Address</label>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="icmn-mail2"></i>
                    </div>
                  </div>
                  <input type="email" class="form-control" placeholder="Email Address" id="l2" />
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l3">Password</label>
              <div class="col-md-9">
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="Password" id="l3" />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <i class="icmn-key"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Static Control</label>
              <div class="col-md-9">
                <p class="form-control-static">email@example.com</p>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l13">Dropdown</label>
              <div class="col-md-9">
                <select class="form-control" id="l13">
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l14">Multiple Select</label>
              <div class="col-md-9">
                <select multiple="" class="form-control" id="l14">
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l15">Textarea</label>
              <div class="col-md-9">
                <textarea class="form-control" rows="3" id="l15"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label" for="l16">File input</label>
              <div class="col-md-9">
                <input type="file" id="l16" />
                <br />
                <small class="text-muted">Technical information for user</small>
              </div>
            </div>
            <div class="form-actions">
              <div class="form-group row">
                <div class="col-md-9 offset-md-3">
                  <button type="button" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
              </div>
            </div>
          </form>
          <!-- End Horizontal Form -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <h5 class="text-black"><strong>Vertical Form</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="https://.getbootstrap.com/docs/4.2/components/forms/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <!-- Vertical Form -->
          <form>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="l30">Default Input</label>
                  <input type="text" class="form-control" placeholder="Email Address" id="l30" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="l31">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" id="l31" />
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <i class="icmn-key"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="l34">Input with Icon</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="icmn-search"></i>
                      </div>
                    </div>
                    <input class="input-error form-control" type="text" value="" id="l34" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="l36">Disabled</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Disabled"
                    disabled=""
                    id="l36"
                  />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="l37">Readonly</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Readonly"
                    readonly=""
                    id="l37"
                  />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="l38">Textarea</label>
              <textarea class="form-control" rows="3" id="l38"></textarea>
            </div>
            <div class="form-group">
              <label for="l39">File input</label>
              <br />
              <input type="file" id="l39" />
              <br />
              <small class="text-muted">Technical information for user</small>
            </div>
            <div class="form-actions">
              <button type="button" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-default">Cancel</button>
            </div>
          </form>
          <!-- End Vertical Form -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <h5 class="text-black"><strong>Rounded Inputs</strong></h5>
          <p class="text-muted">Modifier: <code>.form-control-rounded</code></p>
          <!-- Rounded Inputs -->
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                <label class="form-label" for="l81">Rounded Input</label>
                <input type="text" class="form-control form-control-rounded" id="l81" />
              </div>
            </div>
            <div class="col-lg-12">
              <label class="form-label" for="l82">Disabled Rounded Input</label>
              <input
                type="password"
                class="form-control form-control-rounded"
                disabled=""
                placeholder="Password"
                id="l82"
              />
            </div>
          </div>
          <!-- End Rounded Inputs -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <h5 class="text-black"><strong>Input States</strong></h5>
          <p class="text-muted">
            Modifier: <code>.has-success</code>, <code>.has-warning</code>,
            <code>.has-danger</code>, <code>.has-focused</code>
          </p>
          <!-- Input States -->
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group has-success">
                <label class="form-label" for="l51">Input with success</label>
                <input type="text" class="form-control" id="l51" />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group has-warning">
                <label class="form-label" for="l52">Input with warning</label>
                <input type="text" class="form-control" id="l52" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="form-group has-danger">
                <label class="form-label" for="l53">Input with danger</label>
                <input type="text" class="form-control" id="l53" />
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group has-focused">
                <label class="form-label" for="l54">Focused state</label>
                <input type="text" class="form-control" id="l54" />
              </div>
            </div>
          </div>
          <!-- End Input States -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <h5 class="text-black"><strong>Inline Form</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="https://.getbootstrap.com/docs/4.2/components/forms/"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <!-- Inline Form -->
          <form class="form-inline">
            <div class="form-group mr-2">
              <label class="sr-only" for="exampleInputAmount">Amount</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    $
                  </div>
                </div>
                <input
                  type="text"
                  class="form-control"
                  id="exampleInputAmount"
                  placeholder="Amount"
                />
                <div class="input-group-append">
                  <div class="input-group-text">
                    .00
                  </div>
                </div>
              </div>
            </div>
            <a href="javascript: void(0);" class="btn btn-primary">Transfer cash</a>
          </form>
          <!-- End Inline Form -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-5">
          <h5 class="text-black"><strong>Column Sizing</strong></h5>
          <p class="text-muted">
            Element: read
            <a href="https://.getbootstrap.com/docs/4.2/components/forms/" target="_blank"
              >official documentation<small
                ><i class="icmn-link ml-1"><!-- --></i></small
              ></a
            >
          </p>
          <!-- Column Sizing -->
          <form>
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder=".col-md-2" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder=".col-md-3" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder=".col-md-4" />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder=".col-md-2" />
                </div>
              </div>
            </div>
          </form>
          <!-- End Column Sizing -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: forms/basic-forms-elements -->

@endsection