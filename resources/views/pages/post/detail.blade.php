@extends('layouts.app')

@section('title')
    Description
@endsection

@section('content')
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Post Description</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
            <br><br>
        	<div class="post-title">
                <strong>Nama: </strong> {{ $post->nama }}
            </div>
            <br>
            <div class="post-description">
                <strong>NIP: </strong> {{ $post->nip }}
            </div>
            <br>
            <div class="post-description">
                <strong>Alamat: </strong> {{ $post->alamat }}
            </div>
        </div>
    </div>
</div>
@endsection