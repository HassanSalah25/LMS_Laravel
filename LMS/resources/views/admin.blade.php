@extends('layouts.app')
@section('content')
<body class="vsc-initialized">
    <div class="content">
    <div class="container">
    <h2 class="mb-5">Table #2</h2>
    <div class="table-responsive">
    <table class="table custom-table">
    <thead>
    <tr>
    <th scope="col">id</th>
    <th scope="col">Name</th>
    <th scope="col">password</th>
    <th scope="col">rememberToken</th>
    <th scope="col">mobile</th>
    </tr>
    </thead>
    <tbody>
    
    @forelse ($admins as $Admins)
    <tr scope="row">
    <td>
        {{$Admins->id}}
        </td>
        <td>{{$Admins->name}}</td>
        <td>
            {{$Admins->password}}
        </td>
        <td>{{$Admins->rememberToken}}</td>
        <td>{{$Admins->mobile}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">No Authors Found</td>
        </tr>
    @endforelse
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js+bootstrap.min.js+main.js.pagespeed.jc.U3dPnPLyQo.js"></script><script>eval(mod_pagespeed_fby5qHOZNL);</script>
    <script>eval(mod_pagespeed_4RNNd4_oUn);</script>
    <script>eval(mod_pagespeed_7IiBxSCMrY);</script>
    <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;73d7aa947d2be914&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2022.8.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
    
    </body>
    @endsection