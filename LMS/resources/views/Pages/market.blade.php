<?php
?>
@extends('layouts.app')
@section('content')


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="container d-flex justify-content-center mt-50 mb-50">

    <div class="row">
        <div class="col-md-12">

            <div class="card blog-horizontal">
                <div class="card-body">
                    <div class="card-img-actions mr-sm-3 mb-3">
                        <a href="#course_preview" data-toggle="modal" data-abc="true">
                            <img src="https://i.imgur.com/OJHNsX9.jpg" class="img-fluid card-img" alt="">

                        </a>
                    </div>

                    <div class="mb-3">
                        <h5 class="d-flex font-weight-semibold flex-nowrap my-1">
                            <a href="#" class="text-default mr-2" data-abc="true">Advanced Java Course</a>

                            <span class="text-danger-400 ml-auto">Free</span>
                        </h5>

                        <ul class="list-inline list-inline-dotted text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-muted" data-abc="true">Timona Shai</a></li>
                            <li class="list-inline-item"> Nov 3rd, 2019</li>
                        </ul>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>

                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim  <a href="#" data-abc="true">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline list-inline-dotted mb-0">
                        <li class="list-inline-item"><i class="fa fa-user mr-1"></i> 272</li>
                        <li class="list-inline-item"><i class="fa fa-calendar-check-o mr-1"></i> 15 hours</li>
                        <li class="list-inline-item">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="text-muted ml-1">(12)</span>
                        </li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <a href="#" data-abc="true" class="course-button"><i class="fa fa-check font-size-base mr-1"></i> Take course</a>
                    </div>
                </div>
            </div>


            <div class="card blog-horizontal mt-4">
                <div class="card-body">
                    <div class="card-img-actions mr-sm-3 mb-3">
                        <a href="#course_preview" data-toggle="modal" data-abc="true">
                            <img src="https://i.imgur.com/OJHNsX9.jpg" class="img-fluid card-img" alt="">

                        </a>
                    </div>

                    <div class="mb-3">
                        <h5 class="d-flex font-weight-semibold flex-nowrap my-1">
                            <a href="#" class="text-default mr-2" data-abc="true">Advanced Java Course</a>

                            <span class="text-danger-400 ml-auto">Free</span>
                        </h5>

                        <ul class="list-inline list-inline-dotted text-muted mb-0">
                            <li class="list-inline-item">By <a href="#" class="text-muted" data-abc="true">Timona Shai</a></li>
                            <li class="list-inline-item"> Nov 3rd, 2019</li>
                        </ul>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>

                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim  <a href="#" data-abc="true">[...]</a>
                </div>

                <div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
                    <ul class="list-inline list-inline-dotted mb-0">
                        <li class="list-inline-item"><i class="fa fa-user mr-1"></i> 272</li>
                        <li class="list-inline-item"><i class="fa fa-calendar-check-o mr-1"></i> 15 hours</li>
                        <li class="list-inline-item">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="text-muted ml-1">(12)</span>
                        </li>
                    </ul>

                    <div class="mt-2 mt-sm-0">
                        <a href="#" data-abc="true" class="course-button"><i class="fa fa-check font-size-base mr-1"></i> Take course</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<style>
    body {
        margin: 0;
        font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        font-size: .8125rem;
        font-weight: 400;
        line-height: 1.5385;
        color: #333;
        text-align: left;
        background-color: #2196F3;
    }

    .mt-50{

        margin-top: 50px;
    }

    .mb-50{

        margin-bottom: 50px;
    }



    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: .1875rem;
    }

    @media (min-width: 576px){
        .blog-horizontal .card-img-actions {
            width: 45%;
            float: left;
            max-width: 25rem;
            z-index: 10;
        }
    }

    a{
        text-decoration: none !important;
    }


    .course-button{
        border: 1px solid #007bff;
        padding: 5px;
        background-color: #007bff;
        padding-right: 10px;
        padding-top: 3px;
        color: #fff;
        border-radius: 3px;
    }

    .course-button:hover{
        color: #fff;
    }
</style>
