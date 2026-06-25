{{-- Sesuaikan 'layouts.app' dengan nama file layout AdminLTE yang Anda gunakan --}}
@extends('layouts.app') 

@section('title', 'About Us')

@section('content_header')
    <h1>About Us</h1>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="accordion" id="accordionAboutUs">
            
            <div class="card">
                <div class="card-header bg-info" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-minus mr-2"></i> Collapsible Group Item #1
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionAboutUs">
                    <div class="card-body">
                        Some placeholder content for the first accordion panel. This panel is shown by default, thanks to the <code>.show</code> class.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-info font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fas fa-plus mr-2"></i> Collapsible Group Item #2
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionAboutUs">
                    <div class="card-body">
                        Some placeholder content for the second accordion panel. You can customize this text as needed.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-info font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas fa-plus mr-2"></i> Collapsible Group Item #3
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionAboutUs">
                    <div class="card-body">
                        Some placeholder content for the third accordion panel. You can customize this text as needed.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection