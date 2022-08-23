
@extends('layouts.app')
@section('content')

<div class="px-0 bg-light">
    <div class="d-flex">
        <div class="d-flex align-items-center " id="navbar"> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button> <a class="text-decoration-none fs14 ps-2" href="#">ACQUIRED<span class="fs13 pe-2">.com</span></a> </div>
        <div id="navbar2" class="d-flex justify-content-end pe-4"> <span class="far fa-user-circle "></span> </div>
    </div>
    <div class="d-md-flex">
        <ul id="navbar-items" class="p-0">
            <li> <span class="fas fa-th-list"></span> <span class="ps-3 name">Dashboard</span> </li>
            <li> <span class="fas fa-chart-line"></span> <span class="ps-3 name">TRANSACTIONS</span> </li>
            <li> <span class="fas fa-clipboard-check"></span> <span class="ps-3 name">finanials</span> </li>
            <li> <span class="fas fa-suitcase-rolling"></span> <span class="ps-3 name">frauds</span> </li>
            <li> <span class="fas fa-calendar-alt"></span> <span class="ps-3 name">account</span> </li>
            <li> <span class="fas fa-comment-alt"></span> <span class="ps-3 name">reqests</span> </li>
            <li> <span class="fas fa-store-alt"></span> <span class="ps-3 name">merchants</span> </li>
        </ul>
        <div id="topnavbar">
            <div class="topnav mb-3">
                <div class="d-flex px-1"> <a href="#home" class="active">merchants</a> <a href="#news">users</a> <a href="#contact">company<span class="px-1">&</span>mid</a> <a href="#contact">account</a> </div>
            </div>
            <div class="d-flex align-items-center mb-3 px-md-3 px-2"> <span class="text-uppercase fs13 fw-bolder pe-3">search<span class="ps-1">by</span></span>
                <form class="example d-flex align-items-center"> <input type="text" placeholder="Type in Company Name Or Mid id" name="search"> <button type="submit"><i class="fa fa-search"></i></button> </form>
            </div>
            <div class="table-responsive px-2">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col">COMPANY<span>ID</span></th>
                            <th scope="col">COMPANY</th>
                            <th scope="col">MID</th>
                            <th scope="col">BANK<span class="ps-1">NAME</span></th>
                            <th scope="col">CUR</th>
                            <th class="text-center" scope="col">3DS</th>
                            <th class="text-center" scope="col">ACTIVE</th>
                            <th class="text-center" scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="bg-blight">235</span></td>
                            <td><span class="bg-bdark">ABC<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1343</span></td>
                            <td><span class="bg-bdark">Faster<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">236</span></td>
                            <td><span class="bg-bdark">BCE<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1298</span></td>
                            <td><span class="bg-bdark">Secure<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">237</span></td>
                            <td><span class="bg-bdark">CDE<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1313</span></td>
                            <td><span class="bg-bdark">Secure<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">235</span></td>
                            <td><span class="bg-bdark">DEF<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1323</span></td>
                            <td><span class="bg-bdark">Secure<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">235</span></td>
                            <td><span class="bg-bdark">FEG<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1443</span></td>
                            <td><span class="bg-bdark">Secure<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">237</span></td>
                            <td><span class="bg-bdark">GFR<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1943</span></td>
                            <td><span class="bg-bdark">Faster<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                        <tr>
                            <td><span class="bg-blight">235</span></td>
                            <td><span class="bg-bdark">ABC<span class="ps-1">LOANS</span></span></td>
                            <td><span class="bg-blight">1343</span></td>
                            <td><span class="bg-bdark">Faster<span>Trading</span></span></td>
                            <td><span class="bg-bdark">GBP</span></td>
                            <td class="text-center px-0"><span class="fas fa-times"></span></td>
                            <td class="text-center"><span class="fas fa-check"></span></td>
                            <td class="text-center"><span class="fas fa-ellipsis-h"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex align-items-center justify-content-between px-3 mt-3">
                <div class="bg-bdark fs13"> <span>Page</span> <input class="input-10 text-center" type="text" value="1"> <span><span class="px-1">of</span>1</span> </div>
                <div class="d-flex justify-content-end bg-bdark fs13"> <span class="pe-1">Show</span> <input class="input-10" type="number" value="25"> <span class="ps-2"><span class="pe-2">/</span>Page</span> </div>
            </div>
        </div>
    </div>
</div>
