<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

<link rel="stylesheet" href="{{ url('/cust-css/styles.css') }}">
</head>

<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ url('dashboard') }}">Reservations</a>
        <a href="{{ url('admin-pay') }}">Payments</a>
        <a href="#">Logout</a>
    </div>

    <div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
        <section>
            <!--for demo wrap-->
            <h1>Dolphin Cove Dashboard</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                    <thead>
                        <tr>
                            <th>Guest ID</th>
                            <th>Guest First Name</th>
                            <th>Guest Last Name</th>
                            <th>Program</th>
                            <th>Hotel</th>
                            <th>Tour Company</th>
                            <th> No of Adult(s)</th>
                            <th>No of Child(ren)</th>
                            <th>Reservation Date</th>
                            <th>Booking Date</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        @foreach ($guest as $g)
                        <tr>
                            <td>{{$g->Guest_Details_ID}}</td>
                            <td>{{$g->First_name}} </td>
                            <td>{{$g->Last_name}}</td>
                            <td>{{$g->Program_Name}}</td>
                            <td>{{ $g->{"Hotel Name"} }}</td>
                            <td>{{ $g->{"Tour Company"} }}</td>
                            <td>{{$g->N_Adults}}</td>
                            <td>{{$g->N_Child}}</td>
                            <td>{{$g->Reservation_Date}}</td>
                            <td>{{$g->Booking_Date}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>


        <!-- follow me template -->
        <div class="made-with-love">
            Made with
            <i>♥</i> by
            <a target="_blank" href="https://codepen.io/nikhil8krishnan">Group 7</a>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>

</body>

</html>
