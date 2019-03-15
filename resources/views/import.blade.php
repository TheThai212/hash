@extends('layout.master')
@section('style')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:800);

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body,
        html {
            width: 100%;
            height: 100%;
        }
        .container {
            margin-left: 0;
            width: 80%;
            height: 750px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dog {
            /*cursor:url("/assets/img"),default;*/
            width: 160px;
            height: 186px;
            position: relative;
            left: -20px;
            border-bottom: #1b1e21;
        }
        @keyframes head {
            0% {
                transform: rotate(0deg);
            }
            30% {
                transform: rotate(0deg);
            }
            40% {
                transform: rotate(-20deg);
            }
            80% {
                transform: rotate(-20deg);
            }
            90% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }
        .dog-head {
            width: 100px;
            height: 90px;
            position: absolute;
            z-index: 5;
            top: 30px;
            left: calc(50% - 50px);
            background-color: #efc092;
            border-radius: 50%;
            animation: head 6s linear infinite;
        }
        .dog-head:before,
        .dog-head:after {
            content: "";
            width: 79px;
            height: 50px;
            position: absolute;
            z-index: 5;
            top: 44px;
            background-color: #efc092;
            border-radius: 50%;
        }
        .dog-head:before {
            left: -7px;
            transform: rotate(50deg);
        }
        .dog-head:after {
            right: -7px;
            transform: rotate(-49deg);
        }
        .dog-mouth {
            width: 60px;
            height: 35px;
            background-color: #fee2d2;
            position: absolute;
            bottom: -15px;
            left: 20px;
            z-index: 10;
            border-radius: 50%;
        }
        .dog-mouth:after {
            content: "";
            width: 10px;
            height: 40px;
            background-color: #fee2d2;
            position: absolute;
            bottom: 30px;
            left: 24px;
            z-index: 10;
            border-radius: 20px;
        }
        .dog-nose {
            width: 16px;
            height: 10px;
            position: absolute;
            top: 8px;
            left: calc(50% - 8px);
            background-color: #000;
            border-radius: 50%;
        }
        @keyframes tongue {
            0% {
                height: 10px;
            }
            30% {
                height: 10px;
            }
            40% {
                height: 20px;
            }
            60% {
                height: 10px;
            }
            80% {
                height: 20px;
            }
            90% {
                height: 10px;
            }
            100% {
                height: 10px;
            }
        }
        .dog-tongue {
            width: 20px;
            height: 10px;
            position: absolute;
            top: 24px;
            left: calc(50% - 10px);
            background-color: #f4a4ad;
            border-radius: 0 0 10px 10px;
            animation: tongue 4s linear infinite;
        }
        .dog-eyes {
            width: 10px;
            height: 16px;
            background-color: #000;
            position: absolute;
            top: 52px;
            left: 28px;
            border-radius: 50%;
            z-index: 10;
            box-shadow: 33px 0px 0px #000;
        }
        .dog-eyes:after {
            content: "";
            width: 92px;
            height: 50px;
            position: absolute;
            top: -50px;
            left: -24px;
            background-color: #efc092;
            border-radius: 50%;
        }
        .dog-ears {
            width: 80px;
            height: 50px;
            position: absolute;
            z-index: 0;
            top: -2px;
            border-radius: 150px 0 150px 0;
            background-color: #efc092;
        }
        .dog-ears:after {
            content: "";
            width: 50px;
            height: 30px;
            position: absolute;
            z-index: 0;
            top: 8px;
            left: 20px;
            border-radius: 150px 0 150px 0;
            transform: rotate(-176deg);
            background-color: #fee2d2;
        }
        .ears-left {
            left: -22px;
            transform: rotate(-105deg);
        }
        .ears-right {
            right: -22px;
            transform: rotate(-22deg);
        }
        .dog-body {
            width: 54px;
            height: 60px;
            position: absolute;
            top: 120px;
            left: calc(50% - 35px);
            background-color: #d58b4e;
            border-radius: 49px 0 0 20px;
            box-shadow: 6px 35px 20px 3px rgba(20,23,28,.1), 0 3px 10px 0 rgba(20,23,28,.1)
        }
        .dog-body:before {
            content: "";
            width: 50px;
            height: 60px;
            position: absolute;
            top: 3px;
            left: calc(50% - 17px);
            background-color: #efbf8e;
            border-radius: 100px 100px 0 0;
        }
        .dog-body:after {
            content: "";
            width: 15px;
            height: 30px;
            position: absolute;
            top: 32px;
            left: 28px;
            background-color: #d58b4e;
            border-radius: 100px 100px 0 0;
        }
        .dog-foot {
            width: 20px;
            height: 13px;
            position: absolute;
            z-index: 5;
            bottom: -3px;
            left: 8px;
            background-color: #fce2d3;
            border-radius: 10px 10px 0 0;
            box-shadow: 33px 0 0 #fce2d3;
        }
        @keyframes tail {
            0% {
                transform: rotate(-47deg);
            }
            100% {
                transform: rotate(-57deg);
            }
        }
        .dog-tail {
            width: 10px;
            height: 50px;
            position: absolute;
            top: 120px;
            left: calc(50% - 45px);
            background-color: #ecc093;
            transform: rotate(-47deg);
            border-radius: 10px 0 0 0px / 50px 0 0 0px;
            animation: tail .08s infinite alternate;
        }
        .ball {
            width: 30px;
            height: 30px;
            position: absolute;
            bottom: 0;
            right: 0px;
            border-radius: 50%;
            background-color: #6E64F0;
            box-shadow: 2px 9px 7px 0px rgba(20,23,28,.1), 0 3px 10px 0 rgba(20,23,28,.1)
        }
        .ball:hover {
            top: 150px;
            box-shadow: none;
        }
        .bone {
            width: 30px;
            height: 30px;
            position: absolute;
            bottom: 6px;
            left: -15px;

            /*border-radius: 50%;*/
            /*background-color: #6E64F0;*/
        }
        .bone:hover {
            top: 140px;
            box-shadow: none;

        }

        .card .header {
            padding: 20px 20px 20px !important;
        }
        .gf{
            background-color: #efede4;
            font-size: 30px;
            color: #d86eff !important;
            box-shadow: -2px 14px 8px -4px rgba(20,23,28,.1), 0 3px 10px 0 rgba(20,23,28,.1)
        }
        .container{
            width: 100%;
            align-items: initial !important;
        }
        .header{
            width: 300px;
        }
    </style>

@endsection
@section('title', 'IMPORT')
@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Students Hash Table</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <table id="hash-table" class="table table-striped">
                        <thead>
                        <th>Index</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Birthday</th>
                        <th>Credits</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Created at</th>
                        </thead>
                    </table>

                </div>
            </div>
        </div>

        <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h5 class="title">- Open gift to import file</h5>
                            <h5 class="title">- Hit the ball to truncate data</h5>
                        </div>
                    </div>
                </div>

            </div>
        <div class="dog">

            <div class="dog-head">
                <div class="dog-ears ears-left"></div>
                <div class="dog-ears ears-right"></div>
                <div class="dog-eyes"></div>
                <div class="dog-mouth">
                    <div class="dog-nose"></div>
                    <div class="dog-tongue"></div>
                </div>
            </div>
            <div class="dog-tail"></div>
            <div class="dog-body">
                <div class="dog-foot"></div>
            </div>
            <div class="ball"></div>
            <div class=" bone">
                <span class="ti-gift gf"></span><span class="icon-name"></span>
            </div>
        </div>
        <hr>
    </div>
    <input type="file" id="import" style="display: none">
@endsection

@section('footer')

@endsection
