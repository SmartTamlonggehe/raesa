@extends ('layouts.app')

@section('content')
<!-- START: layout/utilities -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Utilities</strong>
      <a
        href="https://getbootstrap.com/docs/4.2/utilities/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="alert alert-warning" role="alert">
      <p class="mb-2">
        <strong>Attention!</strong> This is only a part of all Bootstrap Utilites. Follow next links
        to get information about all of them:
      </p>
      <a href="https://getbootstrap.com/docs/4.2/utilities/borders/" target="_blank" class="mr-3"
        >Borders</a
      >
      <a href="https://getbootstrap.com/docs/4.2/utilities/clearfix/" target="_blank" class="mr-3"
        >Clearfix</a
      >
      <a href="https://getbootstrap.com/docs/4.2/utilities/close-icon/" target="_blank" class="mr-3"
        >Close icon</a
      >
      <a href="https://getbootstrap.com/docs/4.2/utilities/colors/" target="_blank" class="mr-3"
        >Colors</a
      >
      <a href="https://getbootstrap.com/docs/4.2/utilities/flexbox/" target="_blank" class="mr-3"
        >Flexbox</a
      >
      <a
        href="https://getbootstrap.com/docs/4.2/utilities/display-property/"
        target="_blank"
        class="mr-3"
        >Display Property</a
      >
      <a
        href="https://getbootstrap.com/docs/4.2/utilities/image-replacement/"
        target="_blank"
        class="mr-3"
        >Image Replacement</a
      >
      <a
        href="https://getbootstrap.com/docs/4.2/utilities/invisible-content/"
        target="_blank"
        class="mr-3"
        >Invisible Content</a
      >
      <a href="https://getbootstrap.com/docs/4.2/utilities/position/" target="_blank" class="mr-3"
        >Position</a
      >
      <a
        href="https://getbootstrap.com/docs/4.2/utilities/responsive-helpers/"
        target="_blank"
        class="mr-3"
        >Responsive Helpers</a
      >
      <a
        href="https://getbootstrap.com/docs/4.2/utilities/screenreaders/"
        target="_blank"
        class="mr-3"
        >Screenreaders</a
      >
      <a href="https://getbootstrap.com/docs/4.2/utilities/sizing/" target="_blank" class="mr-3"
        >Sizing</a
      >
      <a href="https://getbootstrap.com/docs/4.2/utilities/spacing/" target="_blank" class="mr-3"
        >Spacing</a
      >
      <a href="https://getbootstrap.com/docs/4.2/utilities/typography/" target="_blank" class="mr-3"
        >Typography</a
      >
      <a
        href="https://getbootstrap.com/docs/4.2/utilities/vertical-align/"
        target="_blank"
        class="mr-3"
        >Vertical Alignment</a
      >
    </div>
    <br />
    <div class="row">
      <div class="col-lg-6">
        <!-- Colors Utilities -->
        <div class="margin-bottom-0">
          <h5 class="text-black">
            <strong>Color Utilities</strong>
          </h5>
          <br />
          <div class="mb-5">
            <table class="table table-hover">
              <colgroup>
                <col class="col-xs-4" />
                <col class="col-xs-8" />
              </colgroup>
              <thead>
                <tr>
                  <th class="text-nowrap">Class</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-nowrap"><code>.text-default</code></td>
                  <td><span class="text-default">Set Default color to element</span></td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.text-black</code></td>
                  <td><span class="text-black">Set Black color to element</span></td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.text-primary</code></td>
                  <td><span class="text-primary">Set Primary color to element</span></td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.text-secondary</code></td>
                  <td><span class="text-secondary">Set Secondary color to element</span></td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.text-success</code></td>
                  <td><span class="text-success">Set Success color to element</span></td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.text-info</code></td>
                  <td><span class="text-info">Set Info color to element</span></td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.text-warning</code></td>
                  <td><span class="text-warning">Set Warning color to element</span></td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.text-danger</code></td>
                  <td><span class="text-danger">Set Danger color to element</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Colors Utilities -->
      </div>
      <div class="col-lg-6">
        <!-- Display Utilities -->
        <div class="margin-bottom-0">
          <h5 class="text-black">
            <strong>Display Property</strong>
          </h5>
          <br />
          <div class="mb-5">
            <table class="table table-hover">
              <colgroup>
                <col class="col-xs-4" />
                <col class="col-xs-8" />
              </colgroup>
              <thead>
                <tr>
                  <th class="text-nowrap">Class</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-nowrap"><code>.d-inline</code></td>
                  <td>Forces the element to behave like an inline element</td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.d-inline-block</code></td>
                  <td>Forces the element to behave like an inline-block element</td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.d-block</code></td>
                  <td>Forces the element to behave like a block element</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Display Utilities -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <!-- Underlined Links -->
        <div class="mb-5">
          <h5 class="text-black">
            <strong>Underlined Links</strong>
          </h5>
          <br />
          <table class="table table-hover">
            <colgroup>
              <col class="col-xs-4" />
              <col class="col-xs-8" />
            </colgroup>
            <thead>
              <tr>
                <th class="text-nowrap">Class</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-nowrap"><code>.cui-utils-link-underlined</code></td>
                <td>
                  <a href="javascript: void(0)" target="_blank" class="cui-utils-link-underlined"
                    >Underlined Link</a
                  >
                </td>
              </tr>
              <tr>
                <td class="text-nowrap"><code>.cui-utils-link-blue</code></td>
                <td>
                  <a href="javascript: void(0)" target="_blank" class="cui-utils-link-blue"
                    >Blue Link</a
                  >
                </td>
              </tr>
              <tr>
                <td class="text-nowrap">
                  <code>.cui-utils-link-underlined.cui-utils-link-blue</code>
                </td>
                <td>
                  <a
                    href="javascript: void(0)"
                    target="_blank"
                    class="cui-utils-link-underlined cui-utils-link-blue"
                    >Underlined and Blue Link</a
                  >
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Underlined Links -->
      </div>
      <div class="col-lg-6">
        <!-- Example Font Weight -->
        <div class="mb-5">
          <h5 class="text-black">
            <strong>Font Weight & Style</strong>
          </h5>
          <br />
          <div class="table-responsive">
            <table class="table table-hover">
              <colgroup>
                <col class="col-xs-4" />
                <col class="col-xs-8" />
              </colgroup>
              <thead>
                <tr>
                  <th class="text-nowrap">Class</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-nowrap"><code>.font-weight-normal</code></td>
                  <td class="font-weight-normal">Normal text</td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.font-weight-bold</code></td>
                  <td class="font-weight-bold">Bold text</td>
                </tr>
                <tr>
                  <td class="text-nowrap"><code>.font-italic</code></td>
                  <td class="font-italic">Italic text</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Example Font Weight -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <!-- Example Text Transformation -->
        <div class="mb-5">
          <h5 class="text-black">
            <strong>Text Transformation</strong>
          </h5>
          <br />
          <div class="table-responsive">
            <table class="table table-hover">
              <colgroup>
                <col class="col-xs-4" />
                <col class="col-xs-8" />
              </colgroup>
              <thead>
                <tr>
                  <th class="text-nowrap">Class</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-nowrap">
                    <code>.text-lowercase</code>
                  </td>
                  <td>Transform text to lowercase</td>
                </tr>
                <tr>
                  <td class="text-nowrap">
                    <code>.text-uppercase</code>
                  </td>
                  <td>Transform text to uppercase</td>
                </tr>
                <tr>
                  <td class="text-nowrap">
                    <code>.text-capitalize</code>
                  </td>
                  <td>Transform text to capitalize</td>
                </tr>
              </tbody>
            </table>
          </div>
          <br />
          <div class="cui-utils-example">
            <p class="text-lowercase">Lowercased text</p>
            <p class="text-uppercase">Uppercased text</p>
            <p class="text-capitalize">Capitalized text</p>
          </div>
        </div>
        <!-- End Example Text Transformation -->
      </div>
      <div class="col-lg-6">
        <!-- Example Text Wrapping -->
        <div class="mb-5">
          <h5 class="text-black">
            <strong>Text Wrapping</strong>
          </h5>
          <br />
          <table class="table table-hover">
            <colgroup>
              <col class="col-xs-4" />
              <col class="col-xs-8" />
            </colgroup>
            <thead>
              <tr>
                <th class="text-nowrap">Class</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-nowrap">
                  <code>.text-truncate</code>
                </td>
                <td>Truncating and prevents text from wrapping into multiple lines</td>
              </tr>
              <tr>
                <td class="text-nowrap">
                  <code>.text-break</code>
                </td>
                <td>Breaks strings if their length exceeds the width of their container</td>
              </tr>
              <tr>
                <td class="text-nowrap">
                  <code>.text-nowrap</code>
                </td>
                <td>Prevents text from wrapping into multiple lines</td>
              </tr>
            </tbody>
          </table>
          <br />
          <div class="cui-utils-example">
            <div class="row">
              <div class="col-md-4">
                <div class="text-truncate height-100" style="border:1px dashed #e6e8ea;">
                  This is text truncate. This is text truncate. This is text truncate. This is text
                  truncate
                </div>
              </div>
              <div class="col-md-4">
                <div class="text-break height-100" style="border:1px dashed #e6e8ea;">
                  This-is-text-break.This-is-text-break.This-is-text-break.This-is-text-break
                </div>
              </div>
              <div class="col-md-4">
                <div
                  class="text-nowrap height-100"
                  style="border:1px dashed #e6e8ea;overflow: hidden;"
                >
                  This is text nowrap. This is text nowrap. This is text nowrap. This is text nowrap
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Example Text Wrapping -->
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <!-- Example Font Size -->
        <div class="mb-5">
          <h5 class="text-black">
            <strong>Font Size</strong>
          </h5>
          <br />
          <table class="table table-hover">
            <colgroup>
              <col class="col-xs-4" />
              <col class="col-xs-8" />
            </colgroup>
            <thead>
              <tr>
                <th class="text-nowrap">Class</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-nowrap"><code>.font-size-*</code></td>
                <td>
                  Available values: 0, 10, 12, 14, 16, 18, 20, 24, 26, 30, 40, 50, 60, 70 , 80
                </td>
              </tr>
              <tr>
                <td class="text-nowrap"><code>.font-size-0</code></td>
                <td>font-size: 0px</td>
              </tr>
              <tr>
                <td class="text-nowrap"><code>.font-size-10</code></td>
                <td>font-size: 10px</td>
              </tr>
              <tr>
                <td class="text-nowrap"><code>.font-size-12</code></td>
                <td>font-size: 12px</td>
              </tr>
              <tr>
                <td class="text-nowrap"><code>.font-size-14</code></td>
                <td>font-size: 14px</td>
              </tr>
              <tr>
                <td class="text-nowrap"><code>.font-size-16</code></td>
                <td>font-size: 16px</td>
              </tr>
              <tr>
                <td class="text-nowrap"><code>.font-size-18</code></td>
                <td>font-size: 18px</td>
              </tr>
              <tr>
                <td class="text-nowrap"><code>.font-size-20</code></td>
                <td>font-size: 20px</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- End Example Font Size -->
      </div>
      <div class="col-lg-6">
        <!-- Example Text Alignment -->
        <div class="mb-5">
          <h5 class="text-black">
            <strong>Text Alignment</strong>
          </h5>
          <br />
          <table class="table table-hover">
            <colgroup>
              <col class="col-xs-4" />
              <col class="col-xs-8" />
            </colgroup>
            <thead>
              <tr>
                <th class="text-nowrap">Class</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-nowrap">
                  <code>.text-left</code>
                </td>
                <td>Left aligned text</td>
              </tr>
              <tr>
                <td class="text-nowrap">
                  <code>.text-center</code>
                </td>
                <td>Center aligned text</td>
              </tr>
              <tr>
                <td class="text-nowrap">
                  <code>.text-right</code>
                </td>
                <td>Right aligned text</td>
              </tr>
              <tr>
                <td class="text-nowrap">
                  <code>.text-justify</code>
                </td>
                <td>Justified text</td>
              </tr>
            </tbody>
          </table>
          <br />
          <div class="cui-utils-example">
            <p class="text-left">Left aligned text</p>
            <p class="text-center">Center aligned text</p>
            <p class="text-right">Right aligned text</p>
            <p class="text-justify">
              Justified text: Lorem Ipsum is simply dummy text of the printing and typesetting
              industry. Lorem Ipsum has been the industry's standard dummy text ever since the
              1500s, when an unknown printer took a galley of type and scrambled it to make a type
              specimen book
            </p>
          </div>
        </div>
        <!-- End Example Text Alignment -->
      </div>
    </div>
  </div>
</section>
<!-- END: layout/utilities -->

@endsection