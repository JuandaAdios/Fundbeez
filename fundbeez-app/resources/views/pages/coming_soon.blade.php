@extends('layouts.customer')

@section('title', 'Fundbeez')

@section('content')
    <style>
        main {
            min-height: 60vh;
        }

        section {
            padding: 200px 0;
        }

    </style>
    <main class="container" style="overflow-x: hidden">
        <section>
            <div class="container text-center">
                <img src="{{ asset('/img/vector/creative-writing-pana.svg') }}" alt="" width="400px">
                <h1>Segera Hadir</h1>
                <p>Fitur ini masih dalam tahap pengembangan.</p>
            </div>
        </section>
    </main>
@endsection
