@extends('layout.app')
	@section('content')

		<!-- Page Breadcrumbs Start -->
  <div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
    <div class="container">
      <h1 align="center">Handi Crafts</h1>
    </div>
  </div>
  <!-- Page Breadcrumbs End -->

  <!-- Main Body Content Start -->
  <main id="body-content">

    <!-- Portfolio Masonary Start -->
    <section class="wide-tb-80">
      <div class="container">       
            
            <div id="js-grid-juicy-projects" class="cbp row">

            	@foreach ($handiCrafts as $handiCraft)

            		<div class="col-md-4 col-sm-6 cbp-item rounded design">
	                    <a href="{{ asset('crafts/' . $handiCraft->image ) }}" class="cbp-caption cbp-lightbox">
	                        <div class="cbp-caption-defaultWrap">
	                            <img src="{{ asset('crafts/' . $handiCraft->image ) }}">
	                        </div>
	                        <div class="cbp-caption-activeWrap">
	                            <div class="cbp-l-caption-alignCenter">
	                                <div class="cbp-l-caption-body">
	                                    <i class="icofont-search icofont-2x txt-white"></i>
	                                    <h3>{{ $handiCraft->title }}</h3>
	                                </div>
	                            </div>
	                        </div>
	                    </a>
	                </div>

            	@endforeach

            </div>
        </div>        
    </section>
    <!-- Portfolio Masonary End -->    
  </main>

	@endsection