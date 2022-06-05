@extends('layouts.app')

@section('content')
<div class="row flex-column flex-lg-row">
    <div class="col">
        <div class="card text-white bg-warning mb-3">
            <div class="card-body">
              <h3 class="card-title h2">{{ $tagCount }}</h4>
              <span class="text-dark-50">
                <i class="fas fa-tags"></i>
                Tags
              </span>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card text-white bg-info mb-3">
            <div class="card-body">
              <h3 class="card-title h2">{{ $categoryCount }}</h4>
              <span class="text-dark-50">
                <i class="fas fa-bars"></i>
                Category
              </span>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
              <h3 class="card-title h2">{{ $postCount }}</h4>
              <span class="text-dark-50">
                <i class="fas fa-newspaper"></i>
                Posts
              </span>
            </div>
          </div>
    </div>
    <div class="col">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
              <h3 class="card-title h2">{{ $userCount }}</h4>
              <span class="text-dark-50">
                <i class="fas fa-users"></i>
                Users
              </span>
            </div>
          </div>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($posts as $p)
            <tr>
              <th scope="row">
                @php
                  echo $i;$i++;
                @endphp
              </th>
              <td>{{ $p->title }}</td>
              <td>
                  <img src="{{ asset('images/'.$p->featured) }}" alt="" width="30" class="img-fluid rounded">
              </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <div class="col">
      <div class="card border-info mb-3" style="max-width: 20rem;">
        <div class="card-header">Category Lists</div>
        <div class="card-body py-2">
            @php
                $i = 1;
            @endphp
          @foreach ($category as $c)
              <div class="row">
                <div class="col-md-3">
                  @php
                    echo $i;$i++;
                  @endphp
                </div>
                <div class="col-md-9">
                  {{ $c->name }}
                </div>
              </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-warning mb-3" style="max-width: 20rem;">
        <div class="card-header">Tag Lists</div>
        <div class="card-body py-2">
            @php
                      $i = 1;
            @endphp
           @foreach ($tags as $c)
           <div class="row">
             <div class="col-md-3">
               @php
                 echo $i;$i++;
               @endphp
             </div>
             <div class="col-md-9">
               {{ $c->name }}
             </div>
           </div>
       @endforeach
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card border-success mb-3" style="max-width: 20rem;">
        <div class="card-header">User Lists</div>
        <div class="card-body py-2">
            @php
                $i = 1;
            @endphp
            @foreach ($users as $c)
            <div class="row">
              <div class="col-md-3">
                @php
                  echo $i;$i++;
                @endphp
              </div>
              <div class="col-md-9">
                {{ $c->name }}
              </div>
            </div>
        @endforeach
        </div>
      </div>
    </div>
</div>
@endsection
