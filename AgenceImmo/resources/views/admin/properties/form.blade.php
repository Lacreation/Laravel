@extends('admin.admin')

@section('title', $property->exists ? "Editer un bien" : "Créer un bien")

@section('content')

    <h1>@yield('title')</h1>
    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property)}}" method="post">
        
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input',['class'=>'col','label'=>'Titre', 'name'=>'title', 'value'=>$property->title])
            <div class="col row">
                @include('shared.input',['class'=>'col', 'name'=>'surface', 'value'=>$property->surface])
                @include('shared.input',['class'=>'col', 'label'=>'Prix', 'name'=>'price', 'value'=>$property->price])
            </div>
        </div>
        @include('shared.input',['name'=>'description', 'value'=>$property->description, 'type'=>'textarea'])
        <div class="row">
            @include('shared.input',['class'=>'col', 'label'=>'Pièce(s)', 'name'=>'rooms', 'value'=>$property->rooms])
            @include('shared.input',['class'=>'col', 'label'=>'Chambre(s)', 'name'=>'bedrooms', 'value'=>$property->bedrooms])
            @include('shared.input',['class'=>'col', 'label'=>'Etage', 'name'=>'floor', 'value'=>$property->floor])
        </div>
        <div class="row">
            @include('shared.input',['class'=>'col', 'label'=>'Adresse', 'name'=>'address', 'value'=>$property->address])
            @include('shared.input',['class'=>'col', 'label'=>'Code postal', 'name'=>'postal_code', 'value'=>$property->postal_code])
            @include('shared.input',['class'=>'col', 'label'=>'Ville', 'name'=>'city', 'value'=>$property->city])
        </div>

        <div>
            <button class="btn btn-primary">
                @if ($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>

    
    </form>

@endsection