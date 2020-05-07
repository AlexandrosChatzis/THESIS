<html lang="en">

<head>

    <title>Application Type Creator</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">





    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
    td {
        text-align: center;
    }

    input[type=text] {
        width: 20%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">


            <ul style="margin-left:5%" class="nav navbar-nav mr-auto">


                <li class="nav-item">

                    <img style="width:90px; height:70px; " onclick="window.location='{{ route('login') }}'" src="uliko/teicm.png">
                </li>


            </ul>
            <ul style="margin-right:5%;" class="nav navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu a" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/user-info') }}">
                            {{ __('Επεξεργασία λογαριασμού') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Αποσύνδεση') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>

            </ul>
        </div>
    </nav>



    @if (session('alert1'))
    <div style="text-align:center;" class="alert alert-danger">
        {{ session('alert1') }}
    </div>

    @elseif (session('alert'))
    <div style="text-align:center;" class="alert alert-success">
        {{ session('alert') }}
    </div>

    @elseif (session('alert2'))
    <div style="text-align:center;" class="alert alert-success">
        {{ session('alert2') }}
    </div>

    @elseif (session('alert3'))
    <div style="text-align:center;" class="alert alert-danger">
        {{ session('alert3') }}
    </div>
    @elseif (session('user_error'))
    <div style="text-align:center;" class="alert alert-danger">
        {{ session('user_error') }}
    </div>
    @endif








    <div align="center">

        <div class="boxed">
            <h1>Δημιουργία Αιτήσεων</h1>
            <div class="row">
                <div class="container">
                    <form action="{{ action('StudentController@application_type_creator')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        </br>

                        <table class="table table-bordered" style="width:400px;" id="dynamic_field">
                            <tr>



                            </tr>

                        </table>


                        <button class="button1" style="padding:2px; font-size: 30px; " type="submit" value="ADD" name="submit"><span>Προσθήκη</span></button>
                    </form>

                    <br>
                    <form action="{{ action('StudentController@testchoice')}}" method="get" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <table id="pinakasd" style=" float:none; table-layout: fixed; width:50%;">
                            <tr>
                                <th>Υπάρχουσες Αιτήσεις</th>
                            </tr>

                            <tbody class="context-menu-one">
                                @foreach ($app_names as $app_name)

                                <tr>
                                    <td id="{{$app_name->id}}" class="{{$app_name->disabled}}" style=" word-wrap: break-word; ">{{$app_name->name}} <input type="radio" class="{{$app_name->disabled}}" name="choice" value="{{$app_name->id}}"></td>
                                </tr>



                                @endforeach
                            </tbody>
                        </table>
                        <br><br>
                        <button class="button" type="submit" style="vertical-align:middle; float:none;"><span>Επιλογή</span> </button>

                    </form>



                    <br>


                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $(".context-menu-one").contextMenu({
                selector: 'td',
                callback: function(key, options) {
                    var id = $(this).attr("id");
                    var edit = null;
                    if (key == 'edit') {
                        bootbox.prompt({
                            title: "Επεξεργαστείτε το κείμενο",
                            inputType: 'textarea',
                            callback: function(result) {
                                if (result != null) {
                                    var edit = result;
                                    myajax(edit, key, id);
                                }
                            }
                        });
                    } else if (key == 'delete') {
                        bootbox.confirm({
                            message: "Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την Αίτηση;",
                            buttons: {
                                confirm: {
                                    label: 'Yes',
                                    className: 'btn-success'
                                },
                                cancel: {
                                    label: 'No',
                                    className: 'btn-danger'
                                }
                            },
                            callback: function(answer) {
                                if (answer == true) {
                                    myajax(edit, key, id);
                                }
                            }
                        });

                    } else {

                        myajax(edit, key, id);
                    }

                },
                items: {

                    "edit": {
                        name: "Edit",
                        icon: "edit"
                    },
                    "delete": {
                        name: "Delete",
                        icon: "delete"
                    },
                    "enable/disable": {
                        name: "enable/disable",
                        icon: "loading"
                    },
                }
            });


        });




        function myajax(edit, key, id) {
            $.ajax({
                url: 'edit_or_delete_app',
                method: 'POST',
                dataType: 'text',
                data: {
                    edit: edit,
                    key: key,
                    id: id
                },
                success: function(response) {
                    console.log(response);
                }
            }).done(

                function(data)

                {
                    location.reload();
                }

            );






        }




        $(document).ready(function() {
            $(".yes").css('color', 'red');


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        });
    </script>


    <script>
        $(document).ready(function() {

            var i = 1;
            $("#dynamic_field").find("tr:gt(0)").remove();
            i++;
            $('#dynamic_field').append('<tr id="rows' + i + '"> <td><textarea style="width:100%"  name="fieldname[]" row="5" col="200"> </textarea> </td> <td><button style="margin-top:10px; " type="button" name="add" id="add" class="btn btn-success">+</button></td> </tr>');


            var j = 2;
            $('#add').click(function() {
                j++;
                $('#dynamic_field').append('<tr id="rows' + j + '"><td><textarea style="width:100%"  name="fieldname[]" row="5" col="200"> </textarea> </td><td><button style="margin-top:10px; " type="button" name="remove" id="' + j + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#rows' + button_id + '').remove();
            });



        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <!-- bootbox code -->
    <script src="js/bootbox.min.js"></script>
    <script src="js/bootbox.locales.min.js"></script>



</body>

</html> 