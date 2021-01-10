<div class="d-flex justify-content-between">
<div class="heading py-2">
<h5 class="text-highlight">
{{ $comics->title }}
</h5>
</div>
</div>







<div class="row">
<div class="col-lg-3 col-md-4 col-xs-12 mb-4">
<div class="list-item rounded">
<div class="card" style="width: 18rem;">
  <img src="{{ $comics->cover }}" class="card-img-top" alt="...">

</div>
<div class="list-content">
<div class="list-body d-flex justify-content-between">
<span class="text-white text-white font-weight-bold">
<i class="far fa-eye text-muted mr-2"></i>
{{ $comics->views }}
</span>
</div>
</div>
</div>
<div class="card mt-2">
<div class="list list-row">
<div class="list-item text-sm">
<div class="flex">
<div class="item-feed">
Last Updated
</div>
</div>
<div class="no-wrap">
<div class="item-date text-muted text-sm">
{{ $comics->updated_at }}
</div>
</div>
</div>

<div class="no-wrap">
<div class="item-date text-muted text-sm">
No
</div>
</div>
</div>
<div class="list-item text-sm">
<div class="flex">
<div class="item-feed">
Country of Origin
</div>
</div>
<div class="no-wrap">
<div class="item-date text-muted text-sm">
{{ $comics->country }}
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-9 col-md-8 col-xs-12 text-muted">

<div class="heading">
<h6 class="text-highlight">
Description
</h6>
</div>
{{ $comics->desc }}
<div class="w-100 mt-2">
<!-- scripts goes here-->
</div>

<div class="row py-2">
<div class="col-12">
<div class="heading py-2">
<h6 class="text-highlight">
Volume 1
</h6>
</div>
<div class="card p-4">
<div class="list list-row row">
<div class="list-item col-sm-3 no-border">
<span class="text-muted text-sm">
17
</span>
<div class="flex">
<a href="{{ route('series.si.show', ['view' => $id, 'si' => $comics->slug]) }}" class="item-author text-color ">
Chapter 17
</a>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">

@foreach($comics->take(8)  as  $comic)
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                  <a  href="{{ route('series.si.show', ['view' => $comic->id, 'si' => $comic->slug]) }}"  >  <div class="block lg:hidden rounded-semi shadow-xl mx-auto -mt-16 h-64 w-56 bg-cover bg-center" style="background-image: url('{{ $comic->cover }}')">
                       
                    </div> </a>
                    <div class="px-5 py-3">
                     <h3>   <a  href="{{ route('series.si.show', ['view' => $comic->id, 'si' => $comic->slug]) }}"  class="text-gray-700 uppercase">{{ $comic->title }}</a> </h3>
                        <span class="text-gray-500 mt-2">By {{ $comic->author }} and {{ $comic->artist }}</span>
                    </div>
          
                </div>