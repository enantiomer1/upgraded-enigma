@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-8">
        <div class="card mb-3 shadow">
            <div class="card-body">
                <h5 class="pb-2 border-bottom"><span class="title-line2"></span>Get into the steps</h5>
                <p class="card-text py-2">
                    Working the steps with another member of AA changed my life forever. Everyone's path to step one is different but accomplishes the same thing: the willingness to ask another member of the program to guide them through. Once you have really taken and digested step one, the remainding steps are much easier. It may not feel like it in the beginning, but if you're are ready, grab a sponsor and don't let go. He or she will guide you through it.</br></br>
                    I built this website to try and give back what was freely given to me. If we can help one person in thier AA journey, it's worth the effort.
                </p>
            </div>
        </div>
        <div class="card mb-3 shadow">
            <div class="card-body">
                <h5 class="pb-2 border-bottom"><span class="title-line2"></span>Favorite Big Book Passage</h5>
                <p class="card-text py-2">
                    There is a solution. Almost none of us liked the selfsearching, the leveling of our pride, the confession of
                    shortcomings which the process requires for its successful consummation. But we saw that it really
                    worked in others, and we had come to believe in the hopelessness and futility of life as we had been living
                    it. When, therefore, we were approached by those in whom the problem had been solved, there was nothing
                    left for us but to pick up the simple kit of spiritual tools laid at our feet. We have found much of heaven
                    and we have been rocketed into a fourth dimension of existence of which we had not even dreamed.</br>
                    <strong>The great fact is just this, and nothing less:</strong> That we have had deep and effective spiritual experiences*
                    which have revolutionized our whole attitude toward life, toward our fellows and toward God’s universe.
                    The central fact of our lives today is the absolute certainty that our Creator has entered into our hearts and
                    lives in a way which is indeed miraculous. He has commenced to accomplish those things for us which
                    we could never do by ourselves.</br></br>
                    Alcoholics Anonymous p.25</br>
                    Copyright © 2019 by Alcoholics Anonymous World Services, Inc.
                </p>
            </div>
        </div>
        <h4 class="pt-3 pb-2 mb-3 border-bottom"><span class="title-line2"></span>From the Blog</h4>
        @foreach ($posts as $post)
        <div class="card mt-2 p-2 mb-4 shadow">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="card-body p-2">
                        <img src="/storage/img/{{$post->image}}" class="card-img" alt="{{ $post->alt_text }}">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body p-2">
                        <h5 class="card-title border-bottom pb-2">{{ $post->title }}</h5>
                        <p class="card-text border-bottom pb-3">{{ $post->description }}</p>
                        <p class="card-text"><small class="text-muted">Published {{ $post->published_date->format('m/d/Y') }}</small><a href="{{ route('blog_single', $post->slug) }}" class="btn btn-sm btn-outline-warning ml-4 shadow">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @include('partials.sidebar2')
</div>
@endsection
