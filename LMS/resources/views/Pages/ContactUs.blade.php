<?php
?>
@extends('layouts.app')

@section('content')

    <div class="container d-flex justify-content-center">
        <div class="row my-2 mx-2">
            <div class="col-md-6">
                <img src="https://png.pngtree.com/png-vector/20190725/ourlarge/pngtree-message-icon-design-vector-png-image_1587713.jpg" alt="IMG">
            </div><!--col-->
            <div class="col-md-6">
                <h2 class="form-title">Contact us</h2>
                <p class="justify text-muted">Have an enquiry or would like to give us feedback?<br>Fill out the form below to contact our team.</p>

                <form>
                    <div class="form-group pt-2 pl-1">
                        <label for="exampleInputName">Your name</label>
                        <input type="text" class="form-control" id="exampleInputName">
                    </div>

                    <div class="form-group pl-1">
                        <label for="exampleInputEmail1">Your email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                    </div>

                    <div class="form-group pl-1">
                        <label for="exampleFormControlTextarea1">Your message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>

                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-9"><button type="submit" class="btn btn-primary">Send</button></div>
                    </div>


                </form>

            </div><!--col-->
        </div><!--row-->

    </div>


    <style>
        body{
            background: rgba(132, 155, 219, 0.5);
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            background: #fff;
            margin-top: 50px;
            padding: 20px 20px 20px 20px;
            box-sizing: border-box;
            border-radius: 20px;
            width: 945px;
        }

        img{
            padding-top: 110px;
            padding-left: 50px;
            width: 85%;
            height: 80%;
        }
        .text-muted{
            font-size: 13px;
            font-weight: bold;
        }
        .form-title{
            font-weight: bold;
        }
        .form-group label{
            font-size: 11px;
            font-weight: bold;
            padding-left: 5px;
            color: #828282;
        }
        .form-control{
            border: none; /*1px solid #f4f4f4;*/
            border-radius: 20px;
            background: rgba(165, 147, 69, 0.075);/*#f4f4f4;*/
            box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);
        }
        .btn{
            width: 100%;
            font-size: 12px;
            margin-top: 10px;
            background-color: rgba(56, 147, 243, 0.67);
            text-align: center;
            border-radius: 5px;
        }
        .form-control:focus {
            color: #495057;
            border-color: #fff !important;
            outline: 0;
            box-shadow: 0 1px 1px 1px rgba(0, 123, 255, .25) !important
        }
    </style>
