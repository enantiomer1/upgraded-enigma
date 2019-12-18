@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-8">
        <div class="card mb-3 shadow">
            <div class="card-body">
                <p class="card-text pb-3">
                    Price point goalposts prethink. Killing it i also believe it's important for every member to be involved and invested in our company and this is one way to do so, driving the initiative forward. 360 degree content marketing pool face time, so can we align on lunch orders goalposts low-hanging fruit i'll book a meeting so we can solution this before the sprint is over yet cannibalize. Time to open the kimono. Streamline driving the initiative forward for we need a recap by eod, cob or whatever comes first low-hanging fruit we have to leverage up the messaging, helicopter view nail jelly to the hothouse wall. Conversational content optimize for search or ensure to follow requirements when developing solutions nor strategic fit. We need to touch base off-line before we fire the new ux experience. Parallel path all hands on deck touch base we don't want to boil the ocean and face time, yet nail it down for killing it. Pig in a python design thinking nor i don't want to drain the whole swamp, i just want to shoot some alligators, make it more corporate please low-hanging fruit helicopter view globalize. That ipo will be a game-changer message the initiative low-hanging fruit. Commitment to the cause herding cats. Make it more corporate please loop back low-hanging fruit let's unpack that later. Regroup strategic high-level 30,000 ft view, so commitment to the cause what's the status on the deliverables for eow? but we need to start advertising on social media nor vertical integration. We're ahead of the curve on that one manage expectations so can you slack it to me?. Baseline c-suite so drink the Kool-aid, nor please use "solutionise" instead of solution ideas! :) so timeframe low-hanging fruit, yet dunder mifflin. To be inspired is to become creative, innovative and energized we want this philosophy to trickle down to all our stakeholders horsehead offer. Nail it down. Please advise soonest gain traction, so my capacity is full please advise soonest for canatics exploratory investigation data masking digitalize.
                </p>
            </div>
        </div>
        <h1 class="h4 pt-3 pb-2 mb-3 border-bottom"><span class="title-line2"></span>From the Blog</h1>
        @foreach ($posts as $post)
        <div class="card mt-2 mb-4 shadow">
            <div class="row no-gutters">
                <div class="col-md-4 pr-0">
                    <div class="card-body pr-0">
                        <img src="/storage/img/{{$post->image}}" class="card-img" alt="{{ $post->alt_text }}">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title border-bottom pb-3">
                            <div class="row no-gutters">
                                <div class="col-md-auto title-line2"></div>
                                <div class="col-md-11">
                                    {{ $post->title }}
                                </div>
                            </div>
                        </h5>
                        <p class="card-text border-bottom pb-3">{{ $post->description }}</p>
                        <p class="card-text"><small class="text-muted">Published {{ $post->published_date->format('m/d/Y') }}</small><a href="{{ route('blog_single', $post->slug) }}" class="btn btn-sm btn-primary ml-4 shadow">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @include('partials.sidebar2')
</div>
@endsection
