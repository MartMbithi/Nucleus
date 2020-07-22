@if(!$model->customId)
    @include('charts::_partials.container.canvas2')
@endif
<!--/*
    * Product         :   Nucleus ERP
    * License         :   MIT license
    * Where To Find Us:   https://martdev.info
    * Email Us        :   martdevelopers254@gmail.com
    😬 
    */-->
@include('charts::_partials.helpers.hex2rgb')

<script type="text/javascript">
    var ctx = document.getElementById("{{ $model->id }}")

    var data = {
        labels: [
            @foreach($model->labels as $label)
                "{!! $label !!}",
            @endforeach
        ],
        datasets: [{
            fill: true,
            @if($model->colors)
                backgroundColor: hex2rgba_convert("{{ $model->colors[0] }}", 50),
            @endif
            label: "{!! $model->element_label !!}",
            lineTension: 0.3,
            @if($model->colors)
                borderColor: "{{ $model->colors[0] }}",
            @endif
            data: [
                @foreach($model->values as $dta)
                    {{ $dta }},
                @endforeach
            ],
        }]
    };

    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: {
            responsive: {{ $model->responsive || !$model->width ? 'true' : 'false' }},
            maintainAspectRatio: false,
            @if($model->title)
                title: {
                    display: true,
                    text: "{!! $model->title !!}",
                    fontSize: 20,
                }
            @endif
        }
    });
</script>
