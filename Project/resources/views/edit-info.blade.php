<!DOCTYPE html>


<html>

<head>
    <title>Info Creator</title>


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">


    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


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
  width:100%;
}td{
  width:500000000000000px;
  
}
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



        h1,
        h2 {
            text-align: center;
        }

        ol.d {
            list-style-type: lower-greek;
            text-align: left;
        }

        ol {
            list-style-type: decimal;
            text-align: left;
        }

        p {
            text-align: left;


        }


        ul {

            list-style-type: none;
        }

        th {
            background-color: white;
            font-weight: normal;
            cursor: move;
        }
    </style>

    @include('layouts.secretariat')




    <br><br><br>
    <div class="row">
        <!-- left side -->
        <div  class="col-sm-1"></div>
        <div  class="col-sm-4">
            <table class="paragraphs" style="float:left;  border:1px solid black; text-align:left;   height: 300px;  max-width:200px; width:200px; word-wrap: break-word; overflow-y:scroll;">
                <thead>
                    <tr>
                        <td style="text-align:center; background-color:white; ">
                            <h2>Παράγραφοι</h2>
                        </td>
                    </tr>

                </thead>
                <tbody>
                    <tr style="height:10px;" class="notmovingparagraphs">
                        <td style="background-color:black;"></td>
                    </tr>
                    @foreach ($paragraphs as $paragraph)
                    <tr data-index="{{$paragraph->id}}" data-position="{{$paragraph->display_order}}" data-menu="{{$paragraph->menu}}">
                        <th>{{$paragraph->name}}</th>
                    </tr>
                    @endforeach

                </tbody>
            </table>

  



    
            <table class="deletes" style=" float:left; border:1px solid black; text-align:left;   height: 300px; margin-left:1%; max-width:200px; width:200px; word-wrap: break-word; overflow-y:scroll;">
                <thead>
                    <tr>
                        <td td style="text-align:center; background-color:white;"><img class="shake_bin" width="80px " height="80px" src="uliko/recycle.svg" onclick="infodelete_all()"></td>
                    </tr>

                </thead>
                <tbody>
                    <tr style="height:10px;" class="dontdelete notmovingdeletes">
                        <td style="background-color:black;"></td>
                    </tr>
                    @foreach ($deletes as $delete)
                    <tr data-index="{{$delete->id}}" data-position="{{$delete->display_order}}" data-menu="{{$delete->menu}}">
                        <th>{{$delete->name}}</th>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- and of left  -->

        <!-- right side -->
        <div  class="col-sm-6">
            <div style="display:inline-block; height:auto;  " class="boxed3">
                <h1 align="center" ;> </h1>
                <div id="capture">
                    <h1>Χρήσιμες Πληροφορίες</h1>
                    <h2>Τι θα χρειαστείς:</h2>
                    <table class="menu1" style="width: 94%; margin-left:4%;float:left; ">
                        <thead>


                        </thead>

                        <tbody  style="height:auto;">
                            <tr style="height:10px;" class="notmovingmenu1">
                                <td style="background-color:black;"></td>
                            </tr>

                            @foreach ($menu1 as $menu_1)
                            <tr data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}" data-menu="{{$menu_1->menu}}">
                                <th>{{$menu_1->name}}</th>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>



                    <h2>Τα βήματα που θα ακολουθήσεις:</h2>

                    <table class="menu2" style="margin-left:4%; width: 94%; float:left; ">
                        <thead>


                        </thead>

                        <tbody  style="height:auto;">
                            <tr style="height:10px;" class="notmovingmenu2">
                                <td style="background-color:black;"></td>
                            </tr>
                            @foreach ($menu2 as $menu_2)
                            <tr data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}" data-menu="{{$menu_2->menu}}">
                                <th>{{$menu_2->name}}</th>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>


                    <ul style="text-align:center;">
                        <h2>Χρήσιμοι Ιστότοποι/Έγγραφα</h2>
                        <li><a href="https://www.aade.gr/polites/eisodema/delose-phorologias-eisodematos-php-e1-e2-e3">TaxisNet</a></li>
                        <li><a href="storage/{{$document}}">Απαιτούμενα Δικαιολογητικά</a></li>
                        <h2>Πάτα την κουκουβάγια για να σε βοηθήσει!</br><img style="width:10%; height:10%;" src="uliko/owl.png" onclick="Help()"></h2>



                        <button class="button" type="submit" style="text-align:center; background-color:grey; pointer-events:none; cursor: default; float:none;"><span>Εκκίνηση</span> </button>




                    </ul>

                </div><!-- and of capture  -->

            </div>
            <!-- and of right  -->

        </div>
        <!-- <div style="clear:both"></div> -->
        <div  class="col-sm-3"></div>
        </div>

        <script>
            $(document).ready(function() {

                $(".paragraphs tbody").sortable({
                    connectWith: "tbody",
                    items: 'tr:not(.notmovingparagraphs)',
                    update: function(event, ui) {
                        $(this).children().each(function(index) {

                            $(this).attr('data-position', (index + 1)).addClass('update_paragraphs');


                        });
                        saveNewPositionsParagraphs();
                    }
                });

                function saveNewPositionsParagraphs() {
                    var positions = [];
                    var menus = 1;
                    $('.update_paragraphs').each(function() {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        console.log(positions, menus);
                        $(this).removeClass('update_paragraphs');


                    });
                    $.ajax({
                        url: 'infoajaxresponse',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            positions: positions,
                            menus: menus
                        },
                        success: function(response) {
                            console.log(response);
                        }
                    });

                }



                $(".deletes tbody").sortable({
                    connectWith: "tbody",
                    items: 'tr:not(.notmovingdeletes)',
                    update: function(event, ui) {
                        $(this).children().each(function(index) {

                            $(this).attr('data-position', (index + 1)).addClass('Delete');


                        });
                        saveNewPositionsDelete();
                    }

                });



                function saveNewPositionsDelete() {
                    var positions = [];
                    var menus = 10;
                    $('.Delete').each(function() {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        console.log(positions, menus);
                        $(this).removeClass('Delete');


                    });
                    $.ajax({
                        url: 'infoajaxresponse',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            positions: positions,
                            menus: menus
                        },
                        success: function(response) {
                            console.log(response);
                        }
                    });

                }



                $(".menu1 tbody").sortable({
                    connectWith: "tbody",
                    items: 'tr:not(.notmovingmenu1)',
                    update: function(event, ui) {
                        $(this).children().each(function(index) {

                            $(this).attr('data-position', (index + 1)).addClass('updated1');


                        });
                        saveNewPositionsToMenu1();
                    }

                });




                function saveNewPositionsToMenu1() {
                    var positions = [];
                    var menus = 2;
                    $('.updated1').each(function() {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        console.log(positions, menus);
                        $(this).removeClass('updated1');


                    });
                    $.ajax({
                        url: 'infoajaxresponse',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            positions: positions,
                            menus: menus
                        },
                        success: function(response) {
                            console.log(response);
                        }
                    });

                }


                $(".menu2 tbody").sortable({
                    connectWith: "tbody",
                    items: 'tr:not(.notmovingmenu2)',
                    update: function(event, ui) {
                        $(this).children().each(function(index) {

                            $(this).attr('data-position', (index + 1)).addClass('updated2');


                        });
                        saveNewPositionsToMenu2();
                    }

                });



                function saveNewPositionsToMenu2() {
                    var positions = [];
                    var menus = 3;
                    $('.updated2').each(function() {
                        positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                        console.log(positions, menus);
                        $(this).removeClass('updated2');


                    });
                    $.ajax({
                        url: 'infoajaxresponse',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            positions: positions,
                            menus: menus
                        },
                        success: function(response) {
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
            function infodelete_all() {
                var result = confirm("Είστε βέβαιοι ότι θέλετε να διαγράψετε όλα αυτά τα στοιχεία;");
                if (result) {
                    $('.deletes tbody').find("tr:not(.dontdelete)").empty();
                    $.ajax({
                        url: 'infoDelete_all',
                        method: 'POST'

                    });
                }

            }
        </script>


        <script>
            $(document).ready(function() {

                $("a[href='storage/']").css({
                    "pointer-events": "none",
                    "cursor": "not-allowed",
                    "background-color": "grey"
                });



            });
        </script>














        <script>
            function Help() {
                alert("Γεια σου με λένε Χέντβιχ και θα βρίσκομαι πάντα εδώ για ότι βοήθεια χρειαστείς!");
            }
        </script>






</body>

<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</html> 