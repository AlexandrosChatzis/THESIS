<!DOCTYPE html>
<html>

<head>
    <title>Submit Creator</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/h2emes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>

    <style>
    tbody{
  display:block;

  overflow:auto;
  height:300px;
  width:250px;
}td{
  width:5000000000000000000000000px;
  
}th{}
    
    
    
    .shake_bin:hover {
        animation: shake 0.5s;
        animation-iteration-count: infinite;
    }

    @keyframes shake {
        0% {
            transform: translate(1px, 1px) rotate(0deg);
        }

        10% {
            transform: translate(-1px, -2px) rotate(-1deg);
        }

        20% {
            transform: translate(-3px, 0px) rotate(1deg);
        }

        30% {
            transform: translate(3px, 2px) rotate(0deg);
        }

        40% {
            transform: translate(1px, -1px) rotate(1deg);
        }

        50% {
            transform: translate(-1px, 2px) rotate(-1deg);
        }

        60% {
            transform: translate(-3px, 1px) rotate(0deg);
        }

        70% {
            transform: translate(3px, 1px) rotate(-1deg);
        }

        80% {
            transform: translate(-1px, -1px) rotate(1deg);
        }

        90% {
            transform: translate(1px, 2px) rotate(0deg);
        }

        100% {
            transform: translate(1px, -2px) rotate(-1deg);
        }
    }

    h1,h2 {
        text-align: center;
    }

    th {
        font-size: 1.5vmin;
        height: 80px;
        cursor: move;
    }

    .boxed3 {
        display: table;
        border-radius: 25px;
        border: 2px solid white;
        max-width: 800px;
        width: auto;
        height: auto;
        background-color: white;
    }

    </style>
    @include('layouts.secretariat')
    <br><br><br>
    <div class="row">
        <!-- left side -->
        <div  class="col-sm-1"></div>
        <div  class="col-sm-4">
            <table class="tableheaders" id="pinakasd"
                style=" float:left; border:1px dotted #ccc; text-align:left;   height: 300px; margin-left:1%; max-width:200px; width:200px; word-wrap: break-word; overflow-y:scroll;">
                <thead>
                    <tr>
                        <td style="text-align:center; background-color:white; ">
                            <h2>Επικεφαλίδες Πίνακα</h2>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr style="height:10px;" class="notmovingtableheaders">
                        <td style="background-color:black;"></td>
                    </tr>
                    @foreach ($tableheaders as $tableheader)
                    <tr data-index="{{$tableheader->id}}" data-position="{{$tableheader->display_order}}"
                        data-menu="{{$tableheader->menu}}">
                        <th>{{$tableheader->name}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="deletes" id="pinakasd"
                style=" float:left; border:1px dotted #ccc; text-align:left;   height: 300px; margin-left:1%; max-width:200px; width:200px; word-wrap: break-word; overflow-y:scroll;">
                <thead>
                    <tr>
                        <td td style="text-align:center; background-color:white;"><img class="shake_bin" width="80px "
                                height="80px" src="uliko/recycle.svg" onclick="submitdelete_all()"></td>
                    </tr>
                </thead>
                <tbody>
                    <tr style="height:10px;" class="dontdelete notmovingdeletes">
                        <td style="background-color:black;"></td>
                    </tr>
                    @foreach ($deletes as $delete)
                    <tr data-index="{{$delete->id}}" data-position="{{$delete->display_order}}"
                        data-menu="{{$delete->menu}}">
                        <th>{{$delete->name}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- and of left  -->
        <!-- right side -->
        <div  class="col-sm-6">
            <div style="display:inline-block; min-width:900px; " class="boxed3">
                <h1 align="center" ;> </h1>
                <div id="capture">
                    <h1>Υποβολή Δικαιολογητικών</h1>
                    <br></br>
                    <div class="row">
                    <div  class="col-sm-4">
                    <table class="menu1" id="pinakasd" style="width: 30%; margin-left:4%;float:left; ">
                        <thead>
                        </thead>
                        <tbody  style="height:auto;">
                            <tr style="height:10px;" class="notmovingmenu1">
                                <td style="background-color:black;"></td>
                            </tr>
                            @foreach ($menu1 as $menu_1)
                            <tr data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}"
                                data-menu="{{$menu_1->menu}}">
                                <th>{{$menu_1->name}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
</div>
                    <div  class="col-sm-4">
                    <table class="menu2" id="pinakasd" style="width: 30%; float:left; ">
                        <thead>
                        </thead>
                        <tbody  style="height:auto;">
                            <tr style="height:10px;" class="notmovingmenu2">
                                <td style="background-color:black;"></td>
                            </tr>
                            @foreach ($menu2 as $menu_2)
                            <tr data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}"
                                data-menu="{{$menu_2->menu}}">
                                <th>{{$menu_2->name}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
</div>

                    <div  class="col-sm-4">
                    <table class="menu3" id="pinakasd" style="width: 30%;float:left; ">
                        <thead>
                        </thead>
                        <tbody  style="height:auto;">
                            <tr style="height:10px;" class="notmovingmenu3">
                                <td style="background-color:black;"></td>
                            </tr>
                            @foreach ($menu3 as $menu_3)
                            <tr data-index="{{$menu_3->id}}" data-position="{{$menu_3->display_order}}"
                                data-menu="{{$menu_3->menu}}">
                                <th>{{$menu_3->name}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
</div>

                    </div>
                    <div style="width:270px; postition:relative; float:none; margin:0 auto;"> <button class="buttonsub"
                            style="text-align:center; background-color:grey; pointer-events:none; cursor: default;"
                            name="button"><span>Οριστικοποίηση </span> </button></div>
                </div><!-- and of capture  -->
            </div>
            <!-- and of right  -->
            <div  class="col-sm-1"></div>
        </div>

        <!-- <div style="clear:both"></div> -->
        <script>
            $(document).ready(function () {
                $(".tableheaders tbody").sortable({
                    connectWith: "tbody",
                    items: 'tr:not(.notmovingtableheaders)',
                    update: function (event, ui) {
                        $(this).children().each(function (index) {
                            $(this).attr('data-position', (index + 1)).addClass(
                                'update_tableheaders');
                        });
                        saveNewPositionstableheaders();
                    }
                });

                function saveNewPositionstableheaders() {
                    var positions = [];
                    var menus = 1;
                    $('.update_tableheaders').each(function () {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        console.log(positions, menus);
                        $(this).removeClass('update_tableheaders');
                    });
                    $.ajax({
                        url: 'submitajaxresponse',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            positions: positions,
                            menus: menus
                        },
                        success: function (response) {
                            console.log(response);
                        }
                    });
                }
                $(".deletes tbody").sortable({
                    connectWith: "tbody",
                    items: 'tr:not(.notmovingdeletes)',
                    update: function (event, ui) {
                        $(this).children().each(function (index) {
                            $(this).attr('data-position', (index + 1)).addClass('Delete');
                        });
                        saveNewPositionsDelete();
                    }
                });

                function saveNewPositionsDelete() {
                    var positions = [];
                    var menus = 10;
                    $('.Delete').each(function () {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        console.log(positions, menus);
                        $(this).removeClass('Delete');
                    });
                    $.ajax({
                        url: 'submitajaxresponse',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            positions: positions,
                            menus: menus
                        },
                        success: function (response) {
                            console.log(response);
                        }
                    });
                }
                $(".menu1 tbody").sortable({
                    connectWith: "tbody",
                    items: 'tr:not(.notmovingmenu1)',
                    update: function (event, ui) {
                        $(this).children().each(function (index) {
                            $(this).attr('data-position', (index + 1)).addClass('updated1');
                        });
                        saveNewPositionsToMenu1();
                    }
                });

                function saveNewPositionsToMenu1() {
                    var positions = [];
                    var menus = 2;
                    $('.updated1').each(function () {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        console.log(positions, menus);
                        $(this).removeClass('updated1');
                    });
                    $.ajax({
                        url: 'submitajaxresponse',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            positions: positions,
                            menus: menus
                        },
                        success: function (response) {
                            console.log(response);
                        }
                    });
                }
                $(".menu2 tbody").sortable({
                    connectWith: "tbody",
                    items: 'tr:not(.notmovingmenu2)',
                    update: function (event, ui) {
                        $(this).children().each(function (index) {
                            $(this).attr('data-position', (index + 1)).addClass('updated2');
                        });
                        saveNewPositionsToMenu2();
                    }
                });

                function saveNewPositionsToMenu2() {
                    var positions = [];
                    var menus = 3;
                    $('.updated2').each(function () {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        console.log(positions, menus);
                        $(this).removeClass('updated2');
                    });
                    $.ajax({
                        url: 'submitajaxresponse',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            positions: positions,
                            menus: menus
                        },
                        success: function (response) {
                            console.log(response);
                        }
                    });
                }
                $(".menu3 tbody").sortable({
                    connectWith: "tbody",
                    items: 'tr:not(.notmovingmenu3)',
                    update: function (event, ui) {
                        $(this).children().each(function (index) {
                            $(this).attr('data-position', (index + 1)).addClass('updated3');
                        });
                        saveNewPositionsToMenu3();
                    }
                });

                function saveNewPositionsToMenu3() {
                    var positions = [];
                    var menus = 4;
                    $('.updated3').each(function () {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        console.log(positions, menus);
                        $(this).removeClass('updated3');
                    });
                    $.ajax({
                        url: 'submitajaxresponse',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            positions: positions,
                            menus: menus
                        },
                        success: function (response) {
                            console.log(response);
                        }
                    });
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });
        </script>
        <script>
            function submitdelete_all() {
                var result = confirm("Είστε βέβαιοι ότι θέλετε να διαγράψετε όλα αυτά τα στοιχεία;");
                if (result) {
                    $('.deletes tbody').find("tr:not(.dontdelete)").empty();
                    $.ajax({
                        url: 'submitDelete_all',
                        method: 'POST'
                    });
                }
            }
        </script>
        <script>
            function Help() {
                alert("Γεια σου με λένε Χέντβιχ και θα βρίσκομαι πάντα εδώ για ότι βοήθεια χρειαστείς!");
            }
        </script>
</body>
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>

</html>
