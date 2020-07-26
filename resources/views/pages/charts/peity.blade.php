@extends ('layouts.app')

@section('content')
<!-- START: charts/peity -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Peity</strong>
      <a
        href="http://benpickles.github.io/peity/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Blue Color</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://benpickles.github.io/peity/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <table class="table table-hover table-vertical-middle">
            <tr>
              <td>Pie Charts</td>
              <td>
                <span data-plugin="peityPie" data-color="blue">1/5</span>
                <span data-plugin="peityPie" data-color="blue">226/360</span>
                <span data-plugin="peityPie" data-color="blue">0.52/1.561</span>
                <span data-plugin="peityPie" data-color="blue">1,4</span>
                <span data-plugin="peityPie" data-color="blue">226,134</span>
                <span data-plugin="peityPie" data-color="blue">0.52,1.041</span>
                <span data-plugin="peityPie" data-color="blue">1,2,3,2,2</span>
              </td>
            </tr>
            <tr>
              <td>Donut Charts</td>
              <td>
                <span data-plugin="peityDonut" data-color="blue">1/5</span>
                <span data-plugin="peityDonut" data-color="blue">226/360</span>
                <span data-plugin="peityDonut" data-color="blue">0.52/1.561</span>
                <span data-plugin="peityDonut" data-color="blue">1,4</span>
                <span data-plugin="peityDonut" data-color="blue">226,134</span>
                <span data-plugin="peityDonut" data-color="blue">0.52,1.041</span>
                <span data-plugin="peityDonut" data-color="blue">1,2,3,2,2</span>
              </td>
            </tr>
            <tr>
              <td>Line Charts</td>
              <td>
                <span data-plugin="peityLine" data-color="blue">5,3,9,6,5,9,7,3,5,2</span>
                <span data-plugin="peityLine" data-color="blue">5,3,2,-1,-3,-2,2,3,5,2</span>
                <span data-plugin="peityLine" data-color="blue">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
              </td>
            </tr>
            <tr>
              <td>Bar Charts</td>
              <td>
                <span data-plugin="peityBar" data-color="blue">5,3,9,6,5,9,7,3,5,2</span>
                <span data-plugin="peityBar" data-color="blue">5,3,2,-1,-3,-2,2,3,5,2</span>
                <span data-plugin="peityBar" data-color="blue">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
              </td>
            </tr>
            <tr>
              <td>Dynamic Charts</td>
              <td>
                <span id="example11">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                <span id="example12">5,3,2,0,3,1,2,3,5,2</span>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-lg-6">
        <h4 class="text-black"><strong>Green Color</strong></h4>
        <p class="text-muted">
          Element: read
          <a href="http://benpickles.github.io/peity/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <table class="table table-hover table-vertical-middle">
            <tr>
              <td>Pie Charts</td>
              <td>
                <span data-plugin="peityPie" data-color="green">1/5</span>
                <span data-plugin="peityPie" data-color="green">226/360</span>
                <span data-plugin="peityPie" data-color="green">0.52/1.561</span>
                <span data-plugin="peityPie" data-color="green">1,4</span>
                <span data-plugin="peityPie" data-color="green">226,134</span>
                <span data-plugin="peityPie" data-color="green">0.52,1.041</span>
                <span data-plugin="peityPie" data-color="green">1,2,3,2,2</span>
              </td>
            </tr>
            <tr>
              <td>Donut Charts</td>
              <td>
                <span data-plugin="peityDonut" data-color="green">1/5</span>
                <span data-plugin="peityDonut" data-color="green">226/360</span>
                <span data-plugin="peityDonut" data-color="green">0.52/1.561</span>
                <span data-plugin="peityDonut" data-color="green">1,4</span>
                <span data-plugin="peityDonut" data-color="green">226,134</span>
                <span data-plugin="peityDonut" data-color="green">0.52,1.041</span>
                <span data-plugin="peityDonut" data-color="green">1,2,3,2,2</span>
              </td>
            </tr>
            <tr>
              <td>Line Charts</td>
              <td>
                <span data-plugin="peityLine" data-color="green">5,3,9,6,5,9,7,3,5,2</span>
                <span data-plugin="peityLine" data-color="green">5,3,2,-1,-3,-2,2,3,5,2</span>
                <span data-plugin="peityLine" data-color="green">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
              </td>
            </tr>
            <tr>
              <td>Bar Charts</td>
              <td>
                <span data-plugin="peityBar" data-color="green">5,3,9,6,5,9,7,3,5,2</span>
                <span data-plugin="peityBar" data-color="green">5,3,2,-1,-3,-2,2,3,5,2</span>
                <span data-plugin="peityBar" data-color="green">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
              </td>
            </tr>
            <tr>
              <td>Dynamic Charts</td>
              <td>
                <span id="example21">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                <span id="example22">5,3,2,0,3,1,2,3,5,2</span>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: charts/peity -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      // COLOR BLUE
      var blue = {
        color1: '#01a8fe',
        color2: '#72cfff',
        color3: '#c6eafd',
      }

      $('[data-plugin=peityPie][data-color=blue]').peity('pie', {
        fill: [blue.color1, blue.color2, blue.color3],
        radius: 11,
      })

      $('[data-plugin=peityDonut][data-color=blue]').peity('donut', {
        fill: [blue.color1, blue.color2, blue.color3],
        radius: 11,
      })

      $('[data-plugin=peityLine][data-color=blue]').peity('line', {
        fill: [blue.color2],
        stroke: blue.color1,
        height: 22,
        strokeWidth: 1,
        width: 44,
      })

      $('[data-plugin=peityBar][data-color=blue]').peity('bar', {
        fill: [blue.color1],
        height: 22,
        width: 44,
      })

      // COLOR GREEN
      var green = {
        color1: '#46be8a',
        color2: '#79dcb1',
        color3: '#b1f8d9',
      }

      $('[data-plugin=peityPie][data-color=green]').peity('pie', {
        fill: [green.color1, green.color2, green.color3],
        radius: 11,
      })

      $('[data-plugin=peityDonut][data-color=green]').peity('donut', {
        fill: [green.color1, green.color2, green.color3],
        radius: 11,
      })

      $('[data-plugin=peityLine][data-color=green]').peity('line', {
        fill: [green.color2],
        stroke: green.color1,
        height: 22,
        strokeWidth: 1,
        width: 44,
      })

      $('[data-plugin=peityBar][data-color=green]').peity('bar', {
        fill: [green.color1],
        height: 22,
        width: 44,
      })

      // UPDATE BLUE PEITY

      var example11 = $('#example11').peity('line', {
        fill: [blue.color2],
        stroke: blue.color1,
        height: 22,
        strokeWidth: 1,
        width: 44,
      })

      setInterval(function() {
        var random = Math.round(Math.random() * 10)
        var values = example11.text().split(',')
        values.shift()
        values.push(random)
        example11.text(values.join(',')).change()
      }, 1000)

      var example12 = $('#example12').peity('bar', {
        fill: [blue.color1],
        height: 22,
        width: 44,
      })

      setInterval(function() {
        var random = Math.round(Math.random() * 10)
        var values = example12.text().split(',')
        values.shift()
        values.push(random)
        example12.text(values.join(',')).change()
      }, 1000)

      // UPDATE GREEN PEITY

      var example21 = $('#example21').peity('line', {
        fill: [green.color2],
        stroke: green.color1,
        height: 22,
        strokeWidth: 1,
        width: 44,
      })

      setInterval(function() {
        var random = Math.round(Math.random() * 10)
        var values = example21.text().split(',')
        values.shift()
        values.push(random)
        example21.text(values.join(',')).change()
      }, 1000)

      var example22 = $('#example22').peity('bar', {
        fill: [green.color1],
        height: 22,
        width: 44,
      })

      setInterval(function() {
        var random = Math.round(Math.random() * 10)
        var values = example22.text().split(',')
        values.shift()
        values.push(random)
        example22.text(values.join(',')).change()
      }, 1000)
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection