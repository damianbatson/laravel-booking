@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
<div class="col-md-7 col-lg-8">
    <hr>
    <h1>{!! $project->exercise !!}</h1>
    <!-- <p class="lead"></p> -->
    <h2 class="projectName">{!! ucwords($project->user->username) !!}</h2>
    <hr>
    <div class="projectImgContainer">
    {{-- <span> --}}
    <i class="glyphicon glyphicon-time"></i>
    {{-- </span> --}}
    <h3 class="hyperLinkText">{!! ucwords($project->created_at) !!}</h3>
    </div>
    <hr>
    <p class="lead">{!! $project->description !!}</p>
    <p class="lead">{!! $project->exercise01 !!}</p>
    <p class="lead">{!! $project->exercise01_weight !!}</p>
    <p class="lead">{!! $project->exercise01_reps !!}</p>

    <img class="img-responsive" src="../{!! $project->image !!}">
    
@foreach ($project->projectimages as $projectimage)
            <!-- <div class="col-sm-6"> -->
            
            <h4>{!! $projectimage->id !!}</h4>
            <h4>{!! $projectimage->name !!}</h4>
            
            <p><a href="{!! $projectimage->link !!}">link</a></p>
            
            <!-- </div> -->
            <!-- <div class="col-sm-6"> -->
            <img class="img-responsive" src="../{{ $projectimage->image1 }}">
            <img class="img-responsive" src="../{{ $projectimage->image2 }}">
            <img class="img-responsive" src="../{{ $projectimage->image3 }}">
            <!-- </div> -->
        @endforeach
                
</div>

<div class="col-md-5 col-lg-4">

    <div class="well panel-info">
    {!! HTML::linkRoute('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info projectBtn')) !!}
    <h4 class="projectText">These are your current posts</h4>
    </div>
</div>
        </div>
    </div>

    <hr>

    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Company 2013 &middot; Facebook &middot; Twitter &middot; Google+</p>
            </div>
        </div>
    </footer>

</div><!-- /.container -->

@stop