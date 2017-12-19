@section('stageObj')
    <script type="text/javascript">
        var layoutsObj = {
            plan1: {
                name: 'Помещение на первом этаже',
                desc: 'Пример использования под автомойку',
                area: '157,1',
                price: '43 988 000',
                block_location: '/img/block_e.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '',
                floor2_3d: '',
                file: ''
            },
            plan2: {
                name: 'Помещение на первом этаже',
                desc: 'Пример использования под автосалон',
                area: '152,8',
                price: '42 784 000',
                block_location: '/img/block_j.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '',
                floor2_3d: '',
                file: ''
            },
            plan3: {
                name: 'Помещение на втором этаже',
                desc: 'Пример использования под клинику',
                area: '253,8',
                price: '71 064 000',
                block_location: '/img/block_b.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '',
                floor2_3d: '',
                file: ''
            },
            plan4: {
                name: 'Помещение на первом этаже',
                desc: 'Пример использования под кофейню',
                area: '128,5',
                price: '35 980 000',
                block_location: '/img/block_i.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '',
                floor2_3d: '',
                file: ''
            },
            plan5: {
                name: 'Помещение на втором этаже',
                desc: 'Пример использования под коворкинг',
                area: '206,8',
                price: '57 904 000',
                block_location: '/img/block_e.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '',
                floor2_3d: '',
                file: ''
            },
            plan6: {
                name: 'Двухэтажное помещение',
                desc: 'Пример использования под детский сад',
                area: '258,4',
                price: '72 352 000',
                block_location: '/img/block_g.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '/img/',
                floor2_3d: '/img/',
                file: ''
            },
            plan7: {
                name: 'Помещение на втором этаже',
                desc: 'Пример использования под типографию',
                area: '199,1',
                price: '55 748 000',
                block_location: '/img/block_j.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '',
                floor2_3d: '',
                file: ''
            },
            plan8: {
                name: 'Помещение на втором этаже',
                desc: 'Пример использования под офисное помещение',
                area: '199,7',
                price: '55 916 000',
                block_location: '/img/block_j.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '',
                floor2_3d: '',
                file: ''
            },
            plan9: {
                name: 'Двухэтажное помещение',
                desc: 'Пример использования под мебельный магазин',
                area: '353,5',
                price: '98 980 000',
                block_location: '/img/block_g.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '/img/',
                floor2_3d: '/img/',
                file: ''
            },
            plan10: {
                name: 'Двухэтажное помещение',
                desc: 'Пример использования под магазин техники',
                area: '327,5',
                price: '91 700 000',
                block_location: '/img/block_e.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '/img/',
                floor2_3d: '/img/',
                file: ''
            },
            plan11: {
                name: 'Помещение на втором этаже',
                desc: 'Пример использования под парфюмерный магазин',
                area: '217',
                price: '60 760 000',
                block_location: '/img/block_i.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '',
                floor2_3d: '',
                file: ''
            },
            plan12: {
                name: 'Двухэтажное помещение',
                desc: 'Пример использования под сеть столовых',
                area: '296,9',
                price: '83 132 000',
                block_location: '/img/block_d.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '/img/',
                floor2_3d: '/img/',
                file: ''
            },
            plan13: {
                name: 'Помещение на втором этаже',
                desc: 'Пример использования под спа салон',
                area: '144',
                price: '40 320 000',
                block_location: '/img/block_d.png',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '',
                floor2_3d: '',
                file: ''
            },
            plan14: {
                name: 'Двухэтажное помещение',
                desc: 'Пример использования под тренажерный зал',
                area: '1093',
                price: '306 258 400',
                block_location: '',
                floor1_2d: '/img/',
                floor1_3d: '/img/',
                floor2_2d: '/img/',
                floor2_3d: '/img/',
                file: ''
            }
        };

        $.magnificPopup({
        });

        $('.js_popup_open').on('click', function () {
            var id = $(this).attr('id');
            var curLayout = layoutsObj[id];
            $('.js_name').text(curLayout['name']);
            $('.js_desc').text(curLayout['desc']);
            $('.js_area').text(curLayout['area']);
            $('.js_price').text(curLayout['price']);
            $('.js_block_location').attr('src', curLayout['block_location']);
            $('.js_floor1_2d').text(curLayout['floor1_2d']);
            $('.js_floor1_3d').text(curLayout['floor1_3d']);
            $('.js_floor2_2d').text(curLayout['floor2_2d']);
            $('.js_floor2_3d').text(curLayout['floor2_3d']);

            if( curLayout['floor2_2d'] !== '' ) {
                $('.js_floor_toggle').show();
            } else {
                $('.js_floor_toggle').hide();
            }
            $.magnificPopup.open();
        });

        $('.js_popup_close').on('click', function () { // Навесить на кнопку якоря к обратной связи
            magnificPopup.close();
        });
    </script>
@endsection